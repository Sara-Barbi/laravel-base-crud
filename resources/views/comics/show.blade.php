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

@endsection