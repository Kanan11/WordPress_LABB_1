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
                    </div>
            </section>

        </main>



    </div>


</body>
        <?php
        get_footer();
        ?>

</html>