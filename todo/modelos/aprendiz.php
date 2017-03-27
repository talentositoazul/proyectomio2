<?php
/**@file(Aqui encontramos los modelos de la tabla aprendiz)
@date:24/03/2017
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
 @param variables de la tabla aprendiz,modelos y protege sus campos de registro      
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class aprendiz extends Model
{
   protected $table = 'aprendiz';
   protected $fillable=['Nombre','Apellido','Identificacion','Telefono','Correo','Direccion','Genero'];
   protected $primaryKey = 'Id_aprendiz';

}
