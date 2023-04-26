<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'description' => 'Regular',
        ]);
        DB::table('categories')->insert([
            'description' => 'Premium',
        ]);
        DB::table('categories')->insert([
            'description' => 'Tie Dye',
        ]);
        DB::table('categories')->insert([
            'description' => 'Shorts',
        ]);
        DB::table('categories')->insert([
            'description' => 'Two Colors',
        ]);
        DB::table('categories')->insert([
            'description' => 'Pants',
        ]);
        DB::table('categories')->insert([
            'description' => 'Cap',
        ]);
        DB::table('categories')->insert([
            'description' => 'Vintage',
        ]);
        DB::table('categories')->insert([
            'description' => 'Flask',
        ]);

        DB::table('categories')->insert([
            'description' => 'Sando',
        ]);
        DB::table('categories')->insert([
            'description' => 'Longsleeves',
        ]);
        DB::table('categories')->insert([
            'description' => 'Jacket',
        ]);
        DB::table('categories')->insert([
            'description' => 'Accessories',
        ]);
    }
}
