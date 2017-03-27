<?php
/**@file(Aqui encontramos los modelos de la tabla productos)
@date:24/03/2017
@brief:funcion up (campos productos)
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 @param variables de las tablas  y protege sus campos de registro        
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Productos', function (Blueprint $table) {
            $table->increments('Id_productos');
            $table->string('Referencia');
            $table->string('Categoria');
            $table->string('Precio');
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
