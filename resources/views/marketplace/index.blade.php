@extends('layouts.master')

@section('content')
<div id="wrapper">

    <!-- Header -->
    @include('shared.header')

    <!-- sidebar -->
    @include('shared.sidebar')

    <!-- Main Contents -->
    <div class="main_content">
        <div class="mcontainer">



            <div class="flex justify-between items-center relative md:mb-4 mb-3">
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold"> Enterprise </h2>

                    <nav class="responsive-nav border-b md:m-0 -mx-4">
                        <ul>
                            <li class="active"><a href="#" class="lg:px-2"> Suggestions </a></li>
                            <li><a href="#" class="lg:px-2"> Newest </a></li>
                            <li><a href="#" class="lg:px-2"> My products </a></li>
                        </ul>
                    </nav>
                </div>
                <a href="#offcanvas-create" uk-toggle class="flex items-center justify-center h-8 lg:px-3 px-2 rounded-md bg-blue-600 text-white space-x-1 absolute right-0 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="md:block hidden"> Create </span>
                </a>

            </div>

            <!-- alerts -->
            @include('shared.alerts')

            <div class="relative" uk-slider="finite: true">
                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-1@m uk-child-width-1-1@s uk-child-width-1-1 uk-grid-small uk-grid">
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-80">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/1.jpg" alt="">
                                        <span class="absolute bg-white px-2 py-1 text-sm rounded-md m-2"> Label</span>
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $24.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Herbel</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> Brown headphones </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-80">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/15.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $19.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Herbel</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> Herbal Shampoo </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-80">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/13.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $56.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Parfums</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> Parfum Spray </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-80">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/14.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $32.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">FURNITURE</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> Wood Chair </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-80">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/2.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $32.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Accessories</div>
                                        <div class="ext-lg font-medium mt-1 t truncate">Wireless headphones</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-80">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/4.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $122.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Mobiles</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> iPhone 7 unboxing </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>

            <br>

            <div class="my-4 flex items-center justify-between border-b pb-3">
                <div>
                    <h2 class="text-xl font-semibold"> Business
                    </h2>
                </div>
                <a href="#" class="text-blue-500"> See all </a>
            </div>

            <div class="relative -mt-3" uk-slider="finite: true">

                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-1@m uk-child-width-1-1@s uk-grid-small uk-grid">

                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card p-2 flex space-x-4 border border-gray-100">
                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/13.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/13.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/13.jpg" alt="">
                                        </div>
                                    </div>


                                    <div class="flex-1 pt-2.5 relative">

                                        <div class="text-xs font-semibold uppercase text-yellow-500">Parfumdds </div>
                                        <div class="text-lg mt-3 2.5 text-gray-700">Parfum Spray</div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-400 capitalize">
                                            <div> 15 likes</div>
                                            <div>·</div>
                                            <div> 286 views </div>
                                        </div>
                                        <div class="top-1.5 absolute bg-gray-100 font-semibold px-2.5 py-1 right-1 rounded-full text text-blude-500 text-sm">
                                            $12.99
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card p-2 flex space-x-4 border border-gray-100">
                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="flex-1 pt-2.5 relative">

                                        <div class="text-xs font-semibold uppercase text-yellow-500">Herbel</div>
                                        <div class="text-lg mt-3 2.5 text-gray-700">Herbal Shampoo</div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-400 capitalize">
                                            <div> 15 likes</div>
                                            <div>·</div>
                                            <div> 286 views </div>
                                        </div>

                                        <div class="top-1.5 absolute bg-gray-100 font-semibold px-2.5 py-1 right-1 rounded-full text text-blude-500 text-sm">
                                            $12.99
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card p-2 flex space-x-4 border border-gray-100">

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="flex-1 pt-2.5 relative">

                                        <div class="text-xs font-semibold uppercase text-yellow-500">Parfum </div>
                                        <div class="text-lg mt-3 2.5 text-gray-700">Wood Chair</div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-400 capitalize">
                                            <div> 15 likes</div>
                                            <div>·</div>
                                            <div> 286 views </div>
                                        </div>
                                        <div class="top-1.5 absolute bg-gray-100 font-semibold px-2.5 py-1 right-1 rounded-full text text-blude-500 text-sm">
                                            $12.99
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card p-2 flex space-x-4 border border-gray-100">

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="w-40 h-40 overflow-hidden rounded-lg">
                                        <div class="card-media h-40">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="flex-1 pt-2.5 relative">

                                        <div class="text-xs font-semibold uppercase text-yellow-500"> ACCESSORIES </div>
                                        <div class="text-lg mt-3 2.5 text-gray-700"> Wireless headphones </div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-400 capitalize">
                                            <div> 15 likes</div>
                                            <div>·</div>
                                            <div> 286 views </div>
                                        </div>
                                        <div class="top-1.5 absolute bg-gray-100 font-semibold px-2.5 py-1 right-1 rounded-full text text-blude-500 text-sm">
                                            $12.99
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>

                <a class="absolute bg-white top-11 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white carousel-items-back" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                <a class="absolute bg-white top-11 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white carousel-items-next" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

            </div>

            <br>

            <div class="my-4 flex items-center justify-between border-b pb-3">
                <div>
                    <h2 class="text-xl font-semibold"> Basic
                    </h2>
                </div>
                <a href="#" class="text-blue-500"> See all </a>
            </div>

            <div class="relative" uk-slider="finite: true">

                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-40">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/12.jpg" alt="">
                                        <span class="absolute bg-white px-2 py-1 text-sm rounded-md m-2"> Label</span>
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $22.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Shoes</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> Hermes Rivera </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-40">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/15.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $12.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Herbel</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> Herbal Shampoo </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-40">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/4.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $122.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Mobiles</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> iPhone 7 unboxing </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-40">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/14.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $32.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Furniture</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> Wood Chair </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-40">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/9.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $32.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Fruit</div>
                                        <div class="ext-lg font-medium mt-1 t truncate"> Strawberries FreshRipe </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('market.product') }}">
                                <div class="card">
                                    <div class="card-media h-40">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/product/2.jpg" alt="">
                                        <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                            <i class="icon-feather-heart"> </i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                            $32.99
                                        </div>
                                        <div class="text-xs font-semibold uppercase text-yellow-500">Accessories</div>
                                        <div class="ext-lg font-medium mt-1 t truncate">Wireless headphones</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Create new Product -->
