<?php
  ob_start(); // Se utiliza para empezar a llenar el buffer y poder posar el contenido HTML a una variable PHP.
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Expediente de trabajador</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
  </head>

  <body class="bg-C">
    <!-- Encabezado -->
    <header>
      <nav class="navbar navbar-default bg-A font-white">
        <div class="container">
          <img src="./img/logo-blanco-nombre.png" alt="logo" width="5%" class="d-inline-block align-text-top">
          <p class="fs-3 m-auto"><b>Consorcio Vengadores S. A. de C. V.</b></p>
        </div>
      </nav>
    </header>
    <!-- Expediente-título -->
    <div class="container">
      <div class="row expediente-1">
        <div class="col-sm-12 titulo"><h1>Datos personales</h1></div>
      </div>
    </div>
    <!-- Expediente-datos -->
    <div class="container">
      <div class="row gy-3 expediente-2">
        <!-- No. de trabajador -->
        <div class="col-sm-6"><p class="campo">No. de trabajador:</p></div>
        <div class="col-sm-6"><p>001</p></div>
        <!-- Nombre -->
        <div class="col-sm-6"><p class="campo">Nombre:</p></div>
        <div class="col-sm-6"><p>Tony</p></div>
        <!-- Apellido paterno -->
        <div class="col-sm-6"><p class="campo">Apellido paterno:</p></div>
        <div class="col-sm-6"><p>Stark</p></div>
        <!-- Apellido materno -->
        <div class="col-sm-6"><p class="campo">Apellido materno:</p></div>
        <div class="col-sm-6"><p>Edward</p></div>
        <!-- Fecha de nacimiento -->
        <div class="col-sm-6"><p class="campo">Fecha de nacimiento:</p></div>
        <div class="col-sm-6"><p>29-mayo-1970</p></div>
        <!-- CURP -->
        <div class="col-sm-6"><p class="campo">CURP:</p></div>
        <div class="col-sm-6">
          <form action="index.html" method="post">
            <input type="button" class="info" name="button" value="Ver archivo">
          </form>
        </div>

    <!-- Título - datos laborales -->
    <div class="container">
      <div class="row expediente-1">
        <div class="col-sm-12 titulo"><h1>Datos laborales</h1></div>
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

<?php
  // En la variable $html se va a recibir todo el contenido que vamos a mandar a DOMPDF para crear el archivo.
  $html = ob_get_clean();

  /* Debemos incluir DOMPDF indicando la ruta desde el archivo (pruebaDOMPDF.php) hasta donde se encuentre
  el archivo llamado autoload.php que se ecuenta en la carpeta vendor */
  require 'dompdf/autoload.inc.php';

  // Habilitamos el uso de DOMPDF
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();

  // Cargamos la información que cargamos a la variable $html a DOMPDF.
  $dompdf->loadHtml($html);

  // Seleccionamos el tipo de hoja
  $dompdf->setPaper('letter');

  // Creamos el archivo PDF
  $dompdf->render();

  // Seleccionamos la manera en que se va a mostrar el pdf
  $dompdf->stream("titulo_archivo.pdf", array("Attachment"=>false));
  // Si usamos "true" se descarga directamente, con "false" se muestra desde el navegador.
?>
