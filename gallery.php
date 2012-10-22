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
        <?php
            while(have_posts()){
                the_post();
                $meta = get_post_custom();
        ?>
            <article>
                <figure><?php 
                    the_content();
                ?></figure>
            </article>
    <?php
        };
    ?>
        </div>
</div>
<div id="fade" class="black_overlay">
</div> 
<?php 
  get_template_part("footer");
?>