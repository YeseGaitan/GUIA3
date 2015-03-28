<html>

<head>
	<meta charset = "utf-8">
	<title>Formulario de captura</title>
</head>

<body>
<form action= "manejadorSeccion.php?accion=save" method="post">

	<table>
		<tr>
  <td>
  	 Nombre:
  </td>
  <td>
     <input type="text" name= "nombre">
  </td>
		</tr>

		<tr>
  <td>
  	 Escuela:
  </td>
  <td>
     <select name='seccion'>
     	<option value=""></option>
     	<option value= "sistemas">Sistemas</option>
     	<option value= "manto">Mantenimiento</option>
     </select>
  </td>
		</tr>
		<tr>
			<td colspan="2">
            <input type= "submit" name= 'bot' value= 'Enviar'>
			</td>

		</tr>

	</table>
</form>
</body>
</html>