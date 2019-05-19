<?php

// template name: contacts
  get_header();
?>
<?php
  $phone_img = CFS()->get( 'phone_img' );
  $email_img = CFS()->get('email_img');
  $phone = CFS()->get( 'phone' );
  $email = CFS()->get( 'email' );
  ?>
  <div class="wrapper">
	<?php while ( have_posts() ) : the_post();?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<div class="contactsWrapper">
	  <div class="contactsInfo">
		<img src="<?php echo $phone_img; ?>" alt="">
		<?php foreach ($phone as $phones) ?>
		<span><?php echo $phones['phone_number']; ?></span>
		<span><?php echo $phones['name']; ?></span>
		<img src="<?php echo $email_img; ?>" alt="">
		<?php foreach ($email as $emailes) ?>
		  <span><?php echo $emailes['email_data']; ?></span>
		<?php  endwhile; ?>
	  </div>
	  <div class="calendar"></div>
	</div>
  </div>

<?php
  get_footer();

