<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#createModal" >
        <strong style="font-size: larger">&nbsp + &nbsp</strong>
    </button>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Heslo</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>

        @foreach($pouzivatel as $pouz)
            <tr>
                <td>{{$pouz['id']}}</td>
                <td>{{$pouz['login']}}</td>
                <td>{{$pouz['heslo']}}</td>
                <td>{{$pouz['email']}}</td>

                <td><a href="{{action('PouzivatelController@edit', $pouz['id'])}}" class="btn btn-warning" >Upraviť</a></td>
                <td>
                    <form action="{{action('PouzivatelController@destroy', $pouz['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">X</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
<!-- PRIDAVANIE POUZIVATELOV MODAL !-->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="crateModalLabel">Pridávanie používateľov</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="post" action="{{url('reality')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="login">Login:</label>
                                    <input type="text" class="form-control" name="login" id="login">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="heslo">Heslo:</label>
                                    <input type="text" class="form-control" name="heslo" id="heslo">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Zavrieť</button>
                                    <button type="submit" class="btn btn-success float-right">PRIDAŤ</button>
                                </div>

                                <div class="col-md-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- UPRAVOVANIE POUZIVATELOV MODAL !-->

</div>
</body>
</html>