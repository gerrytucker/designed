<!DOCTYPE html>
<html lang="<?php bloginfo('lang'); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<section class="navbar">
			<div class="container">
				<div class="row">
					<div class="col m4">
						<a class="brand" href="<?php echo get_bloginfo('url'); ?>" title="Mark Walling" rel="homepage">Mark Walling</a>
					</div>
					<div class="col m8">
						<ul class="inline-list right">

<?php wp_list_pages('sort_column=ID&title_li='); ?>
<?php
	$categories = get_categories('hide_empty=0');
	foreach ($categories as $cat) :
		if ($cat->parent < 1) :
			$category_link = get_category_link($cat->cat_ID);
?>

							<li><a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a></li>

<?php
		endif;
	endforeach;
?>

						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="small-navbar">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<a class="brand" href="<?php echo get_bloginfo('url'); ?>" title="Mark Walling" rel="homepage">Mark Walling</a>
						<a class="navbar-trigger right" href="#"></a>
					</div>
				</div>
			</div>
		</section>

		<section class="small-menu-container">
			<ul class="small-menu">


<?php wp_list_pages('sort_column=ID&title_li='); ?>
<?php
	$categories = get_categories('hide_empty=0');
	foreach ($categories as $cat) :
		if ($cat->parent < 1) :
			$category_link = get_category_link($cat->cat_ID);
?>

				<li><a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a></li>

<?php
		endif;
	endforeach;
?>

			</ul>
		</section>