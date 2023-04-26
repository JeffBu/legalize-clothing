@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between">
        {{-- SearchBar --}}
            <form action="">
                <div class="flex">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                        <div class="relative w-full">
                            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Item Code" required>
                            <button type="button" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-alter-700 rounded-r-lg border border-alter-700 hover:bg-alter-800 focus:ring-4 focus:outline-none focus:ring-alter-300 ">
                                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                </div>
            </form>
            <!-- {{-- New Item Button --}} -->
            <button type="button" class="text-white bg-alter-700 hover:bg-alter-800 focus:ring-4 focus:outline-none focus:ring-alter-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 " data-modal-target="new-product-modal" data-modal-toggle="new-product-modal">
                <i class="fas fa-plus"></i>&nbsp
                Add New Product
            </button>
    </div>
    <div class="grid grid-cols-5 gap-1 space-x-2 mt-4" id="products-container">
        <a href="#" class="block max-w-sm px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 h-calc[100vh-1rem]">
            <div class="flex items-end justify-end">
                <span class="text-[8px] text-white bg-green-700 p-1 rounded font-light tight">NEW</span>&nbsp
                <i class="fas fa-star text-yellow-300"></i>&nbsp
                <i class="fa fa-fire text-red-500"></i>
            </div>
            <div class="flex items-center space-between">
                <span class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white flex-1">Product Code</span>

            </div>
            <img src="{{asset('/storage/temp/placeholder.png')}}" alt="" class="h-100 w-100 rounded justify-center mx-auto">
            <p class="font-normal text-gray-700 dark:text-gray-400">Color Variants</p>
            <div id="color-variants" class="grid grid-cols-8 sm:grid-cols-4 md:grid-cols-4">
                <div class="lg:h-[20px] lg:w-[20px] block rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2" style="background-color:#451125"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-red-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-yellow-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-purple-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-indigo-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-gray-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
            </div>
            <p class="font-normal text-gray-700">Available Sizes</p>
            <div id="size-variants" class="grid grid-cols-4">
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
            </div>
        </a>

        <a href="#" class="block max-w-sm px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 h-calc[100vh-1rem]">
            <div class="flex items-end justify-end">
                <span class="text-[8px] text-white bg-green-700 p-1 rounded font-light tight">NEW</span>&nbsp
                <i class="fas fa-star text-yellow-300"></i>&nbsp
                <i class="fa fa-fire text-red-500"></i>
            </div>
            <div class="flex items-center space-between">
                <span class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white flex-1">Product Code</span>

            </div>
            <img src="{{asset('/storage/temp/placeholder.png')}}" alt="" class="h-100 w-100 rounded justify-center mx-auto">
            <p class="font-normal text-gray-700 dark:text-gray-400">Color Variants</p>
            <div id="color-variants" class="grid grid-cols-8 sm:grid-cols-4 md:grid-cols-4">
                <div class="lg:h-[20px] lg:w-[20px] block rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2" style="background-color:#451125"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-red-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-yellow-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-purple-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-indigo-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-gray-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
            </div>
            <p class="font-normal text-gray-700">Available Sizes</p>
            <div id="size-variants" class="grid grid-cols-4">
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
            </div>
        </a>

        <a href="#" class="block max-w-sm px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 h-calc[100vh-1rem]">
            <div class="flex items-end justify-end">
                <span class="text-[8px] text-white bg-green-700 p-1 rounded font-light tight">NEW</span>&nbsp
                <i class="fas fa-star text-yellow-300"></i>&nbsp
                <i class="fa fa-fire text-red-500"></i>
            </div>
            <div class="flex items-center space-between">
                <span class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white flex-1">Product Code</span>

            </div>
            <img src="{{asset('/storage/temp/placeholder.png')}}" alt="" class="h-100 w-100 rounded justify-center mx-auto">
            <p class="font-normal text-gray-700 dark:text-gray-400">Color Variants</p>
            <div id="color-variants" class="grid grid-cols-8 sm:grid-cols-4 md:grid-cols-4">
                <div class="lg:h-[20px] lg:w-[20px] block rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2" style="background-color:#451125"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-red-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-yellow-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-purple-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-indigo-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                <div class="lg:h-[20px] lg:w-[20px] block bg-gray-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
            </div>
            <p class="font-normal text-gray-700">Available Sizes</p>
            <div id="size-variants" class="grid grid-cols-4">
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
            </div>
        </a>
    </div>

    <div id="new-product-modal" class="fixed top-0 left-0 right-0 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 max-h-full h-calc[100%-1rem]">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-main-500 rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-200">
                        New Product Form
                    </h3>
                    <button type="button" class="text-gray-200 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="new-product-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <form id="new-product-form" method="post">
                        @csrf
                    <div class="form">
                        <div class="mb-6">
                            <label for="new-code" class="block mb-2 text-sm font-medium text-gray-200">Product Code</label>
                            <input type="text" name="new-code" id="new-code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div class="mb-6">
                            <label for="new-category" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Categories</label>
                            <select name="new-category" id="new-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->description}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="new-colors" class="block mb-2 text-sm font-medium text-gray-200">Color Variants</label>
                            <div class="flex mb-2">
                                <div class="mr-2 flex-col flex-1">
                                    <input id="black-checkbox" type="checkbox" value="black" class="new-colors w-4 h-4 text-gray-900 bg-gray-400 border-gray-300 rounded focus:ring-gray-500 focus:ring-2">
                                    <label for="black-checkbox" class="ml-2 text-sm font-medium text-gray-200">Black</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="white-checkbox" type="checkbox" value="white" class="new-colors w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="white-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">White</label>
                                </div>

                                <div class="mr-2 flex-col flex-1">
                                    <input id="charcoal-checkbox" type="checkbox" value="charcoal" class="new-colors w-4 h-4 text-gray-700 bg-gray-700 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="charcoal-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">Charcoal</label>
                                </div>
                            </div>

                            <div class="flex mb-2">
                                <div class="mr-2 flex-col flex-1">
                                    <input id="agreen-checkbox" type="checkbox" value="army_green" class="new-colors w-4 h-4 text-green-900 bg-green-900 border-green-300 rounded focus:ring-green-200 focus:ring-2 ">
                                    <label for="agreen-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">A. Green</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="mgreen-checkbox" type="checkbox" value="mint_green" class="new-colors w-4 h-4 text-green-400 bg-green-400 border-green-300 rounded focus:ring-green-200 focus:ring-2 ">
                                    <label for="mgreen-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">M. Green</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="rblue-checkbox" type="checkbox" value="royal_blue" class="new-colors w-4 h-4 text-blue-500 bg-blue-500 border-blue-300 rounded focus:ring-blue-200 focus:ring-2 ">
                                    <label for="rblue-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">R. Blue</label>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <div class="mr-2 flex-col flex-1">
                                    <input id="red-checkbox" type="checkbox" value="red" class="new-colors w-4 h-4 text-red-500 bg-red-500 border-red-300 rounded focus:ring-red-200 focus:ring-2 ">
                                    <label for="red-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">Red</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="maroon-checkbox" type="checkbox" value="maroon" class="new-colors w-4 h-4 text-red-900 bg-red-900 border-red-300 rounded focus:ring-red-200 focus:ring-2 ">
                                    <label for="maroon-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">Maroon</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="lviolet-checkbox" type="checkbox" value="light_violet" class="new-colors w-4 h-4 text-purple-500 bg-purple-500 border-purple-300 rounded focus:ring-purple-200 focus:ring-2 ">
                                    <label for="lviolet-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">L. Violet</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="dviolet-checkbox" type="checkbox" value="dark_violet" class="new-colors w-4 h-4 text-purple-900 bg-purple-900 border-purple-300 rounded focus:ring-purple-200 focus:ring-2 ">
                                    <label for="dviolet-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">D. Violet</label>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <div class="mr-2 flex-col flex-1">
                                    <input id="sunkist-checkbox" type="checkbox" value="sunkist" class="new-colors w-4 h-4 text-yellow-400 bg-yellow-500 border-gray-300 rounded focus:ring-yellow-200 focus:ring-2 ">
                                    <label for="sunkist-checkbox" class="ml-2 text-sm font-medium text-gray-200">Sunkist</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="khaki-checkbox" type="checkbox" value="khaki" class="new-colors w-4 h-4 text-yellow-700 bg-yellow-700 border-yellow-300 rounded focus:ring-yellow-200 focus:ring-2 ">
                                    <label for="khaki-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">Khaki</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="brown-checkbox" type="checkbox" value="brown" class="new-colors w-4 h-4 text-yellow-900 bg-yellow-900 border-yellow-700 rounded focus:ring-yellow-700 focus:ring-2 ">
                                    <label for="brown-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">Brown</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="rust-checkbox" type="checkbox" value="rust" class="new-colors w-4 h-4 text-yellow-800 bg-yellow-800 border-yellow-300 rounded focus:ring-yellow-200 focus:ring-2 ">
                                    <label for="rust-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">Rust</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="ygold-checkbox" type="checkbox" value="yellow gold" class="new-colors w-4 h-4 text-yellow-300 bg-yellow-300 border-yellow-300 rounded focus:ring-yellow-200 focus:ring-2 ">
                                    <label for="ygold-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">Y. Gold</label>
                                </div>
                                <div class="mr-2 flex-col flex-1">
                                    <input id="mustard-checkbox" type="checkbox" value="mustard" class="new-colors w-4 h-4 text-yellow-600 bg-yellow-600 border-yellow-300 rounded focus:ring-yellow-200 focus:ring-2 ">
                                    <label for="mustard-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">Mustard</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="new-sizes" class="block mb-2 text-sm font-medium text-gray-200">Size Variants</label>
                            <label for="new-sizes" class="block mb-2 text-sm font-medium text-gray-200">Adult</label>
                            <div class="mb-2 flex">
                                <div class="mr-1 flex-col flex-1">
                                    <input id="xs-checkbox" type="checkbox" value="extra_small" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="xs-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">XS</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="s-checkbox" type="checkbox" value="small" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="s-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">S</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="m-checkbox" type="checkbox" value="medium" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="m-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">M</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="l-checkbox" type="checkbox" value="large" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="l-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">L</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="xl-checkbox" type="checkbox" value="extra_large" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="xl-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">XL</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="xxl-checkbox" type="checkbox" value="double_extra_large" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="xxl-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">XXL</label>
                                </div>
                            </div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-200">Kids</label>
                            <div class="mb-2 flex">
                                <div class="mr-1 flex-col flex-1">
                                    <input id="s4-checkbox" type="checkbox" value="size4" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="s4-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">S4</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="s6-checkbox" type="checkbox" value="size6" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="s6-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">S6</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="s8-checkbox" type="checkbox" value="size8" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="s8-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">S8</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="s10-checkbox" type="checkbox" value="size10" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="s10-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">S10</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="s12-checkbox" type="checkbox" value="size12" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="s12-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">S12</label>
                                </div>
                                <div class="mr-1 flex-col flex-1">
                                    <input id="s14-checkbox" type="checkbox" value="size14" class="new-sizes w-4 h-4 text-gray-500 bg-gray-200 border-gray-300 rounded focus:ring-gray-200 focus:ring-2 ">
                                    <label for="s14-checkbox" class="ml-2 text-sm font-medium text-gray-200 dark:text-gray-300">S14</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-200">Sample Images</label>
                            <input class="block w-full text-sm text-gray-900 border border-alter-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="images_upload" type="file" multiple accept="image/jpeg, image/png, image/jpg">
                            <p class="mt-1 text-sm text-gray-200" id="file_input_help">PNG or JPG(MAX. 400x400px).</p>
                            <div class="grid grid-cols-5 gap-1 mb-2 mt-2" id="output">
                            </div>
                            <button type="submit" class="block text-white bg-alter-700 hover:bg-alter-800 focus:ring-4 focus:ring-alter-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 my-2 focus:outline-none w-full">UPLOAD DESIGN</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@push('page-scripts')
    <script>
        var search_category = '';

        function changeCategory(value) {
            console.log(value)
            var search_bar_category_button = $('#dropdown-button')
            search_bar_category_button.html(value);
            search_category = value;
        }

        //multiple image preview
        const output = document.querySelector('#output');
        const input = document.querySelector('#images_upload');
        var image_array = [];

        input.addEventListener('change', () => {
            const files = input.files;
            for(let i = 0; i < files.length; i++) {
                image_array.push(files[i]);
            }

            displayImages();
        });

        //preview uploaded files;
        function displayImages() {
            let images = "";

            image_array.forEach((image, index) => {
                images += `<div class="bg-gray-200 border-gray-900 rounded-lg items-center p-1">
                                <img src="${URL.createObjectURL(image)}" alt="image" class="w-100 h-100">
                                <span onclick="deleteImage(${index})">&times;</span>
                            </div>`
            });

            output.innerHTML = images;
        }

        //remove image from selection
        function deleteImage(index) {
            image_array.splice(index, 1);
            displayImages()
        }

        //upload new design to database
        const new_product_form = document.querySelector('#new-product-form');

        new_product_form.addEventListener('submit', function(e) {
            e.preventDefault();

            var formData = new FormData();
            var code = $('#new-code').val();
            var category = $('#new-category').find(':selected').val();
            var colors = [];
            var sizes = [];

            $('.new-colors').each(function() {
                var self = $(this);
                if(self.is(':checked')){
                    colors.push(self.val());
                }
            });

            $('.new-sizes').each(function() {
                var self = $(this);
                if(self.is(':checked')){
                    sizes.push(self.val());
                }
            });

            formData.append('code', code);
            formData.append('category', category);
            formData.append('colors', colors);
            formData.append('sizes', sizes);
            for(var i=0; i<image_array.length; i++) {
                formData.append('images[]', image_array[i]);
            }

            var url = "{{route('create-product')}}";

            axios.post(url, formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                }
            }).then(function(response) {
                console.log(response.data);
            }).catch(function(error) {
                console.log(error.response.data);
            });
        });

        $(document).ready(function() {
            loadProducts("asd", 3, null, null, null);
        })

        function loadProducts(code, category_id, colors, sizes, order_by) {
            var formData = new FormData();
            formData.append('code', code);
            formData.append('category_id', category_id);
            formData.append('colors', colors);
            formData.append('sizes', sizes);
            formData.append('order_by', order_by);

            var url = "{{route('query-products')}}";

            axios.post(url, formData, {}).then(function(response) {
                console.log(response.data);
            }).catch(function(error) {
                console.log(error.response.data)
            });
        }

        function displayProducts(products) {
            let products_container = document.querySelector('#products-container');
            let display = "";

            products.forEach(product => {
                display += `<a href="#" class="block max-w-sm px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 h-calc[100vh-1rem]" onclick="showProductDetails()">
                    <div class="flex items-end justify-end">
                        <span class="text-[8px] text-white bg-green-700 p-1 rounded font-light tight">NEW</span>&nbsp
                        <i class="fas fa-star text-yellow-300"></i>&nbsp
                        <i class="fa fa-fire text-red-500"></i>
                    </div>
                    <div class="flex items-center space-between">
                        <span class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white flex-1">Product Code</span>

                    </div>
                    <img src="{{asset('/storage/temp/placeholder.png')}}" alt="" class="h-100 w-100 rounded justify-center mx-auto">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Color Variants</p>
                    <div id="color-variants" class="grid grid-cols-8 sm:grid-cols-4 md:grid-cols-4">
                        <div class="lg:h-[20px] lg:w-[20px] block rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2" style="background-color:#451125"></div>
                        <div class="lg:h-[20px] lg:w-[20px] block bg-red-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                        <div class="lg:h-[20px] lg:w-[20px] block bg-yellow-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                        <div class="lg:h-[20px] lg:w-[20px] block bg-purple-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                        <div class="lg:h-[20px] lg:w-[20px] block bg-indigo-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                        <div class="lg:h-[20px] lg:w-[20px] block bg-gray-700 rounded-xl ml-2 md:h-[10px] md:w-[10px] sm:h-[10px] sm:w-[10px] mb-2"></div>
                    </div>
                    <p class="font-normal text-gray-700">Available Sizes</p>
                    <div id="size-variants" class="grid grid-cols-4">
                        <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                        <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                        <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                        <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                        <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                        <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                        <div class="rounded-lg w-[30px] border-2 border-gray-400 text-center text-sm" >S</div>
                    </div>
                </a>`;
            });

            products_container.html(display);
        }
    </script>
@endpush
