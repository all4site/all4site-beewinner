<?php

//  template name: home


  get_header(home);
?>

<?php get_template_part('menu-home-page'); ?>
  <div class="logoAbout grid">
	<img src="<?php echo get_theme_mod(header_logo_about); ?>" alt=""/>

  </div>
  <div class="infoAbout grid">
	<span><?php echo get_theme_mod(top_header_small_text); ?></span>
	<span><?php echo get_theme_mod(top_header_phone); ?></span>
	<span><?php echo get_theme_mod(top_header_email); ?></span>
  </div>
  <div class="textAbout grid">
	<div class="textAboutBlock">
	  <div class="fas fa-spinner fa-spin"></div>
	  <h4><?php echo get_theme_mod(top_header_big_text_one); ?></h4>
	</div>
	<div class="textAboutBlock">
	  <div class="fas fa-spinner fa-spin"></div>
	  <h4><?php echo get_theme_mod(top_header_big_text_two); ?></h4>
	</div>
	<div class="textAboutBlock">
	  <div class="fas fa-spinner fa-spin"></div>
	  <h4><?php echo get_theme_mod(top_header_big_text_tree); ?></h4>
	</div>
  </div>
  </div>
  </div>
  <div class="fullWelcome">
	<div class="wrapper">
	  <div class="welcome grid">
		<?php
		  global $post;
		  $args = array('category_name' => 'home-top');
		  $myposts = get_posts($args);
		  foreach ($myposts

		  as $post) {
		  setup_postdata($post);
		?>
		<div class="imgWelcome"><?php the_post_thumbnail(); ?></div>
		<div class="textWelcome">
		  <h2><?php the_title(); ?></h2>
		  <?php the_content(); ?>
		  <?php
			}
			wp_reset_postdata();
		  ?>
		</div>
	  </div>
	</div>
  </div>
  <div class="wrapper">

	<div class="blog grid">
	  <a href="#!" class="item grid"><h4>blog</h4></a>
	  <?php
		$categories = get_categories(array(
		  'orderby' => 'name',
		  'order' => 'DESC',
		  'include' => '4,3,7,6,5',
		));
		foreach ($categories as $category) {
		  ?>
		  <a class="item grid z-depth-2" href="<?php echo get_category_link($category->term_id); ?>">
			<h4><?php echo $category->name; ?></h4></a>
		  <?php
		}
	  ?>
	</div>

	<div class="aboutProgect grid">
	  <?php
		global $post;
		$args = array('category_name' => 'home-about-progect');
		$myposts = get_posts($args);
		foreach ($myposts as $post) {
		  setup_postdata($post);
		  ?>
		  <h2><?php the_title(); ?></h2>

		  <?php the_excerpt(); ?>
		  <a class="more" href="<?php the_permalink(); ?>"><span>подробнее...</span></a>

		  <?php
		}
		wp_reset_postdata();
	  ?>
	</div>
	<?php get_template_part('template-parts/gift'); ?>
  </div>
  <div class="fullImg">
	<span><?php echo get_theme_mod(header_main_justdoit) ?></span><br/><span><?php echo get_theme_mod(header_main_bewinner) ?></span>
  </div>

  <div class="wrapper">
  <h2>тренинги</h2>
  <div class="trenings grid">
	<?php
	  $posts = get_posts(array(
		'category_name' => 'kursy',
		'post_type'		=> 'any',
		'numberposts'	=> 3
	  ));
	  foreach ($posts as $post) { setup_postdata($post); ?>

	<div class="trenings_box grid z-depth-1">
	<div class="treninds_title">
	  <div class="trenings_hr"></div>
	  <div class="treninds_text"><span>трениг</span>
		<h4><?php the_title(); ?></h4></div>
	  <div class="trenings_hr"></div>
	</div>
	<div class="treninds_img">
	  <?php the_post_thumbnail('large'); ?>
	</div>
	<a href="<?php the_permalink() ?>" class="btn trenings__btn">подробнее</a>
	</div>
	<?php } wp_reset_postdata();?>
	</div>
	</div>
	<?php get_footer(); ?>