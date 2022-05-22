<?php
  @session_start();
  function nvo($des){
    date_default_timezone_set('America/Mexico_City');
    require 'bd.php';
    $usuarioh = $_SESSION['user_id'];
    $fecha = date('Y-m-d H:i:s');
    $sql = "INSERT INTO Historial (usuario,fecha,descripcion) VALUES ('$usuarioh','$fecha','$des')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
?>
