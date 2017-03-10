<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aprendiz extends Model
{
   protected $table = 'aprendiz';
   protected $fillable=['Nombre','Apellido','Identificacion','Telefono','Correo','Direccion','Genero'];
   protected $primaryKey = 'Id_aprendiz';

}
