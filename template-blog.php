<?php
/*Template name: Blog
*/
?>

<body>

	<?php get_header(); ?>


	<!--Blog Post-->

	<section class="blogposts">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<h1><?php the_title(); ?></h1>
			<?php
		endwhile;
		?>
		<div class="blogpostwrapper">

			<div class="blogcolumn">
				<?php	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				
				query_posts(array(
    'post_type' => 'post', // You can add a custom post type if you like
    'paged' => $paged,
    'posts_per_page' => 3 // limit of posts
));
				
if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	<div class="blogpost">
		<?php the_post_thumbnail(); ?>
		<h6><?php the_time('j F Y'); ?></h6>
		<h2><?php the_title(); ?></h2>
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>"><button>Read more</button></a>
		
	</div>
	<?php
endwhile;

gl_pagination(); 

else :
	
// no posts found message goes here...
	
endif; ?>



</div>

<div class="tagcolumn">	
	<?php
	get_sidebar(); ?>
</div>
</div>
</section>




<?php get_footer(); ?>