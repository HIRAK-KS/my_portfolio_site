<?php get_header(); ?>
<?php get_template_part('./includes/header'); ?>
<?php get_template_part('./includes/sidebar'); ?>

<div class="global-layout__heading heading">
  <h2 class="page-title _single-works">marumaru株式会社コーポレートサイト</h2>
</div>

<main class="global-layout__contents _2-column">
  <div>
    <section id="main-carousel" class="splide" aria-label="お気に入りの写真">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <img src="./images/works-grid-item-1.png" alt="" />
          </li>
          <li class="splide__slide">
            <img src="./images/works-grid-item-2.png" alt="" />
          </li>
          <li class="splide__slide">
            <img src="./images/works-grid-item-3.png" alt="" />
          </li>
          <li class="splide__slide">
            <img src="./images/works-grid-item-4.png" alt="" />
          </li>
          <li class="splide__slide">
            <img src="./images/works-grid-item-5.png" alt="" />
          </li>
          <li class="splide__slide">
            <img src="./images/works-grid-item-6.png" alt="" />
          </li>
        </ul>
      </div>
    </section>
    <ul id="thumbnails" class="thumbnails">
      <li class="thumbnail">
        <img src="./images/works-grid-item-1.png" alt="" />
      </li>
      <li class="thumbnail">
        <img src="./images/works-grid-item-2.png" alt="" />
      </li>
      <li class="thumbnail">
        <img src="./images/works-grid-item-3.png" alt="" />
      </li>
      <li class="thumbnail">
        <img src="./images/works-grid-item-4.png" alt="" />
      </li>
      <li class="thumbnail">
        <img src="./images/works-grid-item-5.png" alt="" />
      </li>
      <li class="thumbnail">
        <img src="./images/works-grid-item-6.png" alt="" />
      </li>
    </ul>
  </div>
  <div class="description">
    <dl class="description__main">
      <dt>制作カテゴリー</dt>
      <dd>コーポレートサイト制作</dd>
      <dt>担当範囲</dt>
      <dd>ディレクション / デザイン / コーディング</dd>
      <dt>ターゲット</dt>
      <dd>60代女性</dd>
      <dt>制作の目的</dt>
      <dd>社会的信用の獲得</dd>
      <dt>制作概要</dt>
      <dd>
        見た目が可愛いのはもちろん、味や食感にこだわって作ったシンプルだけど特別なお菓子の魅力が伝わる、ほっこり可愛らしいデザインで世界観を統一。
        お子様へのプレゼントや結婚祝いなどにお菓子を購入される女性ユーザーが多いため、安心感と親しみやすさがあり、「人に喜ばれるオリジナルクッキーが買える店」
        というイメージになることを目標としました。
      </dd>
    </dl>
    <dl class="description__sub">
      <dt>業種</dt>
      <dd>高齢者住宅紹介業</dd>
      <dt>ページ数</dt>
      <dd>8ページ</dd>
      <dt>制作期間</dt>
      <dd>1ヶ月</dd>
      <dt>使用ツール</dt>
      <dd>WordPress / Photoshop / Illustrator / Figma</dd>
      <dt>URL</dt>
      <dd>marumaru.com</dd>
      <dt>公開日</dt>
      <dd>2023.5.4</dd>
      <dt>クライアント</dt>
      <dd>marumaru株式会社</dd>
    </dl>
  </div>
  <section class="cta">
    <h2 class="section-title">Other Works</h2>
    <ul class="categories__list _cta">
      <li><a class="button">Design</a></li>
      <li><a class="button">Cording</a></li>
      <li><a class="button">Direction</a></li>
      <li><a class="button">Marketing</a></li>
    </ul>
    <ul class="grid-list">
      <li>
        <a href="#">
          <figure class="grid-list__item">
            <div class="grid-list__image">
              <img src="./images/works-grid-item-1.png" alt="制作物の画像" />
              <div class="grid-list__mask"></div>
            </div>
            <figcaption class="grid-list__caption">高齢者住宅紹介コーポレートサイト</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="#">
          <figure class="grid-list__item">
            <div class="grid-list__image">
              <img src="./images/works-grid-item-2.png" alt="制作物の画像" />
              <div class="grid-list__mask"></div>
            </div>
            <figcaption class="grid-list__caption">高齢者住宅紹介コーポレートサイト</figcaption>
          </figure>
        </a>
      </li>
    </ul>
  </section>
</main>

<?php get_template_part('./includes/footer'); ?>
<?php get_footer(); ?>