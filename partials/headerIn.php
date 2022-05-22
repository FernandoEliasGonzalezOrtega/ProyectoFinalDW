<?php
  if(isset($_POST['btnLogout'])){
    session_start();
    session_unset();
    session_destroy();
    header('Location: ./index.php');
  }

?>
<nav class="navbar navbar-default bg-A font-white">
    <div class="container">
    <!--  <img src="assets/img/logo-blanco-nombre.png" alt="logo" width="10%" class="d-inline-block align-text-top" >-->
      <a href="empresasEdit.php" >
        <img src="assets/img/logo-blanco-nombre.png" alt="logo" width="15%" class="d-inline-block align-text-top">
      </a>
        <p class="fs-3 m-auto"><b>Consorcio Vengadores S. A. de C. V.</b></p>
        <i class="bi bi-box-arrow-right fs-1" alt="Logout" class="d-inline-block align-text-top"></i>
    </div>
</nav>
