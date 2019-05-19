<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package all4site
 */

get_header();
?>
	<div class="wrapper">

		<?php if ( have_posts() ) : ?>

				<h1 class="searchPageh1">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for:%s', 'all4site' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
		<div class="searchPage grid">
			<?php
			while ( have_posts() ) :the_post();?>

				<?php the_post_thumbnail();?>
				<div class="searchContent">
				<h4><?php the_title(); ?></h4>
				<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, '...');?>
				<a href="<?php the_permalink();?>" class="more"><span>подробнее...</span></a>
				</div>

		<?php	endwhile;

			the_posts_navigation();?>

		</div>
		<?php else :?>
		<div class="nothing">
		<h1><?php esc_html_e( 'Nothing Found', 'all4site' ); ?></h1>
		<p>Вы искали:</p><div class="searchResult"><?php the_search_query();?></div>
		<p>Попробуйте другую поисковую фразу</p>
		</div>
		<?php endif;
		?>

	</div>

<?php
get_sidebar();
get_footer();
