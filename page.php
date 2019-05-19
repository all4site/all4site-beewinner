<?php

get_header();
?>

<?php
  while ( have_posts() ) :
	the_post();?>
	  <div class="wrapper">

		<div class="price">
		  <h2><?php the_title(); ?></h2>
		  <?php the_content(); ?>
		</div>

	  </div>
  <?php
	// the_post_navigation();

  endwhile; // End of the loop.
?>



<?php
get_footer();