<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM salas";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usm.cl</title>
    <link rel="StyleSheet" href="../Style/CSS.css" type="text/css">
</head>
<body>
<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/Logo_UTFSM.png">
    <h2 class="h2">Universidad Técnica Federico Santa María</h2>
</header>
<header>
    <h2 class="h2">Campus Vitacura.</h2>
    <a  class="a_v" href="../../index.php"><input type="submit" value="volver atras"></a>
</header> 
    <form action="insertar.php" method="POST" enctype="multipart/formdata" class="form1" required>
            <input type="text"  name="fecha_real_clase" placeholder="Fecha realizacion clase">
            <input type="text"  name="hora_desde" placeholder="Hora desde">
            <input type="text"  name="hora_hasta" placeholder="Hora hasta">
            <input type="text" name="sala" placeholder="Sala">
            <input type="text"  name="tipo_evento" placeholder="Tipo de evento">
            <input type="text"  name="profesor_resp" placeholder="Profesor responsable">
            <input type="text"  name="quien_solicita" placeholder="quien lo solicita">
            <input type="text" name="fecha_solicitud" placeholder="Fecha solicitud">
            <input type="text"  name="telefono_con" placeholder="Telefono contacto">
            <input type="text"  name="material_sala" placeholder="Material de Sala">
            <input type="text"  name="observaciones" placeholder="Observaciones" class="obser">
        <input type="submit" value="Generar reserva">
    </form>
    <form class="form2" action="" method="get">
        <input type="text" name="busqueda" placeholder="Busca por sala o si deseas borrar la busqueda haz click en el buscador y luego enter" class="google"><br>
        <input type="submit" name="enviar" value="buscar"> 
    </form>

    <br><br><br>

    <?php

    if(isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta = $con->query("SELECT * FROM salas WHERE sala LIKE '$busqueda'");

        while ($row = $consulta->fetch_array()) {
            echo '<tbody><table class="mini_table">';
            echo '<th>';
            echo $row['id'].'</th>';
            echo '<th>';
            echo $row['fecha_real_clase'].'</th>';
            echo '<th>';
            echo $row['hora_desde'].'</th>';
            echo '<th>';
            echo $row['hora_hasta'].'</th>';
            echo '<th>';
            echo $row['sala'].'</th>';
            echo '<th>';
            echo $row['tipo_evento'].'</th>';
            echo '<th>';
            echo $row['profesor_resp'].'</th>';
            echo '<th>';
            echo $row['quien_solicita'].'</th>';
            echo '<th>';
            echo $row['fecha_solicitud'].'</th>';
            echo '<th>';
            echo $row['telefono_con'].'</th>';
            echo '<th>';
            echo $row['material_sala'].'</th>';
            echo '<th>';
            echo $row['observaciones'].'</th></table></tbody>';
            
        }
    }
    ?>
    <table>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr class="tr_m">
                        <th><?php  echo $row['id']?></th>
                        <th><?php  echo $row['fecha_real_clase']?></th>
                        <th><?php  echo $row['hora_desde']?></th>
                        <th><?php  echo $row['hora_hasta']?></th>
                        <th><?php  echo $row['sala']?></th>
                        <th><?php  echo $row['tipo_evento']?></th>
                        <th><?php  echo $row['profesor_resp']?></th>
                        <th><?php  echo $row['quien_solicita']?></th>
                        <th><?php  echo $row['fecha_solicitud']?></th>
                        <th><?php  echo $row['telefono_con']?></th>
                        <th><?php  echo $row['material_sala']?></th>
                        <th><?php  echo $row['observaciones']?></th>
                        <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" >Modificar reserva</a></th>
                        <th><a href="delete.php?id=<?php echo $row['id'] ?>" >Eliminar reserva</a></th>                                          
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
    </table>
</body>
</html>