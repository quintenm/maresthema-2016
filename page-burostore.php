<?php
/*
	Template Name: Burostore
*/
?>
<?php get_header(); ?>
<div class="section-articles" >
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 <?php  if ( is_active_sidebar( 'sidebar' ) ) { ?>col-md-8 col-lg-9<?php }else{ ?>col-md-12 col-lg-12<?php } ?>">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                        // End the loop.
                    endwhile;
                    ?>
                </div>
                <?php  if ( is_active_sidebar( 'sidebar-burostore' ) ) : ?>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <?php
                            dynamic_sidebar( 'sidebar-burostore' );
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
