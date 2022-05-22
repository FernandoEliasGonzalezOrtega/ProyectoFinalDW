<?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: ./index.php');
    exit();
  }
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
                            <span>Trabajadores</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-switch">
                                <a href="./trabajadoresEdit.html"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked></a>
                            </div>
                        </div>
                        <div class="col">
                            <span>Empresas</span>
                        </div>
                    </div>
                </form>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary mb-3 btn-guardar"><i class="bi bi-plus-square"></i>     Nueva Empresa</button>
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
