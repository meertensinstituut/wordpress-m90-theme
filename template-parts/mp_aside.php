<div class="mpSidebar">
  <div class="mpBrand">
    <img src="<?php bloginfo('template_url'); ?>/images/logo-meertens90.png" alt="" class="mpLogo">
  </div>

  <nav class="mpNav">

    <?php
      $cleanMenu = wp_nav_menu( array(
        'menu_id'        => 'primary-menu',
        'echo' => false,
        'depth'=> 1,
      ) );
      echo strip_tags($cleanMenu, "<a>");
      //echo $cleanMenu;

    ?>
  </nav>


  <div>
  </div>
</div>
