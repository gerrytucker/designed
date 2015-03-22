				
<?php
$query = new WP_Query('cat_name=portfolio&order=DESC&orderby=date&posts_per_page=6');
while ($query->have_posts()) : $query->the_post();
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
	if ($count == 3) {
		$count = 0;
?>
			
				</div>

<?php
	endif;
	
endwhile;
?>

