<?php
/**@file(Aqui encontramos los modelos de la tabla password(contraseña))
@date:24/03/2017
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 @param variables de las tablas  y protege su campos de registro        
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('password_resets');
    }
}
