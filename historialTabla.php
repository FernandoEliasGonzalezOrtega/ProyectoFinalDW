<?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
  }
  require './partials/historial.php';
  $des = "CONSULTÓ HISTORIAL";
  nvo($des);
    function Updhistorial(){
        require 'bd.php';
        $sql = "SELECT usuario, fecha, descripcion FROM Historial ORDER BY fecha DESC ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->bind_result($usuario, $fecha, $descripcion);
      //Función para llenar la tabla de el historial
        while ($stmt->fetch()) {
           echo "<div class='row'><div class='col-sm-4'><p>".$usuario."</p></div><div class='col-sm-4'><p>".$fecha."</p></div><div class='col-sm-4'><p>".$descripcion."</p></div></div>";
        }
    }    
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Historial</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src='./assets/js/script.js'></script>
</head>
<body class="bg-C">
  <!--Header-->
  <?php require 'partials/headerIn.php'; ?>
  <div class="container">

  <!-- Títulos de tabla -->
  <div class="container history">
    <div class="row">
      <div class="col-sm-4"><h2>Usuario</h2></div>
      <div class="col-sm-4"><h2>Última conexión</h2></div>
      <div class="col-sm-4"><h2>Actividad</h2></div>
    </div>
  </div>

  <!-- Historial de trabajadores -->
  <div class="container history-t table-scroll" tabindex="0" id="historial">
    <div class="row gy-1"> <!-- Usamos la clase gy-5 para el espaciado vertical de las filas -->
      <!-- Usuario 1 -->
      <?php Updhistorial()?>
    </div>  
  </div>
  <div class="container">
    <div class="row py-3">
        <a href='./trabajadoresEdit.php' class="btn btn-guardar btn-lg">Volver</a>
    </div>
  </div>
  </div>

  <!--Footer-->
  <?php require 'partials/footerIn.php'; ?>  
</body>
</html>
