<?php

/**@file(Esta es la vista de formulario productos)
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
    @param Variables y funciones de los Id   */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin titulo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action=" ">
{!!csrf_field()!!}
  <table width="253" border="1">
    <tr>
     <td width=80">Referencia</td>
      <td width="157"><label>
        <input  name="referencia" type="text" id="referencia" />
      </label></td>
    </tr>
    <tr>
      <td>Categoria</td>
      <td><input name="categoria"  type="text" id="categoria" /></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><input name="precio" type="text" id="precio" /></td>
    </tr>
   
    <tr>
      <td><label>
        <input type="submit" name="Submit" value="Actualizar" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
