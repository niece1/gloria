<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gl
 */

get_header();
?>
<!--Breadcrumbs-->

	<section class="breadcrumbs">
		<div class="wrapperbreadcrumbs">
			<h3><?php gl_the_breadcrumb(); ?></h3>
		</div>
	</section>

	<div id="primary" class="content-area search_zone">
		<main id="main" class="site-main search_zone_wrapper">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gl' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try to search again?', 'gl' ); ?></p>

					<?php
					get_search_form();

					
					?>

					

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<!--Request-->

<section class="request" data-type="background" style="background: url('<?php echo get_post_meta('85', 'ale_background', true); ?>'); background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
	
		<div class="requestbox">
			<h2><?php echo get_post_meta('85', 'ale_titlerequest', true); ?></h2>
			<p><?php echo get_post_meta('85', 'ale_descriptionrequest', true); ?></p>
			<h3>&#9632;</h3>
			<a href="http://gl.io/contacts/"><button><?php echo get_post_meta('85', 'ale_button', true); ?></button></a>
		</div>
	
</section>

<?php
get_footer();
