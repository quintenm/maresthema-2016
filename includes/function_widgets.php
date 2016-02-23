<?php
function all_widget_init()
{
        register_sidebar(array(
            'name' => 'Footer links',
            'id' => 'footer_links',
            'before_widget' => '<div id="%1$s" class="col-xs-6 col-sm-3 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="offscreen">',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => 'Footer rechts',
            'id' => 'footer_rechts',
            'before_widget' => '<div id="%1$s" class="col-xs-6 col-sm-3 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => 'Footer midden links',
            'id' => 'footer_midden',
            'before_widget' => '<div id="%1$s" class="col-xs-6 col-sm-3 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => 'Footer midden rechts',
            'id' => 'footer_midden2',
            'before_widget' => '<div id="%1$s" class="col-xs-6 col-sm-3 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => 'sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div id="%1$s" class="col-sm-12 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));

}