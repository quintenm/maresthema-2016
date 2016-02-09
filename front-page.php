<?php
    get_header();
//if ( 'posts' == get_option( 'show_on_front' ) ) {
//    include( get_home_template() );
//} else {
//    // Custom content markup goes here
//}
?>
<?php if(get_theme_mod('header_image')){ ?>
<div>
    <div class="container-fluid container-height">
        <div class="row container-height">
            <?php $theme_parallax = get_option('theme_parallax'); ?>
            <div class="parallax-container container-height"
                 <?php if(get_theme_mod('header_image_parallax_switch')== "1"): ?>
                     data-parallax="scroll"
                     data-bleed="10"
                     data-speed=".6"
                     data-image-src="<?php echo get_theme_mod( 'header_image'); ?>"


                 <?php endif; ?>  style="height:<?php if(get_theme_mod('header_image_height')){ echo get_theme_mod('header_image_height'); }else{ echo "45vh"; } ?>; overflow: hidden">
                 <?php if(get_theme_mod('header_image_parallax_switch') == "0"): ?>
                     <img src="<?php echo get_theme_mod( 'header_image'); ?>" style="width:100%">
                 <?php endif; ?>
            </div>
        </div>
        <div class="row cutout">
            <div class="col-md-12 hidden-xs hidden-sm hidden-lg cut"></div>
            <div class="col-sm-12 hidden-xs hidden-md hidden-lg cut"></div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg cut"></div>
            <div class="col-lg-12 hidden-sm hidden-md hidden-xs cut"></div>
        </div>
    </div>
</div>
<?php } // get_theme_mod('header_image') ?>

<div class="section header section-except">
    <div class="container">
        <row>
            <div class="col-xs-12 text-center">
                <h1 class="slogan"><?php echo html_entity_decode(get_theme_mod('header_slogan_h1')); ?></h1>
                <?php if(get_theme_mod('header_slogan_p01')): ?><p><?php echo html_entity_decode(get_theme_mod('header_slogan_p01')); ?></p><?php endif; ?>
                <?php if(get_theme_mod('header_slogan_p02')): ?><p><?php echo html_entity_decode(get_theme_mod('header_slogan_p02')); ?></p><?php endif; ?>
            </div>
        </row>
    </div>
</div>

