@extends("front.layouts.app")
@section("title", "X DOLL KISS-SEX DOLL SHOPS")
@section('description')
    <meta name="description" content="X DOLL KISS, Buy tpe or silicone love doll on our store. Robot sex doll, Big ass, skinny, bbw, small or big tits, brunette, asian, japanese, brazilian, indian, latina, ebony, realistic pussy.">
@endsection

@section('stylesheets')
    {{-- <title>{{ config('app.name', 'AFFLIATE PRODUCT') }} | @yield('title')</title> --}}
    {{--    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/front/images/favicon.ico') }}" />--}}
    {{--    <link href="{{ asset('public/assets/front/css/vendor/bootstrap.min.css') }}" rel="stylesheet">--}}
    {{--    <link href="{{ asset('public/assets/front/css/vendor/vendor.min.css') }}" rel="stylesheet">--}}
    {{--    <link href="{{ asset('public/assets/front/css/style.css') }}" rel="stylesheet">--}}
    {{--    <link href="{{ asset('public/assets/front/fonts/icomoon/icons.css') }}" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open%20Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

@endsection
@section('content')
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Shop </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-95 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-top-bar">
                        <div class="select-shoing-wrap">
                            <div class="shop-select">
                                <select>
                                    <option value="">Sort by newness</option>
                                    <option value="">A to Z</option>
                                    <option value=""> Z to A</option>
                                    <option value="">In stock</option>
                                </select>
                            </div>
                            <p>Showing 1–12 of 20 result</p>
                        </div>
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-1" data-bs-toggle="tab">
                                <i class="fa fa-table"></i>
                            </a>
                            <a href="#shop-2" data-bs-toggle="tab">
                                <i class="fa fa-list-ul"></i>
                            </a>
                        </div>
                    </div>
                    <div class="shop-bottom-area mt-35">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-1.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-1-1.jpg" alt="">
                                                </a>
                                                <span class="pink">-10%</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                    <span class="old">$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-2.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-2-1.jpg" alt="">
                                                </a>
                                                <span class="purple">New</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-3.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-3-1.jpg" alt="">
                                                </a>
                                                <span class="pink">-10%</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                    <span class="old">$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-4.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-4-1.jpg" alt="">
                                                </a>
                                                <span class="purple">New</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-5.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-5-1.jpg" alt="">
                                                </a>
                                                <span class="pink">-10%</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                    <span class="old">$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-6.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-6-1.jpg" alt="">
                                                </a>
                                                <span class="purple">New</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-7.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-4-1.jpg" alt="">
                                                </a>
                                                <span class="pink">-10%</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                    <span class="old">$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-8.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-6.jpg" alt="">
                                                </a>
                                                <span class="purple">New</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-1.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-1-1.jpg" alt="">
                                                </a>
                                                <span class="pink">-10%</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$ 60.00</span>
                                                    <span class="old">$ 60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                            <div class="product-wrap">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="assets/img/product/pro-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/img/product/pro-1-1.jpg" alt="">
                                                    </a>
                                                    <span class="pink">-10%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                            <div class="shop-list-content">
                                                <h3><a href="#">Products Name Here</a></h3>
                                                <div class="product-list-price">
                                                    <span>$ 60.00</span>
                                                    <span class="old">$ 90.00</span>
                                                </div>
                                                <div class="rating-review">
                                                    <div class="product-list-rating">
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <a href="#">3 Reviews</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                                <div class="shop-list-btn btn-hover">
                                                    <a href="#">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                            <div class="product-wrap">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="assets/img/product/pro-2.jpg" alt="">
                                                        <img class="hover-img" src="assets/img/product/pro-2-1.jpg" alt="">
                                                    </a>
                                                    <span class="purple">New</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                            <div class="shop-list-content">
                                                <h3><a href="#">Products Name Here</a></h3>
                                                <div class="product-list-price">
                                                    <span>$ 60.00</span>
                                                </div>
                                                <div class="rating-review">
                                                    <div class="product-list-rating">
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <a href="#">3 Reviews</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                                <div class="shop-list-btn btn-hover">
                                                    <a href="#">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                            <div class="product-wrap">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="assets/img/product/pro-3.jpg" alt="">
                                                        <img class="hover-img" src="assets/img/product/pro-3-1.jpg" alt="">
                                                    </a>
                                                    <span class="pink">-20%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                            <div class="shop-list-content">
                                                <h3><a href="product-details.html">Products Name Here</a></h3>
                                                <div class="product-list-price">
                                                    <span>$ 30.00</span>
                                                    <span class="old">$ 50.00</span>
                                                </div>
                                                <div class="rating-review">
                                                    <div class="product-list-rating">
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <a href="#">3 Reviews</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                                <div class="shop-list-btn btn-hover">
                                                    <a href="#">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                            <div class="product-wrap">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="assets/img/product/pro-7.jpg" alt="">
                                                        <img class="hover-img" src="assets/img/product/pro-4-1.jpg" alt="">
                                                    </a>
                                                    <span class="purple">New</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                            <div class="shop-list-content">
                                                <h3><a href="product-details.html">Products Name Here</a></h3>
                                                <div class="product-list-price">
                                                    <span>$ 70.00</span>
                                                </div>
                                                <div class="rating-review">
                                                    <div class="product-list-rating">
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o yellow"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <a href="#">3 Reviews</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                                <div class="shop-list-btn btn-hover">
                                                    <a href="#">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-pagination-style text-center mt-30">
                            <ul>
                                <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-style mr-30">
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Search </h4>
                            <div class="pro-sidebar-search mb-50 mt-25">
                                <form class="pro-sidebar-search-form" action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button>
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Refine By </h4>
                            <div class="sidebar-widget-list mt-30">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox"> <a href="#">On Sale <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">New <span>4</span></a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">In Stock <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-45">
                            <h4 class="pro-sidebar-title">Filter By Price </h4>
                            <div class="price-filter mt-10">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-50">
                            <h4 class="pro-sidebar-title">Colour </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Green <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Cream <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Blue <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Black <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-40">
                            <h4 class="pro-sidebar-title">Size </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">XL</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">L</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">SM</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">XXL</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-50">
                            <h4 class="pro-sidebar-title">Tag </h4>
                            <div class="sidebar-widget-tag mt-25">
                                <ul>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">For Men</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Fashion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!------------------------------------- Shop list end -------------------------------------->
