
@extends('layouts.nav-bar')


@section('content')


<table class='table panini'>
    <caption>lista panini</caption>
    <tr>
        <td>Name</td>
        <td>Bread Type</td>
        <td>Price</td>
        <td class='poco'>Azioni:</td>
    </tr>
    <tr>
        
        @foreach($panini as $panino)
        <td>{{$panino['name']}}</td>
        <td>{{$panino['breadtype']}}</td>
        <td >{{$panino['price']}}$</td>
        <td><a class='btn btn-danger'href="delete/{{$panino['id']}}">Elimina</a></td>
        <td><a class='btn btn-warning' href="update/{{$panino['id']}}">Aggiorna</a></td>         
    </tr>
    @endforeach
</table>

@endsection
</body>

</html>