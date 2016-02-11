<!-- header -->
<?php get_header(); ?>

<!-- Main content -->
<!--<div class="container container-height">-->
<!--    <div class="row container-height">-->
<!--<div class="col-xs-12 col-md-8 maincontent">-->

<div class="section-articles ">
    <div class="section" id="gifts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="row">
                        <div class="col-xs-12 text-center section-title">
                            <?php if ( ! have_posts() ) : ?>
                                <h1><?php _e('Nothing found',arteshop); ?></h1>
                                <p><?php _e('Sorry, we konden geen posts vinden.',arteshop); ?></p>
                            <?php endif; ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="meta">
                                    <?php _e('Posted on ','diggit'); the_date(); _e(' by ','diggit');?><span class="author"><?php the_author(); ?></span><?php _e(' - Categorized in: ','diggit');?><span class="author"><?php the_category(', '); ?></span>
                                    <?php the_tags(); ?><span class="comment-count"> <a href="<?php comments_link(); ?>"><?php comments_number(__('No Comments', 'diggit'), __('One Comment', 'diggit'), __('% Comments', 'diggit')); ?></a></span>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <?php if ( has_post_thumbnail() ) : // Controleren of de post een thumbnail toegewezen kreeg.
                                    the_post_thumbnail(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-12">
                              <?php the_content(); ?>
                            </div>
                            <div class="col-xs-12">
                              <?php comments_template( '', true ); /* Comment gedeelte ophalen */ ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-xs-12 col-md-4 sidebar">
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Footer -->
<?php get_footer(); ?>
