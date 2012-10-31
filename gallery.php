<?php
    /*
        Template Name: Gallery
    */
  get_template_part("header") ;
  get_template_part("menu");
  get_template_part("submenu");
?>
<div class="gallery-main">
<div class="wall-1"></div>
<div class="wall-2"></div>
  <div class="page">
    <div id="scroll">
    <figure>
      <?php
        if( have_posts() ) {
          the_post();
          $meta = get_post_custom();
          $uploads = wp_upload_dir(); 
          //$upload_dir= ( $uploads['baseurl'] . $uploads['subdir']);//http://localhost/wordpress/wp-content/uploads/2012/10
          $upload_dir= $uploads['baseurl'] ;
          if(count($meta['img'])>0){
            foreach ($meta['img'] as $img_id) {
              $img_large = wp_get_attachment_image($img_id,'large'); //default: thumbnail 
              $img_src = wp_get_attachment_image_src($img_id,'large'); // array
              $img_name= end( explode( '/' , $img_src[0] ) );//name of image with jpg
              $img_nam= explode( '.' , $img_name );//name of image without jpg
                if (strrpos($img_nam[0], "co") === false) {//just gray image from attachment
                $img_color=$upload_dir.'/'.$img_nam[0].'-co.jpg';//colored image of each gray 
                  echo "<div class='frame'><div class='frame-pic'><a href='$img_color' rel='lightbox[group1]'>$img_large</a></div></div>";
                }
              }
            }
          }
      ?>
    </figure>
    </div>
  </div>
</div>
<div id="fade" class="black_overlay"></div> 
<?php 
  get_template_part("footer");
?>