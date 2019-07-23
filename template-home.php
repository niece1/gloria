<?php
/*Template name: Home
*/
?>

<body>
	<?php get_header(); ?>

	<!--Slider-->

	<div class="slider1">
		<?php
		$args = array(
			'post_type'   => 'slider',
			'suppress_filters' => true
		);
		$myposts = get_posts( $args );
		foreach( $myposts as $post ){ setup_postdata($post);
			?>
			<div class="item">
				<div class="img-fill">
					<?php the_post_thumbnail(); ?>
					<div class="info">
						<div>
							<?php if(get_post_meta($post->ID, 'ale_slidertitle1', true)){ ?>
								<h3><?php echo esc_attr(get_post_meta($post->ID, 'ale_slidertitle1', true)); ?></h3>
							<?php } ?>

							<?php if(get_post_meta($post->ID, 'ale_slidertitle2', true)){ ?>
								<h5><?php echo esc_attr(get_post_meta($post->ID, 'ale_slidertitle2', true)); ?></h5>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>	 
			<?php
		}
		wp_reset_postdata();
		?>	
	</div>
	<h2 id="arrow_slick_left"><i class="fas fa-angle-left"></i></h2>
	<h2><i id="arrow_slick_right" class="fas fa-angle-right"></i></h2>

	<!--About-->

	<section class="aboutintro">
		<div class="wrapperintro">

			<?php if(get_post_meta($post->ID, 'ale_titleservice', true)){ ?>
				<h2><?php echo esc_attr(get_post_meta($post->ID, 'ale_titleservice', true)); ?></h2>
			<?php } ?>

			<h3>&#9632;</h3>

			<?php if(get_post_meta($post->ID, 'ale_descriptionservice', true)){ ?>
				<p><?php echo esc_attr(get_post_meta($post->ID, 'ale_descriptionservice', true)); ?></p>
			<?php } ?>

		</div>
	</section>


	<section class="about">
		<div class="aboutwrapper">
			
			<div class="squareshoot">
				<i class="fas fa-camera"></i>

				<?php if(get_post_meta($post->ID, 'ale_titleservice1', true)){ ?>
					<h5><?php echo esc_attr(get_post_meta($post->ID, 'ale_titleservice1', true)); ?></h5>
				<?php } ?>

				<?php if(get_post_meta($post->ID, 'ale_descriptionservice1', true)){ ?>
					<p><?php echo esc_attr(get_post_meta($post->ID, 'ale_descriptionservice1', true)); ?></p>
				<?php } ?>

			</div>
			<div class="squareshoot">
				<i class="fas fa-images"></i>

				
				<?php if(get_post_meta($post->ID, 'ale_titleservice2', true)){ ?>
					<h5><?php echo esc_attr(get_post_meta($post->ID, 'ale_titleservice2', true)); ?></h5>
				<?php } ?>

				<?php if(get_post_meta($post->ID, 'ale_descriptionservice2', true)){ ?>
					<p><?php echo esc_attr(get_post_meta($post->ID, 'ale_descriptionservice2', true)); ?></p>
				<?php } ?>

			</div>
			<div class="squareshoot">
				<i class="fas fa-print"></i>

				<?php if(get_post_meta($post->ID, 'ale_titleservice3', true)){ ?>
					<h5><?php echo esc_attr(get_post_meta($post->ID, 'ale_titleservice3', true)); ?></h5>
				<?php } ?>

				<?php if(get_post_meta($post->ID, 'ale_descriptionservice3', true)){ ?>
					<p><?php echo esc_attr(get_post_meta($post->ID, 'ale_descriptionservice3', true)); ?></p>
				<?php } ?>

			</div>
		</div>
	</section>

	<!--Gallery-->

	<section class="gallery">
		<div class="gallery-headings">

			<?php if(get_post_meta($post->ID, 'ale_titlegallery', true)){ ?>
				<h2><?php echo esc_attr(get_post_meta($post->ID, 'ale_titlegallery', true)); ?></h2>
			<?php } ?>

			<h3>&#9632;</h3>

			<?php if(get_post_meta($post->ID, 'ale_descriptiongallery', true)){ ?>
				<p><?php echo esc_attr(get_post_meta($post->ID, 'ale_descriptiongallery', true)); ?></p>
			<?php } ?>

		</div>
		<div class="wrappergallery">
			
			<div class="column">
				<?php if(get_post_meta($post->ID, 'ale_fileupload1', true)){ ?>
					<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload1', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload1', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload1', true)); ?>"><?php } ?></a><?php } ?>
					
					<?php if(get_post_meta($post->ID, 'ale_fileupload2', true)){ ?>
						<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload2', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload2', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload2', true)); ?>"><?php } ?></a><?php } ?>
					</div>
					<div class="column">
						<?php if(get_post_meta($post->ID, 'ale_fileupload3', true)){ ?>
							<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload3', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload3', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload3', true)); ?>"><?php } ?></a><?php } ?>

							<?php if(get_post_meta($post->ID, 'ale_fileupload4', true)){ ?>
								<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload4', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload4', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload4', true)); ?>"><?php } ?></a><?php } ?>

								<?php if(get_post_meta($post->ID, 'ale_fileupload5', true)){ ?>
									<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload5', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload5', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload5', true)); ?>"><?php } ?></a><?php } ?>
								</div>
								<div class="column">
									<?php if(get_post_meta($post->ID, 'ale_fileupload6', true)){ ?>
										<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload6', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload6', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload6', true)); ?>"><?php } ?></a><?php } ?>

										<?php if(get_post_meta($post->ID, 'ale_fileupload7', true)){ ?>
											<a href="<?php echo esc_url(get_post_meta($post->ID, 'ale_fileupload7', true)); ?>" class="popupgallery" data-effect="mfp-zoom-in"><?php if(get_post_meta($post->ID, 'ale_fileupload7', true)){ ?><img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload7', true)); ?>"><?php } ?></a><?php } ?>
										</div>
										
									</div>
									
									<div class="gallery-headings">

										<?php if(get_post_meta($post->ID, 'ale_titleblog', true)){ ?>
											<h2><?php echo esc_attr(get_post_meta($post->ID, 'ale_titleblog', true)); ?></h2>
										<?php } ?>

										<h3>&#9632;</h3>

										<?php if(get_post_meta($post->ID, 'ale_descriptionblog', true)){ ?>
											<p><?php echo esc_attr(get_post_meta($post->ID, 'ale_descriptionblog', true)); ?></p>
										<?php } ?>

									</div>
									
									

								</section>

								<!--Blog-->

								<section class="blog">
									<div class="wrapperblog">
										<?php
										$args = array(
											'posts_per_page' => 2,
											'orderby' => 'rand',
											'post_type' => 'post',
											'suppress_filters' => true
										);
										$myposts = get_posts( $args );
										foreach( $myposts as $post ){ setup_postdata($post);
											?>
											<div class="bloginfo">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
												<h5><?php the_category(', '); ?></h5>
												<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
												<small><?php the_time('j F Y'); ?> Posted by : <?php the_author_posts_link(); ?></small>
											</div>
											<?php
										}
										wp_reset_postdata();
										?>
									</div>
								</section>
								
								<!--Afterblog-->

								<section class="afterblog">
								</section>

								<?php get_footer(); ?>



								
