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

    </head>
    <body class="bg-C">

        <!--Header-->
        <?php require 'partials/headerIn.php'; ?>
        
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
                        <input type="file" class="form-control" name="curpWorker" required>
                    </div>
                    <div class="col-md-2">
                        <label>Género</label>
                        <select class="form-control" name="genereWorker" required>
                            <option selected>Seleccionar...</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option>
                        </select>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h4>Dirección</h4>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <label>Calle</label>
                        <input type="text" class="form-control" placeholder="Calle" name="streetWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-3">
                        <label>No. Exterior</label>
                        <input type="text" class="form-control" placeholder="#####" name="externalNumberWorker" required>
                    </div>
                    <div class="col-md-3">
                        <label>No. Interior</label>
                        <input type="text" class="form-control" placeholder="#####" name="internalNumberWorker">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Colonia</label>
                        <input type="text" class="form-control" placeholder="Colonia" name="suburbWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-6">
                        <label>Municipio</label>
                        <input type="text" class="form-control" placeholder="Municipio" name="cityWorker" required>
                    </div> 
                    <div class="form-group col-md-4">
                        <label>Estado</label>
                        <select class="form-control" name="stateWorker" required>
                            <option selected>Seleccionar...</option>
                            <option>Estado 1</option>
                            <option>Estado 2</option>
                            <option>Estado 3</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label>C. P.</label>
                        <input type="text" class="form-control" placeholder="Código Postal" name="zipWorker" required>
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
                        <input type="tel" class="form-control" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" name="mobileWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono Residencial</label>
                        <input type="tel" class="form-control" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" name="phoneWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Contacto de Emergencia</label>
                        <input type="text" class="form-control" placeholder="Contacto de Emergencia" name="emergencyContactWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono de Emergencia</label>
                        <input type="tel" class="form-control" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" name="emergencyPhoneWorker" required>
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
                            <option>Empresa 1</option>
                            <option>Empresa 2</option>
                            <option>Empresa 3</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Sueldo</label>
                        <input type="text" class="form-control" placeholder="Sueldo" name="salaryWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Puesto</label>
                        <select class="form-control" name="jobWorker" required>
                            <option selected>Seleccionar...</option>
                            <option>Puesto 1</option>
                            <option>Puesto 2</option>
                            <option>Puesto 3</option>
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
                        <input type="text" class="form-control" placeholder="No. de Contrato" name="contractNumberWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Objeto de Contrato</label>
                        <input type="text" class="form-control" placeholder="Objeto de Contrato" name="contractObjectWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">                        
                        <label>R. F. C.</label>
                        <input type="file" class="form-control" name="rfcWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>N. S. S.</label>
                        <input type="file" class="form-control" name="nssWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Estado de Salud</label>
                        <select class="form-control" name="healthyWorker" required>
                            <option selected>Seleccionar...</option>
                            <option>Salud 1</option>
                            <option>Salud 2</option>
                            <option>Salud 3</option>
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
                        <input type="button" class="btn btn-lg btn-guardar" href="./trabajadoresEdit.php" value="Volver" name="btnBack">
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <input type="buttom" class="btn btn-guardar btn-lg" href="./formularioTrabajadores.php" value="Guardar" name="btnSafeTrabajador">
                    </div>
                    
                </div>

            </form>
        </div>
        <!--Footer-->
        <?php require 'partials/footerIn.php'; ?>    
    </body>
    
</html>