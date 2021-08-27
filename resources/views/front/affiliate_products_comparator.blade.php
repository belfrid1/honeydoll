@extends("front.layouts.app")
@section("title", "AFFILIATE PRODUCTS COMPARATOR")
@section('description')
<meta name="description" content="+1000 sex dolls in stock,  buy tpe or silicone love doll on our store, highest quality materials worlwide discreet shipping. We offer the best choices from every brands retailer. Robot sex doll, Big ass, skinny, bbw, small or big tits, brunette, asian, japanese, brazilian, indian, latina, ebony, realistic pussy.">
@endsection
@section('content')
<div class="page-content">

    <div class="holder holder-mt-medium ">
        <div class="page-title text-center">
            <h2>{{__('AFFILIATE PRODUCTS COMPARATOR') }}</h2>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <!----------------------------------   Man or woman buttons start   --------------------------->
            {{-- <div class="page-title text-center">
                <h2>WOMEN’S</h2>
            </div> --}}
            <!----------------------------------   Man or woman buttons end   --------------------------->
            <!------------------------------------- Male and Female tab start -------------------------------------->
            <div class="holder holder-mt-medium section-name-products-grid" id="productsGrid01">
                <div class="container">
                    {{-- <div class="title-wrap text-center pb-4"> --}}
                        <div class="title-wrap title-tabs-wrap text-center js-title-tabs">
                            <div class="title-tabs">
                                <h2 class="h3-style">
                                    <a href="{{ route('affiliate.products.comparator', ['gender'=> 'female']) }}" class="" data-id="female" data-total="8" data-loaded="4" {{ $gender == 'female' ? 'data-grid-tab-title' : '' }}><span class="title-tabs-text theme-font">Female</span></a>
                                </h2>
                                <h2 class="h3-style">
                                    <a href="{{ route('affiliate.products.comparator', ['gender'=> 'male']) }}" class="" data-id="male" data-total="8" data-loaded="4" {{ $gender == 'male' ? 'data-grid-tab-title' : '' }}><span class="title-tabs-text theme-font">Male</span></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="prd-grid-wrap">
                        <div class="prd-grid data-to-show-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2" data-grid-tab-content></div>
                        <div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal style="opacity: 0;"><span></span></div>
                    </div>
                </div>
            </div>
            <!------------------------------------- Male and Female tab end-------------------------------------->
            <div class="row">
                <!-----------------------------------   Criterias and choices start ----------------------->
                    <div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop"
                        data-grid-tab-content>
                        <div class="filter-col-content filter-mobile-content">
                            <div class="sidebar-block filter-group-block open">
                                <div class="sidebar-block_title">
                                    <span>Criterias</span>
                                    <span class="toggle-arrow"><span></span><span></span></span>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="category-list">
                                        @foreach ($criteria as $crite)
                                        <li class="open">
                                            <a href="javascript:void(0);" title="{{ $crite->criteria_name }}" class="open">{{ $crite->criteria_name }} &nbsp;<span></span></a>
                                            <div class="toggle-category js-toggle-category"><span><i class="icon-angle-down"></i></span></div>
                                            @if ($crite->choices)
                                            <ul class="category-list category-list">
                                                @foreach ($crite->choices as $choice)
                                                    <li><a href="{{ url('/' . $choice->choice_name) }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }} &nbsp;<span></span></a></li>
                                                    {{-- <li><a href="javascript:void(0);" class="CHOICEID" data-id="{{ $choice->id }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }}</a></li> --}}
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-----------------------------------   Criterias and choices end ----------------------->
                <div class="filter-toggle js-filter-toggle">
                    <div class="loader-horizontal js-loader-horizontal">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                 style="width: 100%"></div>
                        </div>
                    </div>
                    <span class="filter-toggle-icons js-filter-btn"><i class="icon-filter"></i><i
                            class="icon-filter-close"></i></span>
                    <span class="filter-toggle-text"><a href="#" class="filter-btn-open js-filter-btn">REFINE & SORT</a><a
                            href="#" class="filter-btn-close js-filter-btn">RESET</a><a href="#"
                                                                                        class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a></span>
                </div>
                <div class="col-lg aside" id="PRODUCTDIV">
                    <div class="prd-grid-wrap">
                        <div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid">
                            @foreach ($products as $product)
                            <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                                <div class="prd-inside">
                                    <div class="prd-img-area">
                                        <a href="{{ $product->producturl }}"  target="blank" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                            <!---------------- product picture start --------------------->
                                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" alt="{{ $product->productname }}" class="js-prd-img lazyload fade-up">
                                            <!--------------------------- product picture end -------------------------->
                                            <div class="foxic-loader"></div>
                                        </a>
                                        <!------ Favorite button below each picture start ----------->
                                        {{-- When clients click on favorites the product will be added to their profile
                                        If a user clicks on a favorite button it will ask to sign up or to log in
                                        The favorite button can be out or anything else but it should be discreet --}}
                                        <div class="prd-circle-labels">
                                            <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                        </div>
                                        <!----------------- Favorite button below each picture end ------------------->
                                        <!---------------- Button to show 3 pictures start --------------->
                                        <ul class="list-options color-swatch">
                                            <li data-image="{{ asset('/') }}{{ $product->productpicture1 }}" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="{{ $product->productname }}"><img src="{{ asset('/') }}{{ $product->productpicture1 }}" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                            <li data-image="{{ asset('/') }}{{ $product->productpicture2 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="{{ $product->productname }}"><img src="{{ asset('/') }}{{ $product->productpicture2 }}" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                            <li data-image="{{ asset('/') }}{{ $product->productpicture3 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="{{ $product->productname }}"><img src="{{ asset('/') }}{{ $product->productpicture3 }}" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                        </ul>
                                        <!----------------------- Button to show 3 pictures end ------------------->
                                    </div>
                                    <div class="prd-info">
                                        <div class="prd-info-wrap">
                                            <!-------------------------------- Shop name start ------------------------------->
                                            <!-- The shop name linked with the product should be fetched. The shop name has been added In "add a shop menu" In admin panel-->
                                            <div class="prd-tag"><a href="{{ $product->shop->shopurl }}" target="blank">{{ $product->shop->shopname}}</a></div>
                                            <!-------------------------------- Shop name end ------------------------------->
                                            <!------------------------------- Products Name start ------------------------------>
                                            <!--= Product name has been written by admin from admin panel
                                                =Client should be directed to the related URL after clicking on the Name. The URL should be open in a new tab
                                                Make sure the affiliate code related to the shop the product is coming from, is added at the end of the URL -->
                                            <h2 class="prd-title"><a href="{{ $product->producturl }}" target="blank" > {{ $product->productname }}  </a></h2>
                                            <!------------------------------- Products Name end ------------------------------>
                                            <div class="prd-description">
                                                Quisque volutpat condimentum veent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                            </div>
                                        </div>
                                        <div class="prd-hovers">
                                            <div class="prd-circle-labels">
                                                <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                                <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                            </div>
                                            <!------------------- previous Product Price start -------------->
                                            <!-- Prices written by admin are fetched here -->
                                            <!----------------- previous Product Price end ----------------->
                                            <!------------------- Product Price start --------------->
                                            <!-- Prices written by admin are fetched here -->
                                            <div class="text-center">
                                                 <!-- display product price if that exist -->
                                                 <!-- Previous price input start -->
                                                @if(!empty($product->previousprice))
                                                <div class="price-old">  <s style="font-weight: 300;" >   $  {{ $product->previousprice }}</s>  </div>
                                                @endif
                                                <!-- Previous price input end -->
                                                <div class="price-new "> <b> $ {{ $product->productprice }} </b> </div>
                                            </div>
                                            <!----------------- Product Price end ------------------>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal
                             style="opacity: 0;"><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!------------------------------------- Landing page end -------------------------------------->
</div>
@endsection
@section('javascripts')
    <script>
        // $('.GENDERD').on('click', function() {
        //     window.location.href = "affiliate-products-comparator?gender=" + this.getAttribute('data-id');
        // });
    </script>
@endsection
