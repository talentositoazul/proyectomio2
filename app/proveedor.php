<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
  	protected $table = 'proveedor';
   protected $fillable=['Nombre','Apellido','Direccion','Telefono','Correo','Fax','Identificacion'];
   protected $primaryKey = 'Id_proveedor';
}

					