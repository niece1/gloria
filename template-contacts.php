<?php
/*Template name: Contacts
*/
?>


<body>

<?php get_header(); ?>

	

<!--Contacts Section-->

<section class="contacts">

	<?php if(wp_get_document_title()){ ?>
	<h1><?php echo esc_attr(wp_get_document_title()); ?></h1>
	<?php } ?>

	<div class="wrappercontacts">

		<div class="contact_inputs">
			
			<?php if(do_shortcode('[contact-form-7 id="8" title="Contact form 1"]')){ ?>
			<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>
			<?php } ?>

		   </div>
		<div class="contact_text">

            <?php if(get_post_meta($post->ID, 'ale_title', true)){ ?>
            <h2><?php echo esc_attr(get_post_meta($post->ID, 'ale_title', true)); ?></h2>
            <?php } ?>

            <?php if(get_post_meta($post->ID, 'ale_description', true)){ ?>
			<p id="grey"><?php echo esc_attr(get_post_meta($post->ID, 'ale_description', true)); ?></p>
            <?php } ?>

            <?php if(get_post_meta($post->ID, 'ale_address', true)){ ?>
			<p><?php echo esc_attr(get_post_meta($post->ID, 'ale_address', true)); ?></p>
            <?php } ?>

			<?php if(get_post_meta($post->ID, 'ale_phone', true)){ ?>
			<p><?php echo esc_attr(get_post_meta($post->ID, 'ale_phone', true)); ?></p>
		    <?php } ?>

		</div>
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

	<?php get_footer(); ?>

  
