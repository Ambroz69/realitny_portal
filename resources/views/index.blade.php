<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pouzivatelia</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
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

                <td><a href="{{action('PouzivatelController@edit', $pouz['id'])}}" class="btn btn-warning">Uprav</a></td>
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

    <div>
        <br />
        <a class="btn btn-info" href="{{ URL::route('reality/create') }}"><strong>Pridaj</strong></a>
    </div>
</div>
</body>
</html>