<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gl
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--Navbar-->

	<header>
		<div class="navbar">
			<div class="logo">
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></p>
			</div>
			<div class="hamburger">
				<i class="fas fa-bars" id="hamburgericon"></i>
                <i class="fas fa-times" id="timesicon" style="display: none"></i>
			</div>
            
            <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'container'       => 'ul', 
				'container_class' => 'links',
				'menu_id'         => '',
				'menu_class'      => 'links',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
	            'walker'          => '',
			) );
			?>
			
			<div class="search">
				<i class="fas fa-search"></i>
				<?php get_search_form('gl_my_search_form'); ?>
			</div>
			
		</div>

        <!--Breadcrumbs-->

		<?php if(!is_page_template('template-home.php')) { ?>
			<section class="breadcrumbs">
		<div class="wrapperbreadcrumbs">
			<h3><?php gl_the_breadcrumb(); ?></h3>
		</div>
	</section>
	<?php } ?>
	
    <!--Navbar Responsive-->

	</header>
	<div class="navbar_responsive">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-3',
				'container'       => 'ul', 
				'container_class' => 'navbar_responsive',
				'menu_id'         => '',
				'menu_class'      => 'navbar_responsive',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
	            'walker'          => '',
			) );
			?>

			<ul class="search_responsive">
		<li><i class="fas fa-search"></i></li>
		<li><?php get_search_form('gl_my_search_form'); ?></li>
	</ul>
	</div>
	



