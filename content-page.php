<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<?php if ( is_front_page() ):

	$cta_content = get_post_meta( get_the_ID(), 'cta_content', true );
	$cta_button_text = get_post_meta( get_the_ID(), 'cta_button_text', true );
	$cta_button_url = get_post_meta( get_the_ID(), 'cta_button_url', true );
	$cta_button_color = get_post_meta( get_the_ID(), 'cta_button_color', true );
	$cta_background_color = get_post_meta( get_the_ID(), 'cta_background_color', true );
	$cta_text_color = get_post_meta( get_the_ID(), 'cta_text_color', true );

?>

	<div class="cta-container" style="background-color:<?php echo $cta_background_color; ?>">
		<p class="cta-content" style="color:<?php echo $cta_text_color; ?>"><?php echo $cta_content; ?></p>
		<a href="<?php echo $cta_button_url; ?>" class="cta-button" style="background-color:<?php echo $cta_button_color; ?>"><?php echo $cta_button_text; ?></a>
	</div>

<?php

	endif;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
