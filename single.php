<?php get_header(); ?>

<?php the_post(); ?>

		<header class="valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col s12 m10 offset-m1 center-align">
						<h1><?php echo the_title(); ?></h1>
					</div>
				</div>
			</div>
		</header>
		
		<section class="job">

			<div class="container">

				<div class="row">
					
					<div class="col s12 m10 offset-m1 flow-text">
						
						<?php the_content(); ?>
						
					</div>
					
				</div>
				
			</div><!-- .container -->
			
		</section>
		
<?php get_footer(); ?>