<div id="offcanvas-create" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar lg:w-4/12 w-full dark:bg-gray-700 dark:text-gray-300 p-0 bg-white shadow-2xl">

        <button class="uk-offcanvas-close absolute" type="button" uk-close></button>

        <!-- notivication header -->
        <div class="-mb-1 border-b font-semibold px-5 py-5 text-lg">
            <h4> Publicar banner nuevo </h4>
        </div>

        <form action="{{ route('paid-post.store') }}" method="post" enctype="multipart/form-data">
            <div class="p-6 space-y-3 flex-1">



                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-3">
                        <label> Selecciona tu plan activo <span id="plan-selected"></span> </label>
                        <select name="user_plan_id" id="user_plan_id" class=" with-border">
                            @foreach ($plans as $plan)
                                <option value="{{ $plan->id }}" onclick="setCount()">{{ $plan->plan->name }} --- {{ $plan->post_count }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <label> Product Name </label>
                    <input type="text" class="with-border" name="title" placeholder="">
                </div>
                <div>
                    <label> Description </label>
                    <textarea name="description" rows="3" class="with-border w-full p-4" id="description" placeholder="Please describe your product."></textarea>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-3">
                        <label> Category </label>
                        <select name="category" id="category" class=" with-border">
                            <option value="2">Autos &amp; Vehicles</option>
                            <option value="3">Baby &amp; Children's Products</option>
                            <option value="4">Beauty Products &amp; Services</option>
                            <option value="5">Computers &amp; Peripherals</option>
                            <option value="6">Consumer Electronics</option>
                            <option value="7">Dating Services</option>
                            <option value="8">Financial Services</option>
                            <option value="9">Gifts &amp; Occasions</option>
                            <option value="10">Home &amp; Garden</option>
                            <option value="1">Other</option>
                        </select>
                    </div>
                    <!-- <div>
                        <label> Price </label>
                        <input placeholder="0.00" type="number" class="with-border w-full">
                    </div> -->
                </div>
                <!-- <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <label> Type </label>
                        <select id="" name="" class="selectpicker with-border">
                            <option value="2"> New </option>
                            <option value="3"> Stock </option>
                        </select>
                    </div>
                    <div>
                        <label> Currency </label>
                        <select id="" name="" class="selectpicker with-border">
                            <option value="2"> USD ($) </option>
                            <option value="3"> EURO </option>
                        </select>
                    </div>
                </div> -->
                <div uk-form-custom class="w-full py-3">
                    <div class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                            <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                            <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                        </svg>
                    </div>
                    <input type="file" name="file0">
                </div>
            </div>
            <div class="p-5">
                <button type="submit" class="button w-full">
                    Publicar ahora
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function setCount() {
        console.log("ENBTRO XD");
    }
    let post_count = 0;
    let plan = document.getElementById('plan-selected');
    let plan_select = document.getElementById('user_plan_id');
    
    // console.log(plan);
    // console.log(plan_select);

    plan_select.addEventListener('change', (event) => {
        console.log("@CHANGE", plan_select.options[plan_select.selectedIndex].text);
        plan.innerHTML = `Plan: ${plan_select.options[plan_select.selectedIndex].text}       $Post restatntes: ${post_count}`;
    });
</script>
@endsection