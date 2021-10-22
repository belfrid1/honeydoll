@extends("admin.layout.app")
@section("title", "XDOLLKISS-PRODUCT")

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
</style>


<style>
    h2 {
        color: white;
    }
</style>
{{--  shop name dropdown link end --}}


@endsection
@section("content")
<!------------------------------------- admin product start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
            <form class="form-horizontal" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <!-------------------- section choose page category of product start   -------------------->
                <div class="row">
                        <!--------------------  Add a New Main Product tab start -------------------->
                        <div class="col-lg-3 d-flex justify-content-center">
                            <div class="card card-secondary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <label class="btn btn-secondary active">
                                            <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset('public/') }}/assets/admin/dist/img/default-profile.png"
                                                    alt="Add New Underwear" title="Add New Underwear">
                                                    <h5 class="text-center">Add New Sex Doll</h5>
                                            <input type="radio" value="menu_mainproduct" name="productmenu" id="mainproduct" autocomplete="off" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-------------------- Add a New Main Product tab end   -------------------->
                            <!-------------------- Add a New Accessory tab start -------------------->
                        <div class="col-lg-3 d-flex justify-content-center">
                            <div class="card card-secondary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <label class="btn btn-secondary">
                                            <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset('public/') }}/assets/admin/dist/img/default-profile.png"
                                                    alt="Add New Underwear" title="Add New Underwear">
                                                    <h5 class="text-center">Add New Accessory</h5>
                                            <input type="radio" value="menu_accessory" name="productmenu" id="accessory"  autocomplete="off" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------- Add a New Accessory tab end -------------------->
                        <!-------------------- Add a New Product tab start -------------------->
                        <div class="col-lg-3 d-flex justify-content-center">
                            <div class="card card-secondary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <label class="btn btn-secondary">
                                            <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset('public/') }}/assets/admin/dist/img/default-profile.png"
                                                    alt="Add New Underwear" title="Add New Underwear">
                                                    <h5 class="text-center">Add New Toys</h5>
                                            <input type="radio" value="menu_toys" name="productmenu" id="toys" autocomplete="off" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------- Add a New Product tab end -------------------->
                        <!-------------------- Add a New Underwear tab start -------------------->
                        <div class="col-lg-3 d-flex justify-content-center">
                            <div class="card card-secondary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <label class="btn btn-secondary">
                                            <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset('public/') }}/assets/admin/dist/img/default-profile.png"
                                                    alt="Add New Underwear" title="Add New Underwear">
                                                    <h5 class="text-center">Add New Underwear</h5>
                                            <input type="radio" value="menu_underwear" name="productmenu" id="underwear"  autocomplete="off" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------- Add a New Underwear tab end -------------------->
                </div>
                <!-------------------- section choose page category of product start   -------------------->

                <div class="clearfix"><br></div>
                <!-------------------- section to choose gender option start   -------------------->
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <!-------------------- Female and Male tab button start -------------------->
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active mr-2">
                                <i class="fas fa-female"></i>
                            <input type="radio" value="female" name="productgender" id="female" autocomplete="off" checked> Female
                            </label>
                            <label class="btn btn-secondary">
                                <i class="fas fa-male"></i>
                            <input type="radio" value="male" name="productgender" id="male" autocomplete="off"> Male
                            </label>

                        </div>
                        <!-------------------- Female and Male tab button start -------------------->
                    </div>
                </div>
                <!-------------------- section to choose gender option  end  -------------------->
                <div class="clearfix"><br></div>
                <!-------------------- form to input product informations start  -------------------->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-secondary card-outline">

                            <div class="card-body">
                                <!------------------------ Upload picture start ----------------->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Upload  Picture 1</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="hidden" name ="productpicture1" id="input_pic_1">
                                                        <input type="file"  class="image custom-file-input" id="input_file_1">
                                                        <label class="custom-file-label" for="editpicturelabel">Choose file</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Upload  Picture 2</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="hidden" name ="productpicture2" id="input_pic_2">
                                                        <input type="file"  class="image2 custom-file-input" id="input_file_2" >
                                                        <label class="custom-file-label"  for="editpicturelabel">Choose file</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Upload Picture 3</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="hidden" name ="productpicture3" id="input_pic_3">
                                                        <input type="file"  class="image3 custom-file-input" id="input_file_3">
                                                        <label class="custom-file-label" for="editpicturelabel">Choose file</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------ overview view of pictures ----------------->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <div class="overview preview" ></div>
                                                    <h5>Picture 1</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <div class="overview preview2" ></div>
                                                    <h5>Picture 2</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <div class="overview preview3" ></div>
                                                    <h5>Picture 3</h5>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!------------------------ overview view of pictures ----------------->
                                    <!------------------------ Modal to crop picture 1 start ----------------->
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel">Crop image Before Upload</h5>
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
                                                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!------------------------ Modal to crop picture 1 end ----------------->
                                    <!------------------------ Modal to crop picture 2 start ----------------->
                                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel2">Crop image Before Upload</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="img-container">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <img id="image2" src="https://avatars0.githubusercontent.com/u/3456749">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="preview2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary" id="crop2">Crop</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!------------------------ Modal to crop picture 2  end ----------------->
                                    <!------------------------ Modal to crop picture 3 start ----------------->
                                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel3">Crop image Before Upload</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="img-container">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <img id="image3" src="https://avatars0.githubusercontent.com/u/3456749">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="preview3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary" id="crop3">Crop</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!------------------------ Modal to crop picture 3 end ----------------->

                                    <!------------------------ Upload picture end ----------------->

                                </div>

                                <!------------------------ Shop name dropdown start ----------------->
                                <!------------------------Every shop added by admin must be fetched in the dropdwon ----------------->
                                <div class="form-group row">
                                    <label for="shopname" class="col-sm-2 col-form-label">Shop Name</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="shopname" required>

                                            <option value="" disabled selected>Please Select a shop</option>
                                            @foreach ($shops as $shop)
                                                <option value="{{ $shop->id }}">{{$shop->shopname}}</option>
                                            @endforeach
                                          </select>
                                    </div>

                                    {{-- <div class="col-sm-6">
                                        <select class="form-control shopsearch" name="shopname">
                                            <option value="">fffff</option>
                                            <option value="">fffff</option>
                                            <option value="">fffff</option>
                                        </select>
                                    </div> --}}
                                </div>
                                <!------------------------ Shop name dropdown end ----------------->
                                <!--------------------- Add a product name input start -------------------->
                                <div class="form-group row">
                                    <label for="productname" class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" maxlength="60" type="text" name="productname" placeholder="Product Name" required>
                                    </div>
                                </div>
                                <!--------------------- Add a product name input end -------------------->
                                <!------------------------- Add a Price input start --------------------->
                                <div class="form-group row">
                                    <label for="productprice" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" name="productprice" placeholder="Product Price" required>
                                    </div>
                                </div>
                                <!------------------------- Add a Price input end --------------------->
                                <!------------------------- Add a previous Price input start --------------------->
                                <div class="form-group row">
                                    <label for="productprice" class="col-sm-2 col-form-label">Previous Price</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" name="previousproductprice" placeholder="Previous Price">
                                    </div>
                                </div>
                                <!------------------------- Add a previouss Price input end --------------------->

                                <!------------------------- Add a product URL input start --------------------->
                                <div class="form-group row">
                                    <label for="producturl" class="col-sm-2 col-form-label">Url</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="url" name="producturl" placeholder="Product Url" required>
                                    </div>
                                </div>
                                <!------------------------- Add a product URL input end --------------------->
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-------------------- form to input product informations start  -------------------->
             </form>
        </div>
    </section>
    <!------------------------------------- content page body end -------------------------------------->
