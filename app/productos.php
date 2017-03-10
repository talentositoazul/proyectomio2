<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
	protected $table = 'productos';
    protected $fillable=['Referencia','Categoria','Precio'];
    protected $primaryKey = 'Id_productos';
}

		