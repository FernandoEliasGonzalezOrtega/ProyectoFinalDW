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
    <body class='bg-C' onload={actualizarTablaTrabajadores()}>
        <nav class='navbar navbar-default bg-A font-white'>
            <div class='container'>
                    <img src='./assets/img/logo-blanco-nombre.png' alt='logo' width='5%' class='d-inline-block align-text-top'>
                    <p class='fs-3 m-auto'><b>Consorcio Vengadores S. A. de C. V.</b></p>
                    <i class='bi bi-box-arrow-right fs-1' alt='login' class='d-inline-block align-text-top'></i>
            </div>
        </nav>
        <div class='container bg-C'>
            <!--Barra de busqueda-->
            <form class='row py-3'>
                <div class='col-md-10'>
                    <input type='text' class='form-control' id='worksearch' placeholder='Ingresa el nombre del trabajador'>
                </div>
                <div class='col-md-2'>
                    <button type='button' class='btn btn-primary mb-3 btn-guardar' onclick={actualizarTablaTrabajadores()}><i class='bi bi-search'></i>  Buscar</button>
                </div>
            </form>
            <!--Switch de vistas-->
            <div class='row'>
                <div class='col-md-3'></div>
                <form class='col-md-6'>
                    <div class='row'>
                        <div class='col'>
                            <span>Trabajadores</span>
                        </div>
                        <div class='col'>
                            <div class='form-check form-switch'>
                                <a href='./empresasEdit.html'><input class='form-check-input' type='checkbox' role='switch' id='flexSwitchCheckDefault'></a>
                            </div>
                        </div>
                        <div class='col'>
                            <span>Empresas</span>
                        </div>
                    </div>
                </form>
                <div class='col-md-3'>
                    <a type='submit' class='btn btn-primary mb-3 btn-guardar' href='./formularioTrabajadores.html'><i class='bi bi-plus-square'></i>     Nuevo Trabajador</a>
                </div>
            </div>
            <form>
                <div class='row'>
                    <div class='col-md-12'>
                        <!--Tabla de datos-->
                        <div class='container table-scroll my-3 bg-D' tabindex='0' id='tablaTrabajadores'>
                            Realiza tu búsqueda
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer class='bg-A text-center fs-6 sticky-bottom font-white'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-12'>Todos los derechos reservados.</div>
                </div>
                <div class='row'>
                    <div class='col-md-4'>Consorcio Vengadores S. A. de C. V.</div>
                    <div class='col-md-4'>Departamento de Recursos Humanos</div>
                    <div class='col-md-4'>Tel: 222-123-1234</div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        <a href='./historial.html'>Historial de acceso</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>