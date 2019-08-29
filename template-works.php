<?php
/*Template name: Works
*/
?>


<body>

	<?php get_header(); ?>

	<!--Gallery-->

	<section class="gallery">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<h2 id="gallery_page_head"><?php the_title(); ?></h2>
			<?php
		endwhile;
		?>
		
		
		<div class="wrappergallery">
			
			<div class="column">
				<?php if(get_post_meta($post->ID, 'ale_fileupload11', true)){ ?>
					<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload11', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload11', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload11', true)); ?>"><?php } ?></a><?php } ?>

					<?php if(get_post_meta($post->ID, 'ale_fileupload12', true)){ ?>
						<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload12', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload12', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload12', true)); ?>"><?php } ?></a><?php } ?>
					</div>
					<div class="column">
						<?php if(get_post_meta($post->ID, 'ale_fileupload13', true)){ ?>
							<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload13', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload13', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload13', true)); ?>"><?php } ?></a><?php } ?>

							<?php if(get_post_meta($post->ID, 'ale_fileupload14', true)){ ?>
								<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload14', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload14', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload14', true)); ?>"><?php } ?></a><?php } ?>

								<?php if(get_post_meta($post->ID, 'ale_fileupload15', true)){ ?>
									<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload15', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload15', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload15', true)); ?>"><?php } ?></a><?php } ?>
								</div>
								<div class="column">
									<?php if(get_post_meta($post->ID, 'ale_fileupload16', true)){ ?>
										<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload16', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload16', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload16', true)); ?>"><?php } ?></a><?php } ?>

										<?php if(get_post_meta($post->ID, 'ale_fileupload17', true)){ ?>
											<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload17', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload17', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload17', true)); ?>"><?php } ?></a><?php } ?>
										</div>
										
									</div>
									
									

								</section>


								<?php get_footer(); ?>