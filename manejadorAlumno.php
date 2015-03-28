<?php

$alumnoA = new AlumnoControlador();
$accion = $_REQUEST['acccion'];



switch ($acccion){

    case 'save':

    if(isset($_REQUEST['bot'])){
    $alumnoA->setId('NULL');
    $alumnoA->setNombre($_REQUEST['nombre']);
    $alumnoA->setApellido($_REQUEST['apellido']);
    $alumnoA->setCarnet($_REQUEST['carnet']);
    $alumnoA->setDir($_REQUEST['dir']);
    $alumnoA->setFechaNac($_REQUEST['fecha_nac']);
    $alumnoA->setSeccion($_REQUEST['seccion']);
    $datosObj=array($alumnoA->getId(),
                    $alumnoA->getNombre(),
                    $alumnoA->getApellido(),
                    $alumnoA->getFechaNac(),
                    $alumnoA->getDir(),
                    $alumnoA->getCarnet(),
                 $alumnoA->getSeccion());
    print $alumnoA->guardarDatos($datosObj);
    print '<a href=\'manejadorAlumno.php?accion=con\'>ver datos</a>';
}else{
    print 'No se ha enviado datos ';
    
}
   break;
   case 'con':
   $sql = 'SELECT * FROM  alimno';
   print consultaD($con,$sql,2, TRUE);
   break;
   case 'del':
        $sql = 'DELETE FROM alumno WHERE id ='. $_REQUEST['id'].';';
        print consultaA($con,$sql);
        break; 
        default:
        print 'No hay accion que realizar';
        break;
}
