<?php
  @session_start();
  require './partials/historial.php';
  $des = "CERRÓ SESIÓN.";
  nvo($des);
  session_destroy();
  header("Location: index.php");
  exit();
?>
