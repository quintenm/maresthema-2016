<?php
function all_widget_init()
{
        register_sidebar(array(
            'name' => 'Footer links',
            'id' => 'footer_links',
            'before_widget' => '<div id="%1$s" class="col-sm-4 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="offscreen">',
            'after_title' => '</h1>',
        ));
        register_sidebar(array(
            'name' => 'Footer rechts',
            'id' => 'footer_rechts',
            'before_widget' => '<div id="%1$s" class="col-sm-4 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        ));
        register_sidebar(array(
            'name' => 'Footer midden',
            'id' => 'footer_midden',
            'before_widget' => '<div id="%1$s" class="col-sm-4 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
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