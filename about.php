<?php
    /*
    Template Name: about
    */
    get_template_part("header") ;
    get_template_part("menu");
    get_template_part("submenu");
?>
<div class="aboutpage">
    <div class="main-about">
        <p class="title-about"><a href="#">Where it all started</a></p>
        <div class="aboutpage">
            <div class="about-left">
            <?php
                if( have_posts() ) {
                    the_post();
            ?>
            <article>
            <p><?php the_content(); ?></p>
            </article>
            <?php
                }
                dynamic_sidebar("Sidebar Left");
            ?>
            </div>
            
            <div class="about-right">
                <div class="img-about-first">
                    <?php 
                        the_post_thumbnail();
                    ?>
                </div>
                <div class='img-about-second'>
                    <?php
                        $meta = get_post_custom();
                        $img = wp_get_attachment_image($meta['img'],'thumbnail'); 
                        echo "$img";
                    ?>
                </div>
            </div>
            <div class="about-middle">
            <?php
                dynamic_sidebar("Sidebar Right");
            ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php 
get_template_part("footer");
?>
