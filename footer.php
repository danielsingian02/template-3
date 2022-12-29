<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress-backend-theme
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="site-branding">
	<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<div class="site-branding__logo">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></h1>
				</div>
				<?php
			else :
				?>
				<div class="site-branding__logo">
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></p>
				</div>
				<?php
			endif; ?>
		</div><!-- .site-branding -->
		<div class="footer-menu">
		<nav id="site-navigation" class="footer-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'footer-main-menu',
				)
			);
			?>
		</div>
		</nav><!-- #site-navigation -->
		<p class="footer__credits">© Copyright 2021 HOA Management Name Here</p>
	</footer>
<?php wp_footer(); ?>

</body>
</html>
