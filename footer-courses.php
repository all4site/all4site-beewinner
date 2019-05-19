<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package all4site
 */

?>
<footer class="footer">
  <div class="wrapper">

	<div class="footer_wrap">
	  <div class="footer_top">
		<div class="footer_menu">
		  <span class="orange">Menu</span>
		  <div class="footer_menu__inner">
			<?php wp_nav_menu(array(
			  'theme_location'  => 'menu_bottom',
			  'menu'						=>	'Нижнее меню',
			  'container'				=>	false,
			  'menu_class'			=>	'menu_bottom',
			  'menu_id'					=>	'',
			)); ?>
		  </div>
		</div>
		<div class="footer_category">
		  <span class="orange">рубрики</span>
		  <?php
			$categories = get_categories(array(
			  'orderby' => 'name',
			  'order' => 'DESC',
			  'include' => '4,3,7,6,5',
			));
			foreach ($categories as $category) {
			  ?>
			  <span><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></span>
			  <?php
			}
		  ?>
		</div>
		<div class="footer_contacts">
		  <span class="orange">контакты</span>
		  <div class="phone__icon"></div>
		  <span>044 000 00 00</span>
		  <div class="email__icon"></div>
		  <span>asdasd@asdas.asdasd</span>
		</div>
		<div class="footer_instagram">
		  <span class="orange">instagram</span>
		  <div class="instagram__img">
			<?php echo do_shortcode('[insta-gallery id="1"]'); ?>
		  </div>
		</div>
	  </div>

	  <div class="footer_hr"></div>

	  <div class="footer_gift">
		<div class="footer_gift__text">
		  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate delectus facere iusto molestiae mollitia odio recusandae ut. Neque, omnis.</span>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="765" title="gift_footer"]'); ?>
	  </div>

	  <div class="footer_hr"></div>
	  <div class="footer_copiright">&copy; 2019 Все права защищены</div>

	</div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
