<?php
$path = '';
if(isset($_GET["path"])){
  $path = $_GET["path"];
}else{
  $path = 'inicio';
}
?>
<div class="container">
  <div class="row">
    <div class="12u">

      <!-- Header -->
        <header id="header">

          <!-- Logo -->
            <h1><a href="incio" id="logo">Nexumport</a></h1>

          <!-- Nav -->
            <nav id="nav">
              <ul>
                <li <?php if($path == "inicio"): ?>class="current_page_item"<?php endif; ?>><a href="inicio">Inicio</a></li>
                <li <?php if($path == "nosotros"): ?>class="current_page_item"<?php endif; ?>><a href="nosotros">Nosotros</a></li>
                <li <?php if($path == "productos"): ?>class="current_page_item"<?php endif; ?>><a href="productos">Productos</a></li>
                <li <?php if($path == "contacto"): ?>class="current_page_item"<?php endif; ?>><a href="contacto">Contacto</a></li>
              </ul>
            </nav>

        </header>

    </div>
  </div>
</div>
