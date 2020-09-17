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

    <section id="blog" class="template-section">
    
    
     <div class="contenedor">
       <h2>Revista</h2>
       <p>Entérate de las últimas tendencias en moda y decoración para Eventos Sociales y mucho más...
Aquí te contamos todo lo que necesitas saber para que tu Evento sea un éxito.  </p>
        <div class="centro">
        
        
        <?php echo do_shortcode('[vc_row][vc_column][woodmart_blog items_per_page="3" blog_design="masonry" img_size="200x100" parts_title="1" parts_meta="1" parts_text="1" parts_btn="1" lazy_loading="no" blog_columns="3"][/vc_column][/vc_row]');?>

         
     </div>
       <div class="center">
           <a href="https://lmeventos.com.mx/revista/" class="btn">VER REVISTA</a>
       </div>
        </div>
    </section>
     <section id="conocenos" class="template-section">
     <div class="contenedor">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Soluciones">
         <h2>Conócenos</h2>
         <p>Leonor Morales Wedding and Event Planner, es una empresa con más de 5 años de experiencia en la producción, planeación y organización de Eventos Sociales. 
</p>
        <p>Ofrecemos asesoría y atención personalizada para coordinar los detalles de tu Boda, Bautizo, XV años y cualquier otro tipo de Evento social o corporativo, conforme a tus gustos,  peticiones y a las últimas tendencias </p>
        <div class="center">
           <a href="https://lmeventos.com.mx/nosotros/" class="btn">ME INTERESA</a>
       </div>
     </div>
</section>
  <section id="contacto" class="template-section">
 
 <div class="contenedor">
    <h2>CONTÁCTANOS</h2>
     <p class="especial">Convertiremos tu evento en un momento inolvidable.</p>

  <div class="grid">

                
                <div class="col prueba_col">
                 
                 
                  <?php echo do_shortcode( '[caldera_form id="CF5eff974667700"]' ); ?>
                    <a class="evento" href="mailto:contacto@lmeventos.com.mx">contacto@lmeventos.com.mx</a>
               
                </div>
                <div class="col fondo">
                   <p> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reloj.svg" alt="Logo"> Lunes a Sábado de 9 a.m. a 7 p.m. y <span>Domingos de 10 a.m. a 3 p.m.</span></p>
                  <!-- <p> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tel.svg" alt="Logo"> 55 5503 3469  </p>-->
                   <p> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Whats.svg" alt="Logo"> <a href="https://wa.me/525512493830">5512493830</a><br></p>
                 <p class="imagenes"><a href="https://www.instagram.com/leonormoraleseventos/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/IG.svg" alt="Logo"></a><a href="https://www.facebook.com/LeonorMoralesEventos/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/FB.svg" alt="Logo"></a><a href="https://www.zankyou.com.mx/f/leonor-morales-wedding-planner-828676"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Zankyou.svg" alt="Logo"></a></p>
                 
                </div>


            </div>
             </div>
</section>

<?php 
    get_footer();
?>
