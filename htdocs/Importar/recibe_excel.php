<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>usm.cl</title>
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="icon" href="img/Logo_UTFSM.ico">
</head>
<body>
<?php
require('config.php');
$tipo       = $_FILES['dataSala']['type'];
$tamanio    = $_FILES['dataSala']['size'];
$archivotmp = $_FILES['dataSala']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
       
        $fecha_real_clase                = !empty($datos[0])  ? ($datos[0]) : '';
		$hora_desde                      = !empty($datos[1])  ? ($datos[1]) : '';
        $hora_hasta                      = !empty($datos[2])  ? ($datos[2]) : '';
        $sala                            = !empty($datos[3])  ? ($datos[3]) : '';
        $tipo_evento                     = !empty($datos[4])  ? ($datos[4]) : '';
        $profesor_resp                   = !empty($datos[5])  ? ($datos[5]) : '';
        $quien_solicita                  = !empty($datos[6])  ? ($datos[6]) : '';
        $fecha_solicitud                 = !empty($datos[7])  ? ($datos[7]) : '';
        $telefono_con                    = !empty($datos[8])  ? ($datos[8]) : '';
        $material_sala                   = !empty($datos[9])  ? ($datos[9]) : '';
        $observaciones                   = !empty($datos[10])  ? ($datos[10]) : ''; 

    $insertar = "INSERT INTO salas( 
            fecha_real_clase,
			hora_desde,
            hora_hasta,
            sala,
            tipo_evento,
            profesor_resp,
			quien_solicita,
            fecha_solicitud,
            telefono_con,
            material_sala,
            observaciones
        ) VALUES(
            '$fecha_real_clase',
			'$hora_desde',
            '$hora_hasta',
            '$sala',
            '$tipo_evento',
            '$profesor_resp',
			'$quien_solicita',
            '$fecha_solicitud',
            '$telefono_con',
            '$material_sala',
            '$observaciones'
        )";
        mysqli_query($con, $insertar);
    }

      echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}


echo '<p style=" font-size:15ex; text-aling:center; color:#005E90;">Total de hileras registradas exitosamente: '. $cantidad_regist_agregados .'</p>';

?>

<a class="a" href="index.php">Regresar a la interfaz</a>
</body>