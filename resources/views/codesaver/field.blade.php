<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



         @foreach($page->fields as $field)
        <style>
            {!! $field->css !!}
        </style>

         @endforeach
    <title>Code Saver</title>
</head>
<body>
    <div class="">
        <h3 class="text-center mt-3 mb-3"> {{ $page->name }}</h3>
        <br><br>
        <div class="text-center mb-5">
            <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target=".bd-example-modal-lg">Add new</button>

        </div>



        @foreach($page->fields as $field)
            <div class="row border ">
                <div class="col-md-8 offset-2">
                    <form method="post" action="{{ route("codesaver.field.edit",$field->id) }}">
                        @csrf
                        <div class="  mt-3">
                            <div class="col-md-12 mt-3 mb-3 text-center">
                                {!! $field->html !!}
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="name">Enter field name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $field->name }}">
                                </div>
                            </div>
                        </div>
                        <div class=" border border-dark">
                           <div class="col-md-12 mt-3">
                               <div class="form-group " >
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="exampleFormControlTextarea1" class="h3">HTML</label>
                                           <button type="submit" class="btn btn-default">Copy Code</button>
                                       </div>
                                       <div class="col-md-9">
                                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="html" >
                                               {{ $field->html }}
                                           </textarea>
                                       </div>
                                   </div>

                               </div>
                           </div>
                        </div>
                        <br>
                        <div class=" border border-dark">
                            <div class="col-md-12 mt-3">
                                <div class="form-group " >
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="exampleFormControlTextarea1" class="h3">CSS</label>
                                            <button type="submit" class="btn btn-default">Copy Code</button>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="css">
                                                {{ $field->css }}
                                            </textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class=" border border-dark">
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="exampleFormControlTextarea1" class="h3">Javascript</label>
                                            <button type="submit" class="btn btn-default">Copy Code</button>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="js">
                                                 {{ $field->js }}
                                            </textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class=" border border-dark">
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="exampleFormControlTextarea1" class="h3">Others</label>
                                            <button type="submit" class="btn btn-default">Copy Code</button>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="others">
                                                 {{ $field->others }}
                                            </textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-primary float-right">Save button</button>
                        </div>
                        <br>
                        <br>

                    </form>
                </div>
            </div>
        @endforeach

    </div>
    <!-- Large modal -->


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div  >
                <form method="post" action="{{ route("codesaver.field.save",$page->id) }}">
                    @csrf
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">New</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                           <div class="form-group">
                               <div class="row">
                                   <div class="col-md-3">
                                       <label for="name">Enter field name</label>
                                   </div>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" id="name" name="name" >
                                   </div>
                               </div>
                           </div>
                           <div class=" border border-dark">
                               <div class="col-md-12 mt-3">
                                   <div class="form-group " >
                                       <div class="row">
                                           <div class="col-md-3">
                                               <label for="exampleFormControlTextarea1" class="h3">HTML</label>
                                               <button type="submit" class="btn btn-default">Copy Code</button>
                                           </div>
                                           <div class="col-md-9">
                                                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="html" >

                                                   </textarea>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                           <br>
                           <div class=" border border-dark">
                               <div class="col-md-12 mt-3">
                                   <div class="form-group " >
                                       <div class="row">
                                           <div class="col-md-3">
                                               <label for="exampleFormControlTextarea1" class="h3">CSS</label>
                                               <button type="submit" class="btn btn-default">Copy Code</button>
                                           </div>
                                           <div class="col-md-9">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="css">

                                                    </textarea>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                           <br>
                           <div class=" border border-dark">
                               <div class="col-md-12 mt-3">
                                   <div class="form-group">
                                       <div class="row">
                                           <div class="col-md-3">
                                               <label for="exampleFormControlTextarea1" class="h3">Javascript</label>
                                               <button type="submit" class="btn btn-default">Copy Code</button>
                                           </div>
                                           <div class="col-md-9">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="js">
                                                         {{ $field->js }}
                                                    </textarea>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                           <br>
                           <div class=" border border-dark">
                               <div class="col-md-12 mt-3">
                                   <div class="form-group">
                                       <div class="row">
                                           <div class="col-md-3">
                                               <label for="exampleFormControlTextarea1" class="h3">Others</label>
                                               <button type="submit" class="btn btn-default">Copy Code</button>
                                           </div>
                                           <div class="col-md-9">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="others">

                                                    </textarea>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                    </div>


                </form>

            </div>
        </div>
    </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
