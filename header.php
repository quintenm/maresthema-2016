<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php
        wp_head();
    ?>
</head>

<body <?php is_front_page() ? print"data-spy='scroll'": print""; ?> <?php body_class(); ?>>
<?php if ( ! isset( $content_width ) ) $content_width = 900; ?>
<nav class="navbar navbar-default navbar-fixed-top container-fluid" id="nav" <?php if ( is_admin_bar_showing() ) { ?>style="top:32px;"<?php } ?>>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php if(get_theme_mod('mt_instellingen_logo')): ?>
            <a class="navbar-brand hidden-sm" href="<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_theme_mod('mt_instellingen_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" scale="0" width="150px"></a>
            <?php endif; ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                if(is_front_page()){
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => '3',
                        'container'         => 'div',
                        'container_class'   => '',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                        );
                }else{
                    wp_nav_menu( array(
                        'menu'              => 'secundairy',
                        'theme_location'    => 'secundairy',
                        'depth'             => '3',
                        'container'         => 'div',
                        'container_class'   => '',
                        'container_id'      => 'bs-example-navbar-collapse-2',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                        );
                }
                ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                    $facebook_url = get_theme_mod('mt_instellingen_fb');
                    $twitter_url = get_theme_mod('mt_instellingen_tw');
                    if($facebook_url):
                ?>
                    <li class="col-xs-4 hidden-sm hidden-md hidden-lg text-center"><a href="<?php echo $facebook_url; ?>"><i class="fa fa-facebook"></i></a></li>
                    <li class="hidden-xs hidden-sm"><a href="<?php echo $facebook_url; ?>"><i class="fa fa-facebook"></i></a></li>
                <?php
                    endif;
                    if($twitter_url):
                ?>
                    <li class="col-xs-4 hidden-sm hidden-md hidden-lg text-center"><a href="<?php echo $twitter_url; ?>"><i class="fa fa-twitter"></i></a></li>
                    <li class="hidden-xs hidden-sm"><a href="<?php echo $twitter_url; ?>"><i class="fa fa-twitter"></i></a></li>
                <?php endif; ?>
                <li class="dropdown">
                    <a href="#" class="col-xs-4 hidden-sm hidden-md hidden-lg text-center dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-search"></i> <span class="caret"></span>
                    </a>
                    <a href="#" class="hidden-xs dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-search"></i> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="container search">

                            <form  id="search" role="search" method="get" class="search-form navbar-form row" action="<?php echo home_url( '/' ); ?>">
                                <div class="col-xs-8 col-sm-9 col-md-10">
                                    <input type="search" class="search-field form-control"
                                           placeholder="Zoeken naar ..."
                                           value="<?php echo get_search_query() ?>" name="s"
                                           title="Zoeken naar ..." />
                                </div>
                                <div class="col-xs-4 col-sm-3 col-md-2">
                                    <button type="submit" class="search-submit btn btn-primary form-control">Zoeken</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>