<?php
get_header();
?>

<aside id="secondary" class="col-xs-12 col-md-3">
<div id="sidebar">
	
	
	<ul role="navigation">
		<li class="pagenav">
			
			<?php dynamic_sidebar('kat-3');?>
		</li>
		<li>
			 <?php dynamic_sidebar('kat-2');?>   
		  
		</li>
		<li class="categories">
		   
			<?php dynamic_sidebar('kat-1');?>
		   
		</li>
	</ul>
</div>
</aside>

<h1><?php the_archive_title(); ?></h1>
<h1><?php the_archive_description(); ?></h1>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">



<!-- Wp loop visa resultatet för en viss kategori -->
<?php 
if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); 
	?>
	<article>
	
	<?php the_post_thumbnail( array(785, 523 ) );?> 
		<h2 class="title">
		<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	</h2>
	<ul class="meta">
		<li>
			<i class="fa fa-calendar"></i> <?php the_time(); ?>
		</li>
		<li>
			<i class="fa fa-user"></i> <a href="<?php the_permalink() ?>"><?php the_author(); ?></a>
		</li>
		<style>
		.cat{
			display:inline;	
		} 
			</style>
		<li class="cat">
		<i class="fa fa-tag"></i> <?php the_category(', '); ?>  
		</li>
			
		
	</ul>
	<p><?php the_excerpt(); ?></p>
</article>

<?php
	endwhile; 
	else :
		_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif; 
?>
                            <?php

                            ?>
							<nav class="navigation pagination">
                                <h2 class="screen-reader-text">Inläggsnavigering</h2>
                                <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>




<?php
get_footer();
?>