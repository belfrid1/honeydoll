@extends("admin.layout.app")
@section("title", "ASSIGN CRITERIA")
@section('link')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css">

<!-- Bootstrap -->
{{-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/flatly/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('public/')}}/lightbox/minified/bootstrap-gallery.min.css" />
<!-- Font Awesome 5 -->
{{-- <link rel="stylesheet" href="/path/to/font-awesome/all.min.css" /> --}}
 {{-- <!-- carousel  -->
 <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
 <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> --}}
<style type="text/css">
    img {
        display: block;
        max-width: 60%;
    }
    .overview {
        overflow: hidden;
        width: 120px;
        height: 140px;
        margin: 10px;
        border: 1px solid black;
    }
    .modal-lg{
        max-width: 1000px !important;
    }
    .splide__slide img {
	width : 100%;
	height: auto;
    }


</style>
@endsection
@section("content")
<!------------------------------------- admin assign criteria start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Assign Criteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Assign Criteria</li>
                    </ol>
                </div>
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
            @if(session('warning'))
            <div class="alert alert-warning">
                {{ session('warning') }}
            </div>
            @endif
        </div>
    </div>
    <!------------------------------------- content section header end -------------------------------------->

    <!------------------------------------- content section body start ----------------------------------->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!------------------------------------- product info section end ------------------------->
                        <div class="clearfix"><br></div>
                        <div class="row">
                            <h3 class="col-lg-12 text-center">Criterias</h3>
                        </div>
                         <!------------------------------------- gender info  start ---------------------------->
                         <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center mt-2">
                                <!-------------------- Female/Male  tab start -------------------->
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary active mr-2">
                                        <i class="fas fa-female"></i>
                                        <input type="radio" value="2" name="criteriagender" autocomplete="off"> Female
                                    </label>
                                    <label class="btn btn-primary">
                                        <i class="fas fa-male"></i>
                                        <input type="radio" value="1" name="criteriagender" autocomplete="off"> Male
                                    </label>
                                </div>
                                <!-------------------- Female /Male  tab end -------------------->
                            </div>
                        </div>
                        <!------------------------------------- gender info end ------------------------------->
                        <div class="clearfix"><br></div><div class="col-md-6">
                            <select class="form-control" name="shopname" id="shopname_select">
                                <option value="" disabled selected >Select Criteria</option>
                                @isset($criteriaSelected)
                                <option value="{{ $criteriaSelected->id }}"  selected >{{ $criteriaSelected->criteria_name}}</option>
                                @endisset

                                @foreach ($criterias as $criteria)
                                    <option value="{{ $criteria->id }}" >{{ $criteria->criteria_name}} </option>
                                @endforeach
                                </select>
                        </div>
                        <div class="clearfix"><br></div>
                        <!-------------------------------------list choice start -------------------------------------->
                        @isset($choices)
                            <div class="row">
                                <h3 class="col-lg-12 text-center">Criteria Name : {{ $criteriaSelected->criteria_name }} ({{count($choices)}} Choice(s))</h3>
                            </div>
                            <div class="row list_choice">
                                @foreach ($choices as $choice)
                                <!------------------------------------- choice info start -------------------------------------->
                                <div class="col-lg-3">
                                    <div class="row mb-2">
                                        <!------------------ Choice name button start -------------->
                                        <div class="col-lg-12 text-center">
                                            <label class="btn btn-outline-primary active">
                                                <input type="radio" id="btn_choice1" value="{{ $choice->id}}" name="choice_assigned" autocomplete="off"> {{ $choice->choice_name}}
                                            </label>
                                            {{-- <button type="checkbox" id="btn_choice1" class="btn btn-outline-primary">{{ $choice->choice_name}} </button> --}}
                                        </div>
                                        <!------------------ Choice name button end -------------->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <div class="card card-secondary card-outline">
                                                <div class="card-body box-profile">
                                                    <div class="text-center">
                                                        <a href="{{asset('/')}}{{ $choice->choice_picture }}" class="thumbnail">
                                                            <img class="profile-user-img img-fluid img-circle"
                                                        src="{{asset('/')}}{{ $choice->choice_picture }}" alt="Choice Picture" title="Choice Picture">
                                                        </a>

                                                    </div>
                                                    {{-- <h6 class="text-center">Choice Picture</h6> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!------------------------------------- choice info end -------------------------------------->
                                @endforeach
                            </div>
                        @endisset


                        <!------------------------------------- new product info section start -------------------->
                        <span> <h1>List product: @isset($nbproducts) {{ $nbproducts}} product(s) found @endisset </h1></span>

                            <!-- Default box -->


                        <!------------------------------------- new product info section start -------------------->
                        <!------------------------------------- product info section start -------------------->
                        <div class="clearfix"><br></div>
                        <div class="row">
                            <div class="col-lg-10 offset-1">
                                <div class="card">
                                    <div class="splide">
                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                @isset($products)
                                                    @foreach ($products as  $product)
                                                        @if($product->productmenu == "menu_mainproduct")
                                                            <li class="splide__slide">
                                                                <!-------- product box start ---------->
                                                                {{-- <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p class="lead">Product info</p>
                                                                        <label class="btn btn-primary active mr-2">
                                                                            <input type="radio" value="1" name="product" autocomplete="off"> select this product
                                                                        </label>
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                            <tr>
                                                                                <th style="width:50%">Product Name :</th>
                                                                                <td>{{$product->productname}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Shop Name </th>
                                                                                <td>{{$product->shop->shopname}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Product Price:</th>
                                                                                <td>{{$product->productprice}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Commission amount :</th>
                                                                                <td>$265.24</td>
                                                                            </tr>
                                                                            </table>
                                                                        </div>
                                                                        <div class="clearfix"><br></div>

                                                                            <div class="row">
                                                                                <u class="col-lg-12"><a href="{{$product->producturl}}">Product Url : {{$product->producturl}}</a></u>
                                                                            </div>
                                                                            <div class="clearfix"><br></div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <!------------------------ overview view of pictures ----------------->
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div class="text-center">
                                                                                    <img class="overview"
                                                                                    src="{{ asset('/') }}{{$product->productpicture1}}"
                                                                                    alt="Main Product Picture 1" title="Main Product Picture 1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-center">
                                                                                    <img class="overview"
                                                                                    src="{{ asset('/') }}{{$product->productpicture2}}"
                                                                                    alt="Main Product Picture 1" title="Main Product Picture 1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-center">
                                                                                    <img class="overview"
                                                                                    src="{{ asset('/') }}{{$product->productpicture3}}"
                                                                                    alt="Main Product Picture 1" title="Main Product Picture 1">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!------------------------ overview view of pictures ----------------->
                                                                    </div>
                                                                </div> --}}
                                                                <!-------- product box end  ---------->


                                                                <label class="btn btn-primary active mr-2">
                                                                    <input type="radio" value="{{$product->id}}" name="product" autocomplete="off"> select this product
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-lg-3"><u>Product Name</u>: {{$product->productname}} </div>
                                                                    <div class="col-lg-3"><u>Shop Name</u>: {{$product->shop->shopname}}</div>
                                                                    <div class="col-lg-3"><u>Commission Rate</u>: {{$product->shop->commissionrate}}</div>
                                                                    <div class="col-lg-3"><u>Price</u>: $ {{$product->productprice}} </div>
                                                                    <div class="col-lg-3"><u>Commission Amount</u>:  $ {{ $product->commission_amount }}</div>
                                                                </div>
                                                                <div class="clearfix"><br></div>
                                                                <div class="row">
                                                                    <!-------------------- Main Product Picture 1 start -------------------->
                                                                    <div class="col-lg-4">
                                                                        <div class="text-center">
                                                                            <img class="overview"
                                                                            src="{{ asset('/') }}{{$product->productpicture1}}"
                                                                            alt="Main Product Picture 1" title="Main Product Picture 1">
                                                                        </div>
                                                                    </div>
                                                                    <!-------------------- Main Product Picture 1 end -------------------->
                                                                    <!-------------------- Main Product Picture 2 start -------------------->
                                                                    <div class="col-lg-4">
                                                                        <div class="text-center">
                                                                            <img class="overview"
                                                                            src="{{ asset('/') }}{{$product->productpicture2}}"
                                                                            alt="Main Product Picture 2" title="Main Product Picture 2">
                                                                        </div>
                                                                    </div>
                                                                    <!-------------------- Main Product Picture 2 end -------------------->
                                                                    <!-------------------- Main Product Picture 3 start -------------------->
                                                                    <div class="col-lg-4">
                                                                        <div class="text-center">
                                                                            <img class="overview"
                                                                            src="{{ asset('/') }}{{$product->productpicture3}}"
                                                                            alt="Main Product Picture 3" title="Main Product Picture 3">
                                                                        </div>
                                                                    </div>
                                                                    <!-------------------- Main Product Picture 3 end -------------------->
                                                                </div>
                                                                <div class="row">
                                                                    <u class="col-lg-12 text-center"><a href="{{$product->producturl}}" target="blank">Product Url : {{$product->producturl}}</a></u>
                                                                </div>
                                                                <br>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </ul>
 <!-- /.card-body -->
 <div class="card-footer">
    @isset($products)
        {{ $products->links() }}
    @endisset
    {{-- <nav aria-label="Contacts Page Navigation">
        <ul class="pagination justify-content-center m-0">
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">7</a></li>
        <li class="page-item"><a class="page-link" href="#">8</a></li>
        </ul>
    </nav> --}}
</div>
<!-- /.card-footer -->
</div>
<!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!------------------------------------- list choice end -------------------------------------->
                        {{-- <div class="row">
                                <!----------------------- Previous button start --------------------->
                                <div class="form-group">
                                <button type="button" class="btn btn-secondary">Previous</button>
                            </div>
                            <!----------------------- Previous button end --------------------->
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------- content page body end -------------------------------------->
<!------------------------------------- admin assign criteria end -------------------------------------->
@endsection
@section('inpagejs')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
<!-- Bootstrap -->
{{-- <script src="/path/to/cdn/jquery.slim.min.js"></script> --}}
{{-- <script src="/path/to/cdn/bootstrap.bundle.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
{{-- <script src="../minified/bootstrap-gallery.min.js"></script> --}}

<script src="{{asset('public/')}}/lightbox/minified/bootstrap-gallery.min.js"></script>
<script>
    $('input[type=radio][name=criteriagender]').change(function() {
            window.location.href = "admin-assign-criteria?gender=" + this.value;
        });
        $(document).ready(function() {
            if ({{ $gender }} === 1) {
                $("input:radio[value='1'][name='criteriagender']").prop('checked', true);
            } else if ({{ $gender }} === 2) {
                $("input:radio[value='2'][name='criteriagender']").prop('checked', true);
            }
        });
	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide('.splide').mount();
	});

    //Second call for change event
    $("input[name='choice_assigned']").change( function(){
        gender = document.querySelector('input[name="criteriagender"]:checked').value;//get gender selected
        productchecked = document.querySelector('input[name="product"]:checked');//get product selected
        if(productchecked !== null){
            var criteriaId = $("#shopname_select :selected").val();
            productid = productchecked.value;
            roductid = productchecked.value;
            choice_assigned_id_value = document.querySelector('input[name="choice_assigned"]:checked').value;//get choice selected
            window.location.href = "admin-assign-criteria-assign?gender=" + gender + "&productid=" + productid + "&choice_assigned_id_value=" + choice_assigned_id_value + "&criteriaId=" + criteriaId;
        }else {
            alert("Please choose a product.");
            $('input[name=choice_assigned]').prop("checked",false);
        }
    });
</script>

<script>
    $('#shopname_select').on('change', function(e) {
        var criteriaId = $("#shopname_select :selected").val();
        window.location.href = "admin-assign-criteria-select?criteriaId=" + criteriaId;
    });
</script>

@endsection
