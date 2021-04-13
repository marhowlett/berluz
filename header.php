<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v9.0'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution="install_email"
  page_id="213742195947891"
  theme_color="#fa3c4c"
    logged_in_greeting="Hola!!! En qu&#xe9; te podemos ayudar??"
    logged_out_greeting="Hola!!! En qu&#xe9; te podemos ayudar??">
</div>
	<?php do_action( 'woodmart_after_body_open' ); ?>
	
	<div class="website-wrapper">

		<?php if ( woodmart_needs_header() ): ?>

			<!-- HEADER -->
			<header <?php woodmart_get_header_classes(); // location: inc/functions.php ?>>

				<?php 
					whb_generate_header();
				 ?>

			</header><!--END MAIN HEADER-->
			
			<?php woodmart_page_top_part(); ?>

		<?php endif ?>
