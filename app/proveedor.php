<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
   protected $fillable=['Nombre','Apellido','Direccion','Telefono','Correo','Fax','Identificacion'];
}

					