@extends('layouts.base')

@section('title','comics list')

@section('content')
        <h1>{{$comic->title}}</h1>
        <p><strong>Series:</strong> {{$comic->series}}</p>
        <img src="{{$comic->thumb}}" alt="">
        <ul>
            <strong>Description:</strong> 
            <li>
                {{$comic->description}}
            </li>
        </ul>
        <ul>
            <strong>Price:</strong> 
            <li>
                {{$comic->price}}
            </li>
        </ul>
        <ul>
            <strong>Sale Date:</strong> 
            <li>
                {{$comic->sale_date}}
            </li>
        </ul>    
        <ul>
            <strong>Tipology:</strong> 
            <li>
                {{$comic->type}}
            </li>
        </ul>

        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>

@endsection