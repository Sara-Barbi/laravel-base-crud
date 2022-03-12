@extends('layouts.base')

@section('title','comics list')

@section('content')
<div class="container text-center">
    <h1>{{$comic->title}}</h1>
    <p><strong>Series:</strong> {{$comic->series}}</p>
    <img src="{{$comic->thumb}}" alt="" class="d-inline">
    <ul class='p-0'>
        <strong>Description:</strong> 
        <li>
            {{$comic->description}}
        </li>
    </ul>
    <ul class='p-0'>
        <strong>Price:</strong> 
        <li>
            {{$comic->price}}
        </li>
    </ul>
    <ul class='p-0'>
        <strong>Sale Date:</strong> 
        <li>
            {{$comic->sale_date}}
        </li>
    </ul>    
    <ul class='p-0'>
        <strong>Tipology:</strong> 
        <li>
            {{$comic->type}}
        </li>
    </ul>
        
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
</div>
@endsection