<?php
/**@file(Aqui encontramos los modelos de la tabla productos)
@date:24/03/2017
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 

  @param variables de la tabla producto,modelos y protege sus campos de registro       
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
	protected $table = 'productos';
    protected $fillable=['Referencia','Categoria','Precio'];
    protected $primaryKey = 'Id_productos';
}

		