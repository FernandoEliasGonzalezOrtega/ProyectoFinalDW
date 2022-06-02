<?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
  }

  require './partials/historial.php';
  $des = " INGRESÓ MODIFICAR EMPRESA";
  nvo($des);

  require 'bd.php';
  $idBusqueda=$_GET["id"];
  $rowEmpresa ;
  $sql = "SELECT idEmpresa, nombre, fechaFundacion, giroEmpresa, regimenF, edificio, telefono, mail, repLegal, rfc, e.idDireccion, calle, noExterior, noInterior, cp, colonia, municipio, estado FROM Empresa e JOIN Direccion d ON e.idDireccion=d.idDireccion WHERE idEmpresa=$idBusqueda";
  $sqlEmpresa = mysqli_query($conn, $sql);
  $rowEmpresa = mysqli_fetch_assoc($sqlEmpresa);
 ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Modificar Empresa</title>
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
            include ("bd.php");
            require 'funcionesBotonesFormularios.php'; 
        ?>
        
        <div class="container bg-C div-form">
            <br><i class="bi bi-building font-icon"></i><br>
            <form method="POST">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h1>Registro de Empresa</h1>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <label>Nombre/Razón Social</label>
                        <input type="text" value="<?php echo $rowEmpresa['nombre']?>" class="form-control" placeholder="Empresa" name="business" required>
                    </div>
                    <div class="col-md-4">
                        <label>Fecha de fundación</label>
                        <input type="date" value="<?php echo $rowEmpresa['fechaFundacion']?>" class="form-control" name="dateFoundation" required>
                    </div>
                    <div class="col-md-4">
                        <label>Giro Empresarial</label>
                        <input type="text" value="<?php echo $rowEmpresa['giroEmpresa']?>" class="form-control" placeholder="Giro Empresarial" name="businessRotation">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Regimen Fiscal</label>
                        <select class="form-control" name="regimenFiscal" required>
                            <option selected>Seleccionar...</option>
                            <?php
                            $regs = ["PERSONA MORAL", "PERSONA FISICA CON RÉGIMEN SIMPLIFICADO DE CONFIANZA", "PERSONA FISICA CON SUELDOS Y SALARIOS E INGRESOS ASIMILADOS A SALARIOS", "PERSONA FISICA CON RÉGIMEN DE ACTIVIDADES EMPRESARIALES Y PROFESIONALES", "PERSONA FISICA CON RÉGIMEN DE INCORPORACIÓN FISCAL", "PERSONA FISICA CON ENAJENACIÓN DE BIENES", "PERSONA FISICA CON RÉGIMEN DE ACTIVIDADES EMPRESARIALES CON INGRESOS A TRAVÉS DE PLATAFORMAS TECNOLÓGICAS", "PERSONA FISICA CON RÉGIMEN DE ARRENDAMIENTO", "PERSONA FISICA CON INTERESES", "PERSONA FISICA CON OBTENCIÓN DE PREMIOS", "PERSONA FISICA CON DIVIDENDOS", "PERSONA FISICA CON DEMÁS INGRESO"];
                            for ($i=0; $i <12 ; $i=$i+1) { 
                                echo "<option value='".$regs[$i]."' ";
                                if ($regs[$i]==$rowEmpresa['regimenF']) {
                                    echo "selected>";
                                }
                                else{
                                    echo ">";
                                }
                                echo $regs[$i]."</option>";
                            };
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Edificio</label>
                        <input type="text" value="<?php echo $rowEmpresa['edificio']?>"  class="form-control" name="building" placeholder="Edificio" required>
                    </div>
                </div>
                <h2>Domicilio Fiscal</h2>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Calle</label>
                        <input type="text" value="<?php echo $rowEmpresa['calle']?>" class="form-control" placeholder="Calle" name="streetBusiness" required>
                    </div>
                    <div class="col-md-3">
                        <label>No. Exterior</label>
                        <input type="text" value="<?php echo $rowEmpresa['noExterior']?>" class="form-control" placeholder="#####" name="externalNumberBusiness" required>
                    </div>
                    <div class="col-md-3">
                        <label>No. Interior</label>
                        <input type="text" value="<?php if($rowEmpresa['noInterior']!=NULL){ echo $rowEmpresa['noInterior']; }?>"  class="form-control" name="internalNumberBusiness" placeholder="#####">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-4">
                        <label>C. P.</label>
                        <input type="text" value="<?php echo $rowEmpresa['cp']?>" maxlength="5" class="form-control" placeholder="Código Postal" name="zipBusiness" id="cp" required>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="button" class="btn btn-guardar btn-s mt-4" value="Buscar" name="btnSerchBusiness" onclick={actualizarFormulario()}>
                    </div>
                    <div class="form-group col-md-7">
                        <label>Colonia</label>
                        <select class="form-control" name="suburbBusiness" id="colonia" required>
                            <option>Seleccionar...</option>
                            <option value="<?php echo $rowEmpresa['colonia'] ?>" selected><?php echo $rowEmpresa['colonia'] ?></option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-6">
                        <label>Municipio</label>
                        <select class="form-control" name="cityBusiness" id="municipio" required>
                            <option>Seleccionar...</option>
                            <option value="<?php echo $rowEmpresa['municipio'] ?>" selected><?php echo $rowEmpresa['municipio'] ?></option>
                        </select>
                    </div> 
                    <div class="form-group col-md-6">
                        <label>Estado</label>
                        <select class="form-control" name="stateBusiness" id="estado" required>
                            <option selected>Seleccionar...</option>
                            <option value="<?php echo $rowEmpresa['estado'] ?>" selected><?php echo $rowEmpresa['estado'] ?></option>
                        </select>
                    </div>
                         
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h2>Contacto</h2>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <label>Email</label>
                        <input type="email" value="<?php echo $rowEmpresa['mail']?>"  class="form-control" placeholder="Email" name="emailBusiness" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Representante Legal</label>
                        <input type="text" value="<?php echo $rowEmpresa['repLegal']?>" class="form-control" placeholder="Representante Legal" name="legalRepresentativeBusiness" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono</label>
                        <input type="tel" value="<?php echo $rowEmpresa['telefono']?>" class="form-control" maxlength="10" placeholder="55-1234-5678"  name="phoneBusiness" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <label>RFC</label>
                        <input type="text" value="<?php echo $rowEmpresa['rfc']?>" maxlength="13" class="form-control" placeholder="RFC" name="rfcBusiness" required>
                    </div>
                </div>
                <label> </label>
                <div class="row justify-content-md-center">
                <div class="d-grid gap-2 col-4 mx-auto">
                        <a class="btn btn-lg btn-guardar" href="./empresasEdit.php">Volver</a>
                    
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <input type="submit" class="btn btn-guardar btn-lg" value="Guardar" name="btnModificarEmpresa">
                    </div>
                    
                </div>
                <input type="hidden" name="idDireccion" value="<?php echo $rowEmpresa['idDireccion'] ?>">
                <input type="hidden" name="idEmpresa" value="<?php echo $idBusqueda ?>">
            </form>
        </div>
        <!--Footer-->
        <?php require 'partials/footerIn.php'; ?>   
    </body>
    
</html>