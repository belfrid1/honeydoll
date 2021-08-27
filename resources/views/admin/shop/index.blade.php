@extends("admin.layout.app")
@section("title", "SHOP")
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
                            <h3 class="card- title text-center">Add a New Shop</h3>
                        </div>
                        <!------------- Add a new shop start ------------->
                        <form action="{{ route('admin.shop.store') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="card-body">
                                <!--------------- Shop name input start --------------->
                                <div class="form-group">
                                    <label for="shopname">Shop Name</label>
                                    <input type="text" class="form-control @error('shopname') is-invalid @enderror" name="shopname" value="{{ old('shopname') }}" id="shhoop" placeholder="Shop Name" required>
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
                                    <input type="text" class="form-control" name="affliatecode" value="{{ old('affliatecode') }}" placeholder="Affliate Code" required>
                                </div>
                                <!--------------- Affiliate code input end --------------->
                                <!------------------ Commission rate input start ----------------->
                                <div class="form-group">
                                    <label for="commissionrate">Commission Rate (%)</label>
                                    <input type="text" class="form-control" name="commissionrate" value="{{ old('commissionrate') }}" placeholder="Commission Rate" required>
                                </div>
                                <!------------------ Commission rate input end ----------------->
                                <!--------------- Shop URL input start -------------->
                                <div class="form-group">
                                    <label for="shopurl">Shop Url</label>
                                    <input type="url" class="form-control" name="shopurl" value="{{ old('shopurl') }}" placeholder="Shop Url" required>
                                </div>
                                <!--------------- Shop URL input end -------------->
                                <!--------------- Upload a shop picture input start -------------->
                                <div class="form-group">
                                    <label for="shoppicturelabel">Shop Picture</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="shoppicture" id="shoppicturestore" value="">
                                            <input type="file" name="" class="image custom-file-input" id="" required>

                                            <label class="custom-file-label" for="shoppicturelabel">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <!--------------- Upload a shop picture input end -------------->
                            </div>
                            <div class="card-footer">
                                <!--------------- Save button start -------------->
                                <button type="submit" class="btn btn-success float-right">Save</button>
                                <!--------------- Save button end -------------->
                            </div>
                        </form>
                        <!------------- Add a new shop end ------------->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card- title text-center">All Shop List</h3>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-hover table-striped">
                                <!--<thead>
                                    <tr>
                                        <th>Shop Name</th>
                                        <th class="text-right">
                                            <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modal-add">
                                                <i class="fas fa-plus-circle"></i>
                                                Add a New Shop
                                            </button>
                                        </th>
                                    </tr>
                                </thead>-->
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
    <!------------- Add Modal start ------------->
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Shop</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.shop.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <div class="row">
                            <!--------------- Shop name input start --------------->
                            <div class="form-group col-lg-6">
                                <label for="shopname">Shop Name</label>
                                <input type="text" class="form-control" name="shopname" placeholder="Shop Name" required>
                            </div>
                            <!--------------- Shop name input end --------------->
                            <!--------------- Affiliate code input start --------------->
                            <div class="form-group col-lg-6">
                                <label for="affliatecode">Affliate Code</label>
                                <input type="text" class="form-control" name="affliatecode" placeholder="Affliate Code" required>
                            </div>
                            <!--------------- Affiliate code input end --------------->
                            <!------------------ Commission rate input start ----------------->
                            <div class="form-group col-lg-6">
                                <label for="commissionrate">Commission Rate (%)</label>
                                <input type="text" class="form-control" name="commissionrate" placeholder="Commission Rate" required>
                            </div>
                            <!------------------ Commission rate input end ----------------->
                            <!--------------- Shop URL input start -------------->
                            <div class="form-group col-lg-6">
                                <label for="shopurl">Shop Url</label>
                                <input type="url" class="form-control" name="shopurl" placeholder="Shop Url" required>
                            </div>
                            <!--------------- Shop URL input end -------------->
                            <!--------------- Upload a shop picture input start -------------->
                            <div class="form-group col-lg-6">
                                <label for="picturelabel">Picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input upload_image" name="shoppicture" id="picturelabel" required>
                                        <label class="custom-file-label" for="picturelabel">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <!--------------- Upload a shop picture input end -------------->
                            <div class="form-group col-lg-6">
                                <div class="preview"></div>
                                <!-- <div id="upload-demo-i" style="background: #e1e1e1; width: 300px; padding: 30px;height: 300px; margin-top: 30px;"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--------------- Save button start -------------->
                        <button type="submit" class="btn btn-success">Save</button>
                        <!--------------- Save button end -------------->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!------------- Add Modal end ------------->

    <!------------- Edit Modal start ------------->
        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Shop</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.shop.update') }}" method="post" enctype="multipart/form-data">
                        @csrf   <!--Admin can edit shop informations-->
                    <div class="modal-body">
                        <input name="id" class="id" value="" type="hidden">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="">Shop Name</label>
                                <input type="text" name="shopname" class="form-control shopname" id="editshopname" placeholder="Shop Name" readonly>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="editaffliatecode">Affliate Code</label>
                                <input type="text" name="affliatecode" class="form-control affliatecode" id="editaffliatecode" placeholder="Affliate Code" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="editcommissionrate">Commission Rate</label>
                                <input type="text" name="commissionrate" class="form-control commissionrate" id="editcommissionrate" placeholder="Commission Rate" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="editshopurl">Shop Url</label>
                                <input type="url" name="shopurl"  class="form-control shopurl" id="editshopurl" placeholder="Shop Url" required>
                            </div>
                            <!-- <div class="form-group col-lg-6">
                                <label for="editpicturelabel">Picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="hidden" name="shoppicture" class="editshoppicture" value="">
                                        <input type="file" name="" class="image custom-file-input" id="editpicturelabel">
                                        <label class="custom-file-label" for="editpicturelabel">Choose file</label>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="form-group col-lg-6">
                                <div class="img-container">
                                    <img class="shoppictureshow" src="">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!------------- Edit Modal end ------------->

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
<!------ js code fot edit shop info ----->
    <script>
        $('.EDITH').on('click', function () {
            var id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ route('admin.shop.edit') }}",
                data: { id : id },
                success: function (response) {
                    console.log(response.shoppictures);
                    $('.id').val(response.id);
                    $('.shopname').val(response.shopname);
                    $('.affliatecode').val(response.affliatecode);
                    $('.commissionrate').val(response.commissionrate);
                    $('.shopurl').val(response.shopurl);
                    $('.editshoppicture').val(response.shoppicture);
                    $('.shoppictureshow').attr('src', response.shoppicture);
                }
            });
        });
    </script>
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
