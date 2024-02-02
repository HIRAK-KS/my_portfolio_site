<?php
// head内にファイルを読み込ませる
function add_files()
{
    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Roboto&display=swap');
    // リセットCSS
    wp_enqueue_style('reset-style', get_theme_file_uri('/styles/reset.css'));
    // メインのCSSファイル
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // SplideのCSSファイル
    wp_enqueue_style('splide-style', get_theme_file_uri('/styles/splide.min.css'));
    // SplideのJSファイル
    wp_enqueue_script('splide-js', get_theme_file_uri('/scripts/splide.min.js'), array(), false, true);
    // メインのJSファイル
    wp_enqueue_script('main-js', get_theme_file_uri('/scripts/main.js'), array('splide-js'), false, true);
}
// add_files()を呼び出す
add_action('wp_enqueue_scripts', 'add_files');


// WordPressの機能を有効化する
function theme_setup()
{
    // titleタグ
    add_theme_support('title-tag');
    // アイキャッチ画像
    add_theme_support('post-thumbnails');
    // RSSフィールドリンクなどの設定もできる

    // 管理画面 > 外観 > メニュー の有効化
    register_nav_menus(
        array(
            'global-nav' => 'グローバルナビ',
            'category-nav' => 'カテゴリーナビ',
            'hamburger_nav' => 'ハンバーガーナビ',
            'social-links' => 'ソーシャルリンク',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');


// wp_nav_menuの<li>にクラスを追加する関数
function add_class_on_li($classes, $item, $args)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_on_li', 1, 3);

// wp_nav_menuの<a>にクラスを追加する関数
function add_class_on_a($atts, $item, $args)
{
    if (isset($args->a_class)) {
        $atts['class'] = $args->a_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_on_a', 1, 3);

// Works一覧ページを追加
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'works'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// ACFの画像URLとIDを取得しimgタグを返す
function my_custom_image($field_name)
{
    $image_id = get_field($field_name); // ACFから画像IDを取得
    if ($image_id) {
        $image_url = wp_get_attachment_image_url($image_id, 'full'); // 画像URLを取得
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // altテキストを取得

        // altテキストが空の場合、デフォルトのテキストを設定
        if (empty($image_alt)) {
            $image_alt = '制作実績の画像';
        }

        echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '">';
    }
}
