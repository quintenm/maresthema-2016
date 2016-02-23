<?php

get_header(); ?>

<?php /* Als er geen posts zijn om weer te geven. */ ?>
<?php if ( ! have_posts() ) : ?>
    <h1>Niks gevonden.</h1>
    <p>Sorry, we vonden geen enkel matchend resultaat.</p>
<?php endif; ?>

<?php // Hierbij gaan we de archief posts gaan ophalen met gegevens zoals de titel, inhoud, ... ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
<?php the_post(); the_content();  ?>
    <!-- Archive functies -->
    <h2>Archief op maand</h2>
    <ul>
        <?php wp_get_archives(); ?>
    </ul>
    <h2>Argief op maand</h2>
    <ul>
        <?php wp_list_categories(); ?>
    </ul>
    <!-- Einde archief functies -->
test
    </div> <!-- content end -->
<?php get_sidebar(); ?>
    </div> <!-- container end -->
<?php get_footer(); ?>