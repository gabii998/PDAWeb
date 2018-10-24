<?php 
include_once("LoginModal.php") ?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark " style="background: #720293">
<a class="navbar-brand font-weight-normal" href="/">
  <img src=/vistas/img/ic_pda.png height="30">Punto de apoyo</a>
  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#items" aria-controls="basicExampleNav"
  aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="items">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="Mapa">Mapa</a>
    </li>
      <li class="nav-item active">
          <a class="nav-link" href="NuevoComercio">Postular mi local</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="Acerca">Acerca de PDA</a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
  <?php 
    if (isset( $_SESSION['correo'])) {
      include_once(SITE_ROOT."/vistas/navbar/Logueado.php");
    }else{
      include_once(SITE_ROOT."/vistas/navbar/NoLogueado.php");
    }
    ?>
    
  </ul>
  </div>
</nav>
