<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gl
 */
global $gl_option;
?>

	</div><!-- #content -->

<!--Request-->
<?php if(!is_page_template('template-contacts.php')) { ?>
<?php if(get_post_meta('85', 'ale_background', true)){ ?>
<section class="request" data-type="background" style="background: url('<?php echo esc_attr(get_post_meta('85', 'ale_background', true)); ?>'); background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
    
        <div class="requestbox">
            <?php if(get_post_meta('85', 'ale_titlerequest', true)){ ?>
            <h2><?php echo esc_attr(get_post_meta('85', 'ale_titlerequest', true)); ?></h2>
             <?php } ?>

            <?php if(get_post_meta('85', 'ale_descriptionrequest', true)){ ?>
            <p><?php echo esc_attr(get_post_meta('85', 'ale_descriptionrequest', true)); ?></p>
            <?php } ?>
            <h3>&#9632;</h3>

            <?php if(get_post_meta('85', 'ale_titlerequest', true)){ ?>
            <a href="http://gl.io/contacts/"><button><?php echo esc_attr(get_post_meta('85', 'ale_button', true)); ?></button></a><?php } ?>
            </div>
    
</section>
<?php } ?>
<?php } ?>

	<!--Footer-->

<footer>
    <div class="footerwrapper">
    	<div class="logocolumn">
    		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></p>
    	</div>
    	<div class="menucolumn">
    		<ul>
    			<?php
            wp_nav_menu( array(
                'theme_location' => 'menu-2',
                'container'       => 'ul', 
                'container_class' => '',
                'menu_id'         => '',
                'menu_class'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ) );
            ?>
    		</ul>
    	</div>
    	<div class="contactcolumn">

            <?php if($gl_option['footer-phone']){ ?>
    		<p><?php echo esc_attr($gl_option['footer-phone']); ?></p>
            <?php } ?>
            
             <?php if($gl_option['footer-email']){ ?>
            <p><?php echo esc_attr($gl_option['footer-email']); ?></p>
            <?php } ?>

    	</div>
    	<div class="socialcolumn">
            <?php if($gl_option['social-title']){ ?>
    		 <p><?php echo esc_attr($gl_option['social-title']); ?></p>
             <?php } ?>

            <?php if($gl_option['social-facebook']){ ?>
    		<a href="<?php echo esc_url($gl_option['social-facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
            <?php } ?>
            
            <?php if($gl_option['social-youtube']){ ?>
    		<a href="<?php echo esc_url($gl_option['social-youtube']); ?>"><i class="fab fa-youtube"></i></a>
            <?php } ?>

            <?php if($gl_option['social-instagram']){ ?>
    		<a href="<?php echo esc_url($gl_option['social-instagram']); ?>"><i class="fab fa-instagram"></i></a>
            <?php } ?>

            <?php if($gl_option['social-pinterest']){ ?>
    		<a href="<?php echo esc_url($gl_option['social-pinterest']); ?>"><i class="fab fa-pinterest-p"></i></a>
            <?php } ?>

    	</div>
    </div>
    <div class="wrappercopyrights">
    <div class="copyrights">
         <?php if($gl_option['copyright-title']){ ?>
    	 <h6><?php echo esc_attr($gl_option['copyright-title']); ?></h6>
         <?php } ?>
    </div>
   
   </div>
</footer>

<button class="btn-up"><i class="fas fa-angle-up"></i></button>
	
<?php wp_footer(); ?>

</body>
</html>
