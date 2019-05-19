 <div class="searchWrapper">
    <div class="hamburger hamburger--slider is-active">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
    <div class="search">
     <?php get_search_form(); ?>
    </div>
  </div>
			<div class="smallMenuWrapper">
				<div class="smallMenu">
					<div class="text"><span>menu</span></div>
					<div class="hamburger hamburger--slider">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
					<div class="smallMenuBox">
						<a href="<?php echo get_theme_mod(social_facebook);?>"><div class="fab fa-facebook-f z-depth-2"></div></a>
						<a href="<?php echo get_theme_mod(social_youtube);?>"><div class="fab fa-youtube z-depth-2"></div></a>
						<a href="<?php echo get_theme_mod(social_instagram);?>"><div class="fab fa-instagram z-depth-2"></div></a>
						<a href="#!"><div class="fas fa-search z-depth-2"></div></a>

					</div>
				</div>
			</div>
			<div class="smallMenuShow">
				<div class="smallMenuShowWrapper">
					<div class="hamburger hamburger--slider is-active">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div><span>menu</span>
					<?php wp_nav_menu(array(
					'menu'						=>	'Главное',
					'container'				=>	false,
					'menu_class'			=>	'grid',
					'menu_id'					=>	'',
				)); ?>

					<div class="smallMenuShowBox">
						<a class="circle" href="<?php echo get_theme_mod(social_facebook);?>">
							<div class="fab fa-facebook-f"></div>
						</a>
						<a class="circle" href="<?php echo get_theme_mod(social_youtube);?>">
							<div class="fab fa-youtube"></div>
						</a>
						<a class="circle" href="<?php echo get_theme_mod(social_instagram);?>">
							<div class="fab fa-instagram"></div>
						</a>
						<a class="circle" href="#!">
							<div class="fas fa-search"></div>
						</a>
					</div>
				</div>
			</div>
