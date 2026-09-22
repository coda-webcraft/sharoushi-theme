<?php
// テーマの基本機能を有効化
function sharoushi_theme_setup()
{
    // ページタイトルをWordPressに自動管理させる(<title>タグ用)
    add_theme_support('title-tag');

    // アイキャッチ画像(投稿・固定ページのメイン画像)を使えるようにする
    add_theme_support('post-thumbnails');

    // ナビゲーションメニューの登録
    register_nav_menus(array(
        'primary' => 'メインメニュー',
    ));
}
add_action('after_setup_theme', 'sharoushi_theme_setup');

// CSSファイルを正しく読み込む
function sharoushi_theme_styles()
{
    wp_enqueue_style('sharoushi-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'sharoushi_theme_styles');