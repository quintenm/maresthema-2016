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
        $options = get_option('mares_thema_options');
        $facebook_url = $options['facebook_url'];
        $twitter_url = $options['twitter_url'];
    ?>
</head>

<body data-spy="scroll" <?php body_class(); ?>>
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
            <a class="navbar-brand hidden-sm" href="<?php echo get_site_url(); ?>"><img class="logo" src="http://groep.mares.be/wp-content/uploads/2015/05/logo-224x70.png" alt="<?php bloginfo( 'name' ); ?>" scale="0" width="150px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                if(is_front_page()){
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
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
                        'depth'             => 2,
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
                        <li class="container">
                            <form class="navbar-form row" id="search" role="search">
                                <div class="col-xs-12 col-sm-8 col-md-10">
                                    <input type="text" class="form-control " placeholder="Search">
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-1">
                                    <button type="submit" class="btn btn-default form-control">Search</button>

                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-1">
                                    <button type="reset" class="btn btn-default form-control">Cancel</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>