<header class="global-layout__header header">
  <div class="header__inner wrapper">
    <h1 class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">Keisuke Sato Portfolio</a>
    </h1>
    <?php
    wp_nav_menu(array(
      'menu_class' => 'header__navigation',
      'container' => 'nav',
      'fallback_cb' => false,
      'echo' => true, // 変数に格納するならfalse
      'depth' => 0, // 　x階層まで制限するなら数値を入力
      'theme_location' => 'global-nav',
    ));
    ?>
  </div>
</header>
<button class="hamburger-button">
  <span></span>
  <span></span>
</button>

<div class="navigation _hamburger" id="nav">
  <nav class="navigation__body _hamburger">
    <div class="navigation__unit">
      <h3 class="group-title">Menu</h3>
      <?php
      wp_nav_menu(array(
        'container' => 'ul',
        'fallback_cb' => false,
        'echo' => true, // 変数に格納するならfalse
        'depth' => 0, // 　x階層まで制限するなら数値を入力
        'theme_location' => 'global-nav',
        'add_a_class' => 'action-link'
      ));
      ?>
    </div>
  </nav>
</div>

<div class="mask" id="mask"></div>