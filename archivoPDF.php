<?php
  ob_start(); // Se utiliza para empezar a llenar el buffer y poder posar el contenido HTML a una variable PHP.
  session_start();
  if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit();
  }
  require './partials/historial.php';
  $des = "EXPEDIENTE TRABAJADOR.";
  nvo($des);
  require 'bd.php';
  $idBusqueda=$_GET["id"];
  $sql = "SELECT noTrabajador, t.idEmpresa, tEmergencia, nombres, aPaterno, aMaterno, fechaNacimiento, curp, noCelular, noCasa, t.mail, genero, cEmergencia, sueldo, fechaIngreso, puesto, noContrato, oMedica, salud, nss, t.rfc, objContrato, e.nombre, calle, noExterior, noInterior, cp, colonia, municipio, estado FROM Empleado t JOIN Empresa e ON t.idEmpresa=e.idEmpresa JOIN Direccion d ON t.idDireccion=d.idDireccion WHERE noTrabajador=$idBusqueda";
  $sqlTrabajador = mysqli_query($conn, $sql);
  $rowTrabajador = mysqli_fetch_assoc($sqlTrabajador);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Expediente de trabajador</title>
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
        <div class="col-sm-12 titulo"><h1>Datos personales</h1></div>
      </div>
    </div>
    <!-- Expediente-datos -->
    <div class="container">
      <div class="row gy-3 expediente-2">
        <!-- No. de trabajador -->
        <div class="col-sm-6"><p class="campo">No. de trabajador:</p></div>
        <div class="col-sm-6"><p id="numeroTrabajador"><?php echo $rowTrabajador['noTrabajador']?></p></div>
        <!-- Nombre -->
        <div class="col-sm-6"><p class="campo">Nombre:</p></div>
        <div class="col-sm-6"><p id="nombre"><?php echo $rowTrabajador['nombres']?></p></div>
        <!-- Apellido paterno -->
        <div class="col-sm-6"><p class="campo">Apellido paterno:</p></div>
        <div class="col-sm-6"><p id="apellidoPaterno"><?php echo $rowTrabajador['aPaterno']?></p></div>
        <!-- Apellido materno -->
        <div class="col-sm-6"><p class="campo">Apellido materno:</p></div>
        <div class="col-sm-6"><p id="apellidoMaterno"><?php echo $rowTrabajador['aMaterno']?></p></div>
        <!-- Fecha de nacimiento -->
        <div class="col-sm-6"><p class="campo">Fecha de nacimiento:</p></div>
        <div class="col-sm-6"><p id="fecha"><?php echo $rowTrabajador['fechaNacimiento']?></p></div>
        <!-- CURP -->
        <div class="col-sm-6"><p class="campo">CURP:</p></div>
        <div class="col-sm-6"><p id="curp"><?php echo $rowTrabajador['curp']?></p></div>
        <!-- Teléfono celular -->
        <div class="col-sm-6"><p class="campo">Teléfono celular:</p></div>
        <div class="col-sm-6"><p id="telefonoCelular"><?php echo $rowTrabajador['noCelular']?></p></div>
        <!-- Teléfono de casa -->
        <div class="col-sm-6"><p class="campo">Teléfono de casa:</p></div>
        <div class="col-sm-6"><p id="telefonoCasa"><?php echo $rowTrabajador['noCasa']?></p></div>
        <!-- Correo electrónico -->
        <div class="col-sm-6"><p class="campo">Correo:</p></div>
        <div class="col-sm-6"><p id="email"><?php echo $rowTrabajador['mail']?></p></div>
        <!-- Género -->
        <div class="col-sm-6"><p class="campo">Género:</p></div>
        <div class="col-sm-6"><p id="genero">
        <?php
        switch($rowTrabajador['genero']){
          case 1:
            echo 'Masculino';
            break;
          case 2:
            echo 'Femenino';
            break;
          case 3:
            echo 'Otro';
            break;
        }
        ?>
        </p></div>
        <!-- Dirección -->
        <div class="col-sm-6"><p class="campo">Calle:</p></div>
        <div class="col-sm-6"><p id="direccion"><?php echo $rowTrabajador['calle']?></p></div>
        <!-- Número exterior e interior -->
        <div class="col-sm-3"><p class="campo">Número exterior:</p></div>
        <div class="col-sm-3"><p id="numeroExterior"><?php echo $rowTrabajador['noExterior']?></p></div>
        <div class="col-sm-3"><p class="campo">Número interior:</p></div>
        <div class="col-sm-3"><p id="numeroInterior"><?php if($rowTrabajador['noInterior']==NULL) echo $rowTrabajador['noInterior'];?></p></div>
        <!-- Colonia y municipio -->
        <div class="col-sm-3"><p class="campo">Colonia:</p></div>
        <div class="col-sm-3"><p id="colonia"><?php echo $rowTrabajador['colonia']?></p></div>
        <div class="col-sm-3"><p class="campo">Municipio:</p></div>
        <div class="col-sm-3"><p id="municipio"><?php echo $rowTrabajador['municipio']?></p></div>
        <!-- Estado y CP -->
        <div class="col-sm-3"><p class="campo">Estado:</p></div>
        <div class="col-sm-3"><p id="estado"><?php echo $rowTrabajador['estado']?></p></div>
        <div class="col-sm-3"><p class="campo">Código postal:</p></div>
        <div class="col-sm-3"><p id="codigoPostal"><?php echo $rowTrabajador['cp']?></p></div>
        <!-- Contacto de emergencia -->
        <div class="col-sm-6"><p class="campo">Contacto de emergencia:</p></div>
        <div class="col-sm-6"><p id="contactoEmergencia"><?php echo $rowTrabajador['cEmergencia']?></p></div>
        <!-- Teléfono de emergencia -->
        <div class="col-sm-6"><p class="campo">Teléfono de emergencia:</p></div>
        <div class="col-sm-6"><p id="telefonoEmergencia"><?php echo $rowTrabajador['tEmergencia']?></p></div>
      </div>

    <!-- Título - datos laborales -->
      <div class="row expediente-1">
        <div class="col-sm-12 titulo"><h1>Datos laborales</h1></div>
      </div>

    <!-- Datos laborales -->
      <div class="row gy-3 expediente-2">
        <!-- Sueldo -->
        <div class="col-sm-6"><p class="campo">Sueldo:</p></div>
        <div class="col-sm-6"><p id="sueldo"><?php echo $rowTrabajador['sueldo']?></p></div>
        <!-- Fecha de ingreso -->
        <div class="col-sm-6"><p class="campo">Fecha de ingreso:</p></div>
        <div class="col-sm-6"><p id="fechaIngreso"><?php echo $rowTrabajador['fechaIngreso']?></p></div>
        <!-- Puesto -->
        <div class="col-sm-6"><p class="campo">Puesto:</p></div>
        <div class="col-sm-6"><p id="puesto"><?php echo $rowTrabajador['puesto']?></p></div>
        <!-- No. de contrato -->
        <div class="col-sm-6"><p class="campo">Número de contrato:</p></div>
        <div class="col-sm-6"><p id="numeroContrato"><?php echo $rowTrabajador['noContrato']?></p></div>
        <!-- Objeto de contrato -->
        <div class="col-sm-6"><p class="campo">Objeto de contrato:</p></div>
        <div class="col-sm-6"><p id="objetoContrato"><?php echo $rowTrabajador['objContrato']?></p></div>
        <!-- RFC -->
        <div class="col-sm-6"><p class="campo">RFC:</p></div>
        <div class="col-sm-6"><p id="rfc"><?php echo $rowTrabajador['rfc']?></p></div>
        <!-- Número de seguridad social -->
        <div class="col-sm-6"><p class="campo">NSS:</p></div>
        <div class="col-sm-6"><p id="nss"><?php echo $rowTrabajador['nss']?></p></div>
        <!-- Estado de salud -->
        <div class="col-sm-6"><p class="campo">Estado de salud:</p></div>
        <div class="col-sm-6"><p id="estadoSalud"><div class="col-sm-6"><p id="estadoSalud"><?php
        switch($rowTrabajador['salud']){
          case 1:
            echo 'Sano';
            break;
          case 2:
            echo 'Enfermedad crónica';
            break;
          case 3:
            echo 'Embarazo';
            break;
        }
        ?></p></div></p></div>
        <!-- Observaciones médicas -->
        <div class="col-sm-6"><p class="campo">Observaciones médicas:</p></div>
        <div class="col-sm-6"><p id="observacionesMedicas"><?php echo $rowTrabajador['oMedica']?></p></div>
        <!-- Empresa -->
        <div class="col-sm-6"><p class="campo">Empresa:</p></div>
        <div class="col-sm-6"><p id="empresa"><?php echo $rowTrabajador['nombre']?></p></div>
        <!-- Datos de la empresa -->
        <div class="col-sm-5"></div>
        <div class="col-sm-4">
          <a type="button" class='btn btn-primary mb-3 btn-guardar' href="./expedienteEmpresa.php?id=<?php echo $rowTrabajador['idEmpresa']?>" target='_blank'>Ver datos de la empresa</a>
        </div>
      </div>
    </div>

    <!--Footer-->
    <?php require 'partials/footerIn.php'; ?>
  </body>
</html>
<?php
  // En la variable $html se va a recibir todo el contenido que vamos a mandar a DOMPDF para crear el archivo.
  $html = ob_get_clean();

  /* Debemos incluir DOMPDF indicando la ruta desde el archivo (pruebaDOMPDF.php) hasta donde se encuentre
  el archivo llamado autoload.php que se ecuenta en la carpeta vendor */
  require './assets/dompdf/autoload.inc.php';

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
  $dompdf->stream("Expediente.pdf", array("Attachment"=>true));
  // Si usamos "true" se descarga directamente, con "false" se muestra desde el navegador.
?>
