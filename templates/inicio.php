<?php
    /* Template Name: Inicio */ 
    get_header();
?>

<section id="slide" >
    <?php add_revslider('berluz'); ?>
</section>

<div class="fondoinicio">
<section id="vestidos" class="template-section">
<div class="contenedor">
   <div class="grid">
    <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vestidos1.png" alt="Logo"><br><a href="" class="tienda1">VER TIENDA</a></div>
    <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vestidos2.png" alt="Logo"><br><a href="" class="tienda2">VER TIENDA</a></div>
    </div>
</div>
</section>
<section id="promociones" class="template-section">
<div class="contenedor">
   <h2>Descubre tu vestido de cuento<span>PROMOCIONES</span></h2>
   <?php echo do_shortcode( '[woodmart_products layout="carousel" slides_per_view="4" autoplay="no" hide_pagination_control="yes" hide_prev_next_buttons="no" center_mode="no" wrap="no" sale_countdown="0" stock_progress_bar="0" highlighted_products="0" products_bordered_grid="0" lazy_loading="no" scroll_carousel_init="no"]' ); ?>
</div>
</section>
</div>
<section id="testimonios" class="template-section">
<div class="contenedor">
   <h2 >Lo que nuestros clientes opinan <span>TESTIMONIOS</span></h2>
  
    <?php echo do_shortcode( '[elfsight_testimonials_slider id="1"]' ); ?>
   
    
</div>
</section>
    <section id="ig" class="template-section">
<div class="contenedor">
   <h2 >Nos encanta verte brillar <span>INSTAGRAM</span></h2>
  
    
   
    
</div>
</section>
<section id="contacto" class="template-section">

<div class="contenedor">
   

    
    <div class="grid gridespe">
        <div class="col espe"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo"></div>
        <div class="col"><h2>
<span class="espe">¡CONTÁCTANOS!</span><br>Te ayudaremos a resolver tus dudas</h2></div>
    </div>
     
           <div class="grid">
               <div class="col"><?php echo do_shortcode('[caldera_form id="CF5f63b51a63210"]'); ?></div>
               
<div class="col datos">
       
     
       <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/clock.png" alt="Logo">  L - V   11:00 am a 7:30 pm
<span>Sábado 11:00 am a 5:30 pm</span> </p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" alt="Logo"> (777) 100 1505<span>
(777) 244 7159</span><span>
EXT. 101</span>
</p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/WA.png" alt="Logo">  <a href="https://wa.me/7771140441">(777) 114 0441</a></p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/location.png" alt="Logo"><b class="especial"> Felipe Neri #9</b> <span>
Col. Emiliano Zapata</span><span>
Cuernavaca, Morelos</span></p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" alt="Logo">  <a href="mailto:contacto@ecobol.com.mx">contacto@ecobol.com.mx</a></p>
        
        </div>
        
     
       <p class="negrita">SÍGUENOS EN:</p>
       <p><a href="https://web.facebook.com/ventas.bolsas.5?_rdc=1&_rdr"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.png" alt="Logo">  </a><a href="#"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ig.png" alt="Logo">  </a><a href="#"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/yt.png" alt="Logo">  </a><a href="https://pin.it/4KXvPse"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pt.png" alt="Logo">  </a></p>
       
     </div>
           </div>
</div>
</section>
<?php 
    get_footer();
?>
