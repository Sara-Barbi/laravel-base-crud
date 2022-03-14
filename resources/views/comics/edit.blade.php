@extends('layouts.base')

@section('title','comics list')

@section('content')
<form action="{{ route("comics.update",$comic->id) }}" class="text-center d-flex flex-column align-items-center" method='POST'>   <!--comic->id serve per recuperate proprio quell'elem con quell'id. dove lo trovo? semplice , nel Controller nella sezione edit vedrò che ho passato la variabile comic che contiene il singolo elemento dove abbiamo cliccato edit-->
    @csrf
    @method('PUT')                                                     <!--grazie al metodo PUT riesco a prendere il mio elemento, come faccio a sapere se prendere PUT o GET?? lo vedo nella Route List-->
    <h1>STAI MODIFICANDO : <strong>{{$comic->title}}</strong></h1>           
                                                          <!--  in questo caso ho visionato la route list e ho visto che per la mia rotta desiderata('update') ho bisogno del PUT-->
    <label class="form-label m-3" for="title">Title</label>
    <input type="text" name="title" id="title"class="form-control col-6 text-center " placeholder="Insert Title"
    value="{{old("title")??$comic->title}}">                            <!--questa è una condizione if. O fa l'old(cioe va a scrivere cosa c'è stato precedentemente inserito a mano) o ci mette il 'title' di quell'elemento lì. Stiamo parlando di editaggio, perciò è comodo avere i parametri di ciò che vogliamo modificare già scritti, soprattutto se ne vogliamo cambiare solo 1.In questo caso se viene cancellato tutto ciò che c'è scritto nell'imput apparirà il placeholder.-->
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label m-3" for="series">Series</label>
    <input type="text" name="series" id="series" class="form-control col-6 text-center " placeholder="Insert Series"
    value="{{old("series")??$comic->series}}">
    @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label m-3" for="thumb">Image</label>
    <input type="text" name="thumb" id="thumb" class="form-control col-6 text-center " placeholder="Insert Image url"
    value="{{old("thumb")??$comic->thumb}}">
    @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label m-3" for="description">Description</label>
    <input type="text" name="description" id="description" class="form-control col-6 text-center " placeholder="Insert Description"
    value="{{old("description")??$comic->description}}">
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label m-3" for="price">Price</label>
    <input type="text" name="price" id="price" class="form-control col-6 text-center " placeholder="Insert Price"
    value="{{old("price")??$comic->price}}">
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label class="form-label m-3" for="sale_date">sale_date(yyyy-mm-gg)</label>
    <input type="text" name="sale_date" id="sale_date" class="form-control col-6 text-center " placeholder="Insert yyyy-mm-gg"
    value="{{old("sale_date")??$comic->sale_date}}">
    @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label m-3" for="type">Tipology</label>
    <input type="text" name="type" id="type" class="form-control col-6 text-center " placeholder="Insert Tipology"
    value="{{old("type")??$comic->type}}">
    @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <button type="submit" class="btn btn-success m-5">Aggiungi</button>
</form>
@endsection
