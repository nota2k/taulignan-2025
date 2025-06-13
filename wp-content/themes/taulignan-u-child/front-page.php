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



<main class="home-template" data-status="finished">

    <article class="container flex column relative">
        <section id="hero-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>')">
            <div class="title-wrapper">
            <h1><?php echo get_field('home_accroche'); ?></h1>
            <p><?php echo get_field('home_introduction'); ?></p>
            <a href="<?php echo get_permalink(119); ?>" class="btn btn-solid btn-lg">Réserver</a>
            </div>
        </section>
        </section>
        <!-- Section Introduction -->
        <section class="bg-olive flex column relative" id="presentation">
            <div class="title-block relative">
                <h2 class="title-block-wrapper">
                    <span>Un lieu d’exception</span>
                    <span>au cœur</span>
                    <span>de la Provence</span>    
                </h2>
            </div>
            <div class="img-circle-container large-size border border-beige parallax" data-speed="-0.5">
                <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/histoire.jpg" alt="Photo de l'allée de platanes" />
            </div>
            <p><?php echo get_field('home_lieu_dexception'); ?></p>
        </section>

        <div class="img-wrapper medium-size relative self-center parallax" id="img-detail01" data-speed="-3">
            <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/detail-01.jpg" alt="Tables dans l'arrière-cour du chateau" />
        </div>
        <div class="img-wrapper medium-size relative parallax" id="img-detail02" data-speed="-0.3">
            <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/exterieur-03.jpg" alt="Vue d'une des tours du chateau" />
        </div>

        <!-- Section Histoire -->
        <section class="bg-beige relative" id="histoire">

            <div class="image-container flex nowrap relative">
                <div class="img-wrapper parallax" id="eglise" data-speed="-0.3">
                    <img class="medium-size" src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/eglise-1.jpg" alt="Photo de la chapelle du chateau" />
                </div>
                <div class="parallax img-wrapper relative" id="embleme" data-speed="1.1">
                    <img class="small-size" src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/histoire-2.jpg" alt="Emblème du chateau de Taulignan" />
                </div>
            </div>
            <div class="flex column absolute" id="block-txt">
                <div class="block-title absolute">
                    <h1 class="title-block-wrapper">
                        <span>Un lieu chargé d’histoire</span>
                    </h1>
                </div>
                <p><?php echo get_field('home_lieu_charge_dhistoire'); ?></p>
                <a href="<?php echo get_permalink(14); ?>" class="btn btn-outline btn-md">Découvrir</a>
            </div>
        </section>
        <!-- Section Chambres d'hotes -->
        <section class="flex column" id="chambres-hotes">
            <div class="flex column align-center">
                <div class="icon-wrapper icon-large" id="lavande-01">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/lavande-05.svg" alt="Icon 01" />
                </div>
                <h1 class="magfhira">Chambres d'hôtes</h1>
                <hr class="lavande bw-20" />
                <p><?php echo get_field('home_chambres_hotes'); ?></p>
                <div class="a-wrapper flex">
                    <a href="<?php echo get_permalink(8); ?>" class="btn btn-solid lavande btn-l">En savoir plus</a>
                    <a href="<?php echo get_permalink(119); ?>" class="btn btn-outline lavande btn-l">Réserver</a>
                </div>
            </div>
            <div class="flex col-5">
                <div class="col thmb-chambre">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/chambre-01-1.jpg" id="chambre-01" alt="Photo de la première chambre" />
                </div>
                <div class="col thmb-chambre">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/chambre-02-1.jpg" id="chambre-02" alt="Photo de la seconde chambre"/>
                </div>
                <div class="col thmb-chambre">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/chambre-03-1.jpg" id="chambre-03" alt="Photo de la troisième chambre"/>
                </div>
                <div class="col thmb-chambre">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/chambre-04-1.jpg" id="chambre-04" alt="Photo de la quatrième chambre"/>
                </div>
                <div class="col thmb-chambre">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/chambre-05-1.jpg" id="chambre-05" alt="Photo de la cinquième chambre"/>
                </div>
            </div>
        </section>

        <!-- Section Mariages -->
        <section class="relative flex column gap-2" id="mariages">
            <div class="block-title">
                <h2 class="title-block-wrapper">
                    <span>Votre mariage</span>
                    <span>dans un lieu idyllique</span>
                </h2>
            </div>
            <div class="flex column" id="block-txt">
                <p><?php echo get_field('home_mariages'); ?></p>
                <a href="<?php echo get_permalink(132); ?>" class="btn btn-outline beige btn-md">Découvrir</a>
            </div>
            <div class="img-wrapper absolute">
                <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/mariage-01.jpg" alt="Photo de l'exterieur du château" />
            </div>
        </section>

        <div class="parallax medium-size relative self-center" id="img-detail03" data-speed="-1.5">
            <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/piscine-01.jpg" alt="Photo de la piscine" />
        </div>
        <div class="parallax img-wrapper medium-size relative" id="img-detail04" data-speed="0.2">
            <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/exterieur-01.jpg" alt="Photo de la cour avec la chapelle en arrière-plan" />
        </div>
        <div class="parallax img-wrapper large-size relative" id="img-detail05" data-speed="-1.3">
            <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/banner.jpg" alt="Photo du château vu de l'avant" />
        </div>
        <!-- Section Séminaires -->
        <section class="relative" id="seminaires">
            <div class="banner relative flex">
                <div class="block-title">
                    <h2 class="title-block-wrapper">
                        <span>Organisez vos séminaires</span>
                        <span>dans un cadre exceptionnel</span>
                    </h2>
                </div>
                <div class="flex column relative" id="block-txt">
                    <p><?php echo esc_html(get_field('home_seminaires')); ?></p>
                    <a href="<?php echo get_permalink(50); ?>" class="btn btn-outline white btn-md">Découvrir</a>
                </div>
            </div>
            <div class="tiles-wrapper">
                <div class="img-wrapper">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/seminaire-01.jpg" alt="Photo de la cour" />
                </div>
                <div class="img-wrapper">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/piscine-03.jpg" alt="Photo de la piscine" />
                </div>
                <div class="img-wrapper">
                    <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/exterieur-04-2.jpg" alt="Photo de l'arrière-cour" />
                </div>
            </div>

        </section>

        <!-- Section Activités -->
        <section class="relative flex" id="activites">
            <div class="block-title self-end">
                <h2 class="title-block-wrapper">
                    <span>Venez vivre</span>
                    <span>une expérience inoubliable</span>
                </h2>
            </div>
            <div class="flex column relative" id="block-txt">
                <p><?php echo esc_html(get_field('home_activites')); ?></p>
                <a href="<?php echo get_permalink(510); ?>" class="btn btn-outline lavande btn-md">Découvrir</a>
            </div>
            <div class="img-wrapper medium-size parallax" id="activite-02" data-speed="-1.2">
                <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/activites-02.jpg" alt="Icon 01" />
            </div>
            <div class="img-wrapper small-size self-end parallax" id="activite-01" data-speed="0.2">
                <img src="https://www.chateaudetaulignan.com/wp-content/uploads/2024/06/activites-01.jpg" alt="Icon 01" />
            </div>

        </section>

    </article>

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
get_footer();
