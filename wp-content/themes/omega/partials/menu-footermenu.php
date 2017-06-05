<?php
/**
 * Primary Menu Template
 */
?>	
<nav class="nav-footer" <?php omega_attr( 'menu' ); ?>>
	
	<?php //do_action( 'omega_before_primary_menu' ); ?>

	<?php 
	wp_nav_menu( array(
		'theme_location' => 'footer',
		'container'      => '',
		'menu_class'     => 'footer-nav-menu',
		'fallback_cb'	 => 'omega_default_menu'
		)); 
	?>

	<?php //do_action( 'omega_after_primary_menu' ); ?>

	
</nav><!-- .nav-primary -->