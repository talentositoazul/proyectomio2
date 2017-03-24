<?php
/**@file(Aqui encontramos los modelos de la tabla programa_de_formacion)
@date:24/03/2017
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class programa_de_formacion extends Model
{
	protected $table = 'programa_de_formacion';
    protected $fillable=['Descripcion'];
     protected $primaryKey = 'Id_programa_de_formacion';
}
