<?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
  }

  require './partials/historial.php';
  $des = " INGRESÓ FORMULARIO TRABAJADOR";
  nvo($des);
 ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Llenado de Expediente</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src='./assets/js/codigosPostales.js'></script>

    </head>
    <body class="bg-C">

        <!--Header-->
        <?php 
            require 'partials/headerIn.php'; 
            require 'bd.php'; 
            require 'funcionesBotonesFormularios.php';            
        ?>
        
        <div class="container bg-C div-form">
            <br><i class="bi bi-person-circle font-icon"></i><br>
            <form method="POST">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h1>Datos Personales</h1>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <label>Nombre(s)</label>
                        <input type="text" class="form-control" placeholder="Nombre(s)" name="nameWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Apellido Paterno</label>
                        <input type="text" class="form-control" placeholder="Apellido Paterno" name="lastNameWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Apellido Materno</label>
                        <input type="text" class="form-control" placeholder="Apellido Materno" name="secondNameWorker">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <label>Fecha de Nacimiento</label>
                        <input type="date" class="form-control" placeholder="Fecha de Nacimiento" name="bornDateWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>CURP</label>
                        <input type="text" maxlength="18" class="form-control" name="curpWorker" required>
                    </div>
                    <div class="col-md-2">
                        <label>Género</label>
                        <select class="form-control" name="genereWorker" required>
                            <option selected>Seleccionar...</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h4>Dirección</h4>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Calle</label>
                        <input type="text" class="form-control" placeholder="Calle" name="streetWorker" required>
                    </div>
                    <div class="col-md-3">
                        <label>No. Exterior</label>
                        <input type="text" class="form-control" placeholder="#####" name="externalNumberWorker" required>
                    </div>
                    <div class="col-md-3">
                        <label>No. Interior</label>
                        <input type="text" class="form-control" placeholder="#####" name="internalNumberWorker">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-4">
                        <label>C. P.</label>
                        <input type="text" class="form-control" maxlength="5" placeholder="Código Postal" name="zipWorker" required id="cp">
                    </div>
                    <div class="form-group col-md-1">
                        <button type="button" class="btn btn-guardar btn-s mt-4" name="btnSerchZIP" onclick={actualizarFormulario()}>Buscar</button>
                    </div>
                    <div class="form-group col-md-7">
                        <label>Colonia</label>
                        <select class="form-control" name="suburbWorker" required id="colonia">
                            <option selected>Seleccionar...</option>
                            
                        </select>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-6">
                        <label>Municipio</label>
                        <select class="form-control" name="cityWorker" required id="municipio">
                            <option selected>Seleccionar...</option>
                        </select>
                    </div> 
                    <div class="form-group col-md-6">
                        <label>Estado</label>
                        <select class="form-control" name="stateWorker" required id="estado">
                            <option selected>Seleccionar...</option>

                        </select>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h4>Contacto</h4>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="emailWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Teléfono Celular</label>
                        <input type="tel" class="form-control" placeholder="5512345678" maxlength="10" name="mobileWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono Residencial</label>
                        <input type="tel" class="form-control" placeholder="5512345678" maxlength="10" name="phoneWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Contacto de Emergencia</label>
                        <input type="text" class="form-control" placeholder="Contacto de Emergencia" name="emergencyContactWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono de Emergencia</label>
                        <input type="tel" class="form-control" placeholder="5512345678" maxlength="10" name="emergencyPhoneWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h1>Datos Laborales</h1>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <label>Empresa</label>
                        <select class="form-control" name="businessWorker" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                //REALIZAMOS LA CONSULTA A LA BASE DE DATOS
                                $query = "SELECT idEmpresa, nombre FROM Empresa WHERE estatus=1 ORDER BY idEmpresa ASC";
                                $resultados = mysqli_query($conn, $query);
                                //EJECUTAMOS EL CICLO WHILE PARA MOSTAR TODAS LAS OPCIONES.
                                while($consulta = mysqli_fetch_array($resultados)){
                                    echo '<option value="'.$consulta['idEmpresa'].'">'.$consulta['nombre'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Sueldo</label>
                        <input type="number" class="form-control" placeholder="Sueldo" name="salaryWorker" value="0.00" step="0.01" required>
                    </div>
                    <div class="col-md-4">
                        <label>Puesto</label>
                        <select class="form-control" name="jobWorker" required>
                            <option selected>Seleccionar...</option>
                            <option value="DIRECTOR EJECUTIVO">DIRECTOR EJECUTIVO</option>
                            <option value="DIRECTOR DE OPERACIONES">DIRECTOR DE OPERACIONES</option>
                            <option value="DIRECTOR COMERCIAL">DIRECTOR COMERCIAL</option>
                            <option value="DIRECTOR DE MARKETING">DIRECTOR DE MARKETING</option>
                            <option value="DIRECTOR DE RECURSOS HUMANOS">DIRECTOR DE RECURSOS HUMANOS</option>
                            <option value="DIRECTOR FINANCIERO">DIRECTOR FINANCIERO</option>
                            <option value="EMPLEADO DE OPERACIONES">EMPLEADO DE OPERACIONES</option>
                            <option value="EMPLEADO DE VENTAS">EMPLEADO DE VENTAS</option>
                            <option value="EMPLEADO DE MARKETING">EMPLEADO DE MARKETING</option>
                            <option value="EMPLEADO DE RECURSOS HUMANOS">EMPLEADO DE RECURSOS HUMANOS</option>
                            <option value="EMPLEADO DE FINANZAS">EMPLEADO DE FINANZAS</option>
                            <option value="BECARIO">BECARIO</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <label>Fecha de Ingreso</label>
                        <input type="date" class="form-control" placeholder="Fecha de Ingreso" name="admissionDateWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>No. de Contrato</label>
                        <input type="number" maxlength="5" min="1" class="form-control" placeholder="No. de Contrato" name="contractNumberWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Objeto de Contrato</label>
                        <input type="text" class="form-control" placeholder="Objeto de Contrato" name="contractObjectWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">                        
                        <label>R. F. C.</label>
                        <input type="text" maxlength="13" class="form-control" name="rfcWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>N. S. S.</label>
                        <input type="text" maxlength="10" class="form-control" name="nssWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Estado de Salud</label>
                        <select class="form-control" name="healthyWorker" required>
                            <option selected>Seleccionar...</option>
                            <option value="1">Sano</option>
                            <option value="2">Enfermedad crónica</option>
                            <option value="3">Embarazo</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Observaciones Médicas</label>
                        <input type="text" class="form-control" placeholder="Observaciones" name="medicalNotesWorker" required>
                    </div>
                </div>
                <label>   </label>
                <div class="row justify-content-md-center">
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <a class="btn btn-lg btn-guardar" href="./trabajadoresEdit.php">Volver</a>
                    
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <input type="submit" class="btn btn-guardar btn-lg" value="Guardar" name="btnSafeTrabajador">
                    </div>
                    
                </div>

            </form>
        </div>
        <!--Footer-->
        <?php require 'partials/footerIn.php'; ?>    
    </body>
    
</html>