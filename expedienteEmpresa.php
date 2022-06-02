<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
      header('Location: index.php');
      exit();
    }
    require './partials/historial.php';
    $des = "EXPEDIENTE EMPRESA.";
    nvo($des);
    require 'bd.php';
    $idBusqueda=$_GET["id"];
    $sql = "SELECT idEmpresa, nombre, fechaFundacion, giroEmpresa, regimenF, edificio, idDireccion, telefono, mail, repLegal, rfc FROM Empresa WHERE idEmpresa=$idBusqueda";
    $sqlEmpresa = mysqli_query($conn, $sql);
    $rowEmpresa = mysqli_fetch_assoc($sqlEmpresa);
    $idDireccion = $rowEmpresa['idDireccion'];
    $sql2 = "SELECT idDireccion, calle, noExterior, noInterior, cp, colonia, municipio, estado FROM Direccion WHERE idDireccion=$idDireccion";
    $sqlDireccion = mysqli_query($conn, $sql2);
    $rowDireccion = mysqli_fetch_assoc($sqlDireccion);
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
        <div class="col-sm-6"><p id="direccion"><?php echo $rowDireccion['calle']?></p></div>
        <!-- Número exterior e interior -->
        <div class="col-sm-3"><p class="campo">Número exterior:</p></div>
        <div class="col-sm-3"><p id="numeroExterior"><?php echo $rowDireccion['noExterior']?></p></div>
        <div class="col-sm-3"><p class="campo">Número interior:</p></div>
        <div class="col-sm-3"><p id="numeroInterior"><?php if($rowDireccion['noInterior']==NULL) echo $rowDireccion['noInterior'];?></p></div>
        <!-- Colonia y municipio -->
        <div class="col-sm-3"><p class="campo">Colonia:</p></div>
        <div class="col-sm-3"><p id="colonia"><?php echo $rowDireccion['colonia']?></p></div>
        <div class="col-sm-3"><p class="campo">Municipio:</p></div>
        <div class="col-sm-3"><p id="municipio"><?php echo $rowDireccion['municipio']?></p></div>
        <!-- Estado y CP -->
        <div class="col-sm-3"><p class="campo">Estado:</p></div>
        <div class="col-sm-3"><p id="estado"><?php echo $rowDireccion['estado']?></p></div>
        <div class="col-sm-3"><p class="campo">Código postal:</p></div>
        <div class="col-sm-3"><p id="codigoPostal"><?php echo $rowDireccion['cp']?></p></div>
      </div>
      <!-- Título - Contacto -->
      <div class="row expediente-1">
            <div class="col-sm-12 titulo"><h1>Contacto</h1></div>
          </div>
          <div class="row gy-3 expediente-2">
        <!-- Email -->
        <div class="col-sm-6"><p class="campo">Email:</p></div>
        <div class="col-sm-6"><p id="email"><?php echo $rowEmpresa['mail']?></p></div>
        <!-- Representante legal -->
        <div class="col-sm-6"><p class="campo">Representante legal:</p></div>
        <div class="col-sm-6"><p id="representanteLegal"><?php echo $rowEmpresa['repLegal']?></p></div>
        <!-- Telefono -->
        <div class="col-sm-6"><p class="campo">Telefono:</p></div>
        <div class="col-sm-6"><p id="telefono"><?php echo $rowEmpresa['telefono']?></p></div>
        <!-- RFC -->
        <div class="col-sm-6"><p class="campo">RFC:</p></div>
        <div class="col-sm-6"><p id="rfc"><?php echo $rowEmpresa['rfc']?></p></div>
      </div>
      <div class="row py-3">
        <a href='./empresasEdit.php' class="btn btn-guardar btn-lg">Volver</a>
      </div>
    </div>


    <!--Footer-->
    <?php require 'partials/footerIn.php'; ?>

  </body>

</html>
