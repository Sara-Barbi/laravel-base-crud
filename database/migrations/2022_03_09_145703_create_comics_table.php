<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',80);
            $table->string('series',80);
            $table->string('thumb');
            $table->text('description');
            $table->string('price');
            $table->string('type',80);
            $table->string('sale_date');
            $table->timestamps();
        });
    }
    //ogni volta che fai php artisan migrate:reset 
    //e ogniu volta che fai php artisan migrate
    //RICORDATI DI LANCIARE DI NUOVO IL SEEDER
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
