@extends("admin.layout.app")
@section("title", "PRODUCT")
@section("content")
<!------------------------------------- admin product start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Change Background</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Change Background</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------- content section header end -------------------------------------->
    <!------------------------------------- content section body start -------------------------------------->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="content">
        <div class="container">
             <div class="clearfix"><br></div>
            <!------------------------Change background - Admin menu start ----------------->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-secondary card-outline">
                        <form  class="form-horizontal"  method="post" action="{{ route('admin.background.upload') }} "  enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!------------------------ input Upload Background  start ----------------->
                                {{-- Admin can upload the background that we change the background in the Front end --}}
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload  Background</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="name" placeholder="Enter background Name (without space)" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">

                                            <div class="custom-file btn-file">
                                                <input type="file" class="custom-file-input" id="background_id" name="background">
                                                <label class="custom-file-label" for="editpicturelabel">Choose file</label>
                                            </div>
                                            {{-- <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <!------------------------  input Upload Background  start ----------------->

                                <!------------------------ overview picture uploaded start ----------------->
                                <div class="text-center">
                                    <img class="img-fluid justify-align center" id='img-upload'  alt="background to upload">
                                </div>

                                <!------------------------ overview picture uploaded end ----------------->
                            </div>
                            <!------------------------ button save start ----------------->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Save</button>
                            </div>
                            <!------------------------ button save end ----------------->
                        </form>
                    </div>
                </div>
            </div>
            <!------------------------Change background - Admin menu start ----------------->
            <div class="clearfix"><br></div>
            <!------------------------section list background picture alredy uploded- start ----------------->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-secondary card-outline">
                        <div class="clearfix"><br></div>
                        <h3 class="col-sm-2 col-form-label">List background</h3>

                            <div class="card-body">
                                <!------------------------ list background picture start ----------------->
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    @forelse($backgrounds as $background)
                                        <div class="col">
                                            <div class="card">
                                                <img src="{{ asset('public/') }}{{ $background->url }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <a href="" class="">{{ $background->name }} </a>
                                                    <a href="{{ route('admin.background.remove', $background->id ) }} " class="btn btn-danger">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <p>No background at the moment</p>
                                    @endforelse
                                 </div>
                                <!------------------------  list background picture  end ----------------->
                            </div>
                    </div>
                </div>
            </div>
            <!------------------------ section list background alredy uploded- end ----------------->
        </div>
    </section>
    <!------------------------------------- content page body end -------------------------------------->
<!------------------------------------- admin product end -------------------------------------->


@endsection
@section('inpagejs')

<script type="text/javascript" >

    // js code for alert to confim background deleting

    $(document).ready(function() {
    $(".btn-danger").click(function(event) {
        if( !confirm('Are you sure that you want to delete this background') )
            event.preventDefault();
    });
});
</script>

    <script type="text/javascript" >
    // js code to display background before uplaod
        $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#background_id").change(function(){
                readURL(this);
            });
        });
    </script>

@endsection
