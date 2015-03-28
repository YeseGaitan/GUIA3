<?php

$dsn = 'mysql:dbname=alumnos;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $con = new POD($dsn,$usuario,$clave);
} catch (PODException $e){
    print $e->getTraceAsString();
}

function consultaA($coneccion, $sql){
    $ejecutar = $coneccion;
    $msgok = NULL;
    $msgerror = NULL;

    try {
       $coneccion = strstr(trim($sql),"", TRUE);

       switch ($coneccion) {
             case "INSERT":
             $msgerror  = "No se ha podido insertar los datos";
             $msgok = "Datos insertados";
             break;

             case "DELETE":
             $msgerror = "No se ha podido eliminar los datos";
             $msgok = "Datos eliminados";
             break;

             case "UPDATE";
             $msgerror = "No se ha podido actualizar datos";
             $msgok = "Datos actualizados";
             break;

             default:
             $msgerror = "Es pocible que no use un estandar de consulta sql";
             break;

         $ejecutar->beginTransaction();
         $fila = $ejecutar->exec($sql);
         $ejecutar->commit();

         if ($fila == 0){
            $msgok = $msgerror . "<br> No existe coincidencia para realizar la accion";
         }
         return $msgok. "Filas afectadas".$fila;
       }
    }catch (Exception $exc){
        $ejecutar->rollBack();
        return $msgerror. ":(<bre>".$exs->getMessage();

    }

    function consultaD($coneccion, $sql,$modo=2,$presentacion=FALSE){
        $ejecutar = $coneccion;
        $manejador = trim($sql);
        $devolucion = "";

        try{
       $datos = $ejecutar->query($manejador);
       $datos ->setFetchmode($modo);

       if($presentacion ==TRUE){

       }else{
        $devolucion .="<table border=1>";

        foreach ($datos->fetchAll() as $registros) {
        $devolucion.="<td>".$valor.">/td>";
        }
       }
       $devolucion.="</table>";
       $contenedor = $datos->fetchAll();
       $devolucion=$contenedor;
        } catch (Exception $exc){
        return "No se pudieron conlsultar los datos<br/>".$exec->getMessage();
         }
         return $devolucion;
}