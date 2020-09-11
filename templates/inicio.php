<?php
    /* Template Name: Inicio */ 
    get_header();
?>

<section id="slide" >
    <?php add_revslider('jewelry'); ?>
</section>
<section id="slide2" >
    <?php add_revslider('movil'); ?>
</section>
<section id="organiza" class="template-section">
<div class="contenedor">
   <h2>Organizamos tu Evento</h2>
   <p>En Leonor Morales Wedding and Event Planner <b>cuidamos cada detalle</b> y te brindamos la magia que hará que tu evento sea realmente <b>inolvidable</b> por eso:</p>
    <div class="grid">
        <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/salud.png" alt="Logo"></div>
        <div class="col">
            <ul>
                <li>Realizamos <b>tu evento en cualquier parte de México</b>.</li>
                <li>Te ayudamos en la <b>gestión de los trámites necesarios</b>.</li>
                <li>Escuchamos tus ideas y te apoyamos durante todo el proceso.</li>
                <li>Tenemos <b>paquetes de celebración</b> que se adaptan a tu presupuesto.</li>
                <li>Te orientamos para <b>elegir los mejores proveedores</b> según tus gustos, peticiones y las últimas tendencias. </li>
               
                <p class="especial">Y más</p>
                
            </ul>
            <p class="especial"><b>¡Queremos que disfrutes tu celebración desde la planeación!</b></p>
             <a href="https://lmeventos.com.mx/organizamos/" class="btn">Saber más</a>
        </div>
    </div>
</div>
</section>

<section id="galeria" class="template-section">
<div class="contenedor">
   <h2 class="blanco">Galería</h2>
   <p class="blanco">Nuestros eventos son momentos inolvidables, aquí podrás ver la magia que los caracteriza:</p>
    <?php echo do_shortcode( '[grid_plus name="galeria"]' ); ?>
   
    
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
