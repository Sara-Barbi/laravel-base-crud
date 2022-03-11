@extends('layouts.base')

@section('title','comics list')

@section('content')
<form action="{{ route("comics.update",$comic->id) }}" method='POST'>   <!--comic->id serve per recuperate proprio quell'elem con quell'id. dove lo trovo? semplice , nel Controller nella sezione edit vedrò che ho passato la variabile comic che contiene il singolo elemento dove abbiamo cliccato edit-->
    @csrf
    @method('PUT')                                                     <!--grazie al metodo PUT riesco a prendere il mio elemento, come faccio a sapere se prendere PUT o GET?? lo vedo nella Route List-->
    <h1>STAI MODIFICANDO : {{$comic->title}}</h1>                                                                 <!--  in questo caso ho visionato la route list e ho visto che per la mia rotta desiderata('update') ho bisogno del PUT-->
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
    
    <label for="sale_date">sale_date(yyyy-mm-gg)</label>
    <input type="text" name="sale_date" id="sale_date">

    <label for="type">Tipology</label>
    <input type="text" name="type" id="type">

    <button type="submit">Aggiungi</button>
</form>
@endsection
