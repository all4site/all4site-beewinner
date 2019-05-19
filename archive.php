<?php
get_header();
?>
<div class="wrapper">
	<div class="blogPage">
		<div class="blogContent">
			<?php
				/* Start the Loop */
				while ( have_posts() ) :the_post();
				if( has_post_thumbnail() ) {}
					else {echo '<img src="'.get_template_directory_uri().'/img/noImg.png"/>';}?>
				<div class="blogInside">
					<?php the_post_thumbnail(array(900,600));?>
					<h4><?php the_title();?></h4>
					<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, '...');?></p>
					<a href="<?php the_permalink();?>" class="more"><span>подробнее...</span></a>
				</div>
			<?php endwhile;?>
		</div>
		<?php get_template_part('smallAside');?>
		<?php get_template_part('aside');?>
	</div>
</div>
<?php
get_footer();