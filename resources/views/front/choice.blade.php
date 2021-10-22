@extends("front.layouts.app")
@isset($data)
    @section("title", "X DOLL KISS- | $data->google_title")
    @section('description')
    <meta name="description" content="X DOLL KISS">
@endsection
@endisset
@section('stylesheets')
     <style>
        .prd:not([class*='prd-w']), .prd-hor:not([class*='prd-w']), .prd-promo:not([class*='prd-w']) {
            opacity: 1 !important;
        }
    </style>
@endsection

@section('content')
<div class="page-content">
    <!------------------------------------- Choise page start -------------------------------------->
    <div class="holder holder-mt-medium ">
        <!---------------- Description related to the choices + title + picture start --------------------------->
        @if($data)
            <div class="container">
                <div class="row" style="border: #0d080b">
                    <!---------------- choise picture start --------------------------->
                    <div class="col-md-6">
                        <img src="{{ asset($data->choice_picture) }}" data-src="{{ asset($data->choice_picture) }}" alt="{{ $data->choice_name }}" class="lazyload">
                    </div>
                    <!---------------- choise picture end --------------------------->
                    <div class="col-md-6">
                    <!---------------- choise name start --------------------------->
                        <h1>{{ $data->choice_name }}</h1>
                    <!---------------- choise name end --------------------------->
                    <!---------------- choise text start --------------------------->
                        <p>{{ $data->choice_text }}</p>
                    <!---------------- choise text end --------------------------->
                    </div>
                </div>

            </div>
        @else
            <div class="container">
                <div class="row" style="border: #0d080b">

                    <!---------------- choise picture end --------------------------->
                    <div class="col-md-6">
                        <p>choice not found</p>
                    </div>
                </div>
            </div>
        @endif
        <!----------------- Description related to the choices + title + picture end -------------------------------->
    </div>
    <div class="holder">
        <div class="container">
            <!------------------------------------- Male and Female tab start ------------------------------>
            {{-- @if ($data)
                <div class="holder holder-mt-medium section-name-products-grid" id="productsGrid01">
                    <div class="container">
                        <div class="title-wrap text-center">
                            <div class="title-wrap title-tabs-wrap text-center js-title-tabs">
                                <div class="title-tabs">
                                    <h2 class="h3-style">
                                        <a href="javascript:void(0);" data-total="8" data-loaded="4" @if($data->criteria_gender == 2) data-grid-tab-title @else '' @endif><span class="title-tabs-text theme-font">Female</span></a>
                                    </h2>
                                    <h2 class="h3-style">
                                        <a href="javascript:void(0);" data-total="8" data-loaded="4" @if($data->criteria_gender == 1) data-grid-tab-title @else '' @endif><span class="title-tabs-text theme-font">Male</span></a>
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
            @endif --}}
            <!------------------------------------- Male and Female tab end--------------------------------->
            <!------------------------------------- Male and Female tab start -------------------------------------->
            <div class="holder holder-mt-medium section-name-products-grid" id="productsGrid01">
                <div class="container">
                    <div class="title-wrap text-center">
                        <div class="title-wrap title-tabs-wrap text-center js-title-tabs">
                            <div class="title-tabs">
                                {{-- <h2 class="h3-style">
                                    <a href="#" data-total="8" data-loaded="4" data-grid-tab-title><span class="title-tabs-text theme-font">Female</span></a>
                                </h2>
                                <h2 class="h3-style">
                                    <a href="#" data-total="8" data-loaded="4" data-grid-tab-title><span class="title-tabs-text theme-font">Male</span></a>
                                </h2> --}}
                                <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                    <li class="nav-item">
                                    <a class="nav-link active title-tabs-text theme-font" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Female</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link title-tabs-text theme-font" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Male</a>
                                    </li>
                                    <li class="nav-item">
                                </ul>
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
             <!--------------------------------------   tab content start -------------->
             <div class="tab-content" id="custom-content-above-tabContent">
                <!-- Female tab content  start -->
                <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                    <div class="row">
                        <!-----------------------------------   Criterias and choices start ----------------------->
                        <div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop"
                            data-grid-tab-content>
                            <div class="filter-col-content filter-mobile-content">
                                <div class="sidebar-block">
                                    <div class="sidebar-block_title">
                                        <span>CRITERIA</span>
                                    </div>

                                </div>
                                @foreach ($criteria as $crite)
                                @if ($crite->criteria_gender  == "2")
                                    <div class="sidebar-block filter-group-block open">
                                        <div class="sidebar-block_title">
                                            {{-- <a href="javascript:void(0);" title="{{ $crite->criteria_name }}" class="open">{{ $crite->criteria_name }} &nbsp;<span></span></a> --}}
                                            <span>{{ $crite->criteria_name }}</span>
                                            <span class="toggle-arrow">
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </div>

                                        <div class="sidebar-block_content">
                                            @if ($crite->choices)
                                            <ul class="category-list">
                                                @foreach ($crite->choices as $choice)
                                                    @if ($slug == $choice->slug )
                                                    <div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-left" data-agree>
                                                        <input id="choicecheckbox{{ $choice->id }}" value="{{ $choice->id }}" class="js-agreement-checkbox" data-button=".shopify-payment-agree" name="choicecheckbox{{ $choice->id }}" type="checkbox" checked >
                                                        <label for="choicecheckbox{{ $choice->id }}"><a href="{{ url('choice/sex-doll/' . $choice->slug) }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }}&nbsp;</a></label>
                                                    </div>
                                                    @else
                                                    <div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-left" data-agree>
                                                        <input id="choicecheckbox{{ $choice->id }}" value="{{ $choice->id }}" class="js-agreement-checkbox" data-button=".shopify-payment-agree" name="choicecheckbox{{ $choice->id }}" type="checkbox">
                                                        <label for="choicecheckbox{{ $choice->id }}"><a href="{{ url('choice/sex-doll/' . $choice->slug) }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }}&nbsp;</a></label>
                                                    </div>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
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
                                class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a>
                            </span>
                        </div>
                        <!------------------------------------- list product tab start -------------------------------------->
                        <div class="col-lg aside">
                            <!-- list product Female start  -->
                            <div class="holder">
                                <div class="container">
                                        <!-- female checked list product using ajax start  -->
                                    {{-- <div  class=" prd-grid-wrap position-relative" >

                                    </div> --}}
                                    <!-- female checked list product using ajax end  -->
                                    <!-- female  spinner start -->
                                    <div id='loader' style='position: absolute;left:35%;top:50%;display: none' >
                                        <img src='{{ asset('public/assets/front/images/spin.gif') }}' width='80px' height='80px'>
                                    </div>
                                    <!-- female spinner end  -->
                                    <!-- list product Female start  -->
                                    <div  class="scrolling-pagination femalcechoiceChecked prd-grid-wrap position-relative" >
                                        <div  class="prd-grid data-to-show-3 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                                            <!-- display product on accessories page start  -->
                                            @foreach ($products as $product)
                                                @isset($product)
                                                    @if ($product->productgender  == "female")
                                                        <div  class="prd prd--style1 prd-labels--max prd-labels-shadow">
                                                            <div class="prd-inside">
                                                                <div class="prd-img-area">
                                                                    <a href="{{ $product->producturl }}" target="blank" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                                                        <!-- product  picture start -->
                                                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" alt="{{ $product->productname }}" class="js-prd-img lazyload fade-up">
                                                                        <!-- product picture end  -->
                                                                        <div class="foxic-loader"></div>
                                                                    </a>
                                                                    <!-- Favorite button below each picture start -->
                                                                    <!-- When clients click on favorites the product will be added to their profile
                                                                        If a user clicks on a favorite button it will ask to sign up or to log in
                                                                        The favorite button can be out or anything else but it should be discreet -->
                                                                    {{-- <div class="prd-circle-labels">
                                                                        <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                                                    </div> --}}
                                                                    <!-- Favorite button below each picture end -->

                                                                    <!-- button to 3 pictures start -->
                                                                    <ul class="list-options color-swatch">
                                                                        <li data-image="{{ asset('/') }}{{ $product->productpicture1 }}" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="{{ asset('/') }}{{ $product->productpicture1 }}" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                        <li data-image="{{ asset('/') }}{{ $product->productpicture2 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="{{ asset('/') }}{{ $product->productpicture2 }}" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                        <li data-image="{{ asset('/') }}{{ $product->productpicture3 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="{{ asset('/') }}{{ $product->productpicture3 }}" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                    </ul>
                                                                    <!--  button to 3 pictures end  -->
                                                                </div>
                                                                <div class="prd-info">
                                                                    <div class="prd-info-wrap">
                                                                            <!-------------------------------- Shop name start ------------------------------->
                                                                            <!-- The shop name linked with the product should be fetched. The shop name has been added In "add a shop menu" In admin panel-->
                                                                        <div class="prd-tag"> {{ $product->shop->shopname}} </div>
                                                                        <!-------------------------------- Shop name end ------------------------------->


                                                                        <!------------------------------- Products Name start ------------------------------>
                                                                        <!--= Product name has been written by admin from admin panel
                                                                            =Client should be directed to the related URL after clicking on the Name. The URL should be open in a new tab
                                                                        Make sure the affiliate code related to the shop the product is coming from, is added at the end of the URL -->

                                                                        <h2 class="prd-title"><a href="{{ $product->producturl }}" target="blank" > {{ $product->productname }} </a></h2>
                                                                        <!------------------------------- Products Name end ------------------------------>
                                                                        <div class="prd-description">
                                                                            Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                                                        </div>
                                                                    </div>
                                                                    <div class="prd-hovers">
                                                                        {{-- <div class="prd-circle-labels">
                                                                            <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                                                            <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                                                        </div> --}}
                                                                        <!----------------------------------- Product Price start --------------------------------->
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
                                                                        <!----------------------------------- Product Price end --------------------------------->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endisset
                                            @endforeach
                                            <!-- display product on accessories page start  -->
                                        </div>
                                    </div>
                                    <!--fixed list product Female end  -->
                                </div>
                            </div>
                            <!-- list product Female end -->
                        </div>
                        <!------------------------------------- list product tab end-------------------------------------->
                    </div>
                </div>
                <!-- Female tab content  end -->
                <!-- Male  content tab start -->
                <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                    <div class="row">
                        <!-----------------------------------   Criterias and choices start ----------------------->
                        <div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop"
                            data-grid-tab-content>
                            <div class="filter-col-content filter-mobile-content">
                                <div class="sidebar-block">
                                    <div class="sidebar-block_title">
                                        <span>CRITERIA</span>
                                    </div>

                                </div>
                                @foreach ($criteria as $crite)
                                @if ($crite->criteria_gender  == "1")
                                    <div class="sidebar-block filter-group-block open">
                                        <div class="sidebar-block_title">
                                            {{-- <a href="javascript:void(0);" title="{{ $crite->criteria_name }}" class="open">{{ $crite->criteria_name }} &nbsp;<span></span></a> --}}
                                            <span>{{ $crite->criteria_name }}</span>
                                            <span class="toggle-arrow">
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </div>
                                        <div class="sidebar-block_content">

                                            @if ($crite->choices)
                                            <ul class="category-list">
                                                @foreach ($crite->choices as $choice)

                                                    @if ($slug == $choice->slug )
                                                    <div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-left" data-agree>
                                                        <input id="choicecheckbox{{ $choice->id }}" value="{{ $choice->id }}" class="js-agreement-checkbox-male" data-button=".shopify-payment-agree" name="choicecheckbox{{ $choice->id }}" type="checkbox" checked>
                                                        <label for="choicecheckbox{{ $choice->id }}"><a href="{{ url('choice/sex-doll/' . $choice->slug) }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }}&nbsp;</a></label>
                                                    </div>
                                                    @else
                                                    <div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-left" data-agree>
                                                        <input id="choicecheckbox{{ $choice->id }}" value="{{ $choice->id }}" class="js-agreement-checkbox-male" data-button=".shopify-payment-agree" name="choicecheckbox{{ $choice->id }}" type="checkbox">
                                                        <label for="choicecheckbox{{ $choice->id }}"><a href="{{ url('choice/sex-doll/' . $choice->slug) }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }}&nbsp;</a></label>
                                                    </div>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
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
                                class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a>
                            </span>
                        </div>
                        <div class="col-lg aside">
                            <!------------------------------------- list product tab start -------------------------------------->
                                <!-- list product Male start  -->
                                    <div class="holder">
                                        <div class="container">
                                            {{-- <div id="" class=" prd-grid-wrap position-relative">

                                            </div> --}}
                                            <!--spinner  start  -->
                                            <div id='malloader' style='position: absolute;left:35%;top:50%;display: none' >
                                                <img src='{{ asset('public/assets/front/images/spin.gif') }}' width='80px' height='80px'>
                                            </div>
                                            <!-- dspinner end   -->
                                            <div id="" class="scrolling-pagination malchoiceChecked prd-grid-wrap position-relative">
                                                <!-- display product on accessories page start  -->
                                                <div class="prd-grid data-to-show-3 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                                                    @foreach ($products as $product)
                                                        @isset($product)
                                                            @if ($product->productgender  == "male")
                                                                <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                                                                    <div class="prd-inside">
                                                                        <div class="prd-img-area">
                                                                            <a href="{{ $product->producturl }}" target="blank" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                                                                <!-- product  picture start -->
                                                                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" alt="{{ $product->productname }}" class="js-prd-img lazyload fade-up">
                                                                                <!-- product picture end  -->
                                                                                <div class="foxic-loader"></div>
                                                                            </a>
                                                                            <!-- Favorite button below each picture start -->
                                                                            <!-- When clients click on favorites the product will be added to their profile
                                                                                If a user clicks on a favorite button it will ask to sign up or to log in
                                                                                The favorite button can be out or anything else but it should be discreet -->
                                                                            {{-- <div class="prd-circle-labels">
                                                                                <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                                                            </div> --}}
                                                                            <!-- Favorite button below each picture end -->

                                                                            <!-- button to 3 pictures start -->
                                                                            <ul class="list-options color-swatch">
                                                                                <li data-image="{{ asset('/') }}{{ $product->productpicture1 }}" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                                <li data-image="{{ asset('/') }}{{ $product->productpicture2 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                                <li data-image="{{ asset('/') }}{{ $product->productpicture3 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                            </ul>
                                                                            <!--  button to 3 pictures end  -->
                                                                        </div>
                                                                        <div class="prd-info">
                                                                            <div class="prd-info-wrap">
                                                                                    <!-------------------------------- Shop name start ------------------------------->
                                                                                    <!-- The shop name linked with the product should be fetched. The shop name has been added In "add a shop menu" In admin panel-->
                                                                                <div class="prd-tag"> {{ $product->shop->shopname}} </a></div>
                                                                                <!-------------------------------- Shop name end ------------------------------->


                                                                                <!------------------------------- Products Name start ------------------------------>
                                                                                <!--= Product name has been written by admin from admin panel
                                                                                    =Client should be directed to the related URL after clicking on the Name. The URL should be open in a new tab
                                                                                Make sure the affiliate code related to the shop the product is coming from, is added at the end of the URL -->

                                                                                <h2 class="prd-title"><a href="{{ $product->producturl }}" target="blank" > {{ $product->productname }} </a></h2>
                                                                                <!------------------------------- Products Name end ------------------------------>
                                                                                <div class="prd-description">
                                                                                    Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                                                                </div>
                                                                            </div>
                                                                            <div class="prd-hovers">
                                                                                {{-- <div class="prd-circle-labels">
                                                                                    <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                                                                    <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                                                                </div> --}}
                                                                                <!----------------------------------- Product Price start --------------------------------->
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
                                                                                <!----------------------------------- Product Price end --------------------------------->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endisset
                                                    @endforeach
                                                </div>
                                                <!-- display product on accessories page start  -->
                                            </div>
                                        </div>
                                    </div>
                                <!-- list product Male  end -->
                            <!------------------------------------- list product tab end-------------------------------------->
                        </div>
                    </div>
                </div>
                <!-- Male content tab end -->
            </div>
            <!--------------------------------------   tab content end -------------->

            <!--------------------------------------  Best match field + Number of best match start -------------->
            {{-- <div class="page-title text-center">
                <h4>BEST MATCH</h4>
            </div>
            <div class="filter-row ">
                <div class="row text-center">
                    <div class="items-count mr-5">35 item(s)</div>
                </div>
            </div> --}}
            <!--------------------------------------  Best match field + Number of best match end -------------->

            <!--------------------------------------  list criteria and product start -------------->
            {{-- <div class="row">
                <!-----------------------------------   Criterias and choices start ----------------------->
                <div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop"
                                data-grid-tab-content>
                                <div class="filter-col-content filter-mobile-content">
                                    <div class="sidebar-block">
                                        <div class="sidebar-block_title">
                                            <span>CRITERIA</span>
                                        </div>
                                        <!-- <div class="sidebar-block_content">
                                            <div class="selected-filters-wrap">
                                                <ul class="selected-filters">
                                                    <li><a href="#">Grey</a></li>
                                                    <li><a href="#">Men</a></li>
                                                    <li><a href="#">Above $200</a></li>
                                                </ul>
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <a href="#" class="clear-filters"><span>Clear All</span></a>
                                                    <div class="selected-filters-count ml-auto d-none d-lg-block">Selected <span>6 items</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    @foreach ($criteria as $crite)
                                    @if ($crite->criteria_gender  == "2")
                                        <div class="sidebar-block filter-group-block open">
                                            <div class="sidebar-block_title">
                                                <!-- <a href="javascript:void(0);" title="{{ $crite->criteria_name }}" class="open">{{ $crite->criteria_name }} &nbsp;<span></span></a> -->
                                                <span>{{ $crite->criteria_name }}</span>
                                                <span class="toggle-arrow">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                            </div>
                                            <div class="sidebar-block_content">
                                                @if ($crite->choices)
                                                <ul class="category-list">
                                                    @foreach ($crite->choices as $choice)

                                                    <li>
                                                        <a href="{{ url('choice/' . $choice->choice_name) }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }}&nbsp;</a>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                                @endif
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
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
                    <br>
                    <div class="prd-grid-wrap">
                        <div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid">
                            @if ($products != "")
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
                                            <!--------------------- Favorite button below each picture start ------------------------->
                                            <!-- When clients click on favorites the product will be added to their profile

                                            If a user clicks on a favorite button it will ask to sign up or to log in

                                            The favorite button can be out or anything else but it should be discreet --->

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
                                                <div class="prd-tag"><a href="{{ $product->shop->shopurl }}" target="blank" > {{ $product->shop->shopname}}  </a></div>
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
                                                <!----------------------------------- previous Product Price start --------------------------------->
                                                <!-- Prices written by admin are fetched here -->

                                                <!----------------------------------- previous Product Price end --------------------------------->
                                                <!----------------------------------- Product Price start --------------------------------->
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
                                                <!----------------------------------- Product Price end --------------------------------->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <p>No products for your choice</p>
                            @endif
                        </div>
                        <div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal
                            style="opacity: 0;"><span></span>
                        </div>
                    </div>
                    <br>
                </div>
            </div> --}}
            <!--------------------------------------  list criteria and product  end  -------------->



        </div>
    </div>
    <!------------------------------------- Choise page end -------------------------------------->
@endsection
@section('javascripts')


        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
        <script type="text/javascript">
            $('ul.pagination').hide();
            $(function() {
                $('.scrolling-pagination').jscroll({
                    loadingHtml: '<img src="{{ asset('public/assets/front/images/spin.gif') }}" alt="Loading" /> Loading...',
                    autoTrigger: true,
                    padding: 0,
                    nextSelector: '.pagination li.active + li a',
                    contentSelector: 'div.scrolling-pagination',
                    callback: function() {
                        $('ul.pagination').remove();
                    }
                });
            });
        </script>

       <!--------------- load female product related to female criteria checked  start ------------------>
       <script  type="text/javascript">
            //  gender = document.querySelector('input[name="criteriagender"]:checked').value;//get gender selected
            // default choice defaultChoice
            defaultChoiceId = "{{$choiseId}}"
            // array choice checked initialize
            choiceCheckeds = [];

            $('.js-agreement-checkbox').click(function() {
            choiceCheckedId = $(this).attr('value');

            // alert(choiceCheckedId);  //-->this will alert id of checked checkbox.

            if(this.checked){
            // add just checked element if choiceCheckeds array is not empty
            // if array choiceCheckeds is empty add default choice and choice checked
            if(choiceCheckeds == ''){
                choiceCheckeds.unshift(defaultChoiceId,choiceCheckedId);
            }else {
                // if array choiceCheckeds is not empty just add choice checked
                choiceCheckeds.unshift(choiceCheckedId);
            }
            gender = "female";

            $.ajax({
                type: "GET",
                url: "{{ route('front.choiceCheckeds') }}",
                data: {choiceCheckeds,gender}, //--> send id of checked checkbox on other page
                beforeSend: function(){
                    /* Show image container */
                    console.log('female criteria',choiceCheckeds);
                    $(".femalcechoiceChecked").empty();
                    $("#loader").show();
                },
                success: function(data) {
                    $("#loader").hide();
                    // $(".femalcechoiceChecked").show();
                    if(data === []) {
                        alert('No product for to this Choice !');
                    }

                    $(".femalcechoiceChecked").html(data);
                },
                 error: function() {
                    console.log('it broke');
                },
                complete: function() {

                }
            });

            }else{
                if(choiceCheckeds.indexOf(choiceCheckedId) > -1) {
                    console.log(choiceCheckeds.indexOf(choiceCheckedId));
                    choiceCheckeds.splice (choiceCheckeds.indexOf(choiceCheckedId), 1);
                    gender = "female";
                    $.ajax({
                        type: "GET",
                        url: "{{ route('front.choiceCheckeds') }}",
                        data: {choiceCheckeds,gender}, //--> send id of checked checkbox on other page
                        beforeSend: function(){
                            /* Show image container */
                            console.log('female criteria',choiceCheckeds);
                            $(".femalcechoiceChecked").empty();
                            $("#loader").show();
                        },
                        success: function(data) {
                            console.log('success');
                            $("#loader").hide();

                            $(".femalcechoiceChecked").html(data);

                        },
                        error: function() {
                            alert('Research failed');

                        },
                        complete: function() {
                            console.log('it completed');


                        }
                    });
                }
            }

        });
    </script>
    <!--------------- load female product related to female criteria checked  end ------------------>
    <!--------------- load male product related to male criteria checked  start ------------------>
    <script  type="text/javascript">
        //  gender = document.querySelector('input[name="criteriagender"]:checked').value;//get gender selected
        // default choice defaultChoice
        defaultChoiceId = "{{$choiseId}}"
        // array choice checked initialize
        choiceCheckeds = [];
        $('.js-agreement-checkbox-male').click(function() {
        choiceCheckedId = $(this).attr('value');
        // alert(choiceCheckedId);  //-->this will alert id of checked checkbox.
       if(this.checked){
        if(choiceCheckeds == ''){
            choiceCheckeds.unshift(defaultChoiceId,choiceCheckedId);
        }else {
            // if array choiceCheckeds is not empty just add choice checked
            choiceCheckeds.unshift(choiceCheckedId);
        }
        gender = "male";
            $.ajax({
                type: "GET",
                url: "{{ route('front.choiceCheckeds') }}",
                data: {choiceCheckeds,gender}, //--> send id of checked checkbox on other page
                beforeSend: function(){
                    /* Show image container */
                    console.log('mal criteria',choiceCheckeds);
                    $(".malchoiceChecked").empty();
                    $("#malloader").show();
                },
                success: function(data) {
                    $("#malloader").hide();
                    // $(".femalcechoiceChecked").show();

                    $(".malchoiceChecked").html(data);
                },
                 error: function() {
                    alert('Research failed');
                },
                complete: function() {
                    console.log('completed');
                }
            });

            }else{
                if(choiceCheckeds.indexOf(choiceCheckedId) > -1) {
                    console.log(choiceCheckeds.indexOf(choiceCheckedId));
                    choiceCheckeds.splice (choiceCheckeds.indexOf(choiceCheckedId), 1);
                    gender = "male";
                    $.ajax({
                        type: "GET",
                        url: "{{ route('front.choiceCheckeds') }}",
                        data: {choiceCheckeds,gender}, //--> send id of checked checkbox on other page
                        beforeSend: function(){
                            /* Show image container */
                            console.log('mal criteria',choiceCheckeds);
                            $(".malchoiceChecked").empty();
                            $("#malloader").show();
                        },
                        success: function(data) {
                            console.log('success');
                            $("#malloader").hide();

                            $(".malchoiceChecked").html(data);

                        },
                        error: function() {
                            alert('Research failed');

                        },
                        complete: function() {
                            console.log('it completed');


                        }
                    });
                }
            }
      });
    </script>
    <!--------------- load male product related to male criteria checked  start ------------------>

    <script>
        $(document).ready(function(){
            $(".CHOICEID").on("click", function () {
                var id = $(this).data("id");
                //alert(id);
                $.ajax({
                    type: "GET",
                    url: "{{ route('choice.view') }}",
                    data: { id : id },
                    success: function (data) {
                        $("#PRODUCTDIV").append(data);
                    }
                });
            });
        });
    </script>
@endsection
