<?php
get_header();
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="hero">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <img src=" 
                        					<?php
                            the_post_thumbnail_url(); // test img import, this must be delete
                            ?>" />
                        <img src="<?php echo get_template_directory_uri() . './img/city.jpg' ?>" />
                        <div class="text">
                            <h1>
                                <?php
                                /* show the title */
                                the_title();
                                ?>
                            </h1>
                            <?php
                            /* show the text */
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