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
        max-width: 1000px !important;
    }
    /* size fixed for column start*/
    .comratecol{
    width: 45px;
    overflow: hidden;
    }
    .prdnamecol{
    width: 400px;
    overflow: hidden;
    }
    .comamtcol{
    width: 85px;
    overflow: hidden;
    }
    .prdpricecol{
    width: 100px;
    overflow: hidden;
    }
    .shopnamecol{
    width: 150px;
    overflow: hidden;
    }
    .pagecol{
    width: 210px;
    overflow: hidden;
    }
    /* size fixed for column end*/

    .card {
        width: 1250px;
        position: relative;
        left: -70px;
       }
       table {
        width:200px;
        table-layout:fixed;

        }
        td {
            word-wrap:break-word;
        }


</style>
{{-- shop name dropdown link start  --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
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
            <h1 class="m-0">List Product</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Product</li>
                <li class="breadcrumb-item active">List</li>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">List Product Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table id="myTable" class="table">
                            <thead>
                              <tr>
                                <th class="">Shop Name</th>
                                <th class="">Com. Rate</th>
                                <th class="prdnamecol">Product Name</th>
                                 <th class="">Product Price</th>
                                <th class="">Com. Amount</th>
                                <th class="">Page</th>
                                <th >Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ( $products as $product )
                                <tr>
                                    <td class=""> {{  $product->shop->shopname }}
                                     <br> {{  $product->shop->affliatecode }} </td>
                                    <td  class="comratecol"> {{  $product->shop->commissionrate }}  </td>
                                    <td class="prdnamecol"> {{  $product->productname }}
                                        <br>  (<a href="{{  $product->shop->shopurl}}" target="_blank">{{  $product->producturl}}</a>) </td>
                                     <td class=""> $ {{  $product->productprice }}  </td>

                                     <td class=""> {{  $product->commission_amount }}  </td>
                                    <td class=""> {{  $product->productmenu }}  </td>
                                    {{-- <td><button class="badge bg-warning"><i class="fas fa-edit"></i>Edit</button></td>
                                    <td><button class="badge bg-info"><i class="fas fa-eye"></i>Show</button></td> --}}
                                    <td  >
                                        <div class="btn-group">
                                             <!----------------- Edit product button start --------->

                                             <button class="btn badge bg-primary m-1 show" type="button"><i class="fas fa-edit"></i><a href="{{ route('admin.product.edit',$product->id) }}"> Edit</a></button>
                                            <!------- When admin click on edit shop button, you will be able to edit the shop information ----->

                                        {{-- <a href="" class="btn badge bg-primary m-1 " data-toggle="modal" data-target="#modal-edit-product" value="{{ $product->id }}"> <i class="fas fa-edit"></i> Edit</a> --}}
                                        <button class="btn badge bg-warning m-1 show" type="button" data-toggle="modal" data-target="#modal-show" value="{{ $product->id }}">
                                            <i class="fas fa-eye"></i>
                                         </button>
                                        <!----------------- Edit product button end ---------->
                                        <!----------------- Delete product button start ------>
                                        <a href="{{ route('admin.product.delete',$product->id) }} " class="btn badge bg-danger m-1 btn-danger"> <i class="fas fa-trash"> </i></a>
                                          </div>

                                        <!-----------------Delete product button end ---------->
                                            {{-- <button class=" EDITH" type="button" data-toggle="modal" data-target="#modal-edit" value="2"> --}}
                                            {{-- </button>
                                            <a href="{{ route('admin.shop.delete', ['id' =>2 ]) }}" onclick="return confirm('are you sure you want to delete this shop ?')" class="btn btn-outline-danger btn-sm"></a> --}}

                                    </td>
                                  </tr>

                                @endforeach

                            </tbody>
                          </table>
                          <!-- modal show product start   -->
                          <div class="modal fade" id="modal-show">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Detail Product( Created at:@isset($product){{ $product->created_at }} @endisset </h4>
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
                                                <label for="editaffliatecode">Menu </label>
                                                <input type="text"  class="form-control menu" id=""  disabled>
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
                                                <label for="commission amount">Commission amount</label>
                                                <input type="text"   class="form-control commissionamount" id="" disabled>
                                            </div>
                                            <div class="col-md-6">
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
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<!-- js code to show detail product start -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.show').on('click', function () {
            var id = $(this).val();
            console.log(id);
            $.ajax({
                type: "GET",
                url: "{{ route('admin.product.show') }}",
                data: { id : id },
                success: function (response) {
                    console.log("response");
                    $('.shopname').val(response.shop.shopname);
                    $('.menu').val(response.productmenu);
                    $('.commissionamount').val(response.commission_amount);
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
    });
</script>


<!-- warnning deleting product start -->
<script type="text/javascript" >

    // js code for alert to confim background deleting
    //cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js
    $(document).ready( function () {
    $('#myTable').DataTable();
        } );

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
<!------ datatables script ----->

@endsection
