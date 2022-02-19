@extends('layout')

@section('title', 'New Panino')

@section('content')

    <form action="" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text"  name="name" value="{{$panini->name}}" placeholder="name">
        <input type="text"  name="breadtype" value="{{$panini->breadtype}}" placeholder="bread">
        <input type="number"  name="price" value="{{$panini->price}}" placeholder="price">
        <input type="submit" value="save">
    </form>

@endsection
