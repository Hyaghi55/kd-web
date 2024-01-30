<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KD_WEB
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
		<div class="site-info flex-direction">
			 <div>
				<?php echo 'Copyright Ⓒ '.date("Y"); ?> 
			 </div>
			 <div>
			 <?php 
			wp_nav_menu(
				array(
					'menu ' =>'footer-menu', 
					'menu_class' => 'menu',
					'menu_id'        => 'footer-menu',
					)
			);
			?>
			 </div>
		</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
