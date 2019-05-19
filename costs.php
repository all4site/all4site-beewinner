<?php
// Template name: costs
// Template post type: page
get_header();
?>
<div class="wrapper">
	<div class="price">
<!--		<h2>-->
<!--			--><?php //echo CFS()->get('costs_top'); ?>
<!--		</h2>-->
<!--		<div class="priceTabel">-->
<!--			--><?php //$props = CFS()->get_field_info( 'costs' );?>
<!--			<span>-->
<!--				--><?php //echo $props['label']; ?><!--</span>-->
<!--			<span>-->
<!--				--><?php //echo CFS()->get('costs'); ?><!--</span>-->
<!--		</div>-->
		<div class="priceText">
			<h2>
				<?php the_title(); ?>
			</h2>

			<?php the_post(); the_content(); ?>
		</div>
	</div>
</div>
<!--<div class="priceApps">-->
<!--	<div class="wrapper">-->
<!--		<h5>приложения</h5>-->
<!--		<div class="priceAppsWrapper">-->
<!--		--><?php
//
//		$fields = CFS()->get('programs');
//		foreach($fields as $field) {
//			$link = $field['link_to_download'];
//			?>
<!--			<a href="--><?php	//echo $link['url'];?><!--" target="--><?php //echo $link['target'];?><!--" class="boxApps">-->
<!--				<div class="circle">-->
<!--					<span class="hide">скачать с официального сайта</span>-->
<!--					<span class="small">скачать</span>-->
<!--					<img src="--><?php //echo $field['img_of_programs'];?><!--" alt="" />-->
<!--				</div>-->
<!--			</a>-->
<!---->
<!--		--><?php //} ?>
<!--			</div>-->
<!--	</div>-->
<!--</div>-->
<?php
get_footer();