<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM salas WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime</title>
    <link rel="StyleSheet" href="../Style/cs.css" type="text/css">
</head>
<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/Logo_UTFSM.png">
    <h2 class="h2">Universidad Técnica Federico Santa María</h2>
</header>
<header>
    <h2 class="h2">Campus Vitacura.</h2>
</header> 
    <body>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
            <input type="text"  name="fecha_real_clase" placeholder="Fecha realizacion clase" value="<?php echo $row['fecha_real_clase']  ?>">
            <input type="text"  name="hora_desde" placeholder="Hora desde" value="<?php echo $row['hora_desde']  ?>">
            <input type="text"  name="hora_hasta" placeholder="Hora hasta" value="<?php echo $row['hora_hasta']  ?>">
            <input type="text" name="sala" placeholder="Sala" value="<?php echo $row['sala']  ?>">
            <input type="text"  name="tipo_evento" placeholder="Tipo de evento" value="<?php echo $row['tipo_evento']  ?>">
            <input type="text"  name="profesor_resp" placeholder="Profesor responsable" value="<?php echo $row['profesor_resp']  ?>">
            <input type="text"  name="quien_solicita" placeholder="quien lo solicita" value="<?php echo $row['quien_solicita']  ?>">
            <input type="text" name="fecha_solicitud" placeholder="fecha solicitud" value="<?php echo $row['fecha_solicitud']  ?>">
            <input type="text"  name="telefono_con" placeholder="Telefono contacto" value="<?php echo $row['telefono_con']  ?>">
            <input type="text"  name="material_sala" placeholder="Material de Sala" value="<?php echo $row['material_sala']  ?>">
            <input type="text"  name="observaciones" placeholder="Observaciones" value="<?php echo $row['observaciones']  ?>">
            <input type="submit" value="Actualizar">
        </form>
    </body>
</html>