<?php if (has_nav_menu('primary')) : // Check if there's a menu assigned to the 'primary' location. ?>

  <nav <?php hybrid_attr('menu', 'primary'); ?>>

    <h3 id="menu-primary-title" class="menu-toggle">
      <button><?php _ex('Menu', 'nav menu title', 'starsailor'); ?></button>
    </h3><!-- .menu-toggle -->

    <?php
      wp_nav_menu(
        [
          'theme_location'  => 'primary',
          'container'       => '',
          'menu_id'         => 'menu-primary-items',
          'menu_class'      => 'menu-items',
          'fallback_cb'     => '',
          'items_wrap'      => '<div class="wrap"><ul id="%s" class="%s">%s</ul></div>'
        ]
      );
    ?>

  </nav><!-- #menu-primary -->

<?php endif; // End check for menu. ?>
