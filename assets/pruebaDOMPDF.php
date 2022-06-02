<?php
  ob_start(); // Se utiliza para empezar a llenar el buffer y poder posar el contenido HTML a una variable PHP.
?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Expediente de trabajador</title>
    <!--<link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
        <!-- Teléfono celular -->
        <div class="col-sm-6"><p class="campo">Teléfono celular:</p></div>
        <div class="col-sm-6"><p>222-542-3256</p></div>
        <!-- Teléfono de casa -->
        <div class="col-sm-6"><p class="campo">Teléfono de casa:</p></div>
        <div class="col-sm-6"><p>222-387-4177</p></div>
        <!-- Correo electrónico -->
        <div class="col-sm-6"><p class="campo">Correo:</p></div>
        <div class="col-sm-6"><p>iron-man@shield.gov</p></div>
        <!-- Género -->
        <div class="col-sm-6"><p class="campo">Género:</p></div>
        <div class="col-sm-6"><p>Masculino</p></div>
        <!-- Dirección -->
        <div class="col-sm-6"><p class="campo">Dirección:</p></div>
        <div class="col-sm-6"><p>Point Dume</p></div>
        <!-- Número exterior e interior -->
        <div class="col-sm-3"><p class="campo">Número exterior:</p></div>
        <div class="col-sm-3"><p>1</p></div>
        <div class="col-sm-3"><p class="campo">Número interior:</p></div>
        <div class="col-sm-3"><p>N/A</p></div>
        <!-- Colonia y municipio -->
        <div class="col-sm-3"><p class="campo">Colonia:</p></div>
        <div class="col-sm-3"><p>Malibu</p></div>
        <div class="col-sm-3"><p class="campo">Municipio:</p></div>
        <div class="col-sm-3"><p>Alpine</p></div>
        <!-- Estado y CP -->
        <div class="col-sm-3"><p class="campo">Estado:</p></div>
        <div class="col-sm-3"><p>California</p></div>
        <div class="col-sm-3"><p class="campo">Código postal:</p></div>
        <div class="col-sm-3"><p>90036</p></div>
        <!-- Contacto de emergencia -->
        <div class="col-sm-6"><p class="campo">Contacto de emergencia:</p></div>
        <div class="col-sm-6"><p>Pepper Pots</p></div>
        <!-- Teléfono de emergencia -->
        <div class="col-sm-6"><p class="campo">Teléfono de emergencia:</p></div>
        <div class="col-sm-6"><p>222-390-7712</p></div>
      </div>
    </div>

    <!-- Título - datos laborales -->
    <div class="container">
      <div class="row expediente-1">
        <div class="col-sm-12 titulo"><h1>Datos laborales</h1></div>
      </div>
    </div>

    <!-- Datos laborales -->
    <div class="container">
      <div class="row gy-3 expediente-2">
        <!-- Sueldo -->
        <div class="col-sm-6"><p class="campo">Sueldo:</p></div>
        <div class="col-sm-6"><p>$2,500,000 USD</p></div>
        <!-- Fecha de ingreso -->
        <div class="col-sm-6"><p class="campo">Fecha de ingreso:</p></div>
        <div class="col-sm-6"><p>20-diciembre-2014</p></div>
        <!-- Puesto -->
        <div class="col-sm-6"><p class="campo">Puesto:</p></div>
        <div class="col-sm-6"><p>Vengador</p></div>
        <!-- No. de contrato -->
        <div class="col-sm-6"><p class="campo">Número de contrato:</p></div>
        <div class="col-sm-6"><p>001</p></div>
        <!-- Objeto de contrato -->
        <div class="col-sm-6"><p class="campo">Objeto de contrato:</p></div>
        <div class="col-sm-6"><p>Actividades militares</p></div>
        <!-- RFC -->
        <div class="col-sm-6"><p class="campo">RFC:</p></div>
        <div class="col-sm-6">
          <form action="index.html" method="post">
            <input type="button" class="info" name="button" value="Ver archivo">
          </form>
        </div>
        <!-- Número de seguridad social -->
        <div class="col-sm-6"><p class="campo">NSS:</p></div>
        <div class="col-sm-6">
          <form action="index.html" method="post">
            <input type="button" class="info" name="button" value="Ver archivo">
          </form>
        </div>
        <!-- Estado de salud -->
        <div class="col-sm-6"><p class="campo">Estado de salud:</p></div>
        <div class="col-sm-6"><p>Excelente</p></div>
        <!-- Observaciones médicas -->
        <div class="col-sm-6"><p class="campo">Observaciones médicas:</p></div>
        <div class="col-sm-6"><p>Ninguna</p></div>
        <!-- Empresa -->
        <div class="col-sm-6"><p class="campo">Empresa:</p></div>
        <div class="col-sm-6"><p>S.H.I.E.L.D.</p></div>
        <!-- Datos de la empresa -->
        <div class="col-sm-5"></div>
        <div class="col-sm-4">
          <form action="index.html" method="post">
            <input type="button" class="info-2" name="button" value="Ver datos de la empresa">
          </form>
        </div>
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
  require 'autoload.php';

  // Habilitamos el uso de DOMPDF
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();

  // Activamos una opción que permite el uso de imágenes con DOMPDF
  $options = $dompdf->getOptions();
  $options->set(array('isRemoteEnable' => true));
  $dompdf->setOptions($options);

  // Cargamos la información que cargamos a la variable $html a DOMPDF.
  $dompdf->loadHtml($html);

  // Seleccionamos el tipo de hoja
  $dompdf->setPaper('letter');

  // Creamos el archivo PDF
  $dompdf->render();

  // Seleccionamos la manera en que se va a mostrar el pdf
  $dompdf->stream("titulo_archivo.pdf", array("Attachment"=>true));
  // Si usamos "true" se descarga directamente, con "false" se muestra desde el navegador.
?>
