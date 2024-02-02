<?php get_header(); ?>
<?php get_template_part('./includes/header'); ?>

<main class="global-layout__contents contents-layout wrapper">
  <hgroup class="copy">
    <h2 class="copy__main">
      <span class="copy__left">Design</span>
      <span class="copy__center">&amp;</span>
      <span class="copy__right">Cording</span>
    </h2>
    <p class="copy__sub">
      Web制作フリーランス「サトウ ケイスケ」のポートフォリオサイトです。
      <br />今まで関わらさせていただいた案件での制作物やサンプルを掲載しています。
    </p>
  </hgroup>
  <section class="works">
    <div class="vertical-group sticky">
      <h2 class="section-title">Works</h2>
      <a href="<?= home_url('/works/'); ?>" class="button">More</a>
    </div>
    <ul class="grid-list">
      <?php if (have_posts()) : while (have_posts()) :  the_post(); ?>
          <li>
            <a href="<?= esc_url(get_permalink()); ?>">
              <figure class="grid-list__item">
                <div class="grid-list__image">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?= esc_url(get_theme_file_uri('/images/img.png')); ?> alt="" class=" wp-post-image">
                  <?php endif; ?>
                  <div class="grid-list__mask"></div>
                </div>
                <figcaption class="grid-list__caption">
                  <h3><?php the_title(); ?></h3>
                </figcaption>
              </figure>
            </a>
          </li>
        <?php endwhile;
      else : ?>
    </ul>
    <p>制作実績がありません</p>
  <?php endif; ?>
  <!-- <div class="sp-button">
    <a class="button">More</a>
  </div> -->
  </section>

  <section class="about" id="about">
    <div class="about__image">
      <img src="<?= esc_url(get_theme_file_uri('/images/rectangle-217.png')) ?>" />
    </div>
    <div class="about__body">
      <h2 class="section-title">About</h2>
      <hr />
      <p>
        北海道札幌市を中心にWebコーダー兼デザイナーとして活動しているサトウケイスケです。私はデザインやコーディングの技術はもちろんですが、一緒に仕事をする方々と信頼し合える関係を作ることを大切にしています。
      </p>
      <div class="about__button">
        <!-- <a class="button">More</a> -->
      </div>
    </div>
  </section>

  <section class="service" id="service">
    <div class="service__sidebar">
      <div class="service__heading sticky">
        <h2 class="section-title">Service</h2>
        <!-- <a class="button">More</a> -->
      </div>
    </div>
    <ul class="card-list _service">
      <li class="card _serice">
        <a href="#" class="card__inner">
          <div class="card__unit">
            <h3 class="card__title">Webサイトデザイン</h3>
            <p class="card__text">
              コーポレートサイトやECサイト、商品紹介や採用のためのランディングページなどWebサイトのデザインを行います。ご依頼主様の商品サービスの魅力を引き出し、サイトを訪れた方にその魅力が伝わるようなデザインを心がけています。
            </p>
          </div>
          <div class="card__image">
            <img src="<?= esc_url(get_theme_file_uri('/images/img-3.png')) ?>" />
          </div>
        </a>
      </li>
      <li class="card">
        <a href="#" class="card__inner">
          <div class="card__unit">
            <h3 class="card__title">コーディング</h3>
            <p class="card__text">
              デザインの再現はもちろんのこと、表現豊かなアニメーションを適切に実装し、Webサイトがさらに魅力的なものになるようにコーディングを行います。
            </p>
          </div>
          <div class="card__image">
            <img src="<?= esc_url(get_theme_file_uri('/images/img-2.png')) ?>" />
          </div>
        </a>
      </li>
      <li class="card">
        <a href="#" class="card__inner">
          <div class="card__unit">
            <h3 class="card__title">ディレクション</h3>
            <p class="card__text">
              ヒヤリングや用件定義、制作の進捗管理やサイト公開後の運用サポートまで行います。Webを苦手に感じていられるお客様でも安心してお任せいただけるように、専門用語を極力使わずにわかりやすいコミュニケーションを心がけています。
            </p>
          </div>
          <div class="card__image">
            <img src="<?= esc_url(get_theme_file_uri('/images/img-1.png')) ?>" />
          </div>
        </a>
      </li>
      <li class="card">
        <a href="#" class="card__inner">
          <div class="card__unit">
            <h3 class="card__title">マーケティング</h3>
            <p class="card__text">
              主にWebサイト公開後の運用をサポートします。Webサイトの解析や改善点の提案、各種ネット広告を利用したアクセス流入増加施策を代行することも可能です。
            </p>
          </div>
          <div class="card__image">
            <img src="<?= esc_url(get_theme_file_uri('/images/img.png')) ?>" />
          </div>
        </a>
      </li>
    </ul>
    <div class="sp-button">
      <a class="button">More</a>
    </div>
  </section>
</main>

<?php get_template_part('./includes/footer'); ?>
<?php get_footer(); ?>