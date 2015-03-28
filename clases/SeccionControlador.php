<?php
class SeccionControlador extends Secion{
	public function guardarDatos($con,$objseccion){
		$variableSql = "INSERT INTO  seccion";
		$variableSql .= "(id,nombre,escuela)";
		$variableSql .= "VALUES(";
			$variableSql.="'".$objseccion[0]. "',";
			$variableSql.="'".$objseccion[1]. "',";
			$variableSql.="'".$objseccion[2]. "');";
 return consultaA($con; $con, $variableSql);

	}
}