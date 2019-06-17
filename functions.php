<?php

if( function_exists('register_sidebar'))
    register_sidebar(array(
        'id' => 'sidebar-1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));

    // サムネイル画像を設定するためのコード
    add_theme_support('post-thumbnails');

    // 

?>