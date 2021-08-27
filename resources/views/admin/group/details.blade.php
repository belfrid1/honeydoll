@extends("admin.layout.app")
@section("title", "GROUP PRODUCTS")
@section("content")
<!------------------------------------- admin Group Products start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('Group Products') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('Admin') }}</a></li>
                        <li class="breadcrumb-item active">{{__('Group Products')}}</li>
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
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <!-------------------- Female/Male  tab start -------------------->
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary active mr-2">
                                <i class="fas fa-female"></i>
                                <input type="radio" value="2" name="gender" autocomplete="off"> {{__('Female')}}
                            </label>
                            <label class="btn btn-primary">
                                <i class="fas fa-male"></i>
                                <input type="radio" value="1" name="gender" autocomplete="off"> {{__('Male')}}
                            </label>
                        </div>
                        <!-------------------- Female /Male  tab end -------------------->
                    </div>
                </div>
                <div class="clearfix"><hr></div>
                <div class="row">
                    <div class="container">
                        <!--------------- create a new Group button start ------------->
                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modal-add">
                            {{__('Create a New Group') }}
                        <!--When admin click on create a new Group button it should open the Group adding field-->
                        </button>
                        <!--------------- create a new Group button end ------------->
                    </div>
                </div>
                <div class="clearfix"><br></div>
                <div class="row">
                    <div class="container">
                        <form action="{{ route('admin.group.product.store') }}" method="POST"> @csrf
                            <div class="form-group row justify-content-center">
                                <div class="col-lg-5">
                                    <select class="form-control select2bs4 group_name" name="group" data-placeholder="Choose Group" required>
                                        <option value="">{{__('Choose Group') }}</option>
                                        @foreach ($groups as $group)
                                        <option value="{{ $group->id }}" {{ $group->id == $group_id ? 'selected' : '' }}>{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="content pb-2" style="overflow: auto; white-space: nowrap;">
                                <div class="container-fluid" style="display: inline-block;">
                                    @forelse ($d_products as $product)
                                    <div class="col-3 btn btn-outline-secondary text-center">
                                        <a href="{{ route('admin.group.product.delete',['id'=>$product->did]) }}" class="float-right"><i class="fas fa-times-circle btn-outline-danger"></i></a>
                                        <h6 class="text-left">{{ $product->productname }}</h6>
                                        <input type="hidden" name="proid" value="{{ $product->id }}">
                                        <h6 class="text-left">$ {{ $product->commissionrate }}</h6>
                                        <img src="{{ asset($product->productpicture1) }}" alt="{{ $product->productname }}" title="{{ $product->productname }}" height="75px" width="">
                                        <h6 class="text-center">{{ $product->shopname }}</h6>
                                        <h6 class="text-center">$ {{ $product->productprice }}</h6>
                                        <h6 class="text-center"><a href="{{ $product->producturl }}" target="_blank">{{__('Product URL') }}</a></h6>
                                    </div>
                                    @empty
                                    <div class="col-3 btn btn-outline-secondary text-center px-4 py-3">
                                        <h2 class="text-center">{{__('No Product') }} <br>{{__('Selected Yet') }}</h2>
                                        <img src="{{ asset('public/assets/product/default/default.png') }}" alt="{{__('Product Name') }}" title="{{__('Product Name') }}" height="100px" width="">
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                {{-- <a href="{{ route('admin.group.product.destroy') }}" class="btn btn-warning float-left" type="clear" onclick="return confirm('are you sure you want to clear all this products from adding to groups ?')" >{{__('All Clear') }}</a> --}}
                                {{-- <button class="btn btn-success float-right px-5" type="submit">{{__('Update') }}</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clearfix"><hr></div>
                <div class="row">
                    <div class="container">
                        <div style="overflow: auto; height: 200px;">
                            @foreach ($criteria as $crite)
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="row justify-content-center">
                                            <span class="col-10 text-left">{{ $crite->criteria_name }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 row">
                                        @foreach ($crite->choices as $choice)
                                            <button type="button" value="{{ $choice->id }}" class="choice_id col-4 btn btn-outline-primary btn-sm">{{ $choice->choice_name }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="clearfix"><hr></div>
                <div class="row">
                    <div class="container">
                        <div class="content pb-2" style="overflow: auto; white-space: nowrap;">
                            <div class="container-fluid" style="display: inline-block;">
                                @forelse ($g_products as $product)
                                <a href="{{ route('admin.group.product.details',['id'=>$product->id]) }}">
                                    <button class="col-3 btn btn-outline-secondary text-center">
                                        <h5 class="text-center"><b>{{ $product->groupname }}</b></h5>
                                        <h6 class="text-left">{{ $product->productname }}</h6>
                                        <h6 class="text-left">$ {{ $product->commissionrate }}</h6>
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <img class="" src="{{ asset($product->productpicture1) }}" alt="{{ $product->productname }}" title="{{ $product->productname }}" height="75px" width="">
                                        <h6 class="text-center">{{ $product->shopname }}</h6>
                                        <h6 class="text-center">$ {{ $product->productprice }}</h6>
                                        <h6 class="text-center"><a href="{{ $product->producturl }}" target="_blank">{{__('Product URL') }}</a></h6>
                                    </button>
                                </a>
                                @empty
                                <div class="col-3 btn btn-outline-secondary text-center px-5 py-3">
                                    <h2 class="text-center">{{__('No Group') }} <br>{{__('Available') }}</h2>
                                    <img src="{{ asset('public/assets/product/default/default.png') }}" alt="{{__('Product Name') }}" title="{{__('Product Name') }}" height="100px" width="">
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"><br></div>
                <h3 class="text-center">{{__('Main Product with no Group') }}</h3>
                <div class="clearfix"><hr></div>
                <div class="row">
                    <div class="container">
                        <div style="overflow: auto; height: 200px;">
                            @foreach ($criteria as $crite)
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="row justify-content-center">
                                            <span class="col-10 text-left">{{ $crite->criteria_name }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 row">
                                        @foreach ($crite->choices as $choice)
                                            <button type="button" value="{{ $choice->id }}" class="CHOICEID col-4 btn btn-outline-primary btn-sm">{{ $choice->choice_name }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="clearfix"><br></div>
                <h3 class="text-center">{{__('Select Products to add in the Group') }}</h3>
                <div class="clearfix"><hr></div>
                <div class="container">
                    <div class="row">
                        @foreach ($products as $product)
                        <a href="{{ route('admin.group.product.add',['id'=>$product->id]) }}">
                            <button class="col-3 btn btn-outline-secondary text-center">
                                <h6 class="text-left">{{ $product->productname }}</h6>
                                <h6 class="text-left">$ {{ $product->commissionrate }}</h6>
                                <img class="" src="{{ asset($product->productpicture1) }}" alt="{{ $product->productname }}" title="{{ $product->productname }}" height="75px" width="">
                                <h6 class="text-center">{{ $product->shopname }}</h6>
                                <h6 class="text-center">$ {{ $product->productprice }}</h6>
                                <h6 class="text-center"><a href="{{ $product->producturl }}" target="_blank">{{__('Product URL') }}</a></h6>
                            </button>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="clearfix"><br></div>
            </div>
        </div>
    </section>
    <!------------------------------------- content page body end -------------------------------------->
<!------------------------------------- admin Group Products end -------------------------------------->
<!------------------------------------- Modal area start -------------------------------------->
    <!------------- create group Modal start ------------->
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{__('Create a New Group') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.group.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <!--------------- Group name input start --------------->
                            <div class="form-group">
                                <label for="group_name">{{__('Group Name') }}</label>
                                <input type="text" class="form-control" name="group_name" placeholder="{{__('Group Name') }}" required>
                            </div>
                            <!--------------- Group name input end --------------->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">{{_('Close') }}</button>
                            <!--------------- Group Save button start -------------->
                            <button type="submit" class="btn btn-success">{{__('Save') }}</button><!-- Save button Should save The Group name -->
                            <!--------------- Group Save button end -------------->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!------------- create group Modal end ------------->
<!------------------------------------- Modal area end -------------------------------------->
@endsection
@section('inpagejs')
    <script>
        $('input[type=radio][name=gender]').change(function() {
            window.location.href = "admin-group-product-details?gender=" + this.value;
        });
        $('.choice_id').click(function() {
            window.location.href = "admin-group-product?choice_id=" + this.value;
        });
        $('.CHOICEID').click(function() {
            window.location.href = "admin-group-product?choice=" + this.value;
        });
        $(document).ready(function() {
            $('.group_name').val({{ $group_id }});
            if ({{ $gender }} === 1) {
                $("input:radio[value='1'][name='gender']").prop('checked', true);
            } else if ({{ $gender }} === 2) {
                $("input:radio[value='2'][name='gender']").prop('checked', true);
            }
        });
    </script>
@endsection
