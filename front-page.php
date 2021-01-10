<?php get_header (); ?>

<div style="padding-bottom: 20px;">
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
</div>
<!-- Banner -->
<!-- <section>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="padding-bottom: 20px; " >
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_url'); ?>/assets/logos/Banner_personeria.png" class="d-block w-100 bannerppal" alt="banner_personeria_piedecuesta" style="padding : 5px 15px;">
  </div>
  </div>
  </div>
  </section> -->
  <!-- fin banner --> 

 <!-- Image menu -->
 <nav>
<div align='center' class="container">
<div class="raw ">
    <img src="<?php bloginfo('template_url'); ?>/assets/iconos/Radicacion-pqrs.png" class="img-menu" prueba> 
    <img src="<?php bloginfo('template_url'); ?>/assets/iconos/derechos-humanos.png" class="img-menu">
    <img src="<?php bloginfo('template_url'); ?>/assets/iconos/Notificaciones-y-avisos.png" class="img-menu">    
    <img src="<?php bloginfo('template_url'); ?>/assets/iconos/Participacion-ciudadana.png" class="img-menu">
    <img src="<?php bloginfo('template_url'); ?>/assets/iconos/portal-ninosyninas.png" class="img-menu"> 
    <img src="<?php bloginfo('template_url'); ?>/assets/iconos/calendario-de-actividades.png" class="img-menu">
    <img src="<?php bloginfo('template_url'); ?>/assets/iconos/vigilancia-administrativa.png" class="img-menu">
    </div>   
</div>
</nav>
<!-- Fin image menu --> 


 <!-- Titulo boletines  -->
     
 <div ><h1 class="titulos">Boletines</h1></div>

 <!-- Fin Titulo Boletines --> 

<!-- Contenido -->

   <div class="container my-5">
       <div class="row">

        <!-- Articulo -->

        <!-- Codigo loop de wordpress -->
      <?php 
        get_header();
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
                
    
    <!-- Plantilla de post -->
        <div class="col-12 col-sm-6 col-md-4 mb-3">
        <div class="card">
        <!-- card-img-top img-fluid -->
            <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
              the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid'));
            } ?></a>
            <div class="card-block">
              <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer Mas</a>
            </div>
            <div class="card-footer">
                <small class="text-muted"><?php echo get_the_date() ; ?> / <?php the_category(',') ; ?> / <?php the_author() ; ?> </small>
            </div>
          </div>
        </div>
    <!-- fin plantilla de post -->

     <?php endwhile; endif; ?>

    <!-- Fin codigo loop wordpress -->

         <!-- Fin Articulo -->

         <!-- Boton boletines -->
         <div class="d-grid gap-2 d-md-block text-center">
         <button type="button" class="btn btn-warning btn-personeria">Lista de Boletines</button>
         </div>
         <!-- Fin boton boletines-->

       </div>
   </div>


   <!-- REDES SOCIALES ---> 

<div class="container-fluid">
  <div class="row">

   <!-- DIV REDES SOCIALES-->
<div style="background: #162D6A;"><h3 class="tituloblanco">Redes Sociales</h3></div>

<!-- paso 1 plugin de facebook -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0" nonce="0vznOEPf"></script>
<!-- fin paso 1 pagina de facebook -->

<div class="cont_redes">
<!-- temeline facebook-->

<i class="fab fa-facebook fa-5x iconof" style="margin-right: 10px;"></i>
 <div class="fb-page face" data-href="https://www.facebook.com/personeriapiedecuesta" data-tabs="timeline" data-width="380" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/personeriapiedecuesta" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/personeriapiedecuesta">Personeria Municipal de Piedecuesta</a></blockquote></div>
 <!-- Fin temline face-->

<!-- temeline twiter-->
<!-- <i class="fab fa-twitter fa-5x iconot"></i> -->
<i class="fab fa-twitter fa-5x iconot" style="margin-right: 10px;"></i><a class="twitter-timeline twiter"data-lang="es" data-width="380" data-height="500" data-theme="light" href="https://twitter.com/PersoneriaPiede?ref_src=twsrc%5Etfw">Tweets by PersoneriaPiede</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<!-- temeline tuiter-->
  </div>
</div>
</div>

  <!-- FIN REDES SOCIUALES ---> 

    <!-- Fin contenido-->

    <!-- ZONA MULTIMEDIA-->
<div>
  
  <h3 class="titulo_multi">Zona Multimedia </h3>
  <iframe width="800" height="400" frameborder="0" allow="autoplay" class="video" src="https://www.youtube.com/embed/videoseries?list=PLYHnpx6OCnHsHUdfsNI-rOpDR1muETu9C"></iframe>

</div>
<!-- FIN ZONA MULTIMEDIA-->

   <!-- inicio pqr-->
   <div class="container-fluid text-center">
    <div class="row">
      <div style="background-color:#2A978F">
      <div class="text-white">
      
      <BR><h1><strong>PQRS en Línea</strong></h1>

            <BR> <h3>Radique y consulte su requerimiento en línea. La información suministrada será almacenada y tratada con la reserva prevista en la Ley 1581 de 2012 sobre protección de datos personales</h3>
            
              <div class="row">
                <div class="col-lg-6 pb-4 pt-4">
                <button type="button" class="btn btn-ttc btn-lg ">Radicacion</button>  
          </div>
          <div class="col-lg-6 pb-4 pt-4">
                <button type="button" class="btn btn-ttc btn-lg">Consulta</button>                
                </div>
                </div>
              </div>           
            </div>
            <BR>  
            <BR> 
          </div>
          
            </div>
            
      </div>
  <!-- fin pqr-->

    <!-- inicio banner inferior-->
<div class="container">
<div class="row">

    <img src="<?php bloginfo('template_url'); ?>/assets/logos/logospersoneria-alcaldia-piedecuesta.png"alt=""  height= "auto"; max-width= "100%" align="center">
    </div>
    </div>
  
<!-- fin banner inferior-->
  <?php get_footer(); ?>