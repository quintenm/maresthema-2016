<?php
    get_header();
//if ( 'posts' == get_option('mt_show_on_front' ) ) {
//    include( get_home_template() );
//} else {
//    // Custom content markup goes here
//}
?>
<?php if(get_theme_mod('mt_header_image')){ ?>
<div>
    <div class="container-fluid container-height container-top">
        <div class="row container-height">
            <?php $theme_parallax = get_option('mt_theme_parallax'); ?>
            <div class="parallax-container container-height"
                 <?php if(get_theme_mod('mt_header_image_parallax_switch')== "1"): ?>
                     data-parallax="scroll"
                     data-bleed="10"
                     data-speed=".6"
                     data-image-src="<?php echo get_theme_mod('mt_header_image'); ?>"
                 <?php endif; ?>  style="height:<?php if(get_theme_mod('mt_header_image_height')){ echo get_theme_mod('mt_header_image_height'); }else{ echo "45vh"; } ?>; overflow: visible">
                 <?php if(get_theme_mod('mt_header_image_parallax_switch') == "0"): ?>
                     <img src="<?php echo get_theme_mod('mt_header_image'); ?>" style="width:100%">
                 <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row cutout">
            <div class="col-md-12 hidden-xs hidden-sm hidden-lg cut"></div>
            <div class="col-sm-12 hidden-xs hidden-md hidden-lg cut"></div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg cut"></div>
            <div class="col-lg-12 hidden-sm hidden-md hidden-xs cut"></div>
        </div>
    </div>
</div>
<?php } // get_theme_mod('mt_header_image') ?>

<div class="section header section-except">
    <div class="container">
        <row>
            <div class="col-xs-12 text-center">
                <h1 class="slogan"><?php echo html_entity_decode(get_theme_mod('mt_header_slogan_h1')); ?></h1>
                <?php if(get_theme_mod('mt_header_slogan_p01')): ?><p><?php echo html_entity_decode(get_theme_mod('mt_header_slogan_p01')); ?></p><?php endif; ?>
                <?php if(get_theme_mod('mt_header_slogan_p02')): ?><p><?php echo html_entity_decode(get_theme_mod('mt_header_slogan_p02')); ?></p><?php endif; ?>
            </div>
        </row>
    </div>
</div>

