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

    <!-- Encabezado -->
    <header>
      <nav class="navbar navbar-default bg-A font-white">
        <div class="container">
          <img src="./assets/img/logo-blanco-nombre.png" alt="logo" width="5%" class="d-inline-block align-text-top">
          <p class="fs-3 m-auto"><b>Consorcio Vengadores S. A. de C. V.</b></p>
        </div>
      </nav>
    </header>

    <!-- Expediente-título -->
    <div class="container">
      <div class="row expediente-1">
        <div class="col-sm-12 titulo"><h1>Registro de empresa</h1></div>
      </div>
    </div>
    <!-- Expediente-datos -->
    <div class="container">
      <div class="row gy-3 expediente-2">
        <!-- Nombre -->
        <div class="col-sm-6"><p class="campo">Nombre / Razon Social:</p></div>
        <div class="col-sm-6"><p id="nombre"></p></div>
        <!-- Fecha de fundacion-->
        <div class="col-sm-6"><p class="campo">Fecha de fundacion:</p></div>
        <div class="col-sm-6"><p id="fechaFundacion"></p></div>
        <!-- Giro empresarial -->
        <div class="col-sm-6"><p class="campo">Giro empresarial:</p></div>
        <div class="col-sm-6"><p id="giroEmpresarial"></p></div>
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
        <!-- Contacto de emergencia -->
        <div class="col-sm-6"><p class="campo">Contacto de emergencia:</p></div>
        <div class="col-sm-6"><p id="contactoEmergencia"></p></div>
        <!-- Teléfono de emergencia -->
        <div class="col-sm-6"><p class="campo">Teléfono de emergencia:</p></div>
        <div class="col-sm-6"><p id="telefonoEmergencia"></p></div>
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
        <!-- rfc -->
        <div class="col-sm-6"><p class="campo">RFC:</p></div>
        <div class="col-sm-6"><p id="rfc"></p></div>
        
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
