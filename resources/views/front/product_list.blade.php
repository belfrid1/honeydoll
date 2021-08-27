<br>
<div class="prd-grid-wrap">
    <div class="prd-grid data-to-show-3 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid">
        @foreach ($products as $product)
            <div class="prd prd--style2 prd-labels--max prd-labels-shadow prd-w-xs">
                <div class="prd-inside">
                    <div class="prd-img-area">
                        <a href="{{ $product->producturl }}"  target="_blank" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                            <!---------------- product picture start --------------------->
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" alt="{{ $product->productname }}" class="js-prd-img lazyload fade-up">
                            <!--------------------------- product picture end -------------------------->
                            <div class="foxic-loader"></div>

                        </a>
                        <!--------------------- Favorite button below each picture start ------------------------->
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
                            <div class="prd-tag"><a href="{{ $product->shop->shopurl }}" target="_blank" > {{ $product->shop->shopname}}  </a></div>
                            <!-------------------------------- Shop name end ------------------------------->


                            <!------------------------------- Products Name start ------------------------------>
                            <!--= Product name has been written by admin from admin panel
                                =Client should be directed to the related URL after clicking on the Name. The URL should be open in a new tab
                                Make sure the affiliate code related to the shop the product is coming from, is added at the end of the URL -->

                            <h2 class="prd-title"><a href="{{ $product->producturl }}" target="_blank" > {{ $product->productname }}  </a></h2>
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
    </div>
    <div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal
         style="opacity: 0;"><span></span>
    </div>
</div>
<br>
