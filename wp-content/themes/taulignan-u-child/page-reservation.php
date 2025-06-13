<?php
/**
 * Template Name: Réservation
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
		<div id="widgetHolder_sgnh128ry"></div>
			<script>
				(function (w, d, s, o, f, js, fjs) {
				if (w[o]) return;
				w['BB-Widget'] = o; w[o] = w[o] || function () { (w[o].q = w[o].q || []).push(arguments) };
				js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
				js.id = o; js.src = f; js.async = 1; fjs.parentNode.insertBefore(js, fjs);
				}(window, document, 'script', 'w1', 'https://bed-booking.com/widget/widget.js'));
				w1('init', {targetElementId: 'widgetHolder_sgnh128ry',widgetId: '8eae92e48a299b97d58fcd90ed95cc5ee70be813', type:'calendar'})
			</script>
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
