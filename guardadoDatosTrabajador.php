<?php
    if(isset($_GET['btnGuardar'])){
        //Conectamos al servidor
        include ("bd.php");
        //Recuperamos las variables
        $nombre = $_GET['nameWorker'];
        $apellidoPaterno = $_GET['lastNameWorker'];
        $apellidoMaterno = $_GET['secondNameWorker'];
        $fechaNac = $_GET['bornDateWorker'];
        $curp = $_GET['curpWorker'];
        $genero = $_GET['genereWorker'];
        $calle = $_GET['streetWorker'];
        $noExt = $_GET['externalNumberWorker'];
        $noInt = $_GET['internalNumberWorker'];
        $col = $_GET['suburbWorker'];
        $municipio = $_GET['cityWorker'];
        $estado = $_GET['stateWorker'];
        $cp = $_GET['zipWorker'];
        $email = $_GET['emailWorker'];
        $celular = $_GET['mobileWorker'];
        $telefono = $_GET['phoneWorker'];
        $contactoEmergencia = $_GET['emergencyContactWorker'];
        $telefonoEmergencia = $_GET['emergencyPhoneWorker'];
        $empresa = $_GET['businessWorker'];
        $salrio = $_GET['salaryWorker'];
        $puesto = $_GET['jobWorker'];
        $fechaIng = $_GET['aadmissionDateWorker'];
        $noContrato = $_GET['contractNumberWorker'];
        $objetoContrato = $_GET['contractObjectWorker'];
        $rfc = $_GET['rfcNumberWorker'];
        $nss = $_GET['nssWorker'];
        $estadoSalud = $_GET['healthyWorker'];
        $observacionesMedicas = $_GET['medicalNotesWorker'];

        //realizamos los insert en las tablas correspondientes.
        $sqlDireccion = "INSERT INTO Direccion ('calle', 'noExterior', 'noInterior', 'cp', 'colonia', 'municipio', 'estado) 
                        VALUES ($calle,$noExt,$noInt,$cp,$col,$municipio,$estado)";
        $aux = "SELECT MAX(idDireccion) AS nuevoID FROM Direccion";
        $sqlInsertarDireccion = mysqli_query($conn, $sqlDireccion);
        $sqlMax = mysqli_query($conn, $aux);
        $row = mysqli_fetch_assoc($sqlMax);
        $idDireccion = $row['nuevoID'];
        $sqlInsertarEmpleado;
        $sqlInsertarDireccion = mysqli_query($conn, $sqlDireccion);
    }
        

?>