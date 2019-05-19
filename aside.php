<div class="categoryBloc">
  <div class="categoryContentWrapper">
	<div class="popular grid">
	  <span class="asside__text">популярные</span>
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
	<div class="headings grid">
	  <span class="asside__text">рубрики</span>
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
	<div class="recomended grid">
	  <span class="asside__text">рекомендуемые</span>
	  <?php
		$posts = get_posts(array(
		  'category_name' => 'rekomenduemye'
		));
		foreach ($posts as $post) {
		  setup_postdata($post);
		  ?>
		  <div class="recomendedBloc">
			<div class="recomended__img"><?php echo get_the_post_thumbnail(); ?></div>
			<h5><?php the_title(); ?></h5>
			<div class="content__wrap">
			  <p class="content__small">
				<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 150, '...'); ?>
			  </p>
			  </div>
			<a href="<?php the_permalink(); ?>" class="more">
			  <span>подробнее...</span>
			</a>
		  </div>

		  <?php
		}
		wp_reset_postdata();
	  ?>
	</div>
  </div>
</div>
<div class="pagination">

  <?php
	all4site_pagination();
	echo paginate_links(array(
	  'total' => $the_query->max_num_pages,
	  'prev_text' => '<img src="/wp-content/themes/all4site/img/left.svg" alt=""/>',
	  'next_text' => '<img src="/wp-content/themes/all4site/img/right.svg" alt=""/>'
	));

  ?>
</div>