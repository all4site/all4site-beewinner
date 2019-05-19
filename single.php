<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package all4site
 */

get_header();
?>
			<?php
		while ( have_posts() ) :
			the_post();?>
		<div class="wrapper">
    <div class="singleArticleWrapper">
<?php require get_template_directory(). '/smallAside.php';?>

      <div class="sinleArticle">
			<?php
			if( has_post_thumbnail() ) {
					}
					else {
						echo '<img src="'.get_template_directory_uri().'/img/noImg.png" />';
					}
					?>
		<div class="single_article__img"><?php echo get_the_post_thumbnail(); ?></div>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
<?php require get_template_directory(). '/aside.php';?>

    </div>
  </div>
<?php
			// the_post_navigation();

		endwhile; // End of the loop.
		?>


<?php
get_footer();
