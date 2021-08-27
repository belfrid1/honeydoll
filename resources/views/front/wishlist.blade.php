@extends("front.layouts.app")
<!------------------------------------- wishlist page content start-------------------------------------->
@section('content')
<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="index-2.html">Home</a></li>
				<li><span>My account</span></li>
			</ul>
		</div>
	</div>
	<div class="holder">
	<div class="container">
		<div class="row">
			<div class="col-md-4 aside aside--left">
				<div class="list-group">
					<a href="account-details.html" class="list-group-item">Account Details</a>
					<a href="account-addresses.html" class="list-group-item">My Addresses</a>
					<a href="account-wishlist.html" class="list-group-item active">My Wishlist</a>
					<a href="account-history.html" class="list-group-item">My Order History</a>
					<a href="#" class="list-group-item disabled">My Reviews</a>
					<a href="#" class="list-group-item disabled">My Saved Tags</a>
					<a href="#" class="list-group-item disabled">Compare Products</a>
				</div>
			</div>
			<div class="col-md-14 aside">
				<h1 class="mb-3">My Wishlist</h1>
				<div class="empty-wishlist js-empty-wishlist text-center py-3 py-sm-5 d-none" style="opacity: 0;">
					<h3>Your Wishlist is empty</h3>
					<div class="mt-5">
						<a href="index-2.html" class="btn">Continue shopping</a>
					</div>
				</div>
				<div class="prd-grid-wrap position-relative">
					<div class="prd-grid prd-grid--wishlist data-to-show-3 data-to-show-lg-3 data-to-show-md-2 data-to-show-sm-2 data-to-show-xs-1">
						<div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-04-1.webp" alt="Suede Leather Mini Skirt" class="js-prd-img lazyload fade-up">
				<div class="foxic-loader"></div>
				<div class="prd-big-squared-labels">
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="images/skins/fashion/products/product-04-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-04-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-04-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-04-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-04-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-04-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">Bigsteps</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">Bigsteps</a></div>
				<h2 class="prd-title"><a href="product.html">Suede Leather Mini Skirt</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-11-1.webp" alt="Jogger Lounge Pants" class="js-prd-img lazyload fade-up">
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
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="images/skins/fashion/products/product-11-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-11-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-11-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-11-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-11-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-11-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">FOXic</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">FOXic</a></div>
				<h2 class="prd-title"><a href="product.html">Jogger Lounge Pants</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old">$ 200</div>
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-15-1.webp" alt="Stand Up Collar Shirt" class="js-prd-img lazyload fade-up">
				<div class="foxic-loader"></div>
				<div class="prd-big-squared-labels">
					<div class="label-new"><span>New</span></div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="images/skins/fashion/products/product-15-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-15-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-15-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-15-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-15-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-15-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">FOXic</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">FOXic</a></div>
				<h2 class="prd-title"><a href="product.html">Stand Up Collar Shirt</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-16-1.webp" alt="Cascade Casual Shirt" class="js-prd-img lazyload fade-up">
				<div class="foxic-loader"></div>
				<div class="prd-big-squared-labels">
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
				<div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch">
					<i class="icon-palette"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
					<ul>
						<li data-image="images/skins/fashion/products/product-16-1.webp"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-grey.html" alt=""></a></li>
						<li data-image="images/skins/fashion/products/product-16-color-2.webp"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-green.html" alt=""></a></li>
						<li data-image="images/skins/fashion/products/product-16-color-3.webp"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-black.html" alt=""></a></li>
					</ul>
				</div>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="images/skins/fashion/products/product-16-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-16-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-16-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-16-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-16-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-16-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">FOXic</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">FOXic</a></div>
				<h2 class="prd-title"><a href="product.html">Cascade Casual Shirt</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
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
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
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
					<div class="prd-tag"><a href="#">FOXic</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">FOXic</a></div>
				<h2 class="prd-title"><a href="product.html">Stand Collar Shirt</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old">$ 200</div>
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-22-1.webp" alt="Watch with Black Leather Strap" class="js-prd-img lazyload fade-up">
				<div class="foxic-loader"></div>
				<div class="prd-big-squared-labels">
					<div class="label-new"><span>New</span></div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="images/skins/fashion/products/product-22-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-22-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-22-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-22-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-22-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-22-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">FOXic</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">FOXic</a></div>
				<h2 class="prd-title"><a href="product.html">Watch with Black Leather Strap</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-23-1.webp" alt="Combined Chunky Sneakers" class="js-prd-img lazyload fade-up">
				<div class="foxic-loader"></div>
				<div class="prd-big-squared-labels">
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="images/skins/fashion/products/product-23-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-23-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-23-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-23-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-23-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-23-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">FOXic</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">FOXic</a></div>
				<h2 class="prd-title"><a href="product.html">Combined Chunky Sneakers</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-24-1.webp" alt="Lace up Fashion Sneaker" class="js-prd-img lazyload fade-up">
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
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="images/skins/fashion/products/product-24-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-24-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-24-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-24-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-24-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-24-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">FOXic</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">FOXic</a></div>
				<h2 class="prd-title"><a href="product.html">Lace up Fashion Sneaker</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old">$ 200</div>
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-25-1.webp" alt="Fashion Waist Bag" class="js-prd-img lazyload fade-up">
				<div class="foxic-loader"></div>
				<div class="prd-big-squared-labels">
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="images/skins/fashion/products/product-25-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-25-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-25-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-25-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="images/skins/fashion/products/product-25-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-25-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">FOXic</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">FOXic</a></div>
				<h2 class="prd-title"><a href="product.html">Fashion Waist Bag</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new">$ 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn">View Full Info</button>
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
		</div>
	</div>
	</div>
</div>
@endsection
<!------------------------------------- wishlist page content end-------------------------------------->

