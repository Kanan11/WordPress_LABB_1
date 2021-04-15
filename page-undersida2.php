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
<?php
$image = get_the_post_thumbnail_url();
?>

<body>


    <div id="wrap">

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href="index.html">Labb 1</a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <form id="searchform" class="searchform">
                            <div>
                            <?php dynamic_sidebar('search'); ?>

                                <!-- <label class="screen-reader-text">Sök efter:</label>
                                <input type="text" />
                                <input type="submit" value="Sök" /> -->
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-search">
            <form id="searchform" class="searchform">
                <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                </div>
            </form>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <?php
                                wp_nav_menu(
                                    ['container' => 'nav']
                                );
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

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
                                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
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