<div class="section header-items section-except">
    <div class="container">
        <div class="row">
            <?php
                $a = 0;
                $item = 0;
                if(get_theme_mod('header_site_url01_switch')== "1"){$a++;}
                if(get_theme_mod('header_site_url02_switch')== "1"){$a++;}
                if(get_theme_mod('header_site_url03_switch')== "1"){$a++;}
                if(get_theme_mod('header_site_url04_switch')== "1"){$a++;}

              if(get_theme_mod('header_site_url01_switch')== "1"):
            ?>
                  <a href="<?php echo get_theme_mod('header_site_url01_url'); ?>" title="<?php echo get_theme_mod('header_site_url01_title'); ?>">
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
                        <img src="<?php echo get_theme_mod('header_site_url01_image'); ?>"
                             class="img-full-width">
                        <h2><?php echo get_theme_mod('header_site_url01_title'); ?></h2>
                        <?php echo html_entity_decode(get_theme_mod('header_site_url01_text')); ?>
                    </div>
                  </a>
            <?php endif; if(get_theme_mod('header_site_url02_switch')== "1"): ?>
                  <a href="<?php echo get_theme_mod('header_site_url02_url'); ?>" title="<?php echo get_theme_mod('header_site_url02_title'); ?>">
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
                        <img src="<?php echo get_theme_mod('header_site_url02_image'); ?>"
                             class="img-full-width">
                        <h2><?php echo get_theme_mod('header_site_url02_title'); ?></h2>
                        <?php echo html_entity_decode(get_theme_mod('header_site_url02_text')); ?>
                    </div>
                  </a>
            <?php endif; if(get_theme_mod('header_site_url03_switch')== "1"): ?>
                  <a href="<?php echo get_theme_mod('header_site_url03_url'); ?>" title="<?php echo get_theme_mod('header_site_url03_title'); ?>">
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
                        <img src="<?php echo get_theme_mod('header_site_url03_image'); ?>"
                             class="img-full-width">
                        <h2><?php echo get_theme_mod('header_site_url03_title'); ?></h2>
                        <?php echo html_entity_decode(get_theme_mod('header_site_url03_text')); ?>
                    </div>
                  </a>
            <?php endif; if(get_theme_mod('header_site_url04_switch')== "1"): ?>
                  <a href="<?php echo get_theme_mod('header_site_url04_url'); ?>" title="<?php echo get_theme_mod('header_site_url04_title'); ?>">
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
                        <img src="<?php echo get_theme_mod('header_site_url04_image'); ?>"
                             class="img-full-width">
                        <h2><?php echo get_theme_mod('header_site_url04_title'); ?></h2>
                        <?php echo html_entity_decode(get_theme_mod('header_site_url04_text')); ?>
                    </div>
               </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if(get_theme_mod('slider_01_switch') == "1" || get_theme_mod('slider_02_switch') == "1" || get_theme_mod('slider_03_switch') == "1" || get_theme_mod('slider_04_switch') == "1" || get_theme_mod('slider_05_switch') == "1"): ?>
    <div id="fullcarousel" class="carousel slide" data-ride="carousel" data-interval="<?php if(empty(get_theme_mod('slider_settings_duration'))): echo "5000"; else: echo get_theme_mod('slider_settings_duration');endif; ?>">
    <div class="carousel-inner">
        <?php $make_active = 0; ?>
        <?php if(get_theme_mod('slider_01_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(empty(get_theme_mod('slider_settings_height'))): echo"600px";else: echo get_theme_mod('slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('slider_01_image'); ?>">
                <div class="carousel-caption">
                    <?php if(!empty(get_theme_mod('slider_01_url'))): ?><a href="<?php echo get_theme_mod('slider_01_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('slider_01_color'); ?>"><?php echo get_theme_mod('slider_01_title'); ?></h2>
                        <?php if(!empty(get_theme_mod('slider_01_url'))): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('slider_01_color'); ?>"><?php echo get_theme_mod('slider_01_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_theme_mod('slider_02_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(empty(get_theme_mod('slider_settings_height'))): echo"600px";else: echo get_theme_mod('slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('slider_02_image'); ?>">
                <div class="carousel-caption">
                    <?php if(!empty(get_theme_mod('slider_02_url'))): ?><a href="<?php echo get_theme_mod('slider_02_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('slider_02_color'); ?>"><?php echo get_theme_mod('slider_02_title'); ?></h2>
                        <?php if(!empty(get_theme_mod('slider_02_url'))): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('slider_02_color'); ?>"><?php echo get_theme_mod('slider_02_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_theme_mod('slider_03_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(empty(get_theme_mod('slider_settings_height'))): echo"600px";else: echo get_theme_mod('slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('slider_03_image'); ?>">
                <div class="carousel-caption">
                    <?php if(!empty(get_theme_mod('slider_03_url'))): ?><a href="<?php echo get_theme_mod('slider_03_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('slider_03_color'); ?>"><?php echo get_theme_mod('slider_03_title'); ?></h2>
                        <?php if(!empty(get_theme_mod('slider_03_url'))): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('slider_03_color'); ?>"><?php echo get_theme_mod('slider_03_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_theme_mod('slider_04_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(empty(get_theme_mod('slider_settings_height'))): echo"600px";else: echo get_theme_mod('slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('slider_04_image'); ?>">
                <div class="carousel-caption">
                    <?php if(!empty(get_theme_mod('slider_04_url'))): ?><a href="<?php echo get_theme_mod('slider_04_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('slider_04_color'); ?>"><?php echo get_theme_mod('slider_04_title'); ?></h2>
                        <?php if(!empty(get_theme_mod('slider_04_url'))): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('slider_04_color'); ?>"><?php echo get_theme_mod('slider_04_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_theme_mod('slider_05_switch') == "1"): $make_active++; ?>
            <div class="item <?php if($make_active == 1){echo "active";} ?>" style="height:<?php if(empty(get_theme_mod('slider_settings_height'))): echo"600px";else: echo get_theme_mod('slider_settings_height');endif; ?>">
                <img src="<?php echo get_theme_mod('slider_05_image'); ?>">
                <div class="carousel-caption">
                    <?php if(!empty(get_theme_mod('slider_05_url'))): ?><a href="<?php echo get_theme_mod('slider_05_url'); ?>"><?php endif; ?>
                        <h2 style="color:<?php echo get_theme_mod('slider_05_color'); ?>"><?php echo get_theme_mod('slider_05_title'); ?></h2>
                        <?php if(!empty(get_theme_mod('slider_05_url'))): ?></a><?php endif; ?>
                    <p style="color:<?php echo get_theme_mod('slider_05_color'); ?>"><?php echo get_theme_mod('slider_05_description'); ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
</div>
<?php endif; ?>
<div class="section-articles">
    <?php if(get_theme_mod('hightlighted_article_area_01_switch') == "1"): ?>
        <div class="section" id="<?php echo get_theme_mod('hightlighted_article_area_01_menu_id'); ?>">
            <div class="container">
                <div class="row">
                  <?php
                         $pagenumber = get_theme_mod('hightlighted_article_area_01_id');
                         mt_include_content($pagenumber);
                     ?>
                </div>
                <div class="row btn-offset">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <a href="<?php echo get_theme_mod('hightlighted_article_area_01_url'); ?>" class="btn btn-default"><?php echo get_theme_mod('hightlighted_article_area_01_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(get_theme_mod('hightlighted_article_area_02_switch') == "1"): ?>
        <div class="section" id="<?php echo get_theme_mod('hightlighted_article_area_02_menu_id'); ?>">
            <div class="container">
                <div class="row">
                    <?php
                         $pagenumber = get_theme_mod('hightlighted_article_area_02_id');
                         mt_include_content($pagenumber);
                     ?>
                </div>
                <div class="row btn-offset">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <a href="<?php echo get_theme_mod('hightlighted_article_area_02_url'); ?>" class="btn btn-default"><?php echo get_theme_mod('hightlighted_article_area_02_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(get_theme_mod('hightlighted_article_area_03_switch') == "1"): ?>
        <div class="section" id="<?php echo get_theme_mod('hightlighted_article_area_03_menu_id'); ?>">
            <div class="container">
                <div class="row">
                    <?php
                         $pagenumber = get_theme_mod('hightlighted_article_area_03_id');
                         mt_include_content($pagenumber);
                     ?>
                </div>
                <div class="row btn-offset">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <a href="<?php echo get_theme_mod('hightlighted_article_area_03_url'); ?>" class="btn btn-default"><?php echo get_theme_mod('hightlighted_article_area_03_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(get_theme_mod('hightlighted_article_area_04_switch') == "1"): ?>
        <div class="section" id="<?php echo get_theme_mod('hightlighted_article_area_04_menu_id'); ?>">
            <div class="container">
                <div class="row">
                    <?php
                         $pagenumber = get_theme_mod('hightlighted_article_area_04_id');
                         mt_include_content($pagenumber);
                     ?>
                </div>
                <div class="row btn-offset">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <a href="<?php echo get_theme_mod('hightlighted_article_area_04_url'); ?>" class="btn btn-default"><?php echo get_theme_mod('hightlighted_article_area_04_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<div class="container-fluid" id="company-carousel">
    <div class="row">
        <div class="col-xs-12" style="padding-top:<?php echo get_theme_mod('company_slider_settings_padding'); ?>; padding-bottom:<?php echo get_theme_mod('company_slider_settings_padding'); ?>;">
             <div class="carousel carousel-showsixmoveone slide" data-ride="carousel" data-interval="<?php echo get_theme_mod('company_slider_settings_duration'); ?>">
                 <div class="carousel-inner">
                     <?php if(get_theme_mod('company_slider_logo_001')): ?>
                     <div class="item active">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_001'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_001_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_002')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_002'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_002_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_003')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_003'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_003_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_004')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_004'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_004_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_005')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_005'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_005_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_006')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_006'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_006_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php endif; if(get_theme_mod('company_slider_logo_007')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_007'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_007_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_008')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_008'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_008_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_009')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_009'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_009_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0010')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0010'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0010_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0011')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0011'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0011_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0012')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0012'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0012_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0013')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0013'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0013_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0014')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0014'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0014_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0015')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0015'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0015_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0016')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0016'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0016_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0017')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0017'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0017_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0018')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0018'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0018_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0019')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0019'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0019_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php if(get_theme_mod('company_slider_logo_0020')): ?>
                     <div class="item">
                         <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0020'); ?>" class="img-responsive <?php if(get_theme_mod('company_slider_logo_0020_switch')){ echo 'white_overlay';} ?>"></a></div>
                     </div>
                     <?php endif;  endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; endif; ?>
                 </div>
             </div>
        </div>
    </div>
</div>
<?php if(get_theme_mod('contactform_switch')=='1'): ?>
<div class="section" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><?php echo get_theme_mod('contactform_Titel'); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6 form-horizontal">
                <?php
                  $mt_contactform_id = get_theme_mod('contactform_id');
                  echo do_shortcode('[contact-form-7 id="'. $mt_contactform_id . '" title="Contacteer ons"]');
                ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
