<?php
function all_widget_init()
{
        register_sidebar(array(
            'name' => 'Footer links',
            'id' => 'footer_links',
            'before_widget' => '<div id="%1$s" class="widget col-xs-6 col-sm-3 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="offscreen">',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => 'Footer rechts',
            'id' => 'footer_rechts',
            'before_widget' => '<div id="%1$s" class="widget col-xs-6 col-sm-3 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => 'Footer midden links',
            'id' => 'footer_midden',
            'before_widget' => '<div id="%1$s" class="widget col-xs-6 col-sm-3 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => 'Footer midden rechts',
            'id' => 'footer_midden2',
            'before_widget' => '<div id="%1$s" class="widget col-xs-6 col-sm-3 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => 'sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div id="%1$s" class="widget col-sm-12 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => 'sidebar Gifts & Textile',
            'id' => 'sidebar-gt',
            'before_widget' => '<div id="%1$s" class="widget col-sm-12 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => 'sidebar Burostore',
            'id' => 'sidebar-burostore',
            'before_widget' => '<div id="%1$s" class="widget col-sm-12 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => 'sidebar Polsbandshop',
            'id' => 'sidebar-polsbandshop',
            'before_widget' => '<div id="%1$s" class="widget col-sm-12 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => 'sidebar Graphics, Print & Web',
            'id' => 'sidebar-gpw',
            'before_widget' => '<div id="%1$s" class="widget col-sm-12 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));

}