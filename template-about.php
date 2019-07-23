<?php
/*Template name: About
*/
?>


<body>

	<?php get_header(); ?>

	

	<!--About Section-->

	<section class="about-text">
		<div class="wrapper-about-text">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				<?php
			endwhile;
			?>
		</div>
	</section>



	<!--Parallax-->

	<section class="parallax">
		<div class="bg1">

			<?php if(get_post_meta($post->ID, 'ale_fileupload', true)){ ?>
				<img src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_fileupload', true)); ?>" >
			<?php } ?>

		</div>

	</section>

	<!--About Services-->

	<section class="services">
		<div class="wrapper_services">
			<div class="service_box">
				<i class="fas fa-camera"></i>

				<?php if(get_post_meta($post->ID, 'ale_titleservice1', true)){ ?>
					<h5><?php echo get_post_meta($post->ID, 'ale_titleservice1', true); ?></h5>
				<?php } ?>

				<?php if(get_post_meta($post->ID, 'ale_descriptionservice1', true)){ ?>
					<p><?php echo get_post_meta($post->ID, 'ale_descriptionservice1', true); ?></p>
				<?php } ?>

			</div>
			<div class="service_box">
				<i class="fas fa-images"></i>

				<?php if(get_post_meta($post->ID, 'ale_titleservice2', true)){ ?>
					<h5><?php echo get_post_meta($post->ID, 'ale_titleservice2', true); ?></h5>
				<?php } ?>

				<?php if(get_post_meta($post->ID, 'ale_descriptionservice2', true)){ ?>
					<p><?php echo get_post_meta($post->ID, 'ale_descriptionservice2', true); ?></p>
				<?php } ?>

			</div>
			<div class="service_box">
				<i class="fas fa-print"></i>

				<?php if(get_post_meta($post->ID, 'ale_titleservice3', true)){ ?>
					<h5><?php echo get_post_meta($post->ID, 'ale_titleservice3', true); ?></h5>
				<?php } ?>

				<?php if(get_post_meta($post->ID, 'ale_descriptionservice3', true)){ ?>
					<p><?php echo get_post_meta($post->ID, 'ale_descriptionservice3', true); ?></p>
				<?php } ?>

			</div>
		</div>
	</section>



	<?php get_footer(); ?>