<?php

/* Template Name: Contact */

/**
 * The main template file
 *
 * This is theme for Portfolio for Desktop
 *
 * @package WordPress
 * @subpackage Yataka_Bussan
 */

get_header();

?>
    
<section class="contact">
        <div class="contact-container">
            <div class="contact-title">
                <h2>ご相談・お問い合わせ</h2>
                <p class="contact-notes">
                    必須内容をご記入の上、お問い合わせください。内容確認が終了次第、3営業日以内にご返信差し上げます。<br>
                    お問い合わせ内容によってはお電話にて回答させていただく場合もございますので、あらかじめご了承ください。
                </p>
            </div>

            <!-- 問合せフォーム内容 --> 
            <div class="contact-form">
                <?= the_content(); ?>
            </div>   
        </div>
    </section>

<?php get_footer(); ?>
