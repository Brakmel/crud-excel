<?php

include("conexion.php");
$con=conectar();

$sql="DELETE FROM salas";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Administrador.php");
    }
?>