<?php

// template name: blog
  get_header();

?>
  <div class="wrapper">
	<div class="blogPage">
	  <?php require get_template_directory() . '/smallAside.php'; ?>

	  <div class="blogContent">
		<?php

		  $currentPage = get_query_var('paged');
		  $postperpage = 3;

		  $the_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => $postperpage,
			'paged' => $currentPage,
			'cat' => array('-2, -8')

		  ));
		  while ($the_query->have_posts()): $the_query->the_post(); ?>
			<?php if (has_post_thumbnail()) {
			} else {
			  echo '<img src="' . get_template_directory_uri() . '/img/noImg.png" />';
			}
			?>
			<div class="blogInside">
			  <?php the_post_thumbnail(); ?>
			  <h4><?php the_title(); ?></h4>
			  <p><?php $content = get_the_content();
				  echo mb_strimwidth($content, 0, 400, '...'); ?></p>
			  <a href="<?php the_permalink(); ?>" class="more"><span>подробнее...</span></a>
			</div>
			<?php wp_reset_postdata();endwhile; ?>
	  </div>


	  <?php require get_template_directory() . '/aside.php'; ?>
	</div>
  </div>
<?php
  get_footer();