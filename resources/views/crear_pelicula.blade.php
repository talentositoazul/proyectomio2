<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin titulo</title>
</head>

<body>
<form id="form1" name="form1" method="Post" action="{{url('crear_pelicula')}}">
{!!csrf_field()!!}

  <table width="246" border="1">
    <tr>
      <td width="75">Titulo</td>
      <td width="155"><label>
        <input name="Titulo" type="text" id="Titulo" />
      </label></td>
    </tr>
    <tr>
      <td>Genero</td>
      <td><label>
        <select name="Genero" id="Genero">
          <option value="Seleccione">Seleccione</option>
          <option value="Terror ">Terror </option>
          <option value="Accion">Accion</option>
          <option value="Suspenso">Suspenso</option>
          <option value="Ficcion">Ficcion</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Protagonista</td>
      <td><input name="Protagonista" type="text" id="Protagonista" /></td>
    </tr>
    <tr>
      <td>Idioma</td>
      <td><input name="Idioma" type="text" id="Idioma" /></td>
    </tr>
    <tr>
      <td>Duracion</td>
      <td><input name="Duracion" type="text" id="Duracion" /></td>
    </tr>
    <tr>
      <td><label>
      <input type="Submit" name="Submit" value="Enviar" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
