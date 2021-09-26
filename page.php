<?php
/**
 * Displays single pages
 *  
 * @package iwriter
 */

get_header();
?>
  <main class="content container">

		<div class='main-content'>
			<?php
		if
 ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );
				?> <h2><?php the_title(); ?> </h2><?php
				the_content();
			endwhile;

			the_posts_navigation();

		else :

			// get_template_part( 'template-parts/content', 'none' );
    _e( 'Sorry, no posts matched your criteria.', 'iwriter' ); 
		endif; ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar( 'sidebar-1' ); ?>
	</div>
  </main>
		<?php
		get_footer( );
		?>
