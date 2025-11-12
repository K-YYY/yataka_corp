<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <?php if ( is_front_page() ): ?>
    <title><?=get_bloginfo('name'); ?> <?=get_bloginfo( 'description'); ?> </title>
    <?php else: ?>
    <title><?=get_the_title()?> | <?=get_bloginfo('name'); ?></title>
    <?php endif; ?>

    <meta name="description" content="各種建材を販売しているヤタカ物産のサイトです">

    <?php if ( is_front_page() ): ?>
    <meta property="og:title" content="<?=get_bloginfo('name'); ?> <?=get_bloginfo( 'description'); ?> ">
    <?php else: ?>
    <meta property="og:title" content="<?=get_the_title()?> | <?=get_bloginfo('name'); ?>">
    <?php endif; ?>
	<meta property="og:description" content="各種建材を販売しているヤタカ物産のサイトです">
	<meta property="og:url" content="<?=get_the_permalink(); ?>">
    <?php if ( is_front_page() ): ?>
	<meta property="og:type" content="website">
    <?php else: ?>
	<meta property="og:type" content="article">
    <?php endif; ?>
    <meta property="og:image" content="<?=get_template_directory_uri()?>/img/ogp.png">
    <meta property="og:site_name" content="<?=get_bloginfo('name'); ?>">
    <meta property="og:locale" content="ja_JP">

    <link href="<?=get_template_directory_uri()?>/css/reset.css"  rel="stylesheet" />
    <link href="<?=get_template_directory_uri()?>/css/common.css"  rel="stylesheet" />
    <?php if ( is_front_page() ): ?>
    <link href="<?=get_template_directory_uri()?>/css/style.css"  rel="stylesheet" />
    <?php elseif ( is_page('contact') || is_page('confirm') ): ?>
    <link href="<?=get_template_directory_uri()?>/css/contact/style.css"  rel="stylesheet" />
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="canonical" href="<?=get_the_permalink(); ?>">

<!-- script --> 
    <?php if ( is_front_page() ): ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>   
    <script src="<?=get_template_directory_uri()?>/js/script.js"></script>
    <?php elseif ( is_page('contact') ): ?>
    <script src="<?=get_template_directory_uri()?>/js/contact/script.js"></script>
    <?php endif; ?>
    
<?php wp_head(); ?>

</head>

<body>
    <header class="site-header">
        <h1 class="header-left">
            <a href="/"><img src="<?=get_template_directory_uri()?>/img/logo.png" alt="有限会社 ヤタカ物産" class="logo"></a>
        </h1>
        <div class="header-right">
            <a href="<?=get_permalink(get_page_by_path('contact')->ID)?>" class="contact-link">
                <img src="<?=get_template_directory_uri()?>/img/mailbox.png" alt="メールアイコン" class="mailbox">
                <span class="contact-text">お問い合わせ</span>
            </a>
        </div>
    </header>