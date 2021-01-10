<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <!-- Style -->
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
     <script src="https://kit.fontawesome.com/7bb497247d.js" crossorigin="anonymous"></script>

    <title>Personeria Municipal de Piedecuesta</title>
  </head>
  <body>
      
  <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="javascript:location.reload();">
          <img src="<?php bloginfo('template_url'); ?>/assets/logos/logo-personeria-blanco.png" alt="Personeria_de_piedecuesta_logo" >
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar nav-link">

        <?php wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbar',
                'items_wrap' => ' <ul class="navbar-nav ml-auto">%3$s</ul>',
                'menu_class' => 'nav-item'
            ) ); ?>

</div>


      </div>
    </nav>
  

   <!--- Fin Navbar -->
