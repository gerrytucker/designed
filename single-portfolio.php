<?php get_header(); ?>

<?php
	if ( $wp_query->query_vars['title'] ) {
		$title = $wp_query->query_vars['title'];
		var_dump($title);
	}
?>

<?php the_post(); ?>

		<header class="valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col s12 m10 offset-m1 center-align">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</header>
		
		<section class="single-work">
			
			<div class="job container">
				<div class="row">
					<div class="col s12 m10 offset-m1 center-align flow-text">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		</section>

<?php get_footer(); ?>