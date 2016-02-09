<?php

function mytheme_kirki_sections( $wp_customize ) {
    /**
     * Add panels
     */
    $wp_customize->add_panel( 'header', array(
        'priority'    => 190,
        'title'       => __( 'Header', 'kirki' ),
    ) );

    /**
     * Add sections
     */
    $wp_customize->add_section( 'header_image', array(
        'title'       => __( 'Header Afbeelding', 'kirki' ),
        'priority'    => 10,
        'panel'       => 'header',
    ) );

    $wp_customize->add_section( 'header_slogan', array(
        'title'       => __( 'Header Slogan', 'kirki' ),
        'priority'    => 20,
        'panel'       => 'header',
    ) );

    $wp_customize->add_section( 'header_site_url01', array(
        'title'       => __( 'Site link 1', 'kirki' ),
        'priority'    => 30,
        'panel'       => 'header',
    ) );

    $wp_customize->add_section( 'header_site_url02', array(
        'title'       => __( 'Site link 2', 'kirki' ),
        'priority'    => 30,
        'panel'       => 'header',
    ) );

    $wp_customize->add_section( 'header_site_url03', array(
        'title'       => __( 'Site link 3', 'kirki' ),
        'priority'    => 30,
        'panel'       => 'header',
    ) );

    $wp_customize->add_section( 'header_site_url04', array(
        'title'       => __( 'Site link 4', 'kirki' ),
        'priority'    => 30,
        'panel'       => 'header',
    ) );

//    $wp_customize->add_section( 'main_background', array(
//        'title'       => __( 'Main Background', 'kirki' ),
//        'priority'    => 20,
//        'panel'       => 'header',
//    ) );
//
//    $wp_customize->add_section( 'footer_background', array(
//        'title'       => __( 'Footer Background', 'kirki' ),
//        'priority'    => 30,
//        'panel'       => 'header',
//    ) );

    $wp_customize->add_panel( 'slider', array(
        'priority'    => 190,
        'title'       => __( 'Slider', 'kirki' ),
    ) );

    $wp_customize->add_section( 'slider_slides_01', array(
        'title'       => __( 'Slide 1', 'kirki' ),
        'priority'    => 10,
        'panel'       => 'slider',
    ) );
    $wp_customize->add_section( 'slider_slides_02', array(
        'title'       => __( 'Slide 2', 'kirki' ),
        'priority'    => 11,
        'panel'       => 'slider',
    ) );
    $wp_customize->add_section( 'slider_slides_03', array(
        'title'       => __( 'Slide 3', 'kirki' ),
        'priority'    => 12,
        'panel'       => 'slider',
    ) );
    $wp_customize->add_section( 'slider_slides_04', array(
        'title'       => __( 'Slide 4', 'kirki' ),
        'priority'    => 13,
        'panel'       => 'slider',
    ) );
    $wp_customize->add_section( 'slider_slides_05', array(
        'title'       => __( 'Slide 5', 'kirki' ),
        'priority'    => 14,
        'panel'       => 'slider',
    ) );
    $wp_customize->add_section( 'slider_settings', array(
        'title'       => __( 'Instellingen', 'kirki' ),
        'priority'    => 20,
        'panel'       => 'slider',
    ) );

    $wp_customize->add_section( 'font', array(
        'title'       => __( 'Font', 'kirki' ),
        'priority'    => 100,
    ) );



    $wp_customize->add_panel( 'company_slider', array(
        'priority'    => 210,
        'title'       => __( 'Logo Slider', 'kirki' ),
    ) );

    $wp_customize->add_section( 'company_slider_logo', array(
        'title'       => __( 'Logo’s', 'kirki' ),
        'priority'    => 10,
        'panel'       => 'company_slider',
    ) );
    $wp_customize->add_section( 'company_slider_settings', array(
        'title'       => __( 'Instellingen', 'kirki' ),
        'priority'    => 20,
        'panel'       => 'company_slider',
    ) );


    $wp_customize->add_panel( 'hightlighted_article', array(
        'priority'    => 200,
        'title'       => __( 'Uitgelichte artikels', 'kirki' ),
    ) );

    $wp_customize->add_section( 'hightlighted_article_area_01', array(
        'title'       => __( 'Gebied 1', 'kirki' ),
        'priority'    => 10,
        'panel'       => 'hightlighted_article',
    ) );
    $wp_customize->add_section( 'hightlighted_article_area_02', array(
        'title'       => __( 'Gebied 2', 'kirki' ),
        'priority'    => 20,
        'panel'       => 'hightlighted_article',
    ) );
    $wp_customize->add_section( 'hightlighted_article_area_03', array(
        'title'       => __( 'Gebied 3', 'kirki' ),
        'priority'    => 30,
        'panel'       => 'hightlighted_article',
    ) );
    $wp_customize->add_section( 'hightlighted_article_area_04', array(
        'title'       => __( 'Gebied 4', 'kirki' ),
        'priority'    => 40,
        'panel'       => 'hightlighted_article',
    ) );



    $wp_customize->add_section( 'contactform', array(
        'title'       => __( 'Contact formulier', 'kirki' ),
        'priority'    => 220,
    ) );


    $wp_customize->add_section( 'instellingen', array(
        'title'       => __( 'Instellingen', 'kirki' ),
        'priority'    => 230,
    ) );

}
add_action( 'customize_register', 'mytheme_kirki_sections' );


