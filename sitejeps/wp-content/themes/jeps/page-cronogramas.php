<?php get_header(); ?>
<!--?php /* Template name: Cronogramas */ ?-->

<section id="page">
	<?php  
		$args = array(
			'post_type'				 => 'cronogramas',
			'posts_per_page'         => -1,
		);
	
		$my_query = new WP_Query( $args );
	
		while($my_query->have_posts()) : $my_query->the_post(); 
	?>
		<div class="wrapper">
			<h1 class="text-center title"><?php the_title(); ?></h1>
		</div>
		<div class="container">
			<?php the_post_thumbnail(full); ?>
			<hr>
				<a class="btn btn-veja-mais" target="_blank" href="<?php the_field('arquivo') ?>">Veja mais</a>
				<hr>
		</div>
	<?php endwhile; ?>
</section>
<?php get_footer(); ?>