<?php
get_header();

?>


<body>

        <main>

            <section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-sm-8 col-md-6">
                            <?php
                            while (have_posts()) {
                                the_post();
                            }
                            ?>
                            <div class="text">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <?php get_sidebar();?> <!-- DEMO att infåga sista <p> tag från function -->
                     
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(). './img/photo.jpg';?>" />
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