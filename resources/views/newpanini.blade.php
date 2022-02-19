@extends('layouts.nav-bar')

@section('title', 'New Panino')

@section('content')

    <form action="" method="post" class='losos'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text"  name="name" placeholder="name">
        <input type="text"  name="breadtype" placeholder="bread">
        <input type="number"  name="price" placeholder="price">
        <input type="submit" class="btn btn-dark" value="crea">
    </form>

@endsection
    
