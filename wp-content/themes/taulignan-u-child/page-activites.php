<?php

/**
 * Template Name: Activités
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

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="activites flex column relative">
		<section class="entry-header post-banner oliver-filter flex column justify-center align-center relative" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<?php the_field('activites_accroche'); ?>
		</section><!-- .entry-header -->

		<div class="entry-content contained">
			<h2><?php the_field('activites_introduction'); ?></h2>
			<section class="flex col-2 mb-5" id="contenu_activites_culture">
				<div class="flex column w-50 img-wrapper">
					<div class="img-wrapper">
						<img class="" src="<?php the_field('activites_image_culture_1'); ?>" alt="">
					</div>
					<div class="img-wrapper">
						<img class="" src="<?php the_field('activites_image_culture_2'); ?>" alt="">
					</div>
					<div class="img-wrapper">
						<img class="" src="<?php the_field('activites_image_culture_3'); ?>" alt="">
					</div>
				</div>
				<div class="flex column w-50">
					<h1 class="h1-md">Un patrimoine culturel qui vaut le détour</h1>
					<div class="retrait">
						<?php the_field('activites_contenu'); ?>
					</div>
				</div>
			</section>
			<section class="flex col-2 mb-5" id="contenu_activites_nature">
				<div class="flex column w-50">
					<h1 class="h1-md">Découvrir les paysages</h1>
					<div class="retrait">
						<?php the_field('activites_contenu_nature'); ?>
					</div>
				</div>
				<div class="flex column w-50 img-wrapper">
					<div class="img-wrapper">
						<img src="<?php the_field('activites_image_nature_1'); ?>" alt="">
					</div>
					<div class="img-wrapper">
						<img src="<?php the_field('activites_image_nature_2'); ?>" alt="">
					</div>
					<div class="img-wrapper">
						<img src="<?php the_field('activites_image_nature_3'); ?>" alt="">
					</div>
				</div>

			</section>
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
		<a href="<?php echo get_permalink(119); ?>" class="btn btn-solid btn-md self-center secondary">Contact</a>
	</div>
</div>
<?php
get_sidebar();
get_footer();
