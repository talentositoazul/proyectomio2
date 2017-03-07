<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Peliculas' , function(Blueprint $table)
        {
        $table->increments('Id');
        $table->string('Titulo');
        $table->string('Genero');
        $table->string('Protagonista');
        $table->string('Idioma');
        $table->string('Duracion');
        $table->timestamps();
        });
    
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
