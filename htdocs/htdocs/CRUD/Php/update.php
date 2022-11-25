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

$sql="UPDATE salas SET  fecha_real_clase='$fecha_real_clase', hora_desde='$hora_desde', hora_hasta='$hora_hasta', 
sala='$sala', tipo_evento='$tipo_evento', profesor_resp='$profesor_resp', quien_solicita='$quien_solicita', fecha_solicitud='$fecha_solicitud', telefono_con='$telefono_con',
material_sala='$material_sala', observaciones='$observaciones' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Administrador.php");
    }
?>