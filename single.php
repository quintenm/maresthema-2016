<!-- header -->
<?php get_header(); ?>

<!-- Main content -->
<div class="col-lg-8 maincontent">
    <?php /* Als er geen posts kunnen weergegeven worden*/ ?>
    <?php if ( ! have_posts() ) : ?>
        <h1><?php _e('Nothing found',arteshop); ?></h1>
        <p><?php _e('Sorry, we konden geen posts vinden.',arteshop); ?></p>
    <?php endif; ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="meta">
                <?php _e('Posted on ','diggit'); the_date(); _e(' by ','diggit');?><span class="author"><?php the_author(); ?></span><?php _e(' - Categorized in: ','diggit');?><span class="author"><?php the_category(', '); ?></span>
                <?php the_tags(); ?><span class="comment-count"> <a href="<?php comments_link(); ?>"><?php comments_number(__('No Comments', 'diggit'), __('One Comment', 'diggit'), __('% Comments', 'diggit')); ?></a></span>
            </div>

            <?php if ( has_post_thumbnail() ) : // Controleren of de post een thumbnail toegewezen kreeg.
                the_post_thumbnail(); ?>
            <?php endif; ?>
            <?php the_content(); ?>

            <?php comments_template( '', true ); /* Comment gedeelte ophalen */ ?>
        </div>
    <?php endwhile; ?>
</div>


<!-- Sidebar -->
<div class="col-lg-4 sidebar">
    <?php get_sidebar(); ?>
</div>   



<!-- Footer -->
<?php get_footer(); ?>
