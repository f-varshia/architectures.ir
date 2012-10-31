<?php
    /*
        Template Name: Gallery
    */
  get_template_part("header") ;
  get_template_part("menu");
  get_template_part("submenu");
?>
<div class="gallery">
<div class="wall-1"></div>
<div class="wall-2"></div>
    <div class="page">
        <div id="scroll">
        
        <figure><?php
    $a='#';
                  the_post();
                  $meta = get_post_custom();
                  if(count($meta['img'])>0){
                  foreach ($meta['img'] as $img_id) {
                    $img = wp_get_attachment_image($img_id,'large'); 
                    echo "<div class='frame'><div class='frame-pic'><a href='$a' rel='lightbox[group1]'>$img</a></div></div>";
                  }
                  }
                ?></figure>
        </div>
    </div>
<div id="fade" class="black_overlay">
</div> 
<?php 
  get_template_part("footer");
?>