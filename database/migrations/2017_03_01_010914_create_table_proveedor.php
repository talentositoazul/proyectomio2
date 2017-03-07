<?php

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
