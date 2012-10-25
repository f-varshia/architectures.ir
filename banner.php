<div class="container-banner">
<div class="banner">
    <div class="tabs" id="tabs">
	<?php
	if( have_posts() ) {
		the_post();
		$meta = get_post_custom();
	 	the_post_thumbnail();
	?>
	<?php
	$uploads = wp_upload_dir(); 
	//$upload_dir= ( $uploads['baseurl'] . $uploads['subdir']);//http://localhost/wordpress/wp-content/uploads/2012/10
	$upload_dir= $uploads['baseurl'] ;
	if(count($meta['img'])>0){
		foreach ($meta['img'] as $img_id) {
			$img_large = wp_get_attachment_image($img_id,'large'); //default: thumbnail 
			$img_src = wp_get_attachment_image_src($img_id,'large'); // array
			$img_name= end( explode( '/' , $img_src[0] ) );//name of image with jpg
 			$img_nam= explode( '.' , $img_name );//name of image without jpg
    		if (strrpos($img_nam[0], "c") === false) {//just gray image from attachment
				$img_color=$upload_dir.'/'.$img_nam[0].'-c.jpg';//colored image of each gray "aksae rangi marbot be har aks ba hamon esme faghat "-c" akharesh dare :D "
	 		    echo "<a href='$img_larg[0]'><div><img src='$img_color'/><figure>$img_large</figure></div></a>"; // $img_larg[0] -> image url
    		}
			}
		}
	}

?>
    </div>
</div>
</div>