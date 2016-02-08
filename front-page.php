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
            <div class="col-xs-3 col-sm-4 col-md-5" style="background-color:white; height:70px; border-right:2px solid white;"></div>
            <div class="col-xs-6 col-sm-4 col-md-2" style="background-image:url('<?php echo get_template_directory_uri()  ?>/images-tijdelijk/svg/uitsparing.svg'); background-position: 50% 0; background-size: cover; height:70px; border-right:2px solid white;  border-left:2px solid white;"></div>
            <div class="col-xs-3 col-sm-4 col-md-5" style="background-color:white; height:70px; border-left:2px solid white;"></div>
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
            <?php endif; if(get_theme_mod('header_site_url02_switch')== "1"): ?>
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
            <?php endif; if(get_theme_mod('header_site_url03_switch')== "1"): ?>
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
            <?php endif; if(get_theme_mod('header_site_url04_switch')== "1"): ?>
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
            <?php
                endif;
                ?>
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
                    <img src="<?php echo get_template_directory_uri()  ?>/images-tijdelijk/textiel-button.jpg">
                </div>
            </div>
            <div class="row btn-offset">
                <div class="col-xs-4 col-xs-offset-4 text-center">
                    <a href="#" class="btn btn-default">ga naar de catalogus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="office">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center section-title">
                    <h2>Office Supplies</h2>
                </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <img src="<?php echo get_template_directory_uri()  ?>/images-tijdelijk/Burostore-button.jpg">
                </div>
                <div class="col-sm-4">
                    <p>Alle kantoormateriaal, zoals papier, kantoormachines, opbergmateriaal. Maar ook printers en de toebehorende inkten en toners.
                        24/7 bereikbaar...  ook via een handige smartphone webversie. burostore.be</p>
                </div>
            </div>
            <div class="row btn-offset">
                <div class="col-xs-4 col-xs-offset-4 text-center">
                    <a href="#" class="btn btn-default">ga naar de catalogus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="polsbandshop">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center section-title">
                    <h2>Party & Event Stuff</h2>
                </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <p>Iedereen kent ze wel, de kleurrijke bandjes. Maar Polsbandshop is meer, zoals jetons of betaalmunten afgewerkt met  uw eigen logo. Leuke festivalbrilletjes, regenponcho's... ontdek ze allemaal Polsbandshop.be</p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo get_template_directory_uri()  ?>/images-tijdelijk/Polsbandshop-button.jpg">
                </div>
            </div>
            <div class="row btn-offset">
                <div class="col-xs-4 col-xs-offset-4 text-center">
                    <a href="#" class="btn btn-default">ga naar de catalogus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="graphic">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center section-title">
                    <h2>Graphic & Web</h2>
                </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <img src="<?php echo get_template_directory_uri()  ?>/images-tijdelijk/graphic-button.jpg">
                </div>
                <div class="col-sm-4">
                    <p>Alles krijgt vorm. Uw logo, folder, brochure… noem maar op.  Elke communicatie verdient een goede vormgeving.  Technisch in order gebracht door een team van  grafici en marketeers. Ontdek nu Studio Mares.</p>
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
<div class="container-fluid" id="company-carousel">
    <div class="row">
        <div class="col-xs-12" style="padding-top:<?php echo get_theme_mod('company_slider_settings_padding'); ?>; padding-bottom:<?php echo get_theme_mod('company_slider_settings_padding'); ?>;">
                        <div class="carousel carousel-showsixmoveone slide" data-ride="carousel" data-interval="<?php echo get_theme_mod('company_slider_settings_duration'); ?>">
                            <div class="carousel-inner">
                                <?php if(get_theme_mod('company_slider_logo_001')): ?>
                                <div class="item active">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_001'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_002')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_002'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_003')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_003'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_004')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_004'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_005')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_005'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_006')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_006'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_007')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_007'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_008')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_008'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_009')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_009'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0010')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0010'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0011')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0011'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0012')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0012'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0013')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0013'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0014')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0014'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0015')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0015'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0016')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0016'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0017')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0017'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0018')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0018'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0019')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0019'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; if(get_theme_mod('company_slider_logo_0020')): ?>
                                <div class="item">
                                    <div class="col-xs-4 col-sm-4 col-md-2"><a href="#"><img src="<?php echo get_theme_mod('company_slider_logo_0020'); ?>" class="img-responsive"></a></div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
        </div>
    </div>
</div>
<div class="section" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Contact</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form class="form-horizontal" role="contact" id="contact">

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="Naam">Naam</label>
                        <div class="col-md-6">
                            <input id="Naam" name="Naam" type="text" placeholder="Xavier Mares" class="form-control input-md" required="">
                            <span class="help-block">Plaats hier je Naam en voornaam</span>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="E-mail">E-mail</label>
                        <div class="col-md-6">
                            <input id="E-mail" name="E-mail" type="text" placeholder="Xavier@mares.be" class="form-control input-md" required="">
                            <span class="help-block">Plaats hier je E-mail adres</span>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="Bedrijf">Bedrijfsnaam/Vereniging</label>
                        <div class="col-md-6">
                            <input id="Bedrijf" name="Bedrijf" type="text" placeholder="Mares.be" class="form-control input-md">
                            <span class="help-block">Naam van het bedrijf of vereniging</span>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="onderwerp">Onderwerp Contact</label>
                        <div class="col-md-6">
                            <select id="onderwerp" name="onderwerp" class="form-control">
                                <option value="1">Algemeen</option>
                                <optgroup label="Burostore">
                                    <option value="2">Offerte</option>
                                    <option value="3">Eerste Contact</option>
                                    <option value="4">Andere</option>
                                </optgroup>
                                <optgroup label="Polsbandshop">
                                    <option value="5">Offerte</option>
                                    <option value="6">Eerste Contact</option>
                                    <option value="7">Andere</option>
                                </optgroup>
                                <optgroup label="Graphic & Web">
                                    <option value="8">Offerte</option>
                                    <option value="9">Eerste Contact</option>
                                    <option value="10">Andere</option>
                                </optgroup>
                                <optgroup label="Gifts & Textile">
                                    <option value="11">Offerte</option>
                                    <option value="12">Eerste Contact</option>
                                    <option value="13">Andere</option>
                                </optgroup>
                                <option value="14">Solicitatie</option>
                                <option value="15">Andere</option>
                            </select>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="Boodschap">Bericht</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="Boodschap" name="Boodschap"></textarea>
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="File">Bijgevoegd bestand</label>
                        <div class="col-md-6">
                            <input id="File" name="File" class="input-file" type="file">
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" id="Send" name="Send" class="btn btn-primary">Verstuur</button>
                            <button type="reset" id="Cancel" name="Cancel" class="btn btn-inverse">Annuleer</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
