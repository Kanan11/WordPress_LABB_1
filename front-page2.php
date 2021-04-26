<?php
 get_header();
?>
	<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                            <?php
                            while( have_posts()){
                                the_post();  
							?>
							
                            <img src="<?php echo get_template_directory_uri() . './img/city.jpg' ?>" />

								<div class="text">
									<h1>
										<?php 
										the_title(); 
										?>
										</h1>
									<?php 
									the_excerpt(); 
									?>
								</div>

							<?php 
                            }
                            ?>
							</div>
						</div>
					</div>
				</div>
			</section>
<?php
 get_footer();
?>