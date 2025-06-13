<?php

/**
 * The template for displaying all pages
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

	<?php
	while (have_posts()) :
		the_post();
		$post_id = get_the_ID();
		$title = get_the_title();

		if ($post_id == 8) {
			get_template_part('template-parts/content', 'hotes');
		} elseif ($title == 'Mariages') {
			get_template_part('template-parts/content', 'histoire');
		} else {
			get_template_part('template-parts/content', '');
		}
		// If comments are open or we have at least one comment, load up the comment template.
		if (function_exists('comments_open') && (comments_open() || get_comments_number())) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->
<!-- Contact -->
 <?php if (!is_page('contact')) : 
	?>
<div class="flex align-center" id="contact">
	<div class="contained flex column">
		<h2>Une question ? Un devis ?</br>
			Contactez-nous</h2>
		<p>Nous sommes disponibles pour répondre à toutes vos questions. Vous pouvez nous contacter par téléphone ou si vous préférez, nous envoyer un message en remplissant notre formulaire de contact ci-dessous.</p>
		<button class="btn-solid btn-md self-center secondary">Contact</button>
	</div>
</div>
<?php endif; ?>
<?php
get_sidebar();
get_footer();
