<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package taulignan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="flex column relative">
	<section class="entry-header post-banner oliver-filter flex column justify-center align-center relative" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

	</section><!-- .entry-header -->

	<div class="entry-content contained">
		<?php echo get_field('chambres_presentation'); ?>
		<a href="<?php echo get_permalink(119); ?>" class="btn btn-solid btn-lg">Réserver</a>
		<?php
		$all_rooms = array(get_field('details_1'), get_field('details_2'), get_field('details_3'), get_field('details_4'), get_field('details_5'));
		?>
		<?php
		foreach ($all_rooms as $index => $room) :

		?>


			<section class="chambre flex gap-2">
				<div class="carousel-wrapper">

					<div class="carousel-slider">
						<div class="carousel-item item-1">
							<img src="<?php echo esc_url($room['image_1']); ?>" alt="" />
						</div>
						<div class="carousel-item item-2">
							<img src="<?php echo esc_url($room['image_2']); ?>" alt="" />
						</div>
						<div class="carousel-item item-3">
							<img src="<?php echo esc_url($room['image_3']); ?>" alt="" />
						</div>
						<div class="carousel-item item-4">
							<img src="<?php echo esc_url($room['image_4']); ?>" alt="" />
						</div>
					</div>
				</div>
				<div class="info-chambre">
					<h2>Chambre <?php echo $index + 1; ?></h2>
					<p><strong>Superficie : </strong><?php echo esc_html($room['superficie']); ?>m2</p>
					<p class="flex align-center gap-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wifi">
							<path d="M12 20h.01" />
							<path d="M2 8.82a15 15 0 0 1 20 0" />
							<path d="M5 12.859a10 10 0 0 1 14 0" />
							<path d="M8.5 16.429a5 5 0 0 1 7 0" />
						</svg>
						<?php echo esc_html($room['confort']); ?>
					</p>
					<p class="flex align-center gap-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor">
							<rect width="20" height="14" x="2" y="3" rx="2" />
							<line x1="8" x2="16" y1="21" y2="21" />
							<line x1="12" x2="12" y1="17" y2="21" />
						</svg>
						TV
					</p>
					<p class="flex align-center gap-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-snowflake">
							<line x1="2" x2="22" y1="12" y2="12" />
							<line x1="12" x2="12" y1="2" y2="22" />
							<path d="m20 16-4-4 4-4" />
							<path d="m4 8 4 4-4 4" />
							<path d="m16 4-4 4-4-4" />
							<path d="m8 20 4-4 4 4" />
						</svg>
						Climatisation
					</p>
					<p class="flex align-center gap-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shower-head">
							<path d="m4 4 2.5 2.5" />
							<path d="M13.5 6.5a4.95 4.95 0 0 0-7 7" />
							<path d="M15 5 5 15" />
							<path d="M14 17v.01" />
							<path d="M10 16v.01" />
							<path d="M13 13v.01" />
							<path d="M16 10v.01" />
							<path d="M11 20v.01" />
							<path d="M17 14v.01" />
							<path d="M20 11v.01" />
						</svg>
						Salle de bain et toilettes privatives
					</p>
				</div>
			</section>
		<?php
		endforeach ?>


		<div class="gallery">
			<div class="gallery-item big">
				<img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/08/petit_dejeuner_01.jpg" alt="Petit dejeuner">
			</div>
			<div class="gallery-item">
				<img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/08/petit_dejeuner_02.jpg" alt="Petit dejeuner">
			</div>
			<div class="gallery-item">
				<img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/porte.jpg" alt="Porte d'entrée du château">
			</div>
			<div class="gallery-item">
				<img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/piscine-01.jpg" alt="Photo de la piscine">
			</div>
			<div class="gallery-item">
				<img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/exterieur-03.jpg" alt="Photo de l'exterieur">
			</div>
		</div>
		<div class="next-post">

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->