<<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit();
}
require './partials/historial.php';
$des = "EXPEDIENTE EMPRESAS.";
nvo($des);
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

  <body class="bg-C" onload={actualizarExpedienteEmpresa()}>

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
        <!-- Id Empresa -->
        <div class="col-sm-6"><p class="campo">Número de empresa:</p></div>
        <div class="col-sm-6"><p id="idEmpresa"></p></div>
        <!-- Nombre -->
        <div class="col-sm-6"><p class="campo">Nombre / Razon Social:</p></div>
        <div class="col-sm-6"><p id="nombre"></p></div>
        <!-- Fecha de fundacion-->
        <div class="col-sm-6"><p class="campo">Fecha de fundacion:</p></div>
        <div class="col-sm-6"><p id="fechaFundacion"></p></div>
        <!-- Giro empresarial -->
        <div class="col-sm-6"><p class="campo">Giro empresarial:</p></div>
        <div class="col-sm-6"><p id="giroEmpresarial"></p></div>
<<<<<<< Updated upstream
        <!-- Regimen Fiscal -->
        <div class="col-sm-6"><p class="campo">Regimen fiscal:</p></div>
        <div class="col-sm-6"><p id="regimenFiscal"></p></div>
        <!-- Edificio -->
        <div class="col-sm-6"><p class="campo">Edificio:</p></div>
        <div class="col-sm-6"><p id="edificio"></p></div>
      </div>
    <!-- Título - domicilio fiscal -->
          <div class="row expediente-1">
            <div class="col-sm-12 titulo"><h1>Domicilio fiscal</h1></div>
          </div>
          <div class="row gy-3 expediente-2">
=======
        <!-- Fecha de nacimiento -->
        <div class="col-sm-6"><p class="campo">Fecha de nacimiento:</p></div>
        <div class="col-sm-6"><p id="fecha"></p></div>
        <!-- CURP -->
        <div class="col-sm-6"><p class="campo">CURP:</p></div>
        <div class="col-sm-6">
          <a class='btn btn-primary mb-3 btn-guardar' class="info" id="curp">Ver archivo</a>
        </div>
        <!-- Teléfono celular -->
        <div class="col-sm-6"><p class="campo">Teléfono celular:</p></div>
        <div class="col-sm-6"><p id="telefonoCelular"></p></div>
        <!-- Teléfono de casa -->
        <div class="col-sm-6"><p class="campo">Teléfono de casa:</p></div>
        <div class="col-sm-6"><p id="telefonoCasa"></p></div>
        <!-- Correo electrónico -->
        <div class="col-sm-6"><p class="campo">Correo:</p></div>
        <div class="col-sm-6"><p id="email"></p></div>
        <!-- Género -->
        <div class="col-sm-6"><p class="campo">Género:</p></div>
        <div class="col-sm-6"><p id="genero"></p></div>
>>>>>>> Stashed changes
        <!-- Dirección -->
        <div class="col-sm-6"><p class="campo">Dirección:</p></div>
        <div class="col-sm-6"><p id="direccion"></p></div>
        <!-- Número exterior e interior -->
        <div class="col-sm-3"><p class="campo">Número exterior:</p></div>
        <div class="col-sm-3"><p id="numeroExterior"></p></div>
        <div class="col-sm-3"><p class="campo">Número interior:</p></div>
        <div class="col-sm-3"><p id="numeroInterior"></p></div>
        <!-- Colonia y municipio -->
        <div class="col-sm-3"><p class="campo">Colonia:</p></div>
        <div class="col-sm-3"><p id="colonia"></p></div>
        <div class="col-sm-3"><p class="campo">Municipio:</p></div>
        <div class="col-sm-3"><p id="municipio"></p></div>
        <!-- Estado y CP -->
        <div class="col-sm-3"><p class="campo">Estado:</p></div>
        <div class="col-sm-3"><p id="estado"></p></div>
        <div class="col-sm-3"><p class="campo">Código postal:</p></div>
        <div class="col-sm-3"><p id="codigoPostal"></p></div>
    </div>
    <!-- Título - Contacto -->
    <div class="row expediente-1">
            <div class="col-sm-12 titulo"><h1>Contacto</h1></div>
          </div>
          <div class="row gy-3 expediente-2">
        <!-- Email -->
        <div class="col-sm-6"><p class="campo">Email:</p></div>
        <div class="col-sm-6"><p id="email"></p></div>
        <!-- Representante legal -->
        <div class="col-sm-6"><p class="campo">Representante legal:</p></div>
        <div class="col-sm-6"><p id="representanteLegal"></p></div>
        <!-- Telefono -->
        <div class="col-sm-6"><p class="campo">Telefono:</p></div>
        <div class="col-sm-6"><p id="telefono"></p></div>
        <!-- RFC -->
        <div class="col-sm-6"><p class="campo">RFC:</p></div>
        <div class="col-sm-6">
          <a class='btn btn-primary mb-3 btn-guardar' class="info" id="rfc">Ver archivo</a>
        </div>
    </div>
    <div class="row py-3">
      <a href='./empresasEdit.php' class="btn btn-guardar btn-lg">Volver</a>
    </div>
  </div>


    <!-- Pie de página -->
    <footer class="bg-A text-center fs-6 sticky-bottom font-white">
      <div class="container">
          <div class="row">
              <div class="col-md-12">Todos los derechos reservados.</div>
          </div>
          <div class="row">
              <div class="col-md-4">Consorcio Vengadores S. A. de C. V.</div>
              <div class="col-md-4">Departamento de Recursos Humanos</div>
              <div class="col-md-4">Tel: 222-123-1234</div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <a href="./historial.html">Historial de acceso</a>
              </div>
          </div>
      </div>
  </footer>

  </body>

</html>
