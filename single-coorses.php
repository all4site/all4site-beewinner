<?php

  get_header();
?>
<?php while (have_posts()) : the_post(); ?>
  <div class="wrapper">
	<div class="coursesWrapper">
	  <div class="courses">



		<div class="trainings__img">
		  <h2 class="thumbnail__text"><?php the_title(); ?></h2>
		  <div class="thumbnail__cover"><?php the_post_thumbnail(); ?></div>
		</div>

		<div class="trainings__content">

			<?php the_content(); ?>

		</div>
		<div class="accordeon">
		  <?php

			$fields = CFS()->get('accordeon');
			foreach ($fields as $field) { ?>

			  <div class="topAccordeon active">
				<span class="accordeon__header"><?php echo $field['vopros']; ?></span>
			  </div>

			  <div class="bottomAccordeon">
				<?php echo $field['otvet']; ?>
			  </div>

			<?php } ?>
		</div>
		<div class="constsOfTrenindColor">
		  <div class="wrapper">
			<div class="costsOfTrening">
			  <div class="costsOfTreningWrapper">
				<h2>цена тренинга</h2>
				<div class="hr"></div>
				<span><?php echo CFS()->get('costs'); ?></span>
				<div class="hr"></div>
				<a href="#!" class="btn courses__btn">купить</a>
				<div class="text-input"></div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="courses__pagination">
	  <div class="courses__pagination__wrap">

		<?php
		  $next = get_next_post_link( '%link', 'следующий курс', true );
		  $prev = get_previous_post_link( '%link', 'предыдущий курс', true );
		  ?>
		<?php echo str_replace( '<a ', '<a class="courses_pagination__link" ', $prev ); ?>
		<?php echo str_replace( '<a ', '<a class="courses_pagination__link" ', $next ); ?>
	  </div>
	</div>
  </div>
<!--  <div class="constsOfTrenindColor">-->
<!--	<div class="wrapper">-->
<!--	  <div class="costsOfTrening">-->
<!--		<div class="costsOfTreningWrapper">-->
<!--		  <div class="icon"><img src="/wp-content/themes/all4site/img/dollar-coins.svg" alt=""/></div>-->
<!--		  <h2>цена тренинга</h2>-->
<!--		  <div class="hr"></div>-->
<!--		  <span>--><?php //echo CFS()->get('costs'); ?><!--</span>-->
<!--		  <div class="hr"></div>-->
<!--		  <a href="#!" class="btn">купить</a>-->
<!--		  <div class="text-input"></div>-->
<!--		</div>-->
<!--	  </div>-->
<!--	</div>-->
<!--  </div>-->

<?php endwhile; ?>
<?php
  get_footer('courses');