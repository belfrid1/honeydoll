@extends("admin.layout.app")
@section("title", "PRODUCT")
@section("link")

<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- section picture preview design --}}
<style type="text/css">
    img {
        display: block;
        max-width: 100%;
    }
    .overview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid black;
    }
    .modal-lg{
        max-width: 800px !important;
    }


</style>
{{-- shop name dropdown link start  --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    h2 {
        color: white;
    }
</style>
{{--  shop name dropdown link end --}}


@endsection
@section("content")
<!------------------------------------- admin shop start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Product Assigned</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Product</li>
                <li class="breadcrumb-item active">assigned</li>
            </ol>
            </div>
        </div>
        </div>
    </div>
    <!------------------------------------- content section header end -------------------------------------->
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
    <!------------------------------------- content section body start -------------------------------------->
    <section class="content">
        <div class="container">
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
            <div class="clearfix"><br></div>
            <!------------------------------------- gender info end ------------------------------->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">List Product Assigned</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Shop Name</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Page</th>
                                <th>Choice name</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ( $products as $product )
                                <tr>
                                    <td> {{  $product->shop->shopname }} </td>
                                    <td> {{  $product->productname }} </td>
                                    <td>$ {{  $product->productprice }}  </td>
                                    <td> {{  $product->productmenu }}  </td>
                                    <td >{{  $product->choice->choice_name }} </td>
                                    <td>
                                        <button class="badge bg-info show" data-toggle="modal" data-target="#modal-show" value="{{ $product->id }}"><i class="fas fa-eye"></i>Details</button></td>
                                  </tr>

                                @endforeach

                            </tbody>
                          </table>
                          <!-- modal show product start   -->
                          <div class="modal fade" id="modal-show">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Detail Product ( Created at:@isset($product){{ $product->created_at }} @endisset )</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input name="id" class="id" value="" type="hidden">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Shop Name</label>
                                                <input type="text"  class="form-control shopname" id=""  disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="editaffliatecode">Choice Name </label>
                                                <input type="text"  class="form-control choicename" id=""  disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="editcommissionrate">Product Name</label>
                                                <input type="text"  class="form-control productname" id=""  disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="editshopurl">Gender</label>
                                                <input type="text"   class="form-control gender" id="" disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="editshopurl">Price</label>
                                                <input type="text"   class="form-control price" id="" disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="editshopurl">Previous Price</label>
                                                <input type="text"   class="form-control previousprice" id="" disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="editshopurl">Product Url</label>
                                                <input type="text"   class="form-control producturl" id="" disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="editaffliatecode">Menu </label>
                                                <input type="text"  class="form-control menu" id=""  disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="commissionAmount">Commission Amount </label>
                                                <input type="text"  class="form-control commissionamount" id=""  disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="text-center">
                                                            <img class="productpicture1 overview" src="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="text-center">
                                                            <img class="productpicture2 overview" src="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="text-center">
                                                            <img class="productpicture3 overview" src="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                          <!-- modal show product  end -->
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------- content page body end -------------------------------------->
<!------------------------------------- admin product end -------------------------------------->
@endsection
@section("inpagejs")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>


<!-- js code to show detail product start -->
<script type="text/javascript">

    $('input[type=radio][name=criteriagender]').change(function() {
                window.location.href = "admin-product-assigned?gender=" + this.value;
            });
            $(document).ready(function() {
                if ({{ $gender }} === 1) {
                    $("input:radio[value='1'][name='criteriagender']").prop('checked', true);
                } else if ({{ $gender }} === 2) {
                    $("input:radio[value='2'][name='criteriagender']").prop('checked', true);
                }
            });

    $('.show').on('click', function () {
        var id = $(this).val();
        console.log(id);
        $.ajax({
            type: "GET",
            url: "{{ route('admin.product.show') }}",
            data: { id : id },
            success: function (response) {
                console.log(response);
                $('.shopname').val(response.shop.shopname);
                $('.choicename').val(response.choice.choice_name);
                $('.commissionamount').val(response.commission_amount);
                $('.menu').val(response.productmenu);
                $('.gender').val(response.productgender);
                $('.productname').val(response.productname);
                $('.producturl').val(response.producturl);
                $('.price').val(response.productprice);
                $('.previousprice').val(response.previousprice);
                $('.productpicture1').attr('src', response.productpicture1);
                $('.productpicture2').attr('src', response.productpicture2);
                $('.productpicture3').attr('src', response.productpicture3);
            }
        });
    });
</script>


<!-- warnning deleting product start -->
<script type="text/javascript" >

    // js code for alert to confim background deleting

    $(document).ready(function() {
    $(".btn-danger").click(function(event) {
        if( !confirm('Are you sure that you want to delete this product') )
            event.preventDefault();
    });
});
</script>

<!-- warnning deleting product end -->
<!------ js code for edit product info start----->

<!------ js code for edit product info start----->
@endsection
