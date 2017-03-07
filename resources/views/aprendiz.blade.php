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
      <td width="80">Nombre</td>
      <td width="157"><label>
        <input name="nombre" type="text" id="nombre" />
      </label></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><input name="apellido" type="text" id="apellido" /></td>
    </tr>
    <tr>
      <td>Identificacion</td>
      <td><input name="identificacion" type="text" id="identificacion" /></td>
    </tr>
    <tr>
      <td>Telefono</td>
      <td><input name="telefono" type="text" id="telefono" /></td>
    </tr>
    <tr>
      <td>Correo</td>
      <td><input name="correo" type="text" id="correo" /></td>
    </tr>
    <tr>
      <td>Direccion</td>
      <td><input name="direccion" type="text" id="direccion" /></td>
    </tr>
    <tr>
      <td>Genero</td>
      <td><input name="genero" type="text" id="genero" /></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="Submit" value="Registrarse" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
