<?php
/**@file(Aqui encontramos los modelos de la tabla programas de formacion)
@date:24/03/2017
@brief:funcion up (campos programa de formacion)
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 @param variables de las tablas  y protege sus campos de registro        
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProgramasDeFormacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('Programa_de_formacion', function (Blueprint $table) {
            $table->increments('Id_programa_de_formacion');
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
