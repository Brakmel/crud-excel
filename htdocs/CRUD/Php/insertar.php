<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$fecha_real_clase=$_POST['fecha_real_clase'];
$hora_desde=$_POST['hora_desde'];
$hora_hasta=$_POST['hora_hasta'];
$sala=$_POST['sala'];
$tipo_evento=$_POST['tipo_evento'];
$profesor_resp=$_POST['profesor_resp'];
$quien_solicita=$_POST['quien_solicita'];
$fecha_solicitud=$_POST['fecha_solicitud'];
$telefono_con=$_POST['telefono_con'];
$material_sala=$_POST['material_sala'];
$observaciones=$_POST['observaciones'];

$sql="INSERT INTO salas VALUES('$id','$fecha_real_clase','$hora_desde','$hora_hasta','$sala','$tipo_evento','$profesor_resp','$quien_solicita','$fecha_solicitud','$telefono_con','$material_sala','$observaciones')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Administrador.php");
    
}else { echo "No se pudo insertar";
}
?>