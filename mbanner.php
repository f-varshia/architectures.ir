<?php
	if( have_posts() ) {
		the_post();
		$meta = get_post_custom();
	 	the_post_thumbnail();
?>
		<article>
			<?php
			if(count($meta['img'])>0){
					echo "<diV class='didi'>";
					foreach ($meta['img'] as $img_id) {
						$img_small = wp_get_attachment_image($img_id,'thumbnail'); // default: thumbnail
						$img_larg = wp_get_attachment_image_src($img_id,'large'); // array
						echo "<a href='$img_larg[0]'>$img_small</a>"; // $img_larg[0] -> image url
					}
					echo "</div>";
				}
			?>
		</article>
<?php
	}
?>