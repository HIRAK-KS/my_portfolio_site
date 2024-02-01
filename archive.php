<?php get_header(); ?>
<?php get_template_part('./includes/header'); ?>

<div class="global-layout__heading heading">
  <h2 class="page-title">Works</h2>
</div>

<nav class="global-layout__categories categories">
  <div class="categories__inner sticky">
    <h2 class="categories__title group-title">Categories</h2>
    <ul class="categories__list">
      <li><a class="button">Design</a></li>
      <li><a class="button">Cording</a></li>
      <li><a class="button">Direction</a></li>
      <li><a class="button">Marketing</a></li>
    </ul>
  </div>
</nav>

<main class="global-layout__contents _2-column">
  <section class="archive-works">
    <ul class="card-list">
      <li class="card _works">
        <a href="./single-works.html" class="card__inner">
          <div class="card__unit">
            <h3 class="card__title">Webサイトデザイン</h3>
            <p class="card__date">2023.5.5</p>
            <p class="card__text">
              コーポレートサイトやECサイト、商品紹介や採用のためのランディングページなどWebサイトのデザインを行います。ご依頼主様の商品サービスの魅力を引き出し、サイトを訪れた方にその魅力が伝わるようなデザインを心がけています。
            </p>
            <p class="button" href="">More</p>
          </div>
          <div class="card__image">
            <img src="images/img-3.png" />
          </div>
        </a>
      </li>

    </ul>
    <div class="pagination">
      <p>1 / 2 / 3</a>
    </div>
  </section>
</main>

<?php get_template_part('./includes/footer'); ?>
<?php get_footer(); ?>