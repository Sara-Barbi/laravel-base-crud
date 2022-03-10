@extends('layouts.base')

@section('title','comics list')

@section('content')
<form action="{{route('comics.store')}}" method='post'> 
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">

    <label for="series">Series</label>
    <input type="text" name="series" id="series">

    <label for="thumb">Image</label>
    <input type="text" name="thumb" id="thumb">

    <label for="description">Description</label>
    <input type="text" name="description" id="description">

    <label for="price">Price</label>
    <input type="text" name="price" id="price">
    <button type="submit"><a href="">Aggiungi</a></button>
</form>
@endsection