<div class="section header-items section-except no-padding-bottom">
    <div class="container">
        <div class="row">
            <?php
                $a = 0;
                $item = 0;
                if(get_theme_mod('mt_header_site_url01_switch')== "1"){$a++;}
                if(get_theme_mod('mt_header_site_url02_switch')== "1"){$a++;}
                if(get_theme_mod('mt_header_site_url03_switch')== "1"){$a++;}
                if(get_theme_mod('mt_header_site_url04_switch')== "1"){$a++;}

              if(get_theme_mod('mt_header_site_url01_switch')== "1"):
            ?>
                    <div
                        class="
                        <?php
                        if($a == 4):
                            echo "col-xs-12 col-sm-6 col-md-3";
                        elseif($a == 3):
                            $item++;
                            if($item == 1){
                                echo "col-xs-12 col-sm-6 col-md-offset-2 col-md-4";
                            }
                            else if($item == 3){
                                echo "col-xs-offset-12 col-xs-12 col-sm-offset-4 col-sm-4 col-md-4 ";
                            }else{
                                echo "col-xs-12 col-sm-6 col-md-4";
                            }
                        elseif($a == 2):
                            $item++;
                            if($item == 1){
                                echo "col-xs-12 col-sm-6 col-md-offset-3 col-md-3";
                            }else {
                                echo "col-xs-12 col-sm-6 col-md-3";
                            }
                        else:
                            echo "col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4";
                        endif;
                        ?>">
                        <img src="<?php echo get_theme_mod('mt_header_site_url01_image'); ?>"
                             class="img-full-width">
                        <a href="<?php echo get_theme_mod('mt_header_site_url01_url'); ?>" title="<?php echo get_theme_mod('mt_header_site_url01_title'); ?>" target="_blank">
                            <h2><?php echo get_theme_mod('mt_header_site_url01_title'); ?></h2>
                        </a>
                        <?php echo html_entity_decode(get_theme_mod('mt_header_site_url01_text')); ?>
                    </div>
            <?php endif; if(get_theme_mod('mt_header_site_url02_switch')== "1"): ?>
                    <div
                        class="
                        <?php
                        if($a == 4):
                            echo "col-xs-12 col-sm-6 col-md-3";
                        elseif($a == 3):
                            $item++;
                            if($item == 1){
                                echo "col-xs-12 col-sm-6 col-md-offset-2 col-md-4";
                            }
                            else if($item == 3){
                                echo "col-xs-offset-12 col-xs-12 col-sm-offset-4 col-sm-4 col-md-4 ";
                            }else{
                                echo "col-xs-12 col-sm-6 col-md-4";
                            }
                        elseif($a == 2):
                            $item++;
                            if($item == 1){
                                echo "col-xs-12 col-sm-6 col-md-offset-3 col-md-3";
                            }else {
                                echo "col-xs-12 col-sm-6 col-md-3";
                            }
                        else:
                            echo "col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4";
                        endif;
                        ?>">
                        <img src="<?php echo get_theme_mod('mt_header_site_url02_image'); ?>"
                             class="img-full-width">
                        <a href="<?php echo get_theme_mod('mt_header_site_url02_url'); ?>" title="<?php echo get_theme_mod('mt_header_site_url02_title'); ?>" target="_blank">
                            <h2><?php echo get_theme_mod('mt_header_site_url02_title'); ?></h2>
                        </a>
                        <?php echo html_entity_decode(get_theme_mod('mt_header_site_url02_text')); ?>
                    </div>
            <?php endif; if(get_theme_mod('mt_header_site_url03_switch')== "1"): ?>
                    <div
                        class="
                        <?php
                        if($a == 4):
                            echo "col-xs-12 col-sm-6 col-md-3";
                        elseif($a == 3):
                            $item++;
                            if($item == 1){
                                echo "col-xs-12 col-sm-6 col-md-offset-2 col-md-4";
                            }
                            else if($item == 3){
                                echo "col-xs-offset-12 col-xs-12 col-sm-offset-4 col-sm-4 col-md-4 ";
                            }else{
                                echo "col-xs-12 col-sm-6 col-md-4";
                            }
                        elseif($a == 2):
                            $item++;
                            if($item == 1){
                                echo "col-xs-12 col-sm-6 col-md-offset-3 col-md-3";
                            }else {
                                echo "col-xs-12 col-sm-6 col-md-3";
                            }
                        else:
                            echo "col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4";
                        endif;
                        ?>">
                        <img src="<?php echo get_theme_mod('mt_header_site_url03_image'); ?>"
                             class="img-full-width">
                        <a href="<?php echo get_theme_mod('mt_header_site_url03_url'); ?>" title="<?php echo get_theme_mod('mt_header_site_url03_title'); ?>" target="_blank">
                            <h2><?php echo get_theme_mod('mt_header_site_url03_title'); ?></h2>
                        </a>
                        <?php echo html_entity_decode(get_theme_mod('mt_header_site_url03_text')); ?>
                    </div>
            <?php endif; if(get_theme_mod('mt_header_site_url04_switch')== "1"): ?>
                    <div
                        class="
                        <?php
                        if($a == 4):
                            echo "col-xs-12 col-sm-6 col-md-3";
                        elseif($a == 3):
                            $item++;
                            if($item == 1){
                                echo "col-xs-12 col-sm-6 col-md-offset-2 col-md-4";
                            }
                            else if($item == 3){
                                echo "col-xs-offset-12 col-xs-12 col-sm-offset-4 col-sm-4 col-md-4 ";
                            }else{
                                echo "col-xs-12 col-sm-6 col-md-4";
                            }
                        elseif($a == 2):
                            $item++;
                            if($item == 1){
                                echo "col-xs-12 col-sm-6 col-md-offset-3 col-md-3";
                            }else {
                                echo "col-xs-12 col-sm-6 col-md-3";
                            }
                        else:
                            echo "col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4";
                        endif;
                        ?>">
                        <img src="<?php echo get_theme_mod('mt_header_site_url04_image'); ?>"
                             class="img-full-width">
                        <a href="<?php echo get_theme_mod('mt_header_site_url04_url'); ?>" title="<?php echo get_theme_mod('mt_header_site_url04_title'); ?>" target="_blank">
                            <h2><?php echo get_theme_mod('mt_header_site_url04_title'); ?></h2>
                        </a>
                        <?php echo html_entity_decode(get_theme_mod('mt_header_site_url04_text')); ?>
                    </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if(get_theme_mod('header_sub_site_item_switch') == "1"): ?>
