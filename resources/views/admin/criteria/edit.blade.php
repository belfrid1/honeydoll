@extends("admin.layout.app")
@section("title", "XDOLLKISS-ADD/EDIT CRITERIA")
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
            <h1 class="m-0">Criteria</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Criteria</li>
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
                <div class="col-lg-12 d-flex justify-content-center">
                    <!-------------------- Female /Male  tab start -------------------->
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

            <div class="clearfix"><hr></div>
            <div class="row">
                <!-- Add new criteria start -->
                <div class="col-lg-6">
                    <div class="card">
                        <form class="form-horizontal" action="{{ route('admin.choice.store') }}" method="POST">
                            @csrf
                            <div class="card-header">
                                <div class="row">
                                    <select class="form-control select2bs4 col-sm-8" id="criteriaId" name="criteria_id" data-placeholder="Choose Criteria" required>
                                        <option value="">Choose Criteria</option>
                                        @foreach ($criteria as $crite)
                                        <option value="{{ $crite->id }}">{{ $crite->criteria_name }} @if ($crite->criteria_gender == 1) {{__('( Male )') }} @else {{__('( Female )') }} @endif</option>
                                        @endforeach
                                    </select>
                                    <!--------------- Add new criteria button start ------------->
                                    <button class="btn btn-primary btn-sm float-right col-sm-4 addcriteria" type="button" data-toggle="modal" data-target="#modal-add">
                                        Add New Criteria
                                    <!--When admin click on “Add a new criteria button” it should open the criteria adding field-->
                                    </button>
                                    <!--------------- Add new criteria button end ------------->
                                </div>
                            </div>
                            <!-- Add a choice start -->
                            <div class="card card-light">
                                <div class="card-header">
                                    <h4 class="text-center">Add a choice</h4>
                                </div>
                                <div class="card-body">
                                    <!----------- Choice name input start ---------->
                                    <div class="form-group row">
                                        <label for="ChoiceName" class="col-sm-3 col-form-label">Choice Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('choice_name') is-invalid @enderror" name="choice_name" placeholder="Choice name" value="{{ old('choice_name') }}" required>
                                            @error('choice_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!----------- Choice name input end ---------->
                                    <!----------- choice text input start ---------->
                                    <div class="form-group row">
                                        <label for="choiceText" class="col-sm-3 col-form-label">Choice Text</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="choice_text" rows="4" required>{{ old('choice_text') }}</textarea>
                                        </div>
                                    </div>
                                    <!----------- choice text input end ---------->
                                    <!----------- choice slug input start ---------->
                                    <div class="form-group row">
                                        <label for="choiceSlug" class="col-sm-3 col-form-label">Choice Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="Choice slug" value="{{ old('slug') }}" required>
                                            @error('slug')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!----------- choice slug input end --------------->
                                    <!----------- choice google title input start ---------->
                                    <div class="form-group row">
                                        <label for="googleTitle" class="col-sm-3 col-form-label">Google Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ old('google_title') }}" class="form-control @error('google_title') is-invalid @enderror" name="google_title" placeholder="google title" required>
                                            @error('google_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                         </div>
                                    </div>
                                    <!----------- choice google title  input end ---------->
                                    <!----------- choice picture input start ---------->
                                    <div class="form-group">
                                        <label for="choicepicturelabel">Choice Picture</label>
                                        <div class="custom-file">
                                            <input type="hidden" name="choice_picture" id="choicep">
                                            <input type="file" class="images custom-file-input" data-id="choicep" name="choice_pic" id="choicepicturelabel" required>
                                            <label class="custom-file-label" for="choicepicturelabel">Choose file</label>
                                            <!------- Upload a picture button ------>
                                        </div>
                                    </div>
                                    <!----------- choice picture input end ---------->
                                </div>
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-secondary float-left">Clear</button>
                                    <!-- choise save button start -->
                                    <button type="submit" class="btn btn-success float-right">Save</button> <!-- Save button Should save The criteria id choices name, text and picture Are saved in the database -->
                                    <!-- choise save button end -->
                                </div>
                            </div>
                        </form>
                        <!-- Add a choice end -->
                        @foreach ($choices as $choice)
                        <form class="form-horizontal" action="{{ route('admin.choice.update') }}" method="POST">
                            @csrf
                            <div class="card card-light">
                                <div class="card-body">
                                    <!----------- Choice name input start ---------->
                                    <div class="form-group row">
                                        <label for="ChoiceName" class="col-sm-3 col-form-label">Choice Name</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" value="{{ $choice->id }}" name="choice_id">
                                            <input type="text" value="{{ old('choicename') ? old('choicename') : $choice->choice_name }}" class="form-control @error('choicename') is-invalid @enderror" name="choicename" placeholder="Choice name" required>
                                            @error('choicename')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!----------- Choice name input end ---------->
                                    <!----------- choice text input start ---------->
                                    <div class="form-group row">
                                        <label for="choiceText" class="col-sm-3 col-form-label">Choice Text</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="update_choice_text" rows="4" required>{{ old('update_choice_text') ? old('update_choice_text') : $choice->choice_text }}</textarea>
                                        </div>
                                    </div>
                                    <!----------- choice text input end ---------->
                                     <!----------- choice slug input start ---------->
                                     <div class="form-group row">
                                        <label for="choiceSlug" class="col-sm-3 col-form-label">Choice Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ old('choiceslug') ? old('choiceslug') : $choice->slug }}" class="form-control @error('choiceslug') is-invalid @enderror" name="choiceslug" placeholder="Choice slug" required>
                                            @error('choiceslug')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                         </div>
                                    </div>
                                    <!----------- choice slug input end ---------->
                                    <!----------- choice google title input start ---------->
                                    <div class="form-group row">
                                        <label for="googleTitle" class="col-sm-3 col-form-label">Google Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ old('googletitle') ? old('googletitle') : $choice->google_title }}" class="form-control @error('googletitle') is-invalid @enderror" name="googletitle" placeholder="google title" required>
                                            @error('googletitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                         </div>
                                    </div>
                                    <!----------- choice google title  input end ---------->
                                    <!----------- choice picture input start ---------->
                                    <div class="form-group">
                                        <label for="choicepicturelabel">Choice Picture</label>
                                        <div class="custom-file">
                                            <input type="hidden" name="choice_picture" id="choice{{ $choice->id }}">
                                            <input type="file" class="images custom-file-input" data-id="choice{{ $choice->id }}" id="choicepicturelabel">
                                            <label class="custom-file-label" for="choicepicturelabel">Choose file</label>
                                            <!------- Upload a picture button ------>
                                        </div>
                                    </div>
                                    <!----------- choice picture input end ---------->
                                    <div class="prd-img-area">
                                        <img src="{{ asset($choice->choice_picture) }}" alt="{{ $choice->choice_name }}" class="js-prd-img lazyload fade-up" style="height: 450px; max-height: 450px; max-width: 300px; width: 300px;">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('admin.choice.delete', ['id' => $choice->id ]) }}" onclick="return confirm('are you sure you want to delete this choice ?')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                    <button type="submit" class="btn btn-success float-right">Update</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
                <!-- Add new criteria end -->

                <!-- Edit criteria start -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card- title text-center">Edit Criteria</h4>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-hover">
                                <!-- <thead>
                                    <tr>
                                        <th>Criteria Name</th>
                                        <th class="text-right">
                                            <i class="fas fa-cogs"></i>
                                        </th>
                                    </tr>
                                </thead> -->
                                <tbody>
                                    <!----------------- Criteria info start ---------->
                                    @foreach ($criteria as $crite)
                                    <tr>
                                        <td>
                                            {{ $crite->criteria_name }}
                                            @if ($crite->criteria_gender == 1) {{__('( Male )') }} @else {{__('( Female )') }} @endif
                                        </td>
                                        <td class="text-right">
                                        <!----------------- Up-and-down arrows start ---------->
                                            @if($crite->criteria_serial - 1 != null)
                                            <a href="{{ route('admin.criteria.sort.up', ['id' => $crite->id ]) }}" class="btn btn-secondary btn-sm">
                                                <i class="fas fa-sort-up"></i>
                                            </a>
                                            @endif
                                            @if($crite->criteria_serial + 1 != null)
                                            <a href="{{ route('admin.criteria.sort.down', ['id' => $crite->id ]) }}" class="btn btn-secondary btn-sm">
                                                <i class="fas fa-sort-down"></i>
                                            </a>
                                            @endif
                                        <!----------------- Up-and-down arrows end ---------->
                                        <!----------------- Criteria edit button start ---------->
                                            <button class="btn btn-info btn-sm EDITH" type="button" data-toggle="modal" data-target="#modal-edit" value="{{ $crite->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href="{{ route('admin.criteria.choice.edit', ['id' => $crite->id ]) }}" class="btn btn-primary btn-sm">
                                                Edit
                                            </a>
                                            <!------- When admin click on edit it will be able to edit the criteria name and the related choices name and choices text ----->
                                        <!----------------- Criteria edit button end ---------->
                                        <!----------------- Delete criteria button end ---------->
                                            <a href="{{ route('admin.criteria.delete', ['id' => $crite->id ]) }}" onclick="return confirm('are you sure you want to delete this criteria ?')" class="btn btn-outline-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        <!-----------------Delete criteria button end ---------->
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!----------------- Criteria info end ---------->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Edit criteria end -->
            </div>
        </div>
    </section>
    <!------------------------------------- content page body end -------------------------------------->

    <!------------------------------------- Modal area start -------------------------------------->
    <!------------- Add Modal start ------------->
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New <span id="crigen"></span> Criteria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.criteria.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <!--------------- Criteria name input start --------------->
                        <div class="form-group">
                            <label for="criteria_name">Criteria Name</label>
                            <input type="text" class="form-control" name="criteria_name" placeholder="Criteria Name" required>
                            <input type="hidden" class="criteria_gender" name="criteria_gender">
                        </div>
                        <!--------------- Criteria name input end --------------->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--------------- criteria Save button start -------------->
                        <button type="submit" class="btn btn-success">Save</button><!-- Save button Should save The criteria name -->
                        <!--------------- criteria Save button end -------------->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!------------- Add Modal end ------------->
    <!------------- Edit Modal start ------------->
        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit <span class="crigen"></span> Criteria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.criteria.update') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <!--------------- Criteria name input start --------------->
                        <div class="form-group">
                            <input type="hidden" class="id" name="id">
                            <label for="criteria_name">Criteria Name</label>
                            <input type="text" class="form-control criteria_name" name="criteria_name" placeholder="Criteria Name" required>
                        </div>
                        <!--------------- Criteria name input end --------------->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--------------- criteria Update button start -------------->
                        <button type="submit" class="btn btn-success">Update</button><!-- Update button Should Update The criteria name -->
                        <!--------------- criteria Update button end -------------->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!------------- Edit Modal end ------------->
    <!------------- Picture Crop Modal start ------------->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Crop Choice Picture Before Upload</h5>
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
                        <button type="button" class="btn btn-primary" id="cropchoicepicture">Crop</button>
                    </div>
                </div>
            </div>
        </div>
    <!------------- Picture Crop Modal end ------------->
    <!------------------------------------- Modal area end -------------------------------------->

