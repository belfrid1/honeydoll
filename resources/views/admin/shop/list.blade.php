@extends("admin.layout.app")
@section("title", "SHOPS LIST")
@section("content")
<!------------------------------------- admin shop start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('Shop List Table') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('Admin') }}</a></li>
                        <li class="breadcrumb-item active">{{__('Shop List')}}</li>
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
                        <div class="card-body">
                            <table id="example2" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Shop Name</th>
                                        <th>Affliate Code</th>
                                        <th>Commission Rate</th>
                                        <th>Shop Url</th>
                                        <th>Picture</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $shops as $shop )
                                    <tr>
                                        <td> {{  $shop->shopname }} </td>
                                        <td> {{  $shop->affliatecode }} </td>
                                        <td> {{  $shop->commissionrate }}  </td>
                                        <td> <a href="{{  $shop->shopurl }}" target="_blank">Visit Url</a>  </td>
                                        <td>
                                            <img src="{{ asset($shop->shoppicture) }}" alt="{{ $shop->shopname }}" title="{{ $shop->shopname }}" height="75px" width="">
                                        </td>
                                        <td>
                                            <!----------------- Delete shop button end ---------->
                                            <a href="{{ route('admin.shop.delete', ['id' => $shop->id ]) }}" onclick="return confirm('are you sure you want to delete this shop ?')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                            <!-----------------Delete shop button end ---------->
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
