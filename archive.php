<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gl
 */

get_header();
?>
			
	<div id="primary" class="content-area archive_zone">
		<main id="main" class="site-main archive_zone_wrapper">
		

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
	<div class="archive_column">
	
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archives' );

			endwhile;

			gl_pagination(); 

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
<div class="archive_tag_column">
	<?php
                get_sidebar(); ?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	

<?php

get_footer();
