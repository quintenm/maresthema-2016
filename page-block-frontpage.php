<?php
/*
	Template Name: Blok op startpagina
*/
?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
<div class="section" id="office">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center section-title">
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>
            </div>
            <div class="col-xs-12">
                <?php the_excerpt(); ?>
            </div>
        </div>
        <div class="row btn-offset">
            <div class="col-xs-4 col-xs-offset-4 text-center">
                <a href="<?php the_permalink(); ?>" class="btn btn-default">ga naar de <?php the_title(); ?></a>
            </div>
        </div>
    </div>
</div>




        <?php endwhile; ?>


        <?php wp_reset_postdata(); ?>