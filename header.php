<?php
  /**
   * The header for our theme
   *
   * This is the template that displays all of the <head> section and everything up until <div id="content">
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package all4site
   */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">


  <?php wp_head(); ?>

</head>
<body>
<div class="logoTop grid">
  <a href="<?php echo home_url(); ?>">
	<img src="<?php echo get_theme_mod(header_logo_all); ?>" alt=""/>
  </a>
  <span class="logo_top__text">life & family coaching</span>
</div>
<?php get_template_part('menu'); ?>
