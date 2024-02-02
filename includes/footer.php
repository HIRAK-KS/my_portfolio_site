<?php wp_body_open(); ?>
<footer class="global-layout__footer footer">
  <div class="navigation wrapper">
    <div class="navigation__logo _pc-footer group-title">
      <h2>Keisuke Sato<br />Portfolio</h2>
    </div>
    <nav class="navigation__body">

      <div class="navigation__unit">
        <h3 class="group-title">Menu</h3>
        <?php
        wp_nav_menu(array(
          'menu_class' => '',
          'container' => '',
          'fallback_cb' => false,
          'echo' => true, // 変数に格納するならfalse
          'depth' => 0, // 　x階層まで制限するなら数値を入力
          'theme_location' => 'global-nav',
        ));
        ?>
      </div>
      <div class="navigation__unit">
        <h3 class="group-title">Social</h3>
        <?php
        wp_nav_menu(array(
          'menu_class' => '',
          'container' => 'ul',
          'fallback_cb' => false,
          'echo' => true, // 変数に格納するならfalse
          'depth' => 0, // 　x階層まで制限するなら数値を入力
          'theme_location' => 'social-links',
        ));
        ?>
      </div>
      <div class="navigation__unit">
        <h3 class="group-title">Mail</h3>
        <ul>
          <li>
            <a href="mailto:hirak.keisuke@gmail.com">mail@keisukesato.com</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="copyright">
    <p>2024 Keisuke Sato</p>
  </div>
</footer>