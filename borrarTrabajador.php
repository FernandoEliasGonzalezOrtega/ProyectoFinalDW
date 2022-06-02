<?php 
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header('Location: index.php');
        exit();
    }
    
    include ("bd.php");
    $id=$_GET["id"];
    $sql = "UPDATE Empleado SET estatus=0 WHERE noTrabajador=$id";
    mysqli_query($conn, $sql);
    header('Location: trabajadoresEdit.php');

    require './partials/historial.php';
    $des = "SE BORRÓ EL TRABAJADOR $id";
    nvo($des);
?>