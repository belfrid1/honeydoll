<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Code Saver</title>
</head>
<body>
    <div class="container">
<!--        <h3 class="text-center">Code saver web site</h3>-->
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <form method="post" action="{{ route("codesaver.page.save") }}">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="exampleInputEmail1">Enter page name</label>
                                    <input type="text" class="form-control" id="pagename" name="pagename" >
                                </div>
                                <div class="col-md-3">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="col-md-12"></div>

            <div class="col-md-6 mt-5">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Page name</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $key => $page)
                    <tr>
                        <th scope="row"{{ $key }}</th>
                        <td> <a href="{{ route("codesaver.page.show",$page) }}">  {{ $page->name }} </a> </td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>

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