@endsection
@section('inpagejs')
    <script>
        /* $(function() {
            $( "tbody" ).sortable();
        }); */
        $('input[type=radio][name=criteriagender]').change(function() {
            var val = '{{ $criteria_id }}';
            window.location.href = "admin-criteria-choice-edit?id=" + val + "&gender=" + this.value;
        });
        $(document).ready(function() {
            var val = '{{ $criteria_id }}';
            $("#criteriaId").select2("val", val);
            if ({{ $criteria_gender }} == 1) {
                $("input:radio[value='1'][name='criteriagender']").prop('checked', true);
            } else if ({{ $criteria_gender }} == 2) {
                $("input:radio[value='2'][name='criteriagender']").prop('checked', true);
            }
        });
        $('.EDITH').on('click', function () {
            var id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ route('admin.criteria.edit') }}",
                data: { id : id },
                success: function (response) {
                    $('.id').val(response.id);
                    $('.criteria_name').val(response.criteria_name);
                    if (response.criteria_gender == 1) {
                        $('.crigen').html('Male');
                    } else if (value == 2) {
                        $('.crigen').html('Female');
                    }
                }
            });
        });
        $('.addcriteria').on('click', function () {
            var value = $("[name='criteriagender']:checked").val();
            $('.criteria_gender').val(value);
            if (value == 1) {
                $('#crigen').html('Male');
            } else if (value == 2) {
                $('#crigen').html('Female');
            }
        });
    </script>
    <!-- js code to crop picture for criteria choise -->
    <script type="text/javascript" >
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var cropper;
        $("body").on("change", ".images", function(e) {
            var cid = $(this).data("id");
            $('#image').val(cid);
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
        $("#cropchoicepicture").click(function() {
            var cid = $('#image').val();
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
                        url: "{{ route('admin.choice.crop.picture') }}",
                        data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                        success: function(data){
                            console.log(data);
                            if (data.type === 'success') {
                                $("#"+cid).val(data.image);
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
