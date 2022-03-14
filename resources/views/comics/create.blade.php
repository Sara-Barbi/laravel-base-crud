@extends('layouts.base')

@section('title','comics list')

@section('content')
<form action="{{ route("comics.store") }}" class="text-center d-flex flex-column align-items-center" method='POST'> 
    @csrf
    <h1 class="mt-5">Create New Comics!</h1>
    <label for="title" class="form-label m-3">Title</label>
    <input type="text" name="title" id="title" class="form-control col-6 text-center " placeholder="Insert Title" value="{{old("title")}}">
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="series" class="form-label m-3">Series</label>
    <input type="text" name="series" id="series" class="form-control col-6 text-center " placeholder="Insert Series">

    <label for="thumb" class="form-label m-3">Image</label>
    <input type="text" name="thumb" id="thumb" class="form-control col-6 text-center " placeholder="Insert Image url">

    <label for="description"class="form-label m-3">Description</label>
    <input type="text" name="description" id="description"class="form-control col-6 text-center " placeholder="Insert Description">

    <label for="price" class="form-label m-3">Price</label>
    <input type="text" name="price" id="price" class="form-control col-6 text-center " placeholder="Insert Price">
    
    <label for="sale_date" class="form-label m-3">Sale Date</label>
    <input type="text" name="sale_date" id="sale_date" class="form-control col-6 text-center " placeholder="Insert yyyy-mm-gg">

    <label for="type" class="form-label m-3">Tipology</label>
    <input type="text" name="type" id="type" class="form-control col-6 text-center " placeholder="Insert Tipology">

    <button type="submit" class="btn btn-success m-5">Aggiungi</button>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
@endsection
