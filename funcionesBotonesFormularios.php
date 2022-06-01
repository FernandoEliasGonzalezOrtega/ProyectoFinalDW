<?php
    if(isset($_POST['btnSafeTrabajador'])){
        //Conectamos al servidor
        include ("bd.php");
        //Recuperamos las variables
        $nombre = $_POST['nameWorker'];
        $apellidoPaterno = $_POST['lastNameWorker'];
        $apellidoMaterno = $_POST['secondNameWorker'];
        $fechaNac = $_POST['bornDateWorker'];
        $curp = $_POST['curpWorker'];
        $genero = intval($_POST['genereWorker']);
        $calle = $_POST['streetWorker'];
        $noExt = $_POST['externalNumberWorker'];
        $noInt = $_POST['internalNumberWorker'];
        $col = $_POST['suburbWorker'];
        $municipio = $_POST['cityWorker'];
        $estado = $_POST['stateWorker'];
        $cp = $_POST['zipWorker'];
        $email = $_POST['emailWorker'];
        $celular = $_POST['mobileWorker'];
        $telefono = $_POST['phoneWorker'];
        $contactoEmergencia = $_POST['emergencyContactWorker'];
        $telefonoEmergencia = $_POST['emergencyPhoneWorker'];
        $empresa = $_POST['businessWorker'];
        $salario = floatval($_POST['salaryWorker']);
        $puesto = $_POST['jobWorker'];
        $fechaIng = $_POST['admissionDateWorker'];
        $noContrato = $_POST['contractNumberWorker'];
        $objetoContrato = $_POST['contractObjectWorker'];
        $rfc = $_POST['rfcWorker'];
        $nss = $_POST['nssWorker'];
        $estadoSalud = intval($_POST['healthyWorker']);
        $observacionesMedicas = $_POST['medicalNotesWorker'];

        //realizamos las consultas en las tablas correspondientes.
        $sqlDireccion =" ";
        if($noInt == NULL){
            $sqlDireccion = "INSERT INTO Direccion (calle, noExterior, noInterior, cp, colonia, municipio, estado) 
                        VALUES ('$calle',$noExt,NULL,'$cp','$col','$municipio','$estado')";
        }
        else{
            $sqlDireccion = "INSERT INTO Direccion (calle, noExterior, noInterior, cp, colonia, municipio, estado) 
                        VALUES ('$calle',$noExt,$noInt,'$cp','$col','$municipio','$estado')";
        }
        
        $aux = "SELECT MAX(idDireccion) AS nuevoID FROM Direccion";
        //realizamos los insert en las tablas correspondientes.
        mysqli_query($conn, $sqlDireccion);
        $sqlMax = mysqli_query($conn, $aux);
        $row = mysqli_fetch_assoc($sqlMax);
        $idDireccion = $row['nuevoID'];
        $sqlInsertarEmpleado = "INSERT INTO Empleado (idDireccion, idEmpresa, tEmergencia, nombres, 
        aPaterno, aMaterno, fechaNacimiento, curp, noCelular, noCasa, mail, genero, cEmergencia, sueldo, 
        fechaIngreso, puesto, noContrato, oMedica, salud, nss, rfc, objContrato)
            VALUES ($idDireccion,$empresa,'$telefonoEmergencia','$nombre','$apellidoPaterno','$apellidoMaterno','$fechaNac','$curp','$celular',
            '$telefono','$email',$genero,'$contactoEmergencia',$salario,'$fechaIng','$puesto','$noContrato','$observacionesMedicas',$estadoSalud,
            '$nss','$rfc','$objetoContrato')";
        mysqli_query($conn, $sqlInsertarEmpleado);
        session_start();

        require './partials/historial.php';
        $des = "REGISTRÓ TRABAJADOR";
        nvo($des);
        //include ("cerrarConexion.php");
    }
  
    if(isset($_POST['btnSafeEmpresa'])){
        //Conectamos al servidor
        include ("bd.php");
        //Recuperamos las variables
        $nombre = $_POST['business'];
        $fechaFund = $_POST['dateFoundation'];
        $giro = $_POST['businessRotation'];
        $regimen = $_POST['regimenFiscal'];
        $edificio = $_POST['building'];
        $calle = $_POST['streetBusiness'];
        $noExt = $_POST['externalNumberBusiness'];
        $noInt = $_POST['internalNumberBusiness'];
        $col = $_POST['suburbBusiness'];
        $municipio = $_POST['cityBusiness'];
        $estado = $_POST['stateBusiness'];
        $cp = $_POST['zipBusiness'];
        $email = $_POST['emailBusiness'];
        $representante = $_POST['legalRepresentativeBusiness'];
        $telefono = $_POST['phoneBusiness'];
        $rfc = $_POST['rfcBusiness'];

        //realizamos las consultas en las tablas correspondientes.
        $sqlDireccion =" ";
        if($noInt == NULL){
            $sqlDireccion = "INSERT INTO Direccion (calle, noExterior, noInterior, cp, colonia, municipio, estado) 
                        VALUES ('$calle',$noExt,NULL,'$cp','$col','$municipio','$estado')";
        }
        else{
            $sqlDireccion = "INSERT INTO Direccion (calle, noExterior, noInterior, cp, colonia, municipio, estado) 
                        VALUES ('$calle',$noExt,$noInt,'$cp','$col','$municipio','$estado')";
        }

        $aux = "SELECT MAX(idDireccion) AS nuevoID FROM Direccion";
        mysqli_query($conn, $sqlDireccion);
        $sqlMax = mysqli_query($conn, $aux);
        $row = mysqli_fetch_assoc($sqlMax);
        $idDireccion = $row['nuevoID'];


        $sqlInsertarEmpresa = "INSERT INTO Empresa (nombre, fechaFundacion, giroEmpresa, regimenF, edificio, 
        idDireccion, telefono, mail, repLegal, rfc) VALUES ('$nombre','$fechaFund','$giro','$regimen','$edificio',$idDireccion,
        '$telefono','$email','$representante','$rfc')";
        mysqli_query($conn, $sqlInsertarEmpresa);

        require './partials/historial.php';
        $des = "REGISTRÓ EMPRESA";
        nvo($des);
        //include ("cerrarConexion.php");
    }

?>