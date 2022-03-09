<?php
use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('comics');     //dentro config prende il file comics da questo momento ho a disposizione $products, che è il mio file.  ù
        foreach ($products as $product) {
            $newComic= new Comic();
            $newComic->title = $product['title'];
            $newComic->series = $product['series'];
            $newComic->thumb = $product['thumb'];
            $newComic->description = $product['description'];
            $newComic->price = $product['price'];
            $newComic->type = $product['type'];
            $newComic->sale_date = $product['sale_date'];
            $newComic->save();
        } 
    }
}
