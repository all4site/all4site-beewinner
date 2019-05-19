<?php
function categoryAdd() {
	$posttype = get_post_type();
	$postId 	= get_the_ID();
	if($posttype == "coorses"){
		wp_set_post_categories($postId, array(14), true);
	}
}

?>