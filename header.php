<?php

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo( 'name' )?> | <?php bloginfo( 'description' )?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class='branding'>
  <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );
				the_custom_logo();
				?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$_s_description = get_bloginfo( 'description', 'display' );
			if ( $_s_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>    
  </div>
    <span class="material-icons" onclick="toggleHidden()">
      menu
    </span>
  </header>
  <nav id='main-nav' class="hidden">

  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

    <!-- <a href="#welcome" onclick="toggleHidden()" class="nav-item">Welcome</a>
    <a href="#services" onclick="toggleHidden()" class="nav-item">Services</a>
    <a href="#support"  onclick="toggleHidden()" class="nav-item">Support</a> -->
  </nav>