<?php
/**@file(Aqui encontramos los modelos de la tabla aprendiz)
@date:24/03/2017
@brief:funcion up (campos aprendiz)
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 @param variables de las tablas  y protege sus campos de registro        
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendiz', function (Blueprint $table) {
            $table->increments('Id_aprendiz');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Identificacion');
            $table->string('Telefono');
            $table->string('Correo');
            $table->string('Direccion');
            $table->string('Genero');
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
        
    }
}
