<?php
namespace App\Http\Controllers;
use App\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    //verranno create nuoive route list, per vederle"php artisan route:list"
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Comic::all();

        return view('comics.index',compact('products'));     //comics.index è il file index dentro la cartella comics, in pratica ha la stessa funzione del vecchio ' welcome', e ci stampo i miei record presi secondo i parametri qui sopra
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()      //per creare un nuovo elemento
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //per salvare il nuovo elemento nel database
    {
        $data=$request->all();
        $newComic= new Comic;
        $newComic->title=$data['title'];
        $newComic->series=$data['series'];
        $newComic->thumb=$data['thumb'];
        $newComic->description=$data['description'];
        $newComic->price=$data['price'];
        $newComic->save();

        return redirect()->route('comics.show',$newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */                                   //questa funz serve per visualizzare un solo elemento
    public function show(Comic $comic)    //gliela sto assegnando io questa variabile,quindi posso darle il nome che voglio, FUNZIONA SOLO SE I NOMI COINCIDONO!!
    {
        //$product = Product::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)  //
    {
        return view('comics.edit', compact('comic'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
