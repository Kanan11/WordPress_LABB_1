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
                     
                            </div>
                        </div>
                       
                       
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