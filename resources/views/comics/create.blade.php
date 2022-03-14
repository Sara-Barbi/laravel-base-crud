@extends('layouts.base')

@section('title','comics list')

@section('content')
<form action="{{ route("comics.store") }}" class="text-center d-flex flex-column align-items-center" method='POST'>   <!--con action="{route("comics.store")}" stabilisco la rotta dove andranno i miei dati il metodo che dobbiamo usare è post e questo lo vediamo nella route list accandto a comics.store -->
    @csrf
    <h1 class="mt-5">Create New Comics!</h1>
    <label for="title" class="form-label m-3">Title</label>
    <input type="text" name="title" id="title" class="form-control col-6 text-center " placeholder="Insert Title" value="{{old("title")}}"> <!--old('title') serve per lasciare scritto ciò che abbiamo digitato nell'input anche dopo il caricamento, così se abbiamo sbagliato solo un campo, gli altri non li dobbiamo riempire di nuovo.-->
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="series" class="form-label m-3">Series</label>
    <input type="text" name="series" id="series" class="form-control col-6 text-center " placeholder="Insert Series" value="{{old("series")}}"> <!--E' MOLTO IMPORTANTE CHE NAME E ID SIANO GUALI A CIO' CHE ABBIAMO NEL SERVER-->
    @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="thumb" class="form-label m-3">Image</label>
    <input type="text" name="thumb" id="thumb" class="form-control col-6 text-center " placeholder="Image url" value="{{old("thumb")}}">
    @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="description"class="form-label m-3">Description</label>
    <input type="text" name="description" id="description"class="form-control col-6 text-center " placeholder="Insert Description" value="{{old("description")}}">
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="price" class="form-label m-3">Price($)</label>
    <input type="text" name="price" id="price" class="form-control col-6 text-center " placeholder="00.00" value="{{old("price")}}">
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="sale_date" class="form-label m-3">Sale Date</label>
    <input type="text" name="sale_date" id="sale_date" class="form-control col-6 text-center " placeholder="Insert yyyy-mm-gg" value="{{old("sale_date")}}">
    @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="type" class="form-label m-3">Tipology</label>
    <input type="text" name="type" id="type" class="form-control col-6 text-center " placeholder="Insert Tipology" value="{{old("type")}}"><!--old('title') serve per lasciare scritto ciò che abbiamo digitato nell'input anche dopo il caricamento, così se abbiamo sbagliato solo un campo, gli altri non li dobbiamo riempire di nuovo.-->
    @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-success m-5">Aggiungi</button>            <!--al bottone dobbiamo mettere type='submit' per svolgere l'invio dati, cghe agirà nella route che abbiamo stabilito nella form(riga6)-->
</form>
@endsection
