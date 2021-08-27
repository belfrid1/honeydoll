@extends("front.layouts.app")
@section("title", "ACCESSORIES")
<!------------------------------------- Accessories page content start-------------------------------------->
@section('content')
<div class="page-content">
    <!------------------------------------- Accessories page slider start-------------------------------------->
    <div class="holder fullwidth full-nopad mt-0">
        <div class="container">
            <div class="bnslider-wrapper">
                <div class="bnslider bnslider--lg keep-scale" id="bnslider-001" data-slick='{"arrows": true, "dots": true}' data-autoplay="false" data-speed="12000" data-start-width="1917" data-start-height="764" data-start-mwidth="1550" data-start-mheight="1000">
                    @forelse($backgrounds as $background)
                    <div class="bnslider-slide">
                        <div class="bnslider-image-mobile lazyload" data-bgset="{{ asset('public/') }}{{ $background->url }}"></div>
                        <div class="bnslider-image lazyload" data-bgset="{{ asset('public/') }}{{ $background->url }}"></div>
                    </div>
                        @empty
                    <p>No background at the moment, Please contact admin to add background</p>
                    @endforelse
                </div>
                <div class="bnslider-arrows container-fluid">
                    <div></div>
                </div>
                <div class="bnslider-dots container-fluid"></div>
            </div>
        </div>
    </div>
    <!------------------------------------- Accessories page slider end-------------------------------------->

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


    <!------------------------------------- list product tab start -------------------------------------->

    <div class="tab-content" id="custom-content-above-tabContent">
        <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
            <!-- list product Female start  -->
            <div class="holder">
                <div class="container">
                    <div class="prd-grid-wrap position-relative">
                        <!-- display product on accessories page start  -->
                        <div class="prd-grid data-to-show-3 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                            @foreach ($products as $product)
                                @if ($product->productgender  == "female")
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
                                                    <li data-image="{{ asset('/') }}{{ $product->productpicture1 }}" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="picture1"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                    <li data-image="{{ asset('/') }}{{ $product->productpicture2 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="picture2"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                    <li data-image="{{ asset('/') }}{{ $product->productpicture3 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="picture3"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
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
                            @endforeach
                        </div>
                        <!-- display product on accessories page start  -->
                    </div>
                </div>
            </div>
            <!-- list product Female end -->
            {{ $products->links() }}
        </div>
        <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
            <!-- list product Male start  -->
                <div class="holder">
                    <div class="container">
                        <div class="prd-grid-wrap position-relative">
                            <!-- display product on accessories page start  -->
                            <div class="prd-grid data-to-show-3 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                                    @foreach ($products as $product)
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
                                                    <li data-image="{{ asset('/') }}{{ $product->productpicture1 }}" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="picture1"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                    <li data-image="{{ asset('/') }}{{ $product->productpicture2 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="picture2"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                    <li data-image="{{ asset('/') }}{{ $product->productpicture3 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="picture3"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                </ul>
                                                <!--  button to 3 pictures end  -->
                                            </div>
                                            <div class="prd-info">
                                                <div class="prd-info-wrap">
                                                        <!-------------------------------- Shop name start ------------------------------->
                                                        <!-- The shop name linked with the product should be fetched. The shop name has been added In "add a shop menu" In admin panel-->
                                                    <div class="prd-tag">{{ $product->shop->shopname}} </div>
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
                                    @endforeach
                            </div>
                            <!-- display product on accessories page start  -->
                        </div>
                    </div>
                </div>
            <!-- list product Male  end -->
        </div>
    </div>
    <!------------------------------------- list product tab end-------------------------------------->


    <!------------------------------------- Accessories page body start -------------------------------------->
    <div class="holder holder-mt-medium">
        <div class="container">
            <!---------------------------------- Favorite button at the top of the page start --------------------------->
            <div class="page-title text-center">
            </div>
            <!---------------------------------- Favorite button at the top of the page end --------------------------->
        </div>
    </div>
    <!------------------------------------- Accessories page body end -------------------------------------->



</div>
@endsection
<!------------------------------------- Accessories page content end-------------------------------------->

