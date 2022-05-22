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

        <nav class="navbar navbar-default bg-A font-white">
            <div class="container">
                    <img src="./assets/img/logo-blanco-nombre.png" alt="logo"  class=" logo d-inline-block align-text-top">
                    <p class="fs-3 m-auto"><b>Consorcio Vengadores S. A. de C. V.</b></p>
                    <i class="bi bi-box-arrow-right fs-1" alt="login" class="d-inline-block align-text-top"></i>       
            </div>
        </nav>
        
        <div class="container bg-C div-form">
            <br><i class="bi bi-person-circle font-icon"></i><br>
            <form>
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h1>Datos Personales</h1>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <label>Nombre(s)</label>
                        <input type="text" class="form-control" placeholder="Nombre(s)" id="nameWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Apellido Paterno</label>
                        <input type="text" class="form-control" placeholder="Apellido Paterno" id="lastNameWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Apellido Materno</label>
                        <input type="text" class="form-control" placeholder="Apellido Materno" id="secondNameWorker">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <label>Fecha de Nacimiento</label>
                        <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="bornDateWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>CURP</label>
                        <input type="file" class="form-control" id="curpWorker" required>
                    </div>
                    <div class="col-md-2">
                        <label>Género</label>
                        <select class="form-control" id="genereWorker" required>
                            <option selected>Seleccionar...</option>
                            <option>Género 1</option>
                            <option>Género 2</option>
                            <option>Género 3</option>
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
                        <input type="text" class="form-control" placeholder="Calle" id="streetWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-3">
                        <label>No. Exterior</label>
                        <input type="text" class="form-control" placeholder="#####" id="externalNumberWorker" required>
                    </div>
                    <div class="col-md-3">
                        <label>No. Interior</label>
                        <input type="text" class="form-control" placeholder="#####" id="internalNumberWorker">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Colonia</label>
                        <input type="text" class="form-control" placeholder="Colonia" id="suburbWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-6">
                        <label>Municipio</label>
                        <input type="text" class="form-control" placeholder="Municipio" id="cityWorker" required>
                    </div> 
                    <div class="form-group col-md-4">
                        <label>Estado</label>
                        <select class="form-control" id="stateWorker" required>
                            <option selected>Seleccionar...</option>
                            <option>Estado 1</option>
                            <option>Estado 2</option>
                            <option>Estado 3</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label>C. P.</label>
                        <input type="text" class="form-control" placeholder="Código Postal" id="zipWorker" required>
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
                        <input type="email" class="form-control" placeholder="Email" id="emailWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Teléfono Celular</label>
                        <input type="tel" class="form-control" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" id="mobileWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono Residencial</label>
                        <input type="tel" class="form-control" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" id="phoneWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Contacto de Emergencia</label>
                        <input type="text" class="form-control" placeholder="Contacto de Emergencia" id="emergencyContactWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono de Emergencia</label>
                        <input type="tel" class="form-control" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" id="emergencyPhoneWorker" required>
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
                        <select class="form-control" id="businessWorker" required>
                            <option selected>Seleccionar...</option>
                            <option>Empresa 1</option>
                            <option>Empresa 2</option>
                            <option>Empresa 3</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Sueldo</label>
                        <input type="text" class="form-control" placeholder="Sueldo" id="salaryWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Puesto</label>
                        <select class="form-control" id="jobWorker" required>
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
                        <input type="date" class="form-control" placeholder="Fecha de Ingreso" id="admissionDateWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>No. de Contrato</label>
                        <input type="text" class="form-control" placeholder="No. de Contrato" id="contractNumberWorker" required>
                    </div>
                    <div class="col-md-4">
                        <label>Objeto de Contrato</label>
                        <input type="text" class="form-control" placeholder="Objeto de Contrato" id="contractObjectWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">                        
                        <label>R. F. C.</label>
                        <input type="file" class="form-control" id="rfcWorker" required>
                    </div>
                    <div class="col-md-6">
                        <label>N. S. S.</label>
                        <input type="file" class="form-control" id="nssWorker" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Estado de Salud</label>
                        <select class="form-control" id="healthyWorker" required>
                            <option selected>Seleccionar...</option>
                            <option>Salud 1</option>
                            <option>Salud 2</option>
                            <option>Salud 3</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Observaciones Médicas</label>
                        <input type="text" class="form-control" placeholder="Observaciones" id="medicalNotesWorker" required>
                    </div>
                </div>
                <label>   </label>
                <div class="row justify-content-md-center">
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <a class="btn btn-guardar btn-lg" href="./trabajadoresEdit.html">Guardar</a>
                    </div>
                </div>

            </form>
        </div>
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