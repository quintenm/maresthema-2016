<footer class="section footer" id="footer">
    <div class="container">
        <div class="row">
                <?php
                  if ( is_active_sidebar( 'footer_links' ) ) :
                    dynamic_sidebar( 'footer_links' );
                  endif;
                if ( is_active_sidebar( 'footer_midden' ) ) :
                    dynamic_sidebar( 'footer_midden' );
                endif;
                if ( is_active_sidebar( 'footer_midden2' ) ) :
                    dynamic_sidebar( 'footer_midden2' );
                  endif;
                  if ( is_active_sidebar( 'footer_rechts' ) ) :
                    dynamic_sidebar( 'footer_rechts' );
                  endif;
                ?>
        </div>
        <div class="col-xs-12 company-data">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <address>
                        <?php echo html_entity_decode(get_theme_mod('mt_instellingen_adress')); ?>
                    </address>
                </div>
                <?php
                    $facebook_url = get_theme_mod('mt_instellingen_fb');
                    $twitter_url = get_theme_mod('mt_instellingen_tw');
                    if($facebook_url || $twitter_url):
                ?>
                <div class="col-xs-12 col-md-6 text-right">
                    <?php if($facebook_url): ?><a href="<?php echo $facebook_url; ?>"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a><?php endif; ?>
                    <?php if($twitter_url):  ?><a href="<?php echo $twitter_url; ?>"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a><?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p class="text-center">Mares.be &copy; 2016 — Disclamer — Policy</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>