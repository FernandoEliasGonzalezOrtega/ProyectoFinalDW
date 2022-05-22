<?php
  @session_start();
  require 'bd.php';
  $usuario = $_SESSION['user_id'];
  $fecha = date('Y-m-d H:i:s');
  $des = "CERRÓ SESIÓN.";
  $sql = "INSERT INTO Historial (usuario,fecha,descripcion) VALUES ('$usuario','$fecha','$des')";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  session_destroy();
  header("Location: index.php");
  exit();
?>
