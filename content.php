<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

			<div class="row">
					<div class="col-xs-12" id="post-<?php the_ID(); ?>">
						<?php
						if ( is_single() ) :
							the_title( '<h2 class="entry-title">', '</h2>' );
						else :
							the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
						endif;
						?>
					</div>
					<div class="col-xs-12">
						<?php
							/* translators: %s: Name of current post */
							the_content( sprintf(
								__( 'Continue reading %s', 'twentyfifteen' ),
								the_title( '<span class="screen-reader-text">', '</span>', false )
							) );

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">Pagina\'s</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">Pagina </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
						?>
					</div>
			</div>
