<?php

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<script src="<?php echo get_template_directory_uri(). './js/jquery.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri(). './js/script.js'; ?>"></script>

<?php wp_head(); ?>
</head>
<?php wp_body_open(); 

?>

<div id="wrap">

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-sm-6">
					<a class="logo" href="<?php echo esc_url( home_url( '/hem' ) ); ?>">Labb 1</a>

				</div>
				<div class="col-sm-6 hidden-xs">
				<?php get_search_form(); ?>
				</div>
				<div class="col-xs-4 text-right visible-xs">
					<div class="mobile-menu-wrap">
						<i class="fa fa-search"></i>
						<i class="fa fa-bars menu-icon"></i>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="mobile-search">
	<?php get_search_form(); ?>
	</div>

	<nav id="nav">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="menu">
						<li class="current-menu-item">
							<?php
							wp_nav_menu(
								['container' => 'nav']
							);
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>



<!-- TEST -->
	<?php the_posts_pagination(array(
		'mid_size'  => 2,
		'prev_text' => __('Föregående', 'textdomain'),
		'next_text' => __('Nästa', 'textdomain'),
	)); ?>