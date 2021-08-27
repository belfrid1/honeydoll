@extends("admin.layout.app")
@section("title", "GROUP PRODUCTS LIST")
@section("content")
<!------------------------------------- admin shop start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('Group Products List Table') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('Admin') }}</a></li>
                        <li class="breadcrumb-item">{{__('Group Product')}}</li>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $g_products as $g_product )
                                    <tr>
                                        <td> {{  $g_product->group }} </td>
                                        <td> {{  $g_product->shop }} </td>
                                        <td> {{  $g_product->commissionrate }}  </td>
                                        <td> {{  $g_product->productname }} </td>
                                        <td> {{  $g_product->productprice }} </td>
                                        <td> <a href="{{  $g_product->producturl }}" target="_blank">Visit Url</a> </td>
                                        <td>
                                            <img src="{{ asset($g_product->productpicture1) }}" alt="{{ $g_product->productpicture1 }}" title="{{ $g_product->productname }}" height="75px" width="">
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
@endsection
