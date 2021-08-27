@extends("admin.layout.app")
@section("title", "GROUP PRODUCTS LIST")
@section("content")
<!------------------------------------- admin shop start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('Group Products List') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('Admin') }}</a></li>
                        <li class="breadcrumb-item">{{__('Group Products')}}</li>
                        <li class="breadcrumb-item active">{{__('List')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------- content section header end -------------------------------------->
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('success') }}
            </div>
        @elseif(session('warning'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('warning') }}
            </div>
        @elseif(session('danger'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('danger') }}
            </div>
        @endif
    </div>
    <!------------------------------------- content section body start -------------------------------------->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table id="example2" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Group Name</th>
                                        <th>Shop Name</th>
                                        <th>Commission Rate</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Url</th>
                                        <th>Product Picture</th>
                                        <th>Products</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $g_products as $g_product )
                                    <tr>
                                        <td> {{  $g_product->name }} </td>
                                        <td> {{  $g_product->shopname }} </td>
                                        <td> {{  $g_product->commissionrate }}  </td>
                                        <td> {{  $g_product->productname }} </td>
                                        <td> {{  $g_product->productprice }} </td>
                                        <td> <a href="{{  $g_product->producturl }}" target="_blank">Visit Url</a> </td>
                                        <td>
                                            <img src="{{ asset($g_product->productpicture1) }}" alt="{{ $g_product->productname }}" title="{{ $g_product->productname }}" height="75px" width="">
                                        </td>
                                        <td>
                                            <button class="btn badge bg-info VGAP" data-id="{{  $g_product->name }}" type="button" data-toggle="modal" value="{{  $g_product->id }}" data-target="#view-modal-show"><i class="fas fa-eye"></i> View</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------- content page body end -------------------------------------->
<!------------------------------------- admin shop end -------------------------------------->
<!--------------------- Group Products View Modal start ---------------------->
    <div class="modal fade" id="view-modal-show">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><span class="groupname"></span> - Products</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped" id="GAPT">
                            <thead>
                                <tr>
                                    <th>Shop Name</th>
                                    <th>Commission Rate</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Url</th>
                                    <th>Product Picture</th>
                                </tr>
                            </thead>
                            <tbody id="GAPTB"></tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="GAPR">Close</button>
                </div>
            </div>
        </div>
    </div>
<!--------------------- Group Products View Modal start ---------------------->
@endsection
@section("inpagejs")
    <script type="text/javascript">
        $(document).ready(function(){
            $(".VGAP").on("click", function () {
                //alert('ok');
                var id = $(this).val();
                var name = $(this).data("id");
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.group.products.view') }}",
                    data: { id : id },
                    success: function (data) {
                        $(".groupname").html(name);
                        $("#GAPT > tbody").empty();
                        $.each(data, function(index, view){
                            var details = "<tr><td>" + view.shop + "</td><td>" + view.commissionrate + "</td><td>" + view.productname + "</td><td>" + view.productprice + "</td><td><a href=" + view.producturl + " target='_blank'>Visit Url</a></td><td><img src=" + view.productpicture1 + " alt=" + view.productname + " height='75px;'></td></tr>";
                            $("#GAPT > tbody").append(details);
                        });
                    }
                });
            });
        });
    </script>
@endsection
