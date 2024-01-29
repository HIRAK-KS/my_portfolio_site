<?php
// head内にファイルを読み込ませる
function add_files() {
    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Roboto&display=swap');
    // リセットCSS
    wp_enqueue_style('reset-style', get_theme_file_uri('/styles/reset.css'));
    // メインのCSSファイル
    wp_enqueue_style('main-style', get_stylesheet_uri());
    //Splide
    wp_enqueue_script( 'splide-js', get_theme_file_uri( '/scripts/splide.min.js'), array(), false, true );
    // メインのJSファイル
    wp_enqueue_script('main-js', get_theme_file_uri('/scripts/main.js'), array('spride-js'), false, true);
}
// add_files()を呼び出す
add_action('wp_enqueue_scripts', 'add_files');