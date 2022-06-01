<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit();
}
require './partials/historial.php';
$des = "EXPEDIENTE EMPRESAS.";
nvo($des);

require 'bd.php';
  $idBusqueda=2; 
  $sql = "SELECT idEmpresa, nombre, fechaFundacion, giroEmpresa, regimenF, edificio, idDireccion, telefono, mail, repLegal, rfc FROM Empresa WHERE idEmpresa=$idBusqueda";
  $sqlEmpresa = mysqli_query($conn, $sql);
  $rowEmpresa = mysqli_fetch_assoc($sqlEmpresa);
  $idDireccion = $rowEmpresa['idDireccion'];
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Expediente de empresa</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src='./assets/js/script.js'></script>
  </head>

  <body class="bg-C">

    <!--Header-->
    <?php require 'partials/headerIn.php'; ?>

    <!-- Expediente-título -->
    <div class="container">
      <div class="row expediente-1">
        <div class="col-sm-12 titulo"><h1>Empresa</h1></div>
      </div>
    </div>
    <!-- Expediente-datos -->
    <div class="container">
      <div class="row gy-3 expediente-2">
        <!-- Nombre -->
        <div class="col-sm-6"><p class="campo">Nombre / Razon Social:</p></div>
        <div class="col-sm-6"><p id="nombre"><?php echo $rowEmpresa['nombre']?></p></div>
        <!-- Fecha de fundacion-->
        <div class="col-sm-6"><p class="campo">Fecha de fundacion:</p></div>
        <div class="col-sm-6"><p id="fechaFundacion"><?php echo $rowEmpresa['fechaFundacion']?></p></div>
        <!-- Giro empresarial -->
        <div class="col-sm-6"><p class="campo">Giro empresarial:</p></div>
        <div class="col-sm-6"><p id="giroEmpresarial"><?php echo $rowEmpresa['giroEmpresa']?></p></div>
        <!-- Regimen Fiscal -->
        <div class="col-sm-6"><p class="campo">Regimen fiscal:</p></div>
        <div class="col-sm-6"><p id="regimenFiscal"><?php echo $rowEmpresa['regimenF']?></p></div>
        <!-- Edificio -->
        <div class="col-sm-6"><p class="campo">Edificio:</p></div>
        <div class="col-sm-6"><p id="edificio"><?php echo $rowEmpresa['edificio']?></p></div>
      </div>
      <!-- Título - domicilio fiscal -->
          <div class="row expediente-1">
            <div class="col-sm-12 titulo"><h1>Domicilio fiscal</h1></div>
          </div>
      <div class="row gy-3 expediente-2">
        <!-- Dirección -->
        <div class="col-sm-6"><p class="campo">Calle:</p></div>
        <div class="col-sm-6"><p id="direccion"><?php?></p></div>
        <!-- Número exterior e interior -->
        <div class="col-sm-3"><p class="campo">Número exterior:</p></div>
        <div class="col-sm-3"><p id="numeroExterior"><?php?></p></div>
        <div class="col-sm-3"><p class="campo">Número interior:</p></div>
        <div class="col-sm-3"><p id="numeroInterior"><?php?></p></div>
        <!-- Colonia y municipio -->
        <div class="col-sm-3"><p class="campo">Colonia:</p></div>
        <div class="col-sm-3"><p id="colonia"><?php?></p></div>
        <div class="col-sm-3"><p class="campo">Municipio:</p></div>
        <div class="col-sm-3"><p id="municipio"><?php?></p></div>
        <!-- Estado y CP -->
        <div class="col-sm-3"><p class="campo">Estado:</p></div>
        <div class="col-sm-3"><p id="estado"><?php?></p></div>
        <div class="col-sm-3"><p class="campo">Código postal:</p></div>
        <div class="col-sm-3"><p id="codigoPostal"><?php?></p></div>
      </div>
      <!-- Título - Contacto -->
      <div class="row expediente-1">
            <div class="col-sm-12 titulo"><h1>Contacto</h1></div>
          </div>
          <div class="row gy-3 expediente-2">
        <!-- Email -->
        <div class="col-sm-6"><p class="campo">Email:</p></div>
        <div class="col-sm-6"><p id="email"><?php echo $mail?></p></div>
        <!-- Representante legal -->
        <div class="col-sm-6"><p class="campo">Representante legal:</p></div>
        <div class="col-sm-6"><p id="representanteLegal"><?php echo $rep?></p></div>
        <!-- Telefono -->
        <div class="col-sm-6"><p class="campo">Telefono:</p></div>
        <div class="col-sm-6"><p id="telefono"><?php echo $telefono?></p></div>
        <!-- RFC -->
        <div class="col-sm-6"><p class="campo">RFC:</p></div>
        <div class="col-sm-6"><p id="telefono"><?php echo $rfc?></p></div>
      </div>
      <div class="row py-3">
        <a href='./empresasEdit.php' class="btn btn-guardar btn-lg">Volver</a>
      </div>
    </div>


    <!--Footer-->
    <?php require 'partials/footerIn.php'; ?>

  </body>

</html>
