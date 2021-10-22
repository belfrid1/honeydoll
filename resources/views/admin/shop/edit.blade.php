@extends("admin.layout.app")
@section("title", "XDOLLKISS-SHOP")
@section("link")
<style type="text/css">
    img {
        display: block;
        max-width: 100%;
    }
    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }
    .modal-lg{
        max-width: 1000px !important;
    }
</style>
@endsection
@section("content")
<!------------------------------------- admin shop start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Shop</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Shop</li>
            </ol>
            </div>
        </div>
        </div>
    </div>
    <!------------------------------------- content section header end -------------------------------------->
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('warning'))
            <div class="alert alert-warning">
                {{ session('warning') }}
            </div>
        @elseif(session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif
    </div>
    <!------------------------------------- content section body start -------------------------------------->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-------------------- Download all registered user email as Excel button start -------------------->
                    <a class="btn btn-outline-primary" href="{{ route('admin.user.export') }}">
                        <i class="fas fa-download"></i>
                        Download All Registered Users Email as Excel
                    </a>
                    <!-------------------- Download all registered user email as Excel button end -------------------->
                </div>
            </div>

            <div class="clearfix"><hr></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.shop') }}" class="btn btn-primary float-right">Add New Shop</a>
                            <h3 class="text-center">Edit Shop</h3>
                        </div>
                        <!------------- Edit shop start ------------->
                        <form action="{{ route('admin.shop.update') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="card-body">
                                <!--------------- Shop name input start --------------->
                                <div class="form-group">
                                    <label for="shopname">Shop Name</label>
                                    <input type="hidden" value="{{ $data->id }}" name="id">
                                    <input type="text" class="form-control @error('shopname') is-invalid @enderror" name="shopname" value="{{ old('shopname') ? old('shopname') : $data->shopname }}" id="shopname" placeholder="Shop Name" required>
                                    @error('shopname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!--------------- Shop name input end --------------->
                                <!--------------- Affiliate code input start --------------->
                                <div class="form-group">
                                    <label for="affliatecode">Affliate Code</label>
                                    <input type="text" class="form-control" name="affliatecode" value="{{ old('affliatecode') ? old('affliatecode') : $data->affliatecode }}" placeholder="Affliate Code" required>
                                </div>
                                <!--------------- Affiliate code input end --------------->
                                <!------------------ Commission rate input start ----------------->
                                <div class="form-group">
                                    <label for="commissionrate">Commission Rate</label>
                                    <input type="text" class="form-control" name="commissionrate" value="{{ old('commissionrate') ? old('commissionrate') : $data->commissionrate }}" placeholder="Commission Rate" required>
                                </div>
                                <!------------------ Commission rate input end ----------------->
                                <!--------------- Shop URL input start -------------->
                                <div class="form-group">
                                    <label for="shopurl">Shop Url</label>
                                    <input type="url" class="form-control" name="shopurl" value="{{ old('shopurl') ? old('shopurl') : $data->shopurl }}" placeholder="Shop Url" required>
                                </div>
                                <!--------------- Shop URL input end -------------->
                                <!--------------- Upload a shop picture input start -------------->
                                <div class="form-group">
                                    <label for="shoppicturelabel">Shop Picture</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="shoppicture" id="shoppicturestore" value="">
                                            <input type="file" name="" class="image custom-file-input" id="">
                                            <label class="custom-file-label" for="shoppicturelabel">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd-img-area">
                                    <img src="{{ asset($data->shoppicture) }}" alt="{{ $data->shopname }}" class="js-prd-img lazyload fade-up" style="height: 450px; max-height: 450px; max-width: 300px; width: 300px;">
                                </div>
                                <!--------------- Upload a shop picture input end -------------->
                            </div>
                            <div class="card-footer">
                                <!--------------- Update button start -------------->
                                <button type="submit" class="btn btn-success float-right">Update</button>
                                <!--------------- Update button end -------------->
                            </div>
                        </form>
                        <!------------- Edit shop end ------------->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card- title text-center">All Shop List</h3>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-hover table-striped">
                                <tbody>
                                    @foreach($shops as $shop)
                                    <tr>
                                        <td>{{ $shop->shopname }}</td>
                                        <td class="text-right">
                                        <!----------------- Edit shop button start ---------->
                                            <a href="{{ route('admin.shop.edit', ['id' => $shop->id ]) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Edit Shop</a>
                                            <!------- When admin click on edit shop button, you will be able to edit the shop information ----->
                                        <!----------------- Edit shop button end ---------->
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

    <!------------------------------------- Modal area start -------------------------------------->

    <!------ The picture should be resizable, the standard size should be shown to make it easy to fit ------>
    <!------------- Picture Crop Modal start ------------->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Crop Shop Picture Before Upload</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-8">
                                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                </div>
                                <div class="col-md-4">
                                    <div class="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="cropshoppicture">Crop</button>
                    </div>
                </div>
            </div>
        </div>
    <!------------- Picture Crop Modal end ------------->

    <!------------------------------------- Modal area end -------------------------------------->
<!------------------------------------- admin shop end -------------------------------------->
@endsection
@section("inpagejs")
<!-- js code to crop picture for create shop -->
    <script type="text/javascript" >
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var cropper;
        $("body").on("change", ".image", function(e){
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                viewMode: 1,
                initialAspectRatio: 300/450,
                autoCropArea: 1,
                cropBoxResizable: false,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });
        $("#cropshoppicture").click(function(){
            canvas = cropper.getCroppedCanvas({
                width: 300,
                height: 450,
            });
            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "{{ route('admin.shop.crop.picture') }}",
                        data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                        success: function(data){
                            console.log(data);
                            if (data.type === 'success') {
                                $("#shoppicturestore").val(data.image);
                                $modal.modal('hide');
                                alert(data.message);
                            }
                            if (data.type === 'error') {
                                $modal.modal('hide');
                                alert(data.message);
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
