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
        $comics= Comic::all();

        return view('comics.index',compact('comics'));     //comics.index è il file index dentro la cartella comics, in pratica ha la stessa funzione del vecchio ' welcome', e ci stampo i miei record presi secondo i parametri qui sopra
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
        $request->validate([
            "title"=>"required|string|max:80|unique:comics",
            "series"=>"required|string|max:80",
            "thumb"=>"required|url",
            "price"=>"required|min:1|max:2000",
            "description"=>"required|string",
            "sale_date"=>"required|date",
            "type"=>"required|string|min:1|max:2000",

        ]);
        //prendo i dati dalla form
        $data=$request->all();
        //inserisco un nuovo elemento
        //$newComic= new Comic;
        //$newComic->title=$data['title'];
        //$newComic->series=$data['series'];
        //$newComic->thumb=$data['thumb'];                       //è fondamentale inserire tutti i dati che chiediamo nel create
        //$newComic->description=$data['description'];           //questo è il caso più sicuro perche so esattamente i dati che vado a prendere 
        //$newComic->price=$data['price'];
        //$newComic->sale_date=$data['sale_date'];
        //$newComic->type=$data['type'];
        //$newComic->save();
        //return redirect()->route('comics.show',$newComic->id);
        
        //$newComic= new Comic;                                   //generalmente si usa nell CREATE 
        //$newComic->fill($data)                                  //un'altro modo di scrivere i dati,riceve dalla form anche valori che non sono previsti
        //$newComic->save();                                      //per farlo funzionare dovrò mettere "protected $fillable=['name','type' ecc... tutti i dati che mi servono]" nel Model o
        //return redirect()->route('comics.show',$newComic->id);  //"protected $guarded=['ad eccezione di']"
        
                                                                
        $newComic=Comic::create($data);                           //generalmente si usa nello STORE
        return redirect()->route('comics.show',$newComic->id);    //riceve dalla form anche valori che non sono previsti, basta che il name è l'id dell'input sono uguali
                                                                  //per farlo funzionare dovrò mettere  "protected $guarded=['ad eccezione di']" dentro al Model,cioè non prende il valore/i tra quadre O  mettere "protected $fillable=['name','type' ecc... tutti i dati che mi servono]" nel Model, 
                                                                  //o  mettere "protected $fillable=['name','type' ecc... tutti i dati che mi servono]"sempre nel Model 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */                                     //questa funz serve per visualizzare un solo elemento
    public function show(Comic $comic)      //gliela sto assegnando io questa variabile,quindi posso darle il nome che voglio, FUNZIONA SOLO SE I NOMI COINCIDONO!!
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
    public function update(Request $request, Comic $comic) //prendo anche 
    {
        $request->validate([
            "title"=>"required|string|max:80|unique:comics,title,{$comic->id}",
            "series"=>"required|string|max:80",
            "thumb"=>"required|url",
            "price"=>"required|min:1|max:2000",
            "description"=>"required|string",
            "sale_date"=>"required|date",
            "type"=>"required|string|min:1|max:2000",
        ]);
        //in questa fase abbiamo un codice che è uguale a quello nello store, ma al posto di generare un nuovo elemento(richiamando il Model)chiamo la variabile che lo rappresenta, che mi andrà a prendere proprio quell'oggetto li.
        $data=$request->all();
        //inserisco un nuovo elemento nel database 
        //$comic->title=$data['title'];
        //$comic->series=$data['series'];
        //$comic->thumb=$data['thumb'];
        //$comic->description=$data['description'];
        //$comic->price=$data['price'];                    //è fondamentale inserire tutti i dati che chiediamo nel create
        //$comic->sale_date=$data['sale_date'];
        //$comic->type=$data['type'];

       // $comic->save();
        $comic->update($data);                          //metodo meno sicuro ma più compatto a livello di codice

        return redirect()->route('comics.show',$comic->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index')->with(['mes'=>'cancellato']);
    }
}
