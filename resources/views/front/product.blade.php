@extends("front.layouts.app")
@section('description')
    <meta name="description" content="+1000 sex dolls in stock,  buy tpe or silicone love doll on our store, highest quality materials worlwide discreet shipping. We offer the best choices from every brands retailer. Robot sex doll, Big ass, skinny, bbw, small or big tits, brunette, asian, japanese, brazilian, indian, latina, ebony, realistic pussy.">
@endsection
@section('content')
    <!-- page content start -->
    <div class="page-content">
        <!-- section breadcrumb start -->
        <div class="holder breadcrumbs-wrap mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('front.home')}}">Product</a></li>
                    <li><a href="#">{{ $product->productgender}}</a></li>
                    <li><span> {{ $product->productname}}</span></li>
                </ul>
            </div>
        </div>
        <!-- section breadcrumb end -->
        <!-- details product section start -->
        <div class="holder">
            <div class="container js-prd-gallery" id="prdGallery">
                <!-- product name section start -->
                <div class="row prd-block prd-block-under prd-block--prv-bottom">
                    <div class="col">
                        <div class="js-prd-d-holder">
                            <div class="prd-block_title-wrap">
                                <!--For review start-->
                                {{-- <div class="prd-block_reviews" data-toggle="tooltip" data-placement="top" title="Scroll To Reviews"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star"></i>
                                    <span class="reviews-link"><a href="#" class="js-reviews-link"> (17 reviews)</a></span>
                                </div> --}}
                                <!--For review start-->
                                <h1 class="prd-block_title">{{ $product->productname }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto prd-block-prevnext-wrap">
                        <div class="prd-block-prevnext">
                            <a href="#"><span class="prd-img"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" alt=""><i class="icon-arrow-left"></i></span></a>
                            <a href="#"><span class="prd-img"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" alt=""></span></a>
                            <a href="#"><span class="prd-img"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" alt=""><i class="icon-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- product name section end -->

                <div class="row prd-block prd-block--prv-bottom">
                    <div class="col-md-8 col-lg-8 col-xl-8 aside--sticky js-sticky-collision">
                        <div class="aside-content">
                            <div class="mb-2 js-prd-m-holder"></div>
                            <div class="prd-block_main-image">
                                <div class="prd-block_main-image-holder" id="prdMainImage">
                                    <div class="product-main-carousel js-product-main-carousel" data-zoom-position="inner">
                                        <div data-value="productpicture1"><span class="prd-img"><img src="{{ asset('/') }}{{ $product->productpicture1 }}" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up elzoom" alt="" data-zoom-image="{{ asset('/') }}{{ $product->productpicture1 }}"/></span></div>
                                        <div data-value="productpicture2"><span class="prd-img"><img src="{{ asset('/') }}{{ $product->productpicture2 }}" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up elzoom" alt="" data-zoom-image="images/skins/fashion/product-page/product-02.webp"/></span></div>
                                        {{-- <div class="inner-video js-inner-video">
                                            <video preload="metadata" controls="controls" playsinline="playsinline">
                                                <source src="images/skins/fashion/product-page/product-video.mp4" type="video/mp4">
                                            </video>
                                        </div> --}}
                                        <div data-value="productpicture3"><span class="prd-img"><img src="{{ asset('/') }}{{ $product->productpicture3 }}" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up elzoom" alt="" data-zoom-image="images/skins/fashion/product-page/product-03.webp"/></span></div>
                                    </div>
                                    <div class="prd-block_label-sale-squared justify-content-center align-items-center"><span>Sale</span></div>
                                </div>
                                {{-- <div class="prd-block_main-image-links">
                                    <a data-fancybox data-width="900" href="https://www.youtube.com/watch?v=Zk3kr7J_v3Q" class="prd-block_video-link"><i class="icon-video"></i></a>
                                    <a href="images/products/product-01.html" class="prd-block_zoom-link"><i class="icon-zoom-in"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-previews-wrapper">
                                <div class="product-previews-carousel js-product-previews-carousel">
                                    <a href="#" data-value="productpicture1"><span class="prd-img"><img src="{{ asset('/') }}{{ $product->productpicture1 }}" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up" alt=""/></span></a>
                                    <a href="#" data-value="productpicture2"><span class="prd-img"><img src="{{ asset('/') }}{{ $product->productpicture2 }}" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up" alt=""/></span></a>
                                    {{-- <a href="#" class="prd-block_video-link video-slide">
                                        <span><span><i class="icon icon-play"></i><img src="images/skins/fashion/product-page/product-video.html" alt=""/></span></span>
                                    </a> --}}
                                    <a href="#" data-value="productpicture3"><span class="prd-img"><img src="{{ asset('/') }}{{ $product->productpicture3 }}" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up" alt=""/></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  block info section end -->
                    <div class="col-md-10 col-lg-10 col-xl-10 mt-1 mt-md-0">
                        <div class="prd-block_info prd-block_info--style1" data-prd-handle="/products/copy-of-suede-leather-mini-skirt">
                            <div class="prd-block_info-top prd-block_info_item order-0 order-md-2">
                                <div class="prd-block_price prd-block_price--style2">
                                    <div class="prd-block_price--actual">$ {{ $product->previousprice }} </div>
                                    <div class="prd-block_price-old-wrap">
                                        <span class="prd-block_price--old">$ {{ $product->previousprice }}</span>
                                        <span class="prd-block_price--text">You Save: $131.99 (28%)</span>
                                    </div>
                                </div>
                                <div class="prd-block_viewed-wrap d-none d-md-flex">
                                    <div class="prd-block_viewed">
                                        <i class="icon-time"></i>
                                        <span>This product was viewed 13 times within last hour</span>
                                    </div>
                                </div>
                            </div>
                            <div class="prd-block_description prd-block_info_item ">
                                <h3>Short description</h3>
                                <p>Model is 5'9" wearing Size XS TallAnd without further ado, we give you our finest Shopify Theme FOXic! It is a subtle, complex and yet an extremely easy to use template for anyone, who wants to create own website in ANY area of expertise.</p>
                                <div class="mt-1"></div>
                                <div class="row vert-margin-less">
                                    <div class="col-sm">
                                        <ul class="list-marker">
                                            <li>100% Polyester</li>
                                            <li>Lining:100% Viscose</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm">
                                        <ul class="list-marker">
                                            <li>Do not dry clean</li>
                                            <li>Only non-chlorine</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="prd-progress prd-block_info_item" data-left-in-stock="">
                                <div class="prd-progress-text">
                                    Hurry Up! Left <span class="prd-progress-text-left js-stock-left">26</span> in stock
                                </div>
                                <div class="prd-progress-text-null"></div>
                                <div class="prd-progress-bar-wrap progress">
                                    <div class="prd-progress-bar progress-bar active" data-stock="50, 10, 30, 25, 1000, 15000" style="width: 53%;"></div>
                                </div>
                            </div>
                            <div class="prd-block_countdown js-countdown-wrap prd-block_info_item countdown-init">
                                <div class="countdown-box-full-text w-md">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-sm-auto text-center">
                                            <div class="countdown js-countdown" data-countdown="2021/07/01"></div>
                                        </div>
                                        <div class="col">
                                            <div class="countdown-txt"> TIME IS RUNNING OUT!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prd-block_order-info prd-block_info_item " data-order-time="" data-locale="en">
                                <i class="icon-box-2"></i>
                                <div>Order in the next <span class="prd-block_order-info-time countdownCircleTimer" data-time="8:00:00, 15:30:00, 23:59:59"><span><span>04</span>:</span><span><span>46</span>:</span><span><span>24</span></span></span> to get it by <span data-date="">Tuesday, September 08, 2020</span></div>
                            </div>
                            <div class="prd-block_info_item prd-block_info-when-arrives d-none" data-when-arrives>
                                <div class="prd-block_links prd-block_links m-0 d-inline-flex">
                                    <i class="icon-email-1"></i>
                                    <div><a href="#" data-follow-up="" data-name="Oversize Cotton Dress" class="prd-in-stock" data-src="#whenArrives">Inform me when the item arrives</a></div>
                                </div>
                            </div>
                            <div class="prd-block_info-box prd-block_info_item">
                                <div class="two-column"><p>Availability:
                                    <span class="prd-in-stock" data-stock-status="">In stock</span></p>
                                    <p class="prd-taxes">Tax Info:
                                        <span>Tax included.</span>
                                    </p>
                                    <p>Collection: <span> <a href="collections.html" data-toggle="tooltip" data-placement="top" data-original-title="View all">Women</a></span></p>
                                    <p>Sku: <span data-sku="">FOXic-45812</span></p>
                                    <p>Vendor: <span>Banita</span></p>
                                    <p>Barcode: <span>314363563</span></p></div>
                            </div>
                            <!-- Form section choose color, product size and add to cart start-->
                            <div class="order-0 order-md-100">
                                <form method="post" action="#">
                                    <!-- Product block option size and color start-->
                                    {{-- <div class="prd-block_options">
                                        <div class="prd-color swatches">
                                            <div class="option-label">Color:</div>
                                            <select class="form-control hidden single-option-selector-modalQuickView" id="SingleOptionSelector-0" data-index="option1">
                                                <option value="Beige" selected="selected">Beige</option>
                                                <option value="Black">Black</option>
                                                <option value="Red">Red</option>
                                            </select>
                                            <ul class="images-list js-size-list" data-select-id="SingleOptionSelector-0">
                                                <li class="active">
                                                    <a href="#" data-value="Beige" data-toggle="tooltip" data-placement="top" data-original-title="Beige"><span class="image-container image-container--product"><img src="images/skins/fashion/product-page/product-01.html" alt=""></span></a>
                                                <li>
                                                <li>
                                                    <a href="#" data-value="Black" data-toggle="tooltip" data-placement="top" data-original-title="Black"><span class="image-container image-container--product"><img src="images/skins/fashion/product-page/product-04.html" alt=""></span></a>
                                                <li>
                                                <li>
                                                    <a href="#" data-value="Red" data-toggle="tooltip" data-placement="top" data-original-title="Red"><span class="image-container image-container--product"><img src="images/skins/fashion/product-page/product-07.html" alt=""></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="prd-size swatches">
                                            <div class="option-label">Size:</div>
                                            <select class="form-control hidden single-option-selector-modalQuickView" id="SingleOptionSelector-1" data-index="option2">
                                                <option value="Small" selected="selected">Small</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Large">Large</option>
                                            </select>
                                            <ul class="size-list js-size-list" data-select-id="SingleOptionSelector-1">
                                                <li class="active"><a href="#" data-value="Small"><span class="value">Small</span></a></li>
                                                <li><a href="#" data-value="Medium"><span class="value">Medium</span></a></li>
                                                <li><a href="#" data-value="Large"><span class="value">Large</span></a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <!-- Product block option size and color end -->
                                    <div class="prd-block_actions prd-block_actions--wishlist">
                                        <div class="prd-block_qty">
                                            <div class="qty qty-changer">
                                                <button class="decrease js-qty-button"></button>
                                                <input type="number" class="qty-input" name="quantity" value="1" data-min="1" data-max="1000">
                                                <button class="increase js-qty-button"></button>
                                            </div>
                                        </div>
                                        <div class="btn-wrap">
                                            <button class="btn btn--add-to-cart js-trigger-addtocart js-prd-addtocart" data-product='{"name":  "Leather Pegged Pants ",  "url ": "product.html",  "path ": "#",  "aspect_ratio ": "0.78"}'>Add to cart</button>
                                        </div>
                                        <div class="btn-wishlist-wrap">
                                            <a href="#" class="btn-add-to-wishlist ml-auto btn-add-to-wishlist--add js-add-wishlist" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a>
                                            <a href="#" class="btn-add-to-wishlist ml-auto btn-add-to-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                        </div>
                                    </div>
                                </form>
                                <div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-right" data-agree>
                                    <input id="agreementCheckboxProductPage" class="js-agreement-checkbox" data-button=".shopify-payment-agree" name="agreementCheckboxProductPage" type="checkbox">
                                    <label for="agreementCheckboxProductPage"><a href="#" data-fancybox class="modal-info-link" data-src="#agreementInfo">I agree to the terms of service</a></label>
                                </div>
                            </div>
                            <!-- Form section choose color, product size and btn add to cart end -->
                            <!-- Section size guide, delivery info and contact modal  start -->
                            <div class="prd-block_info_item">
                                <ul class="prd-block_links list-unstyled">
                                    <li><i class="icon-size-guide"></i><a href="#" data-fancybox class="modal-info-link" data-src="#sizeGuide">Size Guide</a></li>
                                    <li><i class="icon-delivery-1"></i><a href="#" data-fancybox class="modal-info-link" data-src="#deliveryInfo">Delivery and Return</a></li>
                                    <li><i class="icon-email-1"></i><a href="#" data-fancybox class="modal-info-link" data-src="#contactModal">Ask about this product</a></li>
                                </ul>
                                <div id="sizeGuide" style="display: none;" class="modal-info-content modal-info-content-lg">
                                    <div class="modal-info-heading">
                                        <div class="mb-1"><i class="icon-size-guide"></i></div>
                                        <h2>Size Guide</h2>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-borderless text-center">
                                            <thead>
                                            <tr>
                                                <th>USA</th>
                                                <th>UK</th>
                                                <th>France</th>
                                                <th>Japanese</th>
                                                <th>Bust</th>
                                                <th>Waist</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>4</td>
                                                <td>8</td>
                                                <td>36</td>
                                                <td>7</td>
                                                <td>32"</td>
                                                <td>61 cm</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>10</td>
                                                <td>38</td>
                                                <td>11</td>
                                                <td>34"</td>
                                                <td>67 cm</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>12</td>
                                                <td>40</td>
                                                <td>15</td>
                                                <td>36"</td>
                                                <td>74 cm</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>14</td>
                                                <td>42</td>
                                                <td>17</td>
                                                <td>38"</td>
                                                <td>79 cm</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>16</td>
                                                <td>44</td>
                                                <td>21</td>
                                                <td>40"</td>
                                                <td>84 cm</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="deliveryInfo" style="display: none;" class="modal-info-content modal-info-content-lg">
                                    <div class="modal-info-heading">
                                        <div class="mb-1"><i class="icon-delivery-1"></i></div>
                                        <h2>Delivery and Return</h2>
                                    </div>
                                    <br>
                                    <h5>Our parcel courier service</h5>
                                    <p>Foxic is proud to offer an exceptional international parcel shipping service. It is straightforward and very easy to organise international parcel shipping. Our customer service team works around the clock to make sure that you receive high quality courier service from start to finish.</p>
                                    <p>Sending a parcel with us is simple. To start the process you will first need to get a quote using our free online quotation service. From this, you’ll be able to navigate through the online form to book a collection date for your parcel, selecting a shipping day suitable for you.</p>
                                    <br>
                                    <h5>Shipping Time</h5>
                                    <p>The shipping time is based on the shipping method you chose.<br>
                                        EMS takes about 5-10 working days for delivery.<br>
                                        DHL takes about 2-5 working days for delivery.<br>
                                        DPEX takes about 2-8 working days for delivery.<br>
                                        JCEX takes about 3-7 working days for delivery.<br>
                                        China Post Registered Mail takes 20-40 working days for delivery.</p>
                                </div>
                                <div id="contactModal" style="display: none;" class="modal-info-content modal-info-content-sm">
                                    <div class="modal-info-heading">
                                        <div class="mb-1"><i class="icon-envelope"></i></div>
                                        <h2>Have a question?</h2>
                                    </div>
                                    <form method="post" action="#" id="contactForm" class="contact-form">
                                        <div class="form-group">
                                            <input type="text" name="contact[name]" class="form-control form-control--sm" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact[email]" class="form-control form-control--sm" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact[phone]" class="form-control form-control--sm" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control textarea--height-170" name="contact[body]" placeholder="Message" required="">Hi! I need next info about the "Oversize Cotton Dress":</textarea>
                                        </div>
                                        <button class="btn" type="submit">Ask our consultant</button>
                                        <p class="p--small mt-15 mb-0">and we will contact you soon</p><input name="recaptcha-v3-token" type="hidden" value="03AGdBq27T8WvzvZu79QsHn8lp5GhjNX-w3wkcpVJgCH15Ehh0tu8c9wTKj4aNXyU0OLM949jTA4cDxfznP9myOBw9m-wggkfcp1Cv_vhsi-TQ9E_EbeLl33dqRhp2sa5tKBOtDspTgwoEDODTHAz3nuvG28jE7foIFoqGWiCqdQo5iEphqtGTvY1G7XgWPAkNPnD0B9V221SYth9vMazf1mkYX3YHAj_g_6qhikdQDsgF2Sa2wOcoLKWiTBMF6L0wxdwhIoGFz3k3VptYem75sxPM4lpS8Y_UAxfvF06fywFATA0nNH0IRnd5eEPnnhJuYc5LYsV6Djg7_S4wLBmOzYnahC-S60MHvQFf-scQqqhPWOtgEKPihUYiGFBJYRn2p1bZwIIhozAgveOtTNQQi7FGqmlbKkRWCA"></form>
                                </div>
                            </div>
                            <!-- Section size guide, delivery info and contact modal  start -->
                            <div class="prd-block_info_item">
                                <img class="img-responsive lazyload d-none d-sm-block" src="{{ asset('/') }}{{ $product->productpicture1 }}" data-src="images/payment/safecheckout.webp" alt="">
                                <img class="img-responsive lazyload d-sm-none" src="{{ asset('/') }}{{ $product->productpicture1 }}" data-src="images/payment/safecheckout-m.webp" alt="">
                            </div>
                            </div>
                    </div>
                    <!--  block info  section end -->
                </div>
            </div>
        </div>
        <!--  details product section end -->
        <!-- section Use promocode FOXIC to get 15% discount! start-->
        <div class="holder prd-block_links-wrap-bg d-none d-md-block">
            <div class="prd-block_links-wrap prd-block_info_item container mt-2 mt-md-5 py-1">
                <div class="prd-block_link"><span><i class="icon-call-center"></i>24/7 Support</span></div>
                <div class="prd-block_link">
                    <span>Use promocode  FOXIC to get 15% discount!</span></div>
                <div class="prd-block_link"><span><i class="icon-delivery-truck"></i> Fast Shipping</span></div>
            </div>
        </div>
        <!-- section Use promocode FOXIC to get 15% discount! start-->
        <!-- section Description Sizing Guide Global Tab Assigned Tags Reviews start-->
        <div class="holder mt-3 mt-md-5">
            <div class="container">
                <ul class="nav nav-tabs product-tab">
                    <li class="nav-item"><a href="#Tab1" class="nav-link" data-toggle="tab">Description
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a></li>
                    <li class="nav-item"><a href="#Tab2" class="nav-link" data-toggle="tab">Sizing Guide
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a></li>
                    <li class="nav-item"><a href="#Tab3" class="nav-link" data-toggle="tab">Global Tab
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a></li>
                    <li class="nav-item"><a href="#Tab4" class="nav-link" data-toggle="tab">Assigned Tags
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a></li>
                    <li class="nav-item"><a href="#Tab5" class="nav-link" data-toggle="tab">Reviews
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="Tab1">
                        <h4 class="mb-15">Give you a complete account of the system</h4>
                        <div class="row">
                            <div class="col-18 mb-2"><p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure.</p></div>
                            <div class="col-md-12">
                                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. Nor again is there anyone who loves or pursues.</p>
                                <div class="mt-2"></div>
                                <h4>List heading</h4>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled list-smaller">
                                            <li>1. All this mistaken idea of denouncing pleasure</li>
                                            <li>2. Raising pain was born and I will give you</li>
                                            <li>3. Complete account of the system</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-9 mt-15 mt-sm-0">
                                        <ul class="list-unstyled list-smaller">
                                            <li>4. All this mistaken idea of denouncing pleasure</li>
                                            <li>5. Raising pain was born and I will give you</li>
                                            <li>6. Complete account of the system</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/product-description-02.webp" alt="" class="lazyload"></div>
                        </div>
                        <div class="row mt-2 align-items-center">
                            <div class="col-md-6"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/product-description-01.webp" alt="" class="lazyload"></div>
                            <div class="col-md-12">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
                                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Tab2">
                        <h3>Single Size Conversion</h3>
                        <table class="table table-striped">
                            <tr>
                                <th scope="row">US Sizes</th>
                                <td>6</td>
                                <td>6,5</td>
                                <td>7</td>
                                <td>7,5</td>
                                <td>8</td>
                                <td>8,5</td>
                                <td>9</td>
                                <td>9,5</td>
                                <td>10</td>
                                <td>10,5</td>
                            </tr>
                            <tr>
                                <th scope="row">Euro Sizes</th>
                                <td>39</td>
                                <td>39</td>
                                <td>40</td>
                                <td>40-41</td>
                                <td>41</td>
                                <td>41-42</td>
                                <td>42</td>
                                <td>42-43</td>
                                <td>43</td>
                                <td>43-44</td>
                            </tr>
                            <tr>
                                <th scope="row">UK Sizes</th>
                                <td>5,5</td>
                                <td>6</td>
                                <td>6,5</td>
                                <td>7</td>
                                <td>7,5</td>
                                <td>8</td>
                                <td>8,5</td>
                                <td>9</td>
                                <td>9,5</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">Inches</th>
                                <td>9.25&quot;</td>
                                <td>9.5&quot;</td>
                                <td>9.625&quot;</td>
                                <td>9.75&quot;</td>
                                <td>9.9375&quot;</td>
                                <td>10.125&quot;</td>
                                <td>10.25&quot;</td>
                                <td>10.5&quot;</td>
                                <td>10.625&quot;</td>
                                <td>10.75&quot;</td>
                            </tr>
                            <tr>
                                <th scope="row">CM</th>
                                <td>23,5</td>
                                <td>24,1</td>
                                <td>24,4</td>
                                <td>24,8</td>
                                <td>25,4</td>
                                <td>25,7</td>
                                <td>26</td>
                                <td>26,7</td>
                                <td>27</td>
                                <td>27,3</td>
                            </tr>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Tab3">
                        <h3>Take a trivial example which of us ever undertakes</h3>
                        <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but
                            because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take
                            a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
                            from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                            consequences, or one who avoids a pain that produces no resultant pleasure </p>
                        <div class="mt-3"></div>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                            born and I will give you a complete account of the system, and expound the actual teachings of the
                            great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
                            avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue
                            pleasure rationally encounter consequences that are extremely painful</p>
                        <ul class="list-marker">
                            <li>Nam liberempore</li>
                            <li>Cumsoluta nobisest</li>
                            <li>Eligendptio cumque</li>
                            <li>Nam liberempore</li>
                            <li>Cumsoluta nobisest</li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Tab4">
                        <ul class="tags-list">
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">St.Valentine’s gift</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Maxi dress</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">men accessories</a></li>
                            <li><a href="#">hand bags</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">St.Valentine’s gift</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Maxi dress</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">men accessories</a></li>
                            <li><a href="#">hand bags</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Jeans</a></li>
                        </ul>
                        <h3>Add your tag</h3>
                        <form class="form--simple" action="#">
                            <label>Tag<span class="required">*</span></label>
                            <input class="form-control form-control--sm">
                            <button class="btn btn--md">Submit Tag</button>
                            <div class="required-text">* Required Fields</div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Tab5">
                        <div id="productReviews">
                            <div class="row align-items-center">
                                <div class="col"><h2>CUSTOMER REVIEWS</h2></div>
                                <div class="col-18 col-md-auto mb-3 mb-md-0"><a href="#" class="review-write-link"><i class="icon-pencil"></i>Write review</a></div>
                            </div>
                            <div id="productReviewsBottom">
                                <div class="review-item">
                                    <div class="review-item_rating">
                                        <i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="review-item_top row align-items-center">
                                        <div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
                                        <div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
                                    </div>
                                    <div class="review-item_content">
                                        <h4>Good ball and company</h4>
                                        <p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-item_rating">
                                        <i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="review-item_top row align-items-center">
                                        <div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
                                        <div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
                                    </div>
                                    <div class="review-item_content">
                                        <h4>Good ball and company</h4>
                                        <p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-item_rating">
                                        <i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="review-item_top row align-items-center">
                                        <div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
                                        <div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
                                    </div>
                                    <div class="review-item_content">
                                        <h4>Good ball and company</h4>
                                        <p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-item_rating">
                                        <i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="review-item_top row align-items-center">
                                        <div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
                                        <div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
                                    </div>
                                    <div class="review-item_content">
                                        <h4>Good ball and company</h4>
                                        <p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-item_rating">
                                        <i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="review-item_top row align-items-center">
                                        <div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
                                        <div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
                                    </div>
                                    <div class="review-item_content">
                                        <h4>Good ball and company</h4>
                                        <p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section Description Sizing Guide Global Tab Assigned Tags Reviews start-->
        <!-- section you may also like start -->
        <div class="holder">
            <div class="container">
                <div class="title-wrap text-center">
                    <h2 class="h1-style">You may also like</h2>
                    <div class="carousel-arrows carousel-arrows--center"></div>
                </div>
                <div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2"
                        data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="#" alt="Midi Dress with Belt" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>
                                    <div class="prd-big-squared-labels">
                                    </div>
                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                    <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                                    <div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch">
                                        <i class="icon-palette"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                                        <ul>
                                            <li data-image="#"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-grey.html" alt=""></a></li>
                                            <li data-image="images/skins/fashion/products/product-06-color-2.webp"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-green.html" alt=""></a></li>
                                            <li data-image="images/skins/fashion/products/product-06-color-3.webp"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-black.html" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="#" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="#" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-06-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-06-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    <div class="prd-tag"><a href="#">Seiko</a></div>
                                    <h2 class="prd-title"><a href="product.html">Midi Dress with Belt</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>
                                    <div class="prd-action">
                                        <form action="#">
                                            <button class="btn js-prd-addtocart" data-product='{"name": "Midi Dress with Belt", "path":"#", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                    <div class="prd-price">
                                        <div class="price-new">$ 180</div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="#">
                                                <button class="btn js-prd-addtocart" data-product='{"name": "Midi Dress with Belt", "path":"#", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-1.webp" alt="Stand Collar Shirt" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>
                                    <div class="prd-big-squared-labels">
                                        <div class="label-sale"><span>-10% <span class="sale-text">Sale</span></span>
                                            <div class="countdown-circle">
                                                <div class="countdown js-countdown" data-countdown="2021/07/01"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                    <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-17-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-17-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-17-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    <div class="prd-tag"><a href="#">FOXic</a></div>
                                    <h2 class="prd-title"><a href="product.html">Stand Collar Shirt</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>
                                    <div class="prd-action">
                                        <form action="#">
                                            <button class="btn js-prd-addtocart" data-product='{"name": "Stand Collar Shirt", "path":"images/skins/fashion/products/product-17-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                    <div class="prd-price">
                                        <div class="price-old">$ 200</div>
                                        <div class="price-new">$ 180</div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="#">
                                                <button class="btn js-prd-addtocart" data-product='{"name": "Stand Collar Shirt", "path":"images/skins/fashion/products/product-17-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-1.webp" alt="Genuine Leather Strap Watch" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>
                                    <div class="prd-big-squared-labels">
                                        <div class="label-new"><span>New</span></div>
                                    </div>
                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                    <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-21-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-21-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-21-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    <div class="prd-tag"><a href="#">FOXic</a></div>
                                    <h2 class="prd-title"><a href="product.html">Genuine Leather Strap Watch</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>
                                    <div class="prd-action">
                                        <form action="#">
                                            <button class="btn js-prd-addtocart" data-product='{"name": "Genuine Leather Strap Watch", "path":"images/skins/fashion/products/product-21-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                    <div class="prd-price">
                                        <div class="price-new">$ 180</div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="#">
                                                <button class="btn js-prd-addtocart" data-product='{"name": "Genuine Leather Strap Watch", "path":"images/skins/fashion/products/product-21-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-1.webp" alt="Pureboost Running Shoes" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>
                                    <div class="prd-big-squared-labels">
                                    </div>
                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                    <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-26-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-26-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-26-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    <div class="prd-tag"><a href="#">FOXic</a></div>
                                    <h2 class="prd-title"><a href="product.html">Pureboost Running Shoes</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>
                                    <div class="prd-action">
                                        <form action="#">
                                            <button class="btn js-prd-addtocart" data-product='{"name": "Pureboost Running Shoes", "path":"images/skins/fashion/products/product-26-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                    <div class="prd-price">
                                        <div class="price-new">$ 180</div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="#">
                                                <button class="btn js-prd-addtocart" data-product='{"name": "Pureboost Running Shoes", "path":"images/skins/fashion/products/product-26-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-1.webp" alt="Multiple Pocket Waist Pack" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>
                                    <div class="prd-big-squared-labels">
                                    </div>
                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                    <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-30-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-30-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-30-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    <div class="prd-tag"><a href="#">FOXic</a></div>
                                    <h2 class="prd-title"><a href="product.html">Multiple Pocket Waist Pack</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>
                                    <div class="prd-action">
                                        <form action="#">
                                            <button class="btn js-prd-addtocart" data-product='{"name": "Multiple Pocket Waist Pack", "path":"images/skins/fashion/products/product-30-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                    <div class="prd-price">
                                        <div class="price-new">$ 180</div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="#">
                                                <button class="btn js-prd-addtocart" data-product='{"name": "Multiple Pocket Waist Pack", "path":"images/skins/fashion/products/product-30-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section you may also like end -->
    </div>
    <!-- page content send -->
@endsection
