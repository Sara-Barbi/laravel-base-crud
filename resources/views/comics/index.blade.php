@extends('layouts.base')

@section('title','comics list')

@section('content')
    @foreach($products as $product)
        <h1>{{$product->title}}</h1>
        <p><strong>Series:</strong> {{$product->series}}</p>
        <img src="{{$product->thumb}}" alt="">
        <ul>
            <strong>Description:</strong> 
            <li>
                {{$product->description}}
            </li>
        </ul>
        <ul>
            <strong>Price:</strong> 
            <li>
                {{$product->price}}
            </li>
        </ul>

    @endforeach
@endsection