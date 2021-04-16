<?php

/* if ( have_posts() ) {
    while ( have_posts() ) {
 
        the_post(); ?>
 
        <h2><?php the_title(); ?></h2>
 
        <?php the_content(); ?>
 
    <?php }
} */

?>

<?php
get_header();

?>

<body>



        <main>

            <section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                            <?php
                            while (have_posts()) {
                                the_post();
                            }
                            ?>
                            <div class="text">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                
                            </div>
                        </div>
                                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9" >
                                <?php dynamic_sidebar('aside'); ?>
                             <br><p>test meny</p>
                                <?php wp_nav_menu(['theme_location' => 'side-menu']); ?>
                            </aside>
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