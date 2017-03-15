<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class referencia extends Model
{
	protected $table = 'referencia';
    protected $fillable=['Descripcion'];
     protected $primaryKey = 'Id_referencia';
}
