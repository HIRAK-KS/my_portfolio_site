<nav class="global-layout__categories categories">
    <div class="categories__inner sticky">
        <h2 class="categories__title group-title">Categories</h2>
        <?php
        wp_nav_menu(array(
            'menu_class' => 'categories__list',
            'container' => 'ul',
            'fallback_cb' => false,
            'echo' => true, // 変数に格納するならfalse
            'depth' => 0, // 　x階層まで制限するなら数値を入力
            'theme_location' => 'category-nav',
            'a_class' => 'button',
        ));
        ?>
    </div>
</nav>