<?php get_header(); ?>

		<header class="valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col s10 offset-s1 center-align">
						<p>Hi there, my name is</p>
						<h1>Mark Walling</h1>
						<p>A Balding Designer</p>
					</div>
				</div>
			</div>
		</header>
		
		<section class="portfolio">

			<div class="container">
<?php
$query = new WP_Query('cat_name=portfolio&order=DESC&orderby=date&posts_per_page=6');
while ($query->have_posts()) : the_post();
	$count++;
	if ($count == 1) :
?>
			
				<div class="row">

<?php
	endif;
?>

					<div class="col s12 m4">
						<?php
							the_post_thumbnail('medium', array('class' => 'responsive-img'));
						?>
					</div>
<?php
	if ($count == 1) :
?>
			
				</div>

<?php
	endif;
	
	if ($count == 3) {
		$count = 0;
	}

endwhile;
?>
			</div>
			
		</section>

<?php get_footer(); ?>