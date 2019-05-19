<div class="accordeon blogAccordeon">
  <div class="topAccordeon">
	<h4>популярные</h4>
  </div>
  <div class="bottomAccordeon popular">
	<?php
	  $posts = get_posts(array(
		'numberposts' => 3,
		'meta_key' => 'views',
		'orderby' => 'meta_value_num',
		'exclude' => '63, 42'
	  ));
	  foreach ($posts as $post) {
		setup_postdata($post);
		?>

		<span>
			<a href="<?php the_permalink(); ?>"><?php $theTitle = esc_html(get_the_title()); echo mb_strimwidth($theTitle, 0, 20, '...'); ?></a>
		</span>
		<?php
	  }
	  wp_reset_postdata();
	?>
  </div>
  <div class="topAccordeon">
	<h4>рубрики</h4>
  </div>
  <div class="bottomAccordeon headings">
	<?php
	  $categories = get_categories(array(
		'orderby' => 'name',
		'order' => 'DESC',
		'include' => '4,3,7,6,5',
	  ));
	  foreach ($categories as $category) {
		?>
		<span><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></span>
		<span class="count"><?php echo $category->category_count; ?></span>
		<?php
	  }
	?>
  </div>
  <div class="topAccordeon">
	<h4>рекомендуемые</h4>
  </div>
  <div class="bottomAccordeon recomended">
	<?php
	  $posts = get_posts(array(
		'category_name' => 'rekomenduemye'
	  ));
	  foreach ($posts as $post) {
		setup_postdata($post);
		?>
		<div class="recomendedBloc">
		  <?php echo get_the_post_thumbnail(); ?>
		  <p><?php the_title(); ?></p>
		  <span><?php $content = get_the_content();
			  echo mb_strimwidth($content, 0, 150, '...'); ?></span>
		  <a href="<?php the_permalink(); ?>" class="more"><span>подробнее...</span></a>
		</div>

	  <?php }
	  wp_reset_postdata(); ?>

  </div>
</div>