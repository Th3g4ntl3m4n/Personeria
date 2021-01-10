<?php get_header(); ?>
  
   <!-- Contenido Articulo -->
   <main class="container">
       <div class="row">

       <!-- Loop -->

       <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
        <!-- Fin loop --> 

           <!-- Articulo  -->
           <div class="col-12 col-md-9">
               <img src="assets/Personeriapiedecuesta-cumplimientodelanorma.png" alt="" class="img-fluid">
               <h2 class="my-3"><?php the_title() ?></h2>
                <p class="lead"><?php echo get_the_date() ; ?></p>
                <div class="text-justify">
                    <?php the_content(); ?>
                </div>
           </div>
           <?php
            }
    } ?>

   </main>
   <!-- Fin Articulo -->

  

   <!-- Footer -->

   <?php get_footer(); ?>
<!-- Fin Footer -->

 <!-- Script Bootstrap -->

 <script src="JS/bootstrap.min.js"></script>   

</body>
</html>