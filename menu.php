<div class="logo"> <img src="<?php bloginfo("template_url"); ?>/images/logo.png"  /> </div>
    <ul>
        <?php
          wp_nav_menu(array(
            'theme_location'  => 'mainmenu',
            'container'       => false, 
            'container_class' => '', 
            'menu_class'      => '', 
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
          ));
    ?>
    </ul>
    <div class="clear"></div>
  </div>
</div>