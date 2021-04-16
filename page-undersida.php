<?php

?>

<?php
get_header();

?>


<body>

        <main>

            <section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-md-9">
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
                                <aside id="secondary" class="col-xs-12 col-md-3">
                                <?php dynamic_sidebar('aside'); ?>
                                </aside>
                    </div>
                </div>
            </section>

        </main>

      
        <?php
        get_footer();
        ?>

    </div>


</body>

</html>