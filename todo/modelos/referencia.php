<?php
/**@file(Aqui encontramos los modelos de la tabla referencia)
@date:24/03/2017
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 @param variables de la tabla referencia,modelos y protege su campo de registro        
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class referencia extends Model
{
	protected $table = 'referencia';
    protected $fillable=['Descripcion'];
     protected $primaryKey = 'Id_referencia';
}
