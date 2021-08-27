@extends("admin.layout.app")
@section("title", "GROUP Choice LIST")
@section("link")
<meta name="csrf-token" content="{{ csrf_token() }}">
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
@endsection
@section("content")
<!------------------------------------- admin shop start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('Choice List') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('Admin') }}</a></li>
                        <li class="breadcrumb-item">{{__('Choice')}}</li>
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
                                        <th>Choice Name</th>
                                        <th>Choice Text</th>
                                        <th>Choice Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $choices as $choice )
                                    <tr>
                                        <td> {{  $choice->choice_name }}  </td>
                                        <td> {{  $choice->choice_text  }} </td>
                                        <td>
                                            <img src="{{  $choice->choice_picture  }}" alt="" height='75px;'>
                                        </td>
                                        <td>
                                            <button class="btn badge bg-info edit_choice"  type="button" data-toggle="modal" data-target="#choice_edit_md_id" value="{{  $choice->id }}"><i class="fas fa-edit"></i>Edit</button>
                                            {{-- <button class="btn badge bg-info VGAP" type="button" data-toggle="modal" value="{{  $crite->id }}" data-id="{{  $crite->criteria_name }}" data-target="#view-modal-show" ><i class="fas fa-eye"></i> View</button> --}}
                                            {{-- <a href="{{ route('admin.criteria.viewchoices',['id' => $crite->id ]) }}" class="btn badge bg-info" type="button"  value="{{  $crite->id }}" data-id="{{  $crite->criteria_name }}"  ><i class="fas fa-eye"></i> View</a> --}}
                                            <a href="{{ route('admin.choice.delete',['id' => $choice->id ]) }}" class="btn badge bg-danger" type="button"  value="{{  $choice->id }}"   ><i class="fas fa-trash"></i> Del.</a>
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

<!--------------------- Group Products View Modal start ---------------------->

<!--------------------- Group Products View Modal start ---------------------->
<div class="modal fade" id="choice_edit_md_id">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Choice : <span class="groupname"></span>Edit choice ici</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.edit.Choice') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="choice_id" class="choiceid" value="">
            <div class="modal-body">
                <div class="form-group">
                    <label for="choicename">Choice Name</label>
                    <input type="text" class="form-control choicename" name="choicename" id="" >
                    <small  class="form-text text-muted">Change the choice name Ex. blue</small>
                </div>
                <div class="form-group">
                    <label for="choicetext">Choice Text</label>
                    <textarea class="form-control choicetext" name="update_choice_text" id="" rows="3"></textarea>
                  </div>
                <div class="form-group">
                    <label for="choicepicture">choice picture</label>
                    <input type="hidden" name="choice_picture" id="choice_picture_id">
                    <input type="file" class="image2 form-control-file"  id="choicepicture">
                    <img  class="choicepicture"id="image" src="" alt="" height='75px;'>
                </div>
            </div>
            <div class="modal-footer justify-content-right">
                <button type="submit" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="GAPR">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--------------------- Group Products View Modal start ---------------------->
<!--------------------- modal to crop picture  start ---------------------->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel2">Crop choice image Before Upload</h5>
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
    <!--------------------- modal to crop picture end  ---------------------->
@endsection
@section("inpagejs")

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <script type="text/javascript">
        // $("#choicepicture").click(function() {
            var $modal = $('#modal2');
            // var $modal1 = $('#choice_edit_md_id');
            var image = document.getElementById('image2');
            var cropper;
            $("body").on("change", ".image2", function(e){
                var files = e.target.files;
                var done = function (url) {
                    image.src = url;
                    // $modal1.modal('hide');
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
                cropper.destroy();
                cropper = null;
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
                    // $modal1.modal('show');
                    document.getElementById("choice_picture_id").setAttribute("value", base64data);
                    // alert("Crop image successfully uploaded");
                    }
                });
            })
        // });
    // document.getElementById('choicepicture').onchange = function () {
    //     var src = URL.createObjectURL(this.files[0])
    //     document.getElementById('image').src = src
    //     }
             // show and edit choice modal

     $(document).ready(function() {
        $(".edit_choice").click(function(event) {
            id= $(this).val();
            console.log('edit choice');
            console.log(id);
            $.ajax({
                type: "GET",
                url: "{{ route('admin.choice.showeditmodal') }}",
                data: { id : id },
                success: function (data) {
                    console.log(data.choice_name);
                    $('.choiceid').val(data.id);
                    $('.choicename').val(data.choice_name);
                    $('.choicetext').val(data.choice_text);
                    $('.choicepicture').attr('src', data.choice_picture);
                }
            });

        });
    });


    // js code for alert to confim criteria deleting

    $(document).ready(function() {
        $(".bg-danger").click(function(event) {
            if( !confirm('Are you sure that you want to delete this choice ?') )
                event.preventDefault();
        });
    });



    </script>
    <!-- js code to crop picture for create criteria -->

@endsection