function mytheme_kirki_fields( $fields ) {

//    $fields[] = array(
//        'type'        => 'background',
//        'settings'    => 'header_background',
//        'label'       => __( 'Choose your header background', 'kirki' ),
//        'description' => __( 'The header background you specify here will apply to the header area, including your menus and your branding.', 'kirki' ),
//        'section'     => 'header_background',
//        'default'     => array(
//            'color'    => 'rgba(255,255,255,0.7)',
//            'image'    => '',
//            'repeat'   => 'no-repeat',
//            'size'     => 'cover',
//            'attach'   => 'fixed',
//            'position' => 'center-center',
//        ),
//        'priority'    => 10,
//        'output'      => '#header'
//    );

    //header background
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'header_image',
        'label'       => __( 'Afbeelding Startpagina', 'kirki' ),
        'description' => __( 'Uitgelichte afbeelding bovenaan pagina', 'kirki' ),
        'help'        => __( 'selecteer een afbeelding van minstens 1200x340, verhouding 7/2', 'kirki' ),
        'section'     => 'header_image',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'header_image_parallax_switch',
        'label'       => __( 'Parallax Effect', 'kirki' ),
        'section'     => 'header_image',
        'default'     => '1',
        'priority'    => 8,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_image_height',
        'label'       => __( 'Hoogte header afbeelding', 'kirki' ),
        'help'        => __( 'Hoogte uitgedrukt in \'45vh\' voor de foto, 100vh is hoogte van browser venster', 'kirki' ),
        'default'     => __( '45vh', 'kirki' ),
        'section'     => 'header_image',
        'default'     => '',
        'priority'    => 9,
    );

