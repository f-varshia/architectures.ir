<?php
    /*
        Template Name: Project
    */
  get_template_part("header") ;
  get_template_part("menu");
  get_template_part("submenu");
  get_template_part("sub","menu");
?>
<div class="project">
  <div class="part-left">
    <div class="left-top">
        <?php
            wp_nav_menu(array(
            'theme_location'  => 'pro-menu',
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
    </div>
    <div class="left-bottom">
      <?php
        dynamic_sidebar("Sidebar Bottom");
      ?>
    </div>
  </div>
  <div class="part-right">
      <div class="gallery-pro">
        <div><?php the_post_thumbnail(); ?>
          <figure>
            <div class="slide1">
              <div class="train1">
                <?php
                  the_post();
                  $meta = get_post_custom();
                  if(count($meta['img'])>0){
                  foreach ($meta['img'] as $img_id) {
                    $img = wp_get_attachment_image($img_id,'large'); 
                    echo "<div>$img</div>";
                  }
                  }
                ?>
              </div>
              <div class="left-pic"></div>
              <div class="right-pic"></div>
            </div>
          </figure>
        </div>
      </div>
  </div>
</div>
<?php 
  get_template_part("footer");
?>
