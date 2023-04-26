<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('pages.products')->with(['categories' => $categories]);
    }

    public function create(Request $request){

        $error_list = array();
        //check uniqueness of product code
        $code = $request->code;
        if(Product::where('code', $code)->first()) {
            $error_list['code'] = "Product Code must be unique.";
        }

        $category = $request->category;

        //check if colors have been selected
        $colors = $request->colors;
        if(!$colors)
        {
            $error_list['colors'] = "You must select at least one color";
        }

        //check if sizes have been selected
        $sizes = $request->sizes;
        if(!$sizes)
        {
            $error_list['sizes'] = "You must select at least one size";
        }

        //check if images have been uploaded
        $images = $request->images;
        if(!$images)
        {
            $error_list['images'] = "You must upload at least one sample image.";
        }

        //finally return error messages if needed else continue with database upload
        if($error_list){
            return $error_list;
        }


        DB::transaction(function () use ($code, $category, $colors, $sizes, $request, $images){

            $product_id = DB::table('products')->insertGetId([
                'code' => $code,
                'category_id' => $category,
                'colors' => json_encode($colors),
                'sizes' => json_encode($sizes),
            ]);

            foreach($request->file('images') as $key => $file) {
                $fileName = time().'_'.$file->getClientOriginalName();
                Storage::disk('local')->put($fileName, $file->getContent());
                ProductImage::create([
                    'product_id' => $product_id,
                    'name' => $fileName,
                    'filepath' => '/storage/app/'.$code.'/'.$fileName
                ]);
            }
        });

        return "success";
    }

    public function load(Request $request)
    {
        $products = [];
        $queryString = '';
        $whereClause = [];

        $code = $request->code;
        $cat_id = $request->category_id;
        $colors = $request->colors;
        $sizes = $request->sizes;
        $order_by = $request->order_by;

        if($code == 'null')
        {
            $products = Product::with('images')->get();
        }

        if($code != 'null')
        {
            array_push($whereClause, ['code', "=", $cat_id]);
        }
        // if($cat_id != 'null')
        // {
        //     array_push($whereClause, ['category_id', "=", $cat_id]);
        // }

        $products = DB::table('products')->join('product_images', 'products.id', '=', 'product_images.product_id')->where($whereClause)->select("*")->get();
        return response()->json($products);
    }
}
