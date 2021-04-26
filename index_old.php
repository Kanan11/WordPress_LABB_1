<?php
get_header();

?>


<body>


		<main>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<?php
								while (have_posts()) {
									the_post();
								}
								?>
								<div class="text">
									<h1><?php the_title(); ?></h1>
									<?php the_content(); ?>
								</div>

								<img src="<?php echo get_template_directory_uri() . './img/city.jpg' ?>" />
							</div>
						</div>
					</div>
				</div>
			</section>

		</main>



	</div>


</body>
<?php
get_footer();
?>

</html>