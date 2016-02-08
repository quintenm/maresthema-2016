<?php
    get_header();

$postlist = get_posts( 'orderby=menu_order&sort_order=asc' );
$posts = array();
foreach ( $postlist as $post ) {
    $posts[] += $post->ID;
}

$current = array_search( get_the_ID(), $posts );
$prevID = $posts[$current-1];
$nextID = $posts[$current+1];
?>

<div class="navigation">
    <?php if ( !empty( $prevID ) ): ?>
        <div class="alignleft">
            <a href="<?php echo get_permalink( $prevID ); ?>"
               title="<?php echo get_the_title( $prevID ); ?>">Previous</a>
        </div>
    <?php endif;
    if ( !empty( $nextID ) ): ?>
        <div class="alignright">
            <a href="<?php echo get_permalink( $nextID ); ?>"
               title="<?php echo get_the_title( $nextID ); ?>">Next</a>
        </div>
    <?php endif; ?>
</div><!-- .navigation -->

<div class="section-articles">
    <div class="section" id="gifts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center section-title">
                    <h2>Gifts & Textile</h2>
                </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <p>Versterk u imago op een professionele manier.  Voor elke personalisering hebben wij de juiste oplossing, transferdruk, zeefdruk, borduren,...  Een deskundig team adviseert u graag bij de juiste keuze. Mares.be</p>
                </div>
                <div class="col-sm-4">
                    <img src="images-tijdelijk/textiel-button.jpg">
                </div>
            </div>
            <div class="row btn-offset">
                <div class="col-xs-4 col-xs-offset-4 text-center">
                    <a href="#" class="btn btn-default">ga naar de catalogus</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
