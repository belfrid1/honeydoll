@extends("front.layouts.app")
@section("title", "SEX DOLL SHOPS")
@section('description')
    <meta name="description" content="+1000 sex dolls in stock,  buy tpe or silicone love doll on our store, highest quality materials worlwide discreet shipping. We offer the best choices from every brands retailer. Robot sex doll, Big ass, skinny, bbw, small or big tits, brunette, asian, japanese, brazilian, indian, latina, ebony, realistic pussy.">
@endsection
@section('content')
<div class="page-content">
<!------------------------------------- Shop list start-------------------------------------->

    <div class="holder">
        <div class="container">
            <div class="title-wrap text-center"><h2 class="h1-style">Shop List</h2>
                <div class="h-sub maxW-825">All Shops name & pictures with url.</div>
            </div>
            <!----------------------- The picture should be fetched in shop menu in front end ------------------>
            <div class="prd-grid-wrap position-relative">
                <div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                    <!------- The picture should be fetched in shop menu in frontend start ------->
                    @foreach($shops as $shop)
                    <!--put 4 pictures per line. The picture should be fetched from add a new shop menu in admin-->
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="{{ $shop->shopurl }}" class="prd-img image-hover-scale image-container" target="_blank">
                                <!------------------ shop picture starts ---------------->
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset($shop->shoppicture) }}" alt="{{ $shop->shopname }}" class="js-prd-img lazyload fade-up"
                                    style="height: 450px; max-height: 450px; max-width: 300px; width: 300px;">
                                <!------------------ shop picture ends ---------------->
                                </a>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                <!------------------ shop name starts ---------------->
                                    <h2 class="prd-title">
                                        <a href="{{ $shop->shopurl }}" target="_blank">
                                            {{ $shop->shopname }}<!--when client click on the shop name, he will be redirected to the shop, URL-->
                                        </a>
                                    </h2>
                                <!------------------ shop name ends ---------------->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!------- The picture should be fetched in shop menu in frontend end ------->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
<!------------------------------------- Shop list end -------------------------------------->
