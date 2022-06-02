<?php
  @session_start();
  function nvo($des){
    //Esta función recibe una descripción de cada página donde se encuentra el ususario
    date_default_timezone_set('America/Mexico_City');
    require 'bd.php';
    $usuarioh = $_SESSION['user_id'];
    $fecha = date('Y-m-d H:i:s');
    //Una vez tomado el usuario,la fecha exacta con hora y la descripción, se agrega
    //al historial 
    $sql = "INSERT INTO Historial (usuario,fecha,descripcion) VALUES ('$usuarioh','$fecha','$des')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
?>