//    header slogans
    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'header_slogan_h1',
        'label'       => __( 'Site slogan h1', 'kirki' ),
        'help'        => __( 'Uw Bron om een goede Marketing campagne te voeren', 'kirki' ),
        'default'     => __( 'Uw <b>Bron</b> om een goede <b>marketing campagne</b> te voeren', 'kirki' ),
        'section'     => 'header_slogan',
        'default'     => '',
        'priority'    => 8,
    );
    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'header_slogan_p01',
        'label'       => __( 'Site subslogan 1', 'kirki' ),
        'help'        => __( 'Leer ons kennen, waarschijnlijk kunnen wij u helpen.', 'kirki' ),
        'default'     => __( 'Leer ons kennen, waarschijnlijk kunnen wij u helpen.', 'kirki' ),
        'section'     => 'header_slogan',
        'default'     => '',
        'priority'    => 8,
    );
    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'header_slogan_p02',
        'label'       => __( 'Site subslogan 2', 'kirki' ),
        'help'        => __( 'Maak een afspraak nu 09-282 84 38', 'kirki' ),
        'default'     => __( 'Maak een afspraak nu 09-282 84 38', 'kirki' ),
        'section'     => 'header_slogan',
        'default'     => '',
        'priority'    => 8,
    );

    // header url 1
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'header_site_url01_switch',
        'label'       => __( 'Site url actief', 'kirki' ),
        'section'     => 'header_site_url01',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'header_site_url01_image',
        'label'       => __( 'Afbeelding', 'kirki' ),
        'help'        => __( 'Mares.be', 'kirki' ),
        'section'     => 'header_site_url01',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_site_url01_title',
        'label'       => __( 'Titel', 'kirki' ),
        'help'        => __( 'Gifts & Textile', 'kirki' ),
        'default'     => __( 'Gifts & Textile', 'kirki' ),
        'section'     => 'header_site_url01',
        'default'     => '',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'header_site_url01_text',
        'label'       => __( 'Tekst', 'kirki' ),
        'help'        => __( 'Relatiegeschenken en promokledij, geef de uitstraling die uw bedrijf verdient.', 'kirki' ),
        'default'     => __( 'Relatiegeschenken en promokledij, geef de uitstraling die uw bedrijf verdient.', 'kirki' ),
        'section'     => 'header_site_url01',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_site_url01_url',
        'label'       => __( 'Url', 'kirki' ),
        'help'        => __( 'Url naar pagina', 'kirki' ),
        'default'     => __( '', 'kirki' ),
        'section'     => 'header_site_url01',
        'default'     => '',
        'priority'    => 8,
    );


    // header url 2
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'header_site_url02_switch',
        'label'       => __( 'Site url actief', 'kirki' ),
        'section'     => 'header_site_url02',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'header_site_url02_image',
        'label'       => __( 'Afbeelding', 'kirki' ),
        'help'        => __( 'Burostore.be', 'kirki' ),
        'section'     => 'header_site_url02',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_site_url02_title',
        'label'       => __( 'Titel', 'kirki' ),
        'help'        => __( 'Office Supplies', 'kirki' ),
        'default'     => __( 'Office Supplies', 'kirki' ),
        'section'     => 'header_site_url02',
        'default'     => '',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'header_site_url02_text',
        'label'       => __( 'Tekst', 'kirki' ),
        'help'        => __( 'Een volledige online burostore, nu binnen ieders handbereik. 24/7', 'kirki' ),
        'default'     => __( 'Een volledige online burostore, nu binnen ieders handbereik. 24/7', 'kirki' ),
        'section'     => 'header_site_url02',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_site_url02_url',
        'label'       => __( 'Url', 'kirki' ),
        'help'        => __( 'Url naar pagina', 'kirki' ),
        'default'     => __( '', 'kirki' ),
        'section'     => 'header_site_url02',
        'default'     => '',
        'priority'    => 8,
    );

    // header url 3
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'header_site_url03_switch',
        'label'       => __( 'Site url actief', 'kirki' ),
        'section'     => 'header_site_url03',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'header_site_url03_image',
        'label'       => __( 'Afbeelding', 'kirki' ),
        'help'        => __( 'Polsbandshop.be', 'kirki' ),
        'section'     => 'header_site_url03',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_site_url03_title',
        'label'       => __( 'Titel', 'kirki' ),
        'help'        => __( 'Party & Event Stuff', 'kirki' ),
        'default'     => __( 'Party & Event Stuff', 'kirki' ),
        'section'     => 'header_site_url03',
        'default'     => '',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'header_site_url03_text',
        'label'       => __( 'Tekst', 'kirki' ),
        'help'        => __( 'Controlebandjes en jetons voor een geslaagde fuif, party of festival.', 'kirki' ),
        'default'     => __( 'Controlebandjes en jetons voor een geslaagde fuif, party of festival.', 'kirki' ),
        'section'     => 'header_site_url03',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_site_url03_url',
        'label'       => __( 'Url', 'kirki' ),
        'help'        => __( 'Url naar pagina', 'kirki' ),
        'default'     => __( '', 'kirki' ),
        'section'     => 'header_site_url03',
        'default'     => '',
        'priority'    => 8,
    );

    // header url 4
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'header_site_url04_switch',
        'label'       => __( 'Site url actief', 'kirki' ),
        'section'     => 'header_site_url04',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'header_site_url04_image',
        'label'       => __( 'Afbeelding', 'kirki' ),
        'help'        => __( 'Mares.be', 'kirki' ),
        'section'     => 'header_site_url04',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_site_url04_title',
        'label'       => __( 'Titel', 'kirki' ),
        'help'        => __( 'Graphic & Web', 'kirki' ),
        'default'     => __( 'Graphic & Web', 'kirki' ),
        'section'     => 'header_site_url04',
        'default'     => '',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'header_site_url04_text',
        'label'       => __( 'Tekst', 'kirki' ),
        'help'        => __( 'Grafische ontwerpen, lay-out, grootformaatprint en web design.', 'kirki' ),
        'default'     => __( 'Grafische ontwerpen, lay-out, grootformaatprint en web design.', 'kirki' ),
        'section'     => 'header_site_url04',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_site_url04_url',
        'label'       => __( 'Url', 'kirki' ),
        'help'        => __( 'Url naar pagina', 'kirki' ),
        'default'     => __( '', 'kirki' ),
        'section'     => 'header_site_url04',
        'default'     => '',
        'priority'    => 8,
    );


    // slider 1
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'slider_01_switch',
        'label'       => __( 'Slide 1 actief', 'kirki' ),
        'section'     => 'slider_slides_01',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'slider_01_color',
        'label'       => __( 'Tekstkleur', 'kirki' ),
        'help'        => __( 'Kies een kleur voor de titel en omschrijving, standaard #ffffff', 'kirki' ),
        'section'     => 'slider_slides_01',
        'default'     => '#FFFFFF',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_01_title',
        'label'       => __( 'Slider Titel', 'kirki' ),
        'help'        => __( 'Slider titel', 'kirki' ),
        'default'     => __( 'Titel 01', 'kirki' ),
        'section'     => 'slider_slides_01',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'textarea',
        'settings'    => 'slider_01_description',
        'label'       => __( 'Slider Omschrijving', 'kirki' ),
        'help'        => __( 'Slider omscrijving', 'kirki' ),
        'default'     => __( 'Omschrijving 01', 'kirki' ),
        'section'     => 'slider_slides_01',
        'default'     => '',
        'priority'    => 8,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_01_url',
        'label'       => __( 'Slider link', 'kirki' ),
        'help'        => __( 'optioneel een url: Mares.be', 'kirki' ),
        'section'     => 'slider_slides_01',
        'default'     => '',
        'priority'    => 9,
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'slider_01_image',
        'label'       => __( 'Slider afbeelding', 'kirki' ),
        'help'        => __( 'Mares.be', 'kirki' ),
        'section'     => 'slider_slides_01',
        'default'     => '',
        'priority'    => 10,
    );

    // slider 2
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'slider_02_switch',
        'label'       => __( 'Slide 2 actief', 'kirki' ),
        'section'     => 'slider_slides_02',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'slider_02_color',
        'label'       => __( 'Tekstkleur', 'kirki' ),
        'help'        => __( 'Kies een kleur voor de titel en omschrijving, standaard #ffffff', 'kirki' ),
        'section'     => 'slider_slides_02',
        'default'     => '#FFFFFF',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_02_title',
        'label'       => __( 'Slider Titel', 'kirki' ),
        'help'        => __( 'Slider titel', 'kirki' ),
        'default'     => __( 'Titel 02', 'kirki' ),
        'section'     => 'slider_slides_02',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'textarea',
        'settings'    => 'slider_02_description',
        'label'       => __( 'Slider Omschrijving', 'kirki' ),
        'help'        => __( 'Slider omscrijving', 'kirki' ),
        'default'     => __( 'Omschrijving 02', 'kirki' ),
        'section'     => 'slider_slides_02',
        'default'     => '',
        'priority'    => 8,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_02_url',
        'label'       => __( 'Slider link', 'kirki' ),
        'help'        => __( 'optioneel een url: Mares.be', 'kirki' ),
        'section'     => 'slider_slides_02',
        'default'     => '',
        'priority'    => 9,
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'slider_02_image',
        'label'       => __( 'Slider afbeelding', 'kirki' ),
        'help'        => __( 'Mares.be', 'kirki' ),
        'section'     => 'slider_slides_02',
        'default'     => '',
        'priority'    => 10,
    );

    // slider 3
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'slider_03_switch',
        'label'       => __( 'Slide 3 actief', 'kirki' ),
        'section'     => 'slider_slides_03',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'slider_03_color',
        'label'       => __( 'Tekstkleur', 'kirki' ),
        'help'        => __( 'Kies een kleur voor de titel en omschrijving, standaard #ffffff', 'kirki' ),
        'section'     => 'slider_slides_03',
        'default'     => '#FFFFFF',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_03_title',
        'label'       => __( 'Slider Titel', 'kirki' ),
        'help'        => __( 'Slider titel', 'kirki' ),
        'default'     => __( 'Titel 03', 'kirki' ),
        'section'     => 'slider_slides_03',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'textarea',
        'settings'    => 'slider_03_description',
        'label'       => __( 'Slider Omschrijving', 'kirki' ),
        'help'        => __( 'Slider omscrijving', 'kirki' ),
        'default'     => __( 'Omschrijving 03', 'kirki' ),
        'section'     => 'slider_slides_03',
        'default'     => '',
        'priority'    => 8,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_03_url',
        'label'       => __( 'Slider link', 'kirki' ),
        'help'        => __( 'optioneel een url: Mares.be', 'kirki' ),
        'section'     => 'slider_slides_03',
        'default'     => '',
        'priority'    => 9,
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'slider_03_image',
        'label'       => __( 'Slider afbeelding', 'kirki' ),
        'help'        => __( 'Mares.be', 'kirki' ),
        'section'     => 'slider_slides_03',
        'default'     => '',
        'priority'    => 10,
    );

    // slider 4
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'slider_04_switch',
        'label'       => __( 'Slide 4 actief', 'kirki' ),
        'section'     => 'slider_slides_04',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'slider_04_color',
        'label'       => __( 'Tekstkleur', 'kirki' ),
        'help'        => __( 'Kies een kleur voor de titel en omschrijving, standaard #ffffff', 'kirki' ),
        'section'     => 'slider_slides_04',
        'default'     => '#FFFFFF',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_04_title',
        'label'       => __( 'Slider Titel', 'kirki' ),
        'help'        => __( 'Slider titel', 'kirki' ),
        'default'     => __( 'Titel 04', 'kirki' ),
        'section'     => 'slider_slides_04',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'textarea',
        'settings'    => 'slider_04_description',
        'label'       => __( 'Slider Omschrijving', 'kirki' ),
        'help'        => __( 'Slider omscrijving', 'kirki' ),
        'default'     => __( 'Omschrijving 04', 'kirki' ),
        'section'     => 'slider_slides_04',
        'default'     => '',
        'priority'    => 8,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_04_url',
        'label'       => __( 'Slider link', 'kirki' ),
        'help'        => __( 'optioneel een url: Mares.be', 'kirki' ),
        'section'     => 'slider_slides_04',
        'default'     => '',
        'priority'    => 9,
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'slider_04_image',
        'label'       => __( 'Slider afbeelding', 'kirki' ),
        'help'        => __( 'Mares.be', 'kirki' ),
        'section'     => 'slider_slides_04',
        'default'     => '',
        'priority'    => 10,
    );

    // slider 5
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'slider_05_switch',
        'label'       => __( 'Slide 5 actief', 'kirki' ),
        'section'     => 'slider_slides_05',
        'default'     => '0',
        'priority'    => 5,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'slider_05_color',
        'label'       => __( 'Tekstkleur', 'kirki' ),
        'help'        => __( 'Kies een kleur voor de titel en omschrijving, standaard #ffffff', 'kirki' ),
        'section'     => 'slider_slides_05',
        'default'     => '#FFFFFF',
        'priority'    => 6,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_05_title',
        'label'       => __( 'Slider Titel', 'kirki' ),
        'help'        => __( 'Slider titel', 'kirki' ),
        'default'     => __( 'Titel 05', 'kirki' ),
        'section'     => 'slider_slides_05',
        'default'     => '',
        'priority'    => 7,
    );
    $fields[] = array(
        'type'        => 'textarea',
        'settings'    => 'slider_05_description',
        'label'       => __( 'Slider Omschrijving', 'kirki' ),
        'help'        => __( 'Slider omscrijving', 'kirki' ),
        'default'     => __( 'Omschrijving 05', 'kirki' ),
        'section'     => 'slider_slides_05',
        'default'     => '',
        'priority'    => 8,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_05_url',
        'label'       => __( 'Slider link', 'kirki' ),
        'help'        => __( 'optioneel een url: Mares.be', 'kirki' ),
        'section'     => 'slider_slides_05',
        'default'     => '',
        'priority'    => 9,
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'slider_05_image',
        'label'       => __( 'Slider afbeelding', 'kirki' ),
        'help'        => __( 'Mares.be', 'kirki' ),
        'section'     => 'slider_slides_05',
        'default'     => '',
        'priority'    => 10,
    );

    // slider_settings
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_settings_duration',
        'label'       => __( 'Slide duur', 'kirki' ),
        'help'        => __( '4000 is 4 seconden', 'kirki' ),
        'section'     => 'slider_settings',
        'default'     => '4000',
        'priority'    => 9,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'slider_settings_height',
        'label'       => __( 'Slides hoogte', 'kirki' ),
        'help'        => __( 'in px, standaard 600px', 'kirki' ),
        'section'     => 'slider_settings',
        'default'     => '600px',
        'priority'    => 10,
    );



    // logo slider
    $fields[] = array(
    'type'        => 'switch',
        'settings'    => 'company_slider_logo_001_switch',
        'label'       => __( 'afbeelding 1 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
        'on'  => __( 'Aan', 'kirki' ),
        'off' => __( 'Uit', 'kirki' ),
    ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_001',
        'label'       => __( 'Slider afbeelding 1', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_002_switch',
        'label'       => __( 'afbeelding 2 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_002',
        'label'       => __( 'Slider afbeelding 2', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_003_switch',
        'label'       => __( 'afbeelding 3 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_003',
        'label'       => __( 'Slider afbeelding 3', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_004_switch',
        'label'       => __( 'afbeelding 4 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_004',
        'label'       => __( 'Slider afbeelding 4', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_005_switch',
        'label'       => __( 'afbeelding 5 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_005',
        'label'       => __( 'Slider afbeelding 5', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_006_switch',
        'label'       => __( 'afbeelding 6 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_006',
        'label'       => __( 'Slider afbeelding 6', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_007_switch',
        'label'       => __( 'afbeelding 7 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_007',
        'label'       => __( 'Slider afbeelding 7', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_008_switch',
        'label'       => __( 'afbeelding 8 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_008',
        'label'       => __( 'Slider afbeelding 8', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_009_switch',
        'label'       => __( 'afbeelding 9 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_009',
        'label'       => __( 'Slider afbeelding 9', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0010_switch',
        'label'       => __( 'afbeelding 10 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0010',
        'label'       => __( 'Slider afbeelding 10', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0011_switch',
        'label'       => __( 'afbeelding 11 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0011',
        'label'       => __( 'Slider afbeelding 11', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0012_switch',
        'label'       => __( 'afbeelding 12 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0012',
        'label'       => __( 'Slider afbeelding 12', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0013_switch',
        'label'       => __( 'afbeelding 13 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0013',
        'label'       => __( 'Slider afbeelding 13', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0014_switch',
        'label'       => __( 'afbeelding 14 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0014',
        'label'       => __( 'Slider afbeelding 14', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0015_switch',
        'label'       => __( 'afbeelding 15 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0015',
        'label'       => __( 'Slider afbeelding 16', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0016_switch',
        'label'       => __( 'afbeelding 16 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0016',
        'label'       => __( 'Slider afbeelding 16', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0017_switch',
        'label'       => __( 'afbeelding 17 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0017',
        'label'       => __( 'Slider afbeelding 17', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0018_switch',
        'label'       => __( 'afbeelding 18 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0018',
        'label'       => __( 'Slider afbeelding 18', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0019_switch',
        'label'       => __( 'afbeelding 19 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0019',
        'label'       => __( 'Slider afbeelding 19', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'company_slider_logo_0020_switch',
        'label'       => __( 'afbeelding 20 witte overlay', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '0',
        'priority'    => 10,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'company_slider_logo_0020',
        'label'       => __( 'Slider afbeelding 20', 'kirki' ),
        'help'        => __( 'Logo plaatsen (standaard 500x500', 'kirki' ),
        'section'     => 'company_slider_logo',
        'default'     => '',
        'priority'    => 10,
    );




    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'company_slider_settings_duration',
        'label'       => __( 'Slide duur', 'kirki' ),
        'help'        => __( '2000 is 2 seconden', 'kirki' ),
        'section'     => 'company_slider_settings',
        'default'     => '2000',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'company_slider_settings_padding',
        'label'       => __( 'Slide extra ruimte', 'kirki' ),
        'help'        => __( 'extra ruimte boven en onder logo-slide', 'kirki' ),
        'section'     => 'company_slider_settings',
        'default'     => '30px',
        'priority'    => 10,
    );




    // uitgelichte gebied 1
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'hightlighted_article_area_01_switch',
        'label'       => __( 'Sectie pagina', 'kirki' ),
        'section'     => 'hightlighted_article_area_01',
        'default'     => '0',
        'priority'    => 9,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_01_id',
        'label'       => __( 'Pagina id', 'kirki' ),
        'help'        => __( 'Pagina id van pagina met template block op startpagina, toont content van pagina in gebied', 'kirki' ),
        'section'     => 'hightlighted_article_area_01',
        'default'     => '38',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_01_menu_id',
        'label'       => __( 'menu id', 'kirki' ),
        'help'        => __( 'behoort tot menu voor scrolling: bv Graphic & Web met url #graphic plaats hier dan \'graphic\'', 'kirki' ),
        'section'     => 'hightlighted_article_area_01',
        'default'     => 'graphic',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_01_button',
        'label'       => __( 'Pagina knop tekst', 'kirki' ),
        'help'        => __( 'Knop tekst', 'kirki' ),
        'section'     => 'hightlighted_article_area_01',
        'default'     => 'Ga naar de ...',
        'priority'    => 11,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_01_url',
        'label'       => __( 'Pagina knop link', 'kirki' ),
        'help'        => __( 'Knop url http://www.mares.be/', 'kirki' ),
        'section'     => 'hightlighted_article_area_01',
        'default'     => '#',
        'priority'    => 12,
    );
    // uitgelichte gebied 2
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'hightlighted_article_area_02_switch',
        'label'       => __( 'Sectie pagina', 'kirki' ),
        'section'     => 'hightlighted_article_area_02',
        'default'     => '0',
        'priority'    => 9,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_02_id',
        'label'       => __( 'Pagina id', 'kirki' ),
        'help'        => __( 'Pagina id van pagina met template block op startpagina, toont content van pagina in gebied', 'kirki' ),
        'section'     => 'hightlighted_article_area_02',
        'default'     => '38',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_02_menu_id',
        'label'       => __( 'menu id', 'kirki' ),
        'help'        => __( 'behoort tot menu voor scrolling: bv Graphic & Web met url #graphic plaats hier dan \'graphic\'', 'kirki' ),
        'section'     => 'hightlighted_article_area_02',
        'default'     => 'graphic',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_02_button',
        'label'       => __( 'Pagina knop tekst', 'kirki' ),
        'help'        => __( 'Knop tekst', 'kirki' ),
        'section'     => 'hightlighted_article_area_02',
        'default'     => 'Ga naar de ...',
        'priority'    => 11,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_02_url',
        'label'       => __( 'Pagina knop link', 'kirki' ),
        'help'        => __( 'Knop url http://www.mares.be/', 'kirki' ),
        'section'     => 'hightlighted_article_area_02',
        'default'     => '#',
        'priority'    => 12,
    );
    // uitgelichte gebied 3
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'hightlighted_article_area_03_switch',
        'label'       => __( 'Sectie pagina', 'kirki' ),
        'section'     => 'hightlighted_article_area_03',
        'default'     => '0',
        'priority'    => 9,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_03_id',
        'label'       => __( 'Pagina id', 'kirki' ),
        'help'        => __( 'Pagina id van pagina met template block op startpagina, toont content van pagina in gebied', 'kirki' ),
        'section'     => 'hightlighted_article_area_03',
        'default'     => '38',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_03_menu_id',
        'label'       => __( 'menu id', 'kirki' ),
        'help'        => __( 'behoort tot menu voor scrolling: bv Graphic & Web met url #graphic plaats hier dan \'graphic\'', 'kirki' ),
        'section'     => 'hightlighted_article_area_03',
        'default'     => 'graphic',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_03_button',
        'label'       => __( 'Pagina knop tekst', 'kirki' ),
        'help'        => __( 'Knop tekst', 'kirki' ),
        'section'     => 'hightlighted_article_area_03',
        'default'     => 'Ga naar de ...',
        'priority'    => 11,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_03_url',
        'label'       => __( 'Pagina knop link', 'kirki' ),
        'help'        => __( 'Knop url http://www.mares.be/', 'kirki' ),
        'section'     => 'hightlighted_article_area_03',
        'default'     => '#',
        'priority'    => 12,
    );
    // uitgelichte gebied 4
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'hightlighted_article_area_04_switch',
        'label'       => __( 'Sectie pagina', 'kirki' ),
        'section'     => 'hightlighted_article_area_04',
        'default'     => '0',
        'priority'    => 9,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_04_id',
        'label'       => __( 'Pagina id', 'kirki' ),
        'help'        => __( 'Pagina id van pagina met template block op startpagina, toont content van pagina in gebied', 'kirki' ),
        'section'     => 'hightlighted_article_area_04',
        'default'     => '38',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_04_menu_id',
        'label'       => __( 'menu id', 'kirki' ),
        'help'        => __( 'behoort tot menu voor scrolling: bv Graphic & Web met url #graphic plaats hier dan \'graphic\'', 'kirki' ),
        'section'     => 'hightlighted_article_area_04',
        'default'     => 'graphic',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_04_button',
        'label'       => __( 'Pagina knop tekst', 'kirki' ),
        'help'        => __( 'Knop tekst', 'kirki' ),
        'section'     => 'hightlighted_article_area_04',
        'default'     => 'Ga naar de ...',
        'priority'    => 11,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'hightlighted_article_area_04_url',
        'label'       => __( 'Pagina knop link', 'kirki' ),
        'help'        => __( 'Knop url http://www.mares.be/', 'kirki' ),
        'section'     => 'hightlighted_article_area_04',
        'default'     => '#',
        'priority'    => 12,
    );



    // contact form
    $fields[] = array(
        'type'        => 'switch',
        'settings'    => 'contactform_switch',
        'label'       => __( 'Contact formulier', 'kirki' ),
        'section'     => 'contactform',
        'default'     => '0',
        'priority'    => 9,
        'choices'     => array(
            'on'  => __( 'Aan', 'kirki' ),
            'off' => __( 'Uit', 'kirki' ),
        ),
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'contactform_id',
        'label'       => __( 'Contact formulier id', 'kirki' ),
        'help'        => __( 'Contact formulier van Contact form 7 en flamingo', 'kirki' ),
        'section'     => 'contactform',
        'default'     => '',
        'priority'    => 10,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'contactform_Titel',
        'label'       => __( 'Contact formulier Titel', 'kirki' ),
        'help'        => __( '', 'kirki' ),
        'section'     => 'contactform',
        'default'     => '',
        'priority'    => 10,
    );



    // instellingen
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'instellingen_fb',
        'label'       => __( 'Facebook url', 'kirki' ),
        'help'        => __( 'https://www.facebook.com/StudioMares/', 'kirki' ),
        'section'     => 'instellingen',
        'default'     => '',
        'priority'    => 1,
    );
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'instellingen_tw',
        'label'       => __( 'Twitter url', 'kirki' ),
        'help'        => __( 'https://twitter.com/studiomares', 'kirki' ),
        'section'     => 'instellingen',
        'default'     => '',
        'priority'    => 2,
    );
    $fields[] = array(
        'type'        => 'select',
        'setting'     => 'font_family',
        'label'       => __( 'Font-Family', 'kirki' ),
        'description' => __( 'Please choose a font for your site. This font-family will be applied to all elements on your page, including headers and body.', 'kirki' ),
        'section'     => 'instellingen',
        'default'     => 'Roboto',
        'priority'    => 10,
        'choices'     => Kirki_Fonts::get_font_choices(),
        'output'      => array(
            array(
                'element'  => 'body, h1, h2, h3, h4, h5, h6',
                'property' => 'font-family',
            ),
        ),
        'transport'   => 'postMessage',
        'js_vars'     => array(
            array(
                'element'  => 'body, h1, h2, h3, h4, h5, h6',
                'function' => 'css',
                'property' => 'font-family',
            ),
        ),
    );

    $fields[] = array(
        'type'        => 'slider',
        'setting'     => 'font_size',
        'label'       => __( 'Font-Size', 'kirki' ),
        'description' => __( 'Please choose a font-size for your body.', 'kirki' ),
        'section'     => 'instellingen',
        'default'     => 1,
        'priority'    => 20,
        'choices'     => array(
            'min'  => .7,
            'max'  => 2,
            'step' => .01
        ),
        output        => array(
            array(
                'element'  => 'body',
                'property' => 'font-size',
                'units'    => 'em',
            ),
        ),
        'transport'   => 'postMessage',
        'js_vars'     => array(
            array(
                'element'  => 'body',
                'function' => 'css',
                'property' => 'font-size',
            ),
        ),
    );
    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'instellingen_adress',
        'label'       => __( 'Adress gegevens', 'kirki' ),
        'help'        => __( 'Opmaak is toegestaan', 'kirki' ),
        'default'     => __( '', 'kirki' ),
        'section'     => 'instellingen',
        'default'     => '',
        'priority'    => 3,
    );
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'instellingen_logo',
        'label'       => __( 'Logo site', 'kirki' ),
        'help'        => __( 'logo 224x70', 'kirki' ),
        'section'     => 'instellingen',
        'default'     => '',
        'priority'    => 0,
    );

    return $fields;
}
