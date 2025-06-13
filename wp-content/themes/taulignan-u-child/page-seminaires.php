<?php
/*
	Template Name: Seminaires
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package taulignan
 */

get_header();
?>

<main id="primary" class="site-main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="seminaires flex column relative">
		<section class="entry-header post-banner oliver-filter flex column justify-center align-center relative" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<?php the_field('mariages_accroche'); ?>
		</section><!-- .entry-header -->

		<div class="entry-content contained">
			<h2><?php the_field('seminaire_accroche'); ?></h2>
			<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'taulignan' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'taulignan' ),
						'after'  => '</div>',
					)
				);
				?>

			<div class="next-post">

			</div>
		</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->

</main><!-- #main -->
<!-- Contact -->
<div class="flex align-center" id="contact">
	<div class="contained flex column">
		<h2>Une question ? Un devis ?</br>Contactez-nous</h2>
		<p>Nous sommes disponibles pour répondre à toutes vos questions. Vous pouvez nous contacter par téléphone ou si vous préférez, nous envoyer un message en remplissant notre formulaire de contact ci-dessous.</p>
		<a href="<?php echo get_permalink(119); ?>"class="btn btn-solid btn-md self-center secondary">Contact</a>
	</div>
</div>
<?php
get_sidebar();
get_footer();