<!------------------------------------- admin product end -------------------------------------->
@endsection
@section('inpagejs')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

<!-- js code to crop picture 1 start -->
<script type="text/javascript" >

        //  $(document).ready(function() {
        //     $("#openLink").click(function() {
        //         $("#message").slideDown("fast");
        //     });
        // $("#closeLink").click("closeIt");
        // });
        $("#input_file_1").click(function() {
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
                autoCropArea:1,
                cropBoxResizable: false,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            //cropper.destroy();
            //cropper = null;
            });
        $("#crop").click(function(){
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
                $modal.modal('hide');
                document.getElementById("input_pic_1").setAttribute("value", base64data);
                // alert("Product image successfully cropped");

                }
            });
        })
        });

</script>
<!-- js code to crop picture 1 end  -->

<!-- js code to crop picture 2 start -->
<script type="text/javascript" >
    $("#input_file_2").click(function() {
        var $modal = $('#modal2');
        var image = document.getElementById('image2');
        var cropper;
        $("body").on("change", ".image2", function(e){
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
                autoCropArea:1,
                cropBoxResizable: false,
                preview: '.preview2'
            });
        }).on('hidden.bs.modal', function () {
            /*cropper.destroy();
            cropper = null;*/
            });
        $("#crop2").click(function(){
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
                $modal.modal('hide');
                document.getElementById("input_pic_2").setAttribute("value", base64data);
                // alert("Crop image successfully uploaded");

                }
            });
        })

    });
</script>
<!-- js code to crop picture 2 end  -->

<!-- js code to crop picture 3 start -->
<script type="text/javascript" >

    $("#input_file_3").click(function() {
        var $modal = $('#modal3');
        var image = document.getElementById('image3');
        var cropper;
        $("body").on("change", ".image3", function(e){
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
                autoCropArea:1,
                cropBoxResizable: false,
                preview: '.preview3'
            });
        }).on('hidden.bs.modal', function () {
            /*cropper.destroy();
            cropper = null;*/
            });
        $("#crop3").click(function(){
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
                $modal.modal('hide');
                document.getElementById("input_pic_3").setAttribute("value", base64data);
                // alert("Crop image successfully uploaded");

                }
            });
        })


    });


</script>
<!-- js code to crop picture 3 end  -->

@endsection
