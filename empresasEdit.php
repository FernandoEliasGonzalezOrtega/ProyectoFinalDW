<?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
  }

  require './partials/historial.php';
  $des = "MENÚ EMPRESAS.";
  nvo($des);
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Empresas</title>
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src='./assets/js/script.js'></script>
    </head>
    <body class="bg-C" onload={actualizarTablaEmpresas()}>
        <!--Header-->
        <?php require 'partials/headerIn.php'; ?>
        <div class="container">
            <!--Barra de busqueda-->
            <form class="row py-3">
                <div class="col-md-10">
                    <input type="text" class="form-control" id="worksearch" placeholder="Ingresa el nombre de la empresa">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary mb-3 btn-guardar" onclick={actualizarTablaEmpresas()}><i class="bi bi-search"></i>  Buscar</button>
                </div>
            </form>
            <!--Switch de vistas-->
            <div class="row">
                <div class="col-md-3"></div>
                <form class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <span>Empresas</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-switch">
                                <a href="./trabajadoresEdit.php"><input class="form-check-input" type="button" role="switch" id="flexSwitchCheckDefault" checked></a>
                            </div>
                        </div>
                        <div class="col">
                            <span>Trabajadores</span>
                        </div>
                    </div>
                </form>
                <div class="col-md-3">
                <a type='submit' class='btn btn-primary mb-3 btn-guardar' href='./formularioEmpresa.php'><i class='bi bi-plus-square'></i>     Nueva Empresa</a>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container table-scroll my-3 bg-D" tabindex="0" id="tablaEmpresas">
                            <p>Realice una busqueda</p>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <!--Footer-->
        <?php require 'partials/footerIn.php'; ?>
    </body>
</html>
