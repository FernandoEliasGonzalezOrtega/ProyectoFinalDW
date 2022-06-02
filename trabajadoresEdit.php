<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header('Location: index.php');
        exit();
    }

    require './partials/historial.php';
    $des = "MENÚ TRABAJADORES.";
    nvo($des);

    require 'bd.php';
    $where = "";
    if(!empty($_POST)){
        $valor = $_POST['buscar'];
        if (!empty($valor)){
            $where = "WHERE nombres LIKE '%$valor%'";
        }
    }
    $sql = "SELECT noTrabajador, nombres, aPaterno, aMaterno, nombre FROM Empleado t JOIN Empresa e ON t.idEmpresa = e.idEmpresa $where ORDER BY noTrabajador DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 ?>

<!--Sitio para editar los datos de trabajadores-->

<!DOCTYPE html>
<html>
    <head>
        <title>Trabajadores</title>
        <link rel='stylesheet' href='./assets/css/bootstrap.min.css'>
        <link rel='stylesheet' href='./assets/css/styles.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
        <script src='./assets/js/script.js'></script>
    </head>
    <body class='bg-C'>
        <!--Header-->
        <?php require 'partials/headerIn.php'; ?>
        <div class='container bg-C'>
            <!--Barra de busqueda-->
            <form class='row py-3' action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class='col-md-10'>
                    <input type='text' class='form-control' id='worksearch' name="buscar" placeholder='Ingresa el nombre del trabajador'>
                </div>
                <div class='col-md-2'>
                    <button type='submit' class='btn btn-primary mb-3 btn-guardar'><i class='bi bi-search'></i>  Buscar</button>
                </div>
            </form>
            <!--Switch de vistas-->
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-6'>
                    <div class='row'>
                        <div class='col'>
                            <span>Trabajadores</span>
                        </div>
                        <div class='col'>
                            <div class='form-check form-switch'>
                                <a href='./empresasEdit.php' target="_self"><input class='form-check-input' type='button' role='switch' id='flexSwitchCheckDefault'></a>
                            </div>
                        </div>
                        <div class='col'>
                            <span>Empresas</span>
                        </div>
                    </div>
                </div>
                <div class='col-md-3'>
                    <a class='btn btn-primary mb-3 btn-guardar' href='./formularioTrabajadores.php'><i class='bi bi-plus-square'></i>     Nuevo Trabajador</a>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <!--Tabla de datos-->
                    <div class='container table-scroll my-3 bg-D' tabindex='0' id='tablaTrabajadores'>
                    <?php $stmt->bind_result($id, $nombre, $aPaterno, $aMaterno, $empresa);?>
                        <?php while ($stmt->fetch()) { ?>
                        <div class='row border-top border-bottom border-dark border-2'>
                            <div class='col-md-3 align-middle'>
                                <img src='./assets/img/person-circle.svg' alt='prof-pic' height='100px' class='p-1 mx-5'>
                            </div>
                            <div class='col-md-3'>
                                <div class='row m-3'>
                                    <div class='col-md-12'><label class='form-check-label'><?php echo $nombre." ".$aPaterno." ".$aMaterno?></label></div>
                                </div>
                                <div class='row m-3'>
                                    <div class='col-md-12'><?php echo $empresa?></div>
                                </div>
                            </div>
                            <div class='col-md-3 align-middle'>
                                <a class='btn btn-primary btn-guardar m-4' href='./expedienteTrabajador.php?id=<?php echo $id?>'>Ver Datos</a>
                            </div>
                            <div class='col-md-3 align-middle'>
                                <button class='btn btn-primary btn-guardar my-4 mx-2'><i class='bi bi-file-earmark-person'></i></button>
                                <a class='btn btn-primary btn-guardar my-4 mx-2' href='./modificarTrabajador.php?id=<?php echo $id?>'><i class='bi bi-pencil-square'></i></a>
                                <button type='submit' class='btn btn-primary btn-guardar my-4 mx-2'><i class='bi bi-eraser-fill'></i></button>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php require 'partials/footerIn.php'; ?>
    </body>
</html>