<div class="section section-except no-padding-top">
    <div class="container">
        <?php
            $pagenumber = get_theme_mod('header_sub_site_item_pagina_id');
            mt_include_content($pagenumber);
        ?>
    </div>
</div>
<?php endif; ?>

<?php if(get_theme_mod('mt_slider_01_switch') == "1" || get_theme_mod('mt_slider_02_switch') == "1" || get_theme_mod('mt_slider_03_switch') == "1" || get_theme_mod('mt_slider_04_switch') == "1" || get_theme_mod('mt_slider_05_switch') == "1"): ?>
    <div id="fullcarousel" class="carousel slide" data-ride="carousel" data-interval="<?php echo get_theme_mod('mt_slider_settings_duration'); ?>">
    <div class="carousel-inner">
        <?php $make_active = 0; ?>
        <?php if(get_theme_mod('mt_slider_01_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){print "active";} ?>" style="height:<?php print get_theme_mod('mt_slider_settings_height'); ?>">
                <img src="<?php echo get_theme_mod('mt_slider_01_image'); ?>">
                <div class="carousel-caption">
                    <?php if(get_theme_mod('mt_slider_01_url') != ""): ?><a href="<?php echo get_theme_mod('mt_slider_01_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('mt_slider_01_color'); ?>"><?php echo get_theme_mod('mt_slider_01_title'); ?></h2>
                        <?php if(get_theme_mod('mt_slider_01_url') != ""): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('mt_slider_01_color'); ?>"><?php echo get_theme_mod('mt_slider_01_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_theme_mod('mt_slider_02_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(get_theme_mod('mt_slider_settings_height') == ""): echo"600px";else: echo get_theme_mod('mt_slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('mt_slider_02_image'); ?>">
                <div class="carousel-caption">
                    <?php if(get_theme_mod('mt_slider_02_url') != ""): ?><a href="<?php echo get_theme_mod('mt_slider_02_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('mt_slider_02_color'); ?>"><?php echo get_theme_mod('mt_slider_02_title'); ?></h2>
                        <?php if(get_theme_mod('mt_slider_02_url') != ""): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('mt_slider_02_color'); ?>"><?php echo get_theme_mod('mt_slider_02_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_theme_mod('mt_slider_03_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(get_theme_mod('mt_slider_settings_height') == ""): echo"600px";else: echo get_theme_mod('mt_slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('mt_slider_03_image'); ?>">
                <div class="carousel-caption">
                    <?php if(get_theme_mod('mt_slider_03_url') != ""): ?><a href="<?php echo get_theme_mod('mt_slider_03_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('mt_slider_03_color'); ?>"><?php echo get_theme_mod('mt_slider_03_title'); ?></h2>
                        <?php if(get_theme_mod('mt_slider_03_url') != ""): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('mt_slider_03_color'); ?>"><?php echo get_theme_mod('mt_slider_03_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_theme_mod('mt_slider_04_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(get_theme_mod('mt_slider_settings_height') == ""): echo"600px";else: echo get_theme_mod('mt_slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('mt_slider_04_image'); ?>">
                <div class="carousel-caption">
                    <?php if(get_theme_mod('mt_slider_04_url') != ""): ?><a href="<?php echo get_theme_mod('mt_slider_04_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('mt_slider_04_color'); ?>"><?php echo get_theme_mod('mt_slider_04_title'); ?></h2>
                        <?php if(get_theme_mod('mt_slider_04_url') != ""): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('mt_slider_04_color'); ?>"><?php echo get_theme_mod('mt_slider_04_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_theme_mod('mt_slider_05_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(get_theme_mod('mt_slider_settings_height') == ""): echo"600px";else: echo get_theme_mod('mt_slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('mt_slider_05_image'); ?>">
                <div class="carousel-caption">
                    <?php if(get_theme_mod('mt_slider_05_url') != ""): ?><a href="<?php echo get_theme_mod('mt_slider_05_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('mt_slider_05_color'); ?>"><?php echo get_theme_mod('mt_slider_05_title'); ?></h2>
                        <?php if(get_theme_mod('mt_slider_05_url') != ""): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('mt_slider_05_color'); ?>"><?php echo get_theme_mod('mt_slider_05_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <a class="left carousel-control" href="#fullcarousel" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#fullcarousel" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
</div>
<?php endif; ?>
<div class="section-articles">
    <?php if(get_theme_mod('mt_hightlighted_article_area_01_switch') == "1"): ?>
        <div class="section" id="<?php echo get_theme_mod('mt_hightlighted_article_area_01_menu_id'); ?>">
            <div class="container">
                <div class="row">
                  <?php
                         $pagenumber = get_theme_mod('mt_hightlighted_article_area_01_id');
                         mt_include_content($pagenumber);
                     ?>
                </div>
                <div class="row btn-offset">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <a href="<?php echo get_theme_mod('mt_hightlighted_article_area_01_url'); ?>" class="btn btn-default"><?php echo get_theme_mod('mt_hightlighted_article_area_01_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(get_theme_mod('mt_hightlighted_article_area_02_switch') == "1"): ?>
        <div class="section" id="<?php echo get_theme_mod('mt_hightlighted_article_area_02_menu_id'); ?>">
            <div class="container">
                <div class="row">
                    <?php
                         $pagenumber = get_theme_mod('mt_hightlighted_article_area_02_id');
                         mt_include_content($pagenumber);
                     ?>
                </div>
                <div class="row btn-offset">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <a href="<?php echo get_theme_mod('mt_hightlighted_article_area_02_url'); ?>" class="btn btn-default"><?php echo get_theme_mod('mt_hightlighted_article_area_02_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(get_theme_mod('mt_hightlighted_article_area_03_switch') == "1"): ?>
        <div class="section" id="<?php echo get_theme_mod('mt_hightlighted_article_area_03_menu_id'); ?>">
            <div class="container">
                <div class="row">
                    <?php
                         $pagenumber = get_theme_mod('mt_hightlighted_article_area_03_id');
                         mt_include_content($pagenumber);
                     ?>
                </div>
                <div class="row btn-offset">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <a href="<?php echo get_theme_mod('mt_hightlighted_article_area_03_url'); ?>" class="btn btn-default"><?php echo get_theme_mod('mt_hightlighted_article_area_03_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(get_theme_mod('mt_hightlighted_article_area_04_switch') == "1"): ?>
        <div class="section" id="<?php echo get_theme_mod('mt_hightlighted_article_area_04_menu_id'); ?>">
            <div class="container">
                <div class="row">
                    <?php
                         $pagenumber = get_theme_mod('mt_hightlighted_article_area_04_id');
                         mt_include_content($pagenumber);
                     ?>
                </div>
                <div class="row btn-offset">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <a href="<?php echo get_theme_mod('mt_hightlighted_article_area_04_url'); ?>" class="btn btn-default"><?php echo get_theme_mod('mt_hightlighted_article_area_04_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<div class="container-fluid" id="company-carousel">
    <div class="row">
        <div class="col-xs-12" style="padding-top:<?php echo get_theme_mod('mt_company_slider_settings_padding'); ?>; padding-bottom:<?php echo get_theme_mod('mt_company_slider_settings_padding'); ?>;">
             <div class="carousel carousel-showsixmoveone slide" data-ride="carousel" data-interval="<?php echo get_theme_mod('mt_company_slider_settings_duration'); ?>">
                 <div class="carousel-inner">
                     <?php
                        if (get_theme_mod('mt_company_slider_logo_image_switch') == true):
                        $repeater_value = get_theme_mod('mt_company_slider_logo_image');
                        $first_image = "0";

                        foreach ( $repeater_value as $row ) : $first_image++; ?>
                        <div class="item <?php if($first_image == "1"){ echo 'active'; } ?>">
                            <div class="col-xs-4 col-sm-4 col-md-2">
                                <a href="#">
                                    <img src="<?php echo esc_url_raw( $row['image_url'] ); ?>" class="img-responsive <?php if($row['image_switch'] == true){ echo 'white_overlay';} ?>">
                                </a>
                            </div>
                        </div>
                     <?php endforeach; endif; ?>
                 </div>
             </div>
        </div>
    </div>
</div>
<?php if(get_theme_mod('mt_contactform_switch')=='1'): ?>
<div class="section section-except contact-form" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><?php echo get_theme_mod('mt_contactform_Titel'); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6 form-horizontal">
                <?php
                  $mt_contactform_id = get_theme_mod('mt_contactform_id');
                  echo do_shortcode('[contact-form-7 id="'. $mt_contactform_id . '" title="Contacteer ons"]');
                ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
