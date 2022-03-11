@extends('layouts.base')

@section('title','comics list')

@section('content')
<a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">Aggiungi</button></a>  <!--questo bottone se cliccato reindirizza alla route comics/create, possiamo vedere la rotta con php artisan route:list-->
@foreach($comics as $comic)
<div class="d-flex flex-column align-items-center">
    <h1>{{$comic->title}}</h1>
    <p><strong>Series:</strong> {{$comic->series}}</p>
    <img src="{{$comic->thumb}}" alt="">
    <ul>
        <strong>Description:</strong> 
        <li>
            {{$comic->description}}
        </li>
    </ul>
    <div class="d-flex">
        <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary m-3">See More</button></a>  <!--con questo bottone richiamo la rotta comics/show dove show sarà il numero id del mio elemento.Quindi verrò indirizzato alla vista show.blade.php-->
        <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-primary m-3">Edit</button></a>  <!--con questo bottone richiamo la rotta comics/edit dove potrò modificare il mio elemento.Quindi verrò indirizzato alla vista edit.blade.php-->
        <form action="{{route("comics.destroy", $comic->id)}}" method="POST" onsubmit="return confirm('sicuro?')">
            @csrf
            
            @method("DELETE")
            <button type="submit" class="btn btn-danger m-3">Delete</button>
        </form>
    </div>
</div>
<hr>
    @endforeach
@endsection