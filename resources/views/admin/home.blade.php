<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"> 
    <title>@yield('title')</title>
</head>
<body>
    <div class="container tp"> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Admin</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('users')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('newusers')}}">NewUser</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    <table class='table users'>
        <caption>lista utenti</caption>
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>Password</td>
            <td class='poco'>Azioni:</td>
        </tr>
        <tr>
            
            @foreach($users as $user)
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td >{{$user['password']}}$</td>
            <td><a class='btn btn-danger'href="admin/delete/{{$user['id']}}">Elimina</a></td>
            <td><a class='btn btn-warning' href="admin/update/{{$user['id']}}">Aggiorna</a></td>         
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>