<?php
get_header();

?>
<?php
$image = get_the_post_thumbnail_url();
?>

<body>

        <main>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <?php
                            while (have_posts()) {
                                the_post();
                            }
                            ?>
                            <div class="text">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <?php dynamic_sidebar('kontakt'); ?>
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