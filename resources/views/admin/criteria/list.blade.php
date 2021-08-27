@extends("admin.layout.app")
@section("title", "GROUP CRITERIA LIST")
@section("content")
<!------------------------------------- admin shop start -------------------------------------->
    <!------------------------------------- content section header start -------------------------------------->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('Criteria List') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('Admin') }}</a></li>
                        <li class="breadcrumb-item">{{__('Criteria')}}</li>
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
                                        <th>Criteria Serial</th>
                                        <th>Criteria Name</th>
                                        <th>Criteria Gender</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $criteria as $crite )
                                    <tr>
                                        <td> {{  $crite->criteria_serial }} </td>
                                        <td> {{  $crite->criteria_name }} </td>
                                        <td>
                                            @if ($crite->criteria_gender == 1) {{__('Male') }} @elseif ($crite->criteria_gender == 2) {{__('Female') }} @endif
                                        </td>
                                        <td>
                                            {{-- <button class="btn badge bg-info VGAP" type="button" data-toggle="modal" value="{{  $crite->id }}" data-id="{{  $crite->criteria_name }}" data-target="#view-modal-show" ><i class="fas fa-eye"></i> View</button> --}}
                                            <a href="{{ route('admin.criteria.viewchoices',['id' => $crite->id ]) }}" class="btn badge bg-info" type="button"  value="{{  $crite->id }}" data-id="{{  $crite->criteria_name }}"  ><i class="fas fa-eye"></i> View</a>
                                            <a href="{{ route('admin.criteria.delete',['id' => $crite->id ]) }}" class="btn badge bg-danger" type="button"  value="{{  $crite->id }}" data-id="{{  $crite->criteria_name }}"  ><i class="fas fa-trash"></i> Del.</a>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Criteria : <span class="groupname"></span> - Choice List</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped" id="GAPT">
                            <thead>
                                <tr>
                                    <th>Choice Name</th>
                                    <th>Choice Text</th>
                                    <th>Choice Picture</th>
                                    <th>Action</th>
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

<!--------------------- Group Products View Modal start ---------------------->
<div class="modal fade" id="choice_edit_md_id">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Choice : <span class="groupname"></span>Edit choice </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
            <div class="modal-body">
                <div class="form-group">
                    <label for="choicename">Choice Name</label>
                    <input type="text" class="form-control" id="choicename" aria-describedby="choicename" placeholder="choice name">
                    <small id="choicename" class="form-text text-muted">Enter the choice name Ex. blue</small>
                </div>
                <div class="form-group">
                    <label for="choicetext">Choice Text</label>
                    <textarea class="form-control" id="choicetext" rows="3"></textarea>
                  </div>
                <div class="form-group">
                    <label for="choicepicture">choice picture</label>
                    <input type="file" class="form-control-file" id="choicepicture">
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
@endsection
@section("inpagejs")
    <script type="text/javascript">
        // $(document).ready(function(){
        //     $(".VGAP").on("click", function () {
        //         //alert('ok');
        //         var id = $(this).val();
        //         var name = $(this).data("id");
        //         $.ajax({
        //             type: "GET",
        //             url: "{{ route('admin.criteria.viewchoices') }}",
        //             data: { id : id },
        //             success: function (data) {
        //                 $(".groupname").html(name);
        //                 $("#GAPT > tbody").empty();
        //                 $.each(data, function(index, view){
        //                     var details = "<tr><td>"+ view.choice_name + "</td><td>" + view.choice_text + "</td><td><img src=" + view.choice_picture + " alt=" + view.choice_name +" height='75px;'></td><td><button class='btn badge bg-info'   onclick='editchoice()' type='button' data-toggle='modal' data-target='#choice_edit_md_id' value="+view.id+"><i class='fas fa-edit'></i></button></td></tr>";
        //                     $("#GAPT > tbody").append(details);
        //                 });
        //             }
        //         });
        //     });


        // });
         // show and edit choice modal
            function editchoice(t) {
                // var id = $(this).val();
                console.log(t.value);

                // $.ajax({
                //     type: "GET",
                //     url: "{{ route('admin.product.show') }}",
                //     data: { id : id },
                //     success: function (response) {
                //         console.log(response.shoppictures);
                //         $('.shopname').val(response.shop.shopname);
                //         $('.menu').val(response.productmenu);
                //         $('.commissionamount').val(response.commission_amount);
                //         $('.gender').val(response.productgender);
                //         $('.productname').val(response.productname);
                //         $('.producturl').val(response.producturl);
                //         $('.price').val(response.productprice);
                //         $('.previousprice').val(response.previousprice);
                //         $('.productpicture1').attr('src', response.productpicture1);
                //         $('.productpicture2').attr('src', response.productpicture2);
                //         $('.productpicture3').attr('src', response.productpicture3);
                //     }
                // });

            }


    // js code for alert to confim criteria deleting

    $(document).ready(function() {
        $(".bg-danger").click(function(event) {
            if( !confirm('Are you sure that you want to delete this criteria ? The all choices related to this criteria will be delete.') )
                event.preventDefault();
        });
    });



    </script>
@endsection
