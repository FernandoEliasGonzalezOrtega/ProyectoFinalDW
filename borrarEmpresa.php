<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: index.php');
        exit();
    }
    include ("bd.php");
    $id=$_GET["id"];
    $sql = "UPDATE Empresa SET estatus=0 WHERE idEmpresa=$id";
    mysqli_query($conn, $sql);
    header('Location: empresasEdit.php');
    require './partials/historial.php';
    $des = "SE BORRÓ LA EMPRESA $id";
    nvo($des);
?>
