@extends('layouts.base')

@section('title','comics list')

@section('content')
<form action="{{ route("comics.store") }}" method='POST'> 
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
    
    <label for="sale_date">sale_date</label>
    <input type="text" name="sale_date" id="sale_date">

    <label for="type">Tipology</label>
    <input type="text" name="type" id="type">

    <button type="submit">Aggiungi</button>
</form>
@endsection
