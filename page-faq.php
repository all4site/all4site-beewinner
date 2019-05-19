<?php
// template name: faq
  get_header();
?>

  <div class="wrapper">
	<div class="faqWrapper">
	  <div class="faqText">
		<h2><?php the_title(); ?></h2>
	  </div>
	  <div class="accordeon">
		<?php

		  $fields = CFS()->get('faq');
		  foreach ($fields as $field) { ?>
			<div class="topAccordeon">
			  <span class="accordeon__header"><?php echo $field['vopros']; ?></span>
			</div>
			<div class="bottomAccordeon">
			  <p><?php echo $field['otvet']; ?></p>
			</div>
			<?php
		  }
		?>

	  </div>

	</div>
  </div>


<?php
  get_footer();

