<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1> <?php echo Blogg ?></h1>

                    <!-- Loop för att visa alla inlägg med sidor -->
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <?php the_post_thumbnail(array(786, 442)); ?>
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
                                        .cat {
                                            display: inline;
                                        }
                                    </style>
                                    <li class="cat">
                                        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                                    </li>
                                </ul>
                                <!-- the_excerpt method to display part of text -->
                                <p><?php the_excerpt(); ?></p>
                            </article>
                    <?php
                        endwhile;
                    /* WP Error message */
                    else :
                        _e('Tyvärr, Inga inlägg matchade dina kriterier.', 'textdomain');
                    endif;
                    ?>

                    <!-- WP pagination method-->
                    <?php the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('Föregående', 'textdomain'),
                        'next_text' => __('Nästa', 'textdomain'),
                    )); ?>

                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <ul role="navigation">
                            <?php get_search_form(); ?>
                            <?php dynamic_sidebar('kat-1'); ?>
                        </ul>
                        <ul role="navigation">
                            <li class="pagenav">
                                <?php dynamic_sidebar('kat-2'); ?>
                            <li class="categories">
                                <i class="fa fa-user"></i> <a href="<?php the_permalink() ?>"><?php echo banan ?></a>
                            </li>

                            </li>
                        </ul>

                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>