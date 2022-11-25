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
<header>
  <a href="https://usm.cl/"><img class="img" src="https://th.bing.com/th/id/R.251a9d2e3cac8778f24cb3c75b08e80a?rik=J3a%2fWahYsZobrg&riu=http%3a%2f%2fvacadem.uis.edu.co%2feisi%2fimages%2fGrupos%2fG1%2ficonos%2f20200729154839-logo-universidad-tecnica-federico-santa-maria-nwb.png&ehk=IgwMCfOR7%2b2gW2J2cBPgTqMAdGuNnDmqrLdMjIXfaV4%3d&risl=&pid=ImgRaw&r=0"></a>
</header>
  <p>
    Bienvenid@ a la interfaz de reserva de salas, en ella podras adjuntar tu excel, buscar salas, modificar las celdas y eliminar el excel adjuntado en nuestra Pagina Web.
  </p>
  <p class="p2">
    Para usar la web adjunte su excel haciendo click en "Elegir archivo" selecciona su excel correspondiente, recordar cambiar el formato a "csv", luego hacer click en "subir", pasara a la interfaz de validacion, hacer click en atras y podra verificar ya su excel adjuntado exitosamente.
  </p>
  <form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data"/>
    <input  type="file" name="dataSala" id="file-input" class="file-input__input"/>
    <input type="submit" name="subir" class="btn-enviar" value="Subir Excel"/>
  </form>
  <a href="../index.php"><input type="submit" name="subir" class="btn-enviar" value="Volver atras"/></a>
  <?php 
  header("Content-Type: text/html;charset=utf-8");
  include('config.php');
  $sqlSalas = ("SELECT * FROM salas ORDER BY id ASC");
  $queryData   = mysqli_query($con, $sqlSalas);
  $total_sala = mysqli_num_rows($queryData);
  ?>
      <h6>Cantidad de hileras registradas : <strong>(<?php echo $total_sala; ?>)</strong></h6>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Fecha de realizacion de clases</th>
              <th>Hora de evento desde</th>
              <th>Hora de evento hasta</th>
              <th>Sala</th>
              <th>Tipo de evento</th>
              <th>Profesor responsable</th>
              <th>Quien solicita</th>
              <th>Fecha solicitud</th>
              <th>Telefono contacto</th>
              <th>Material sala</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            while ($data = mysqli_fetch_array($queryData)) { ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $data['fecha_real_clase']; ?></td>
              <td><?php echo $data['hora_desde']; ?></td>
              <td><?php echo $data['hora_hasta']; ?></td>
              <td><?php echo $data['sala']; ?></td>
              <td><?php echo $data['tipo_evento']; ?></td>
              <td><?php echo $data['profesor_resp']; ?></td>
              <td><?php echo $data['quien_solicita']; ?></td>
              <td><?php echo $data['fecha_solicitud']; ?></td>
              <td><?php echo $data['telefono_con']; ?></td>
              <td><?php echo $data['material_sala']; ?></td>
              <td><?php echo $data['observaciones']; ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
</div>

</body>
</html>