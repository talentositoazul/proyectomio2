<?php
/**@file(Aqui encontramos los modelos de la tabla proveedor)
@date:24/03/2017
@brief:funcion up (campos proveedor)
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 @param variables de las tablas  y protege sus campos de registro        
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proveedor', function (Blueprint $table) {
            $table->increments('Id_proveedor');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Correo');
            $table->string('Fax');
            $table->string('Identificacion');
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
