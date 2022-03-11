@extends('layouts.base')

@section('title','comics list')

@section('content')
<form action="{{ route("comics.update",$comic->id) }}" class="text-center d-flex flex-column align-items-center" method='POST'>   <!--comic->id serve per recuperate proprio quell'elem con quell'id. dove lo trovo? semplice , nel Controller nella sezione edit vedrò che ho passato la variabile comic che contiene il singolo elemento dove abbiamo cliccato edit-->
    @csrf
    @method('PUT')                                                     <!--grazie al metodo PUT riesco a prendere il mio elemento, come faccio a sapere se prendere PUT o GET?? lo vedo nella Route List-->
    <h1>STAI MODIFICANDO : {{$comic->title}}</h1>                                                                 <!--  in questo caso ho visionato la route list e ho visto che per la mia rotta desiderata('update') ho bisogno del PUT-->
    <label class="form-label m-3" for="title">Title</label>
    <input type="text" name="title" id="title"class="form-control col-6 text-center " placeholder="Insert Title">

    <label class="form-label m-3" for="series">Series</label>
    <input type="text" name="series" id="series" class="form-control col-6 text-center " placeholder="Insert Series">

    <label class="form-label m-3" for="thumb">Image</label>
    <input type="text" name="thumb" id="thumb" class="form-control col-6 text-center " placeholder="Insert Image url">

    <label class="form-label m-3" for="description">Description</label>
    <input type="text" name="description" id="description" class="form-control col-6 text-center " placeholder="Insert Description">

    <label class="form-label m-3" for="price">Price</label>
    <input type="text" name="price" id="price" class="form-control col-6 text-center " placeholder="Insert Price">
    
    <label class="form-label m-3" for="sale_date">sale_date(yyyy-mm-gg)</label>
    <input type="text" name="sale_date" id="sale_date" class="form-control col-6 text-center " placeholder="Insert yyyy-mm-gg">

    <label class="form-label m-3" for="type">Tipology</label>
    <input type="text" name="type" id="type" class="form-control col-6 text-center " placeholder="Insert Tipology">

    <button type="submit">Aggiungi</button>
</form>
@endsection
