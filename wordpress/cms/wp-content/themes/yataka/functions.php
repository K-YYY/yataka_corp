<?php

/*****************************************************************************************
* アイキャッチの登録を有効化
*****************************************************************************************/
add_theme_support('post-thumbnails');


/*****************************************************************************************
* ヘッダをきれいに
*****************************************************************************************/
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head');
// Since 4.4
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','rest_output_link_wp_head');


/*****************************************************************************************
* jQueryの読み込みを削除
*****************************************************************************************/
function my_delete_plugin_files() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_plugin_files' );


/*****************************************************************************************
* ログイン時の余白を除去
*****************************************************************************************/
add_filter( 'show_admin_bar', '__return_false' );

/*****************************************************************************************
* フォームページ以外ではreCAPTCHAを読み込まない
*****************************************************************************************/
function dequeue_cf7_recaptcha() {
    if (!is_page('contact')) { // contact ページだけ読み込む
        wp_dequeue_script('google-recaptcha');
        wp_dequeue_script('wpcf7-recaptcha');
    }
}
add_action('wp_print_scripts', 'dequeue_cf7_recaptcha', 100);
?>