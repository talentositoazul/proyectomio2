<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa_de_formacion extends Model
{
	protected $table = 'programa_de_formacion';
    protected $fillable=['Descripcion'];
     protected $primaryKey = 'Id_programa_de_formacion';
}
