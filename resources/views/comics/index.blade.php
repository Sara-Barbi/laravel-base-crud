@extends('layouts.base')

@section('title','comics list')

@section('content')
<a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">aggiungi</button></a>  <!--questo bottone se cliccato reindirizza alla route comics/create, possiamo vedere la rotta con php artisan route:list-->
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
        <a href="{{route("comics.show", $product->id)}}"><button type="button" class="btn btn-primary">See More</button></a>  <!--con questo bottone richiamo la rotta comics/show dove show sarà il numero id del mio elemento.Quindi verrò indirizzato alla vista show.blade.php-->
        <a href="{{route("comics.edit", $product->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>  <!--con questo bottone richiamo la rotta comics/edit dove potrò modificare il mio elemento.Quindi verrò indirizzato alla vista edit.blade.php-->
        <form action="{{route("comics.destroy", $product->id)}}" method="POST" onsubmit="return confirm('sicuro?')">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    @endforeach
@endsection