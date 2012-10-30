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
      <ul>
        <li><a href="#">Bronte</a></li>
        <li><a href="#">Bronte</a></li>
        <li><a href="#">Bronte</a></li>
        <li><a href="#">Bronte</a></li>
      </ul>
    </div>
    <div class="left-bottom">
	    <?php
        dynamic_sidebar("Sidebar Bottom");
      ?>
    </div>
  </div>
  <div class="part-right">
      <div class="gallery-pro">
        <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/16.jpg');">
          <figure>
            <div class="slide1">
              <div class="train1">
                <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/16.jpg');"></div>
                <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/19.jpg');"></div>  
                <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/18.jpg');"></div>  
                <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/20.jpg');"></div>  
              </div>
            </div>
          </figure>
        </div>
        <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/20.jpg');">
          <figure>
            <div class="slide1">
              <div class="train1">
                <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/16.jpg');"></div>
                <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/19.jpg');"></div>  
                <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/18.jpg');"></div>  
                <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/20.jpg');"></div>  
              </div>
              <div class="left-pic"></div>
              <div class="right-pic"></div>
            </div>
          </figure>
        </div>
        <div style="background-image:url('<?php bloginfo("template_url"); ?>/images/17.jpg');">
        </div>
      </div>
  </div>
</div>
<?php 
  get_template_part("footer");
?>
