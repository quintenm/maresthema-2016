<?php
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>

    <div class="section-articles">
        <div class="section" id="gifts">
            <div class="container">
                <div class="row">

        <?php // Display blog posts on any page @ http://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="col-xs-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h2>
                </div>
                <div class="col-xs-12">
                  <?php the_excerpt(); ?>
                </div>



        <?php endwhile; ?>

        <?php if ($paged > 1) { ?>

            <nav id="nav-posts">
                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
            </nav>

        <?php } else { ?>

            <nav id="nav-posts">
                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            </nav>

        <?php } ?>

        <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
