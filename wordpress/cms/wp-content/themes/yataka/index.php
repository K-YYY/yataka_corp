<?php

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
    
<!-- ===== KVセクション ===== -->
  <!-- Slider main container -->
  <div class="swiper">
  <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
    <!-- Slides -->
      <div class="swiper-slide"><img src="<?=get_template_directory_uri()?>/img/kv-001.jpg" alt="社屋外観（社名看板）"></div>
      <div class="swiper-slide"><img src="<?=get_template_directory_uri()?>/img/kv-002.jpg" alt="取り扱っているベニヤが積まれた倉庫内の様子"></div>
      <div class="swiper-slide"><img src="<?=get_template_directory_uri()?>/img/kv-003.jpg" alt="社用車の社名ロゴ"></div>
    </div>

  </div>

    <!-- 会社情報 --> 
    <section class="company-info">
        <div class="info-inner two-col">
          <div class="info-title">
            <h2>会社情報</h2>
          </div>

          <div class="info-list">
            <dl class="info-list-detail">
             <dt>会社名</dt><dd>有限会社 ヤタカ物産</dd>
             <dt>所在地</dt><dd>〒379-2154 <br>群馬県前橋市天川大島町1371-7</br></dd>
             <dt>電話番号</dt><dd>027-263-8009</dd>
             <dt>代表取締役</dt><dd>矢部 宗雄</dd>
             <dt>事業内容</dt><dd>建材各種販売・特注家具製造販売</dd>
            </dl>
          </div>
        </div>
      </section>

<!-- ご相談・お問い合わせ -->
<section class="contact-cta">
  <div class="cta-inner">
    <div class="cta-link">
      <h2><a href="<?=get_permalink(get_page_by_path('contact')->ID)?>">ご相談・お問い合わせ <img src="<?=get_template_directory_uri()?>/img/arrow.png" alt=""></a></h2>
    </div>
  </div>
</section>

<?php get_footer(); ?>
