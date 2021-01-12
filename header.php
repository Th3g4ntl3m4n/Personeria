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
     
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     
    


     <title>Personeria Municipal de Piedecuesta</title>
  </head>
  <body>
      
      <div class="fixed-top">
  <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
      <div class="container-fluid ">
        <a class="navbar-brand" href="javascript:location.reload();">
          <img src="<?php bloginfo('template_url'); ?>/assets/logos/logo-personeria-blanco.png" alt="Personeria_de_piedecuesta_logo" >
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



       <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav ml-auto">
            
        <?php wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
                'menu_class' => 'nav-link'
            ) ); ?>

</div>

</div>
      </div>
      </div>
    </nav>

   <!--- Fin Navbar -->