<?php
/**@file(Aqui encontramos los modelos de la tabla proveedor)
@date:24/03/2017
@author:Steven Lozano
        Cristhian Rodriguez
        Robinson Barrera 
  @param variables de la tabla proveedor,modelos y protege sus campos de registro       
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
  	protected $table = 'proveedor';
   protected $fillable=['Nombre','Apellido','Direccion','Telefono','Correo','Fax','Identificacion'];
   protected $primaryKey = 'Id_proveedor';
}

					