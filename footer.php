<footer class="section footer">
    <div class="container">
        <div class="row">
                <?php
                  if ( is_active_sidebar( 'footer_links' ) ) :
                    dynamic_sidebar( 'footer_links' );
                  endif;
                  if ( is_active_sidebar( 'footer_rechts' ) ) :
                    dynamic_sidebar( 'footer_rechts' );
                  endif;
                ?>

            <div class="col-sm-12">
                <p class="text-info text-right">

                </p>
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            Gaston Baertstraaat 3, 9800 Deinze
                        </address>
                    </div>
                    <div class="col-md-6 hidden-lg hidden-md hidden-sm text-left">


                        <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 hidden-xs text-right">
                        <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>