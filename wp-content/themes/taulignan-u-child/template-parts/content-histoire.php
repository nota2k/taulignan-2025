<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package taulignan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="histoire flex column relative">
	<section class="entry-header post-banner oliver-filter flex column justify-center align-center relative" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

	</section><!-- .entry-header -->

	<div class="entry-content contained">
		<?php echo esc_html( get_field('histoire_introduction') ); ?>
		<?php echo esc_html( get_field('histoire_contenu') ); ?>
		<div class="next-post">

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->