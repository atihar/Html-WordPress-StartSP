<?php
/**
 * Displays header site branding
 *
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<?php if ( has_custom_logo() && $show_title ) : ?>
	<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>

<div class="site-branding">

	<?php if ( $description && true === get_theme_mod( 'display_title_and_tagline', false ) ) : ?>
		<p class="site-description">
			<?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</p>
	<?php endif; ?>
</div><!-- .site-branding -->
