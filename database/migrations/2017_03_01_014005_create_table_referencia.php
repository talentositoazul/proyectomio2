<?php
/**@file(Aqui encontramos los modelos de la tabla referencia)
@date:24/03/2017
@brief:funcion up (campos referencia)
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 @param variables de las tablas  y protege sus campos de registro        
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReferencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Referencia', function (Blueprint $table) {
            $table->increments('Id_referencia');
            $table->string('Descripcion');
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
