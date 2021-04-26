<?php

/**
 * mall namn: sök sida
 */

?>
<?php get_header(); ?>
<?php
$s = get_search_query();
$args = array(
    's' => $s
);
// The Query
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    _e("<h2 style='font-weight:bold;color:#000'>Sökresultat för: " . get_query_var('s') . "</h2>");
    while ($the_query->have_posts()) {
        $the_query->the_post();
?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php
    }
} else {
    ?>
    <div class="text-center" style="height:30vh;">
        <h2 style='font-weight:bold;color:#000;margin-top:100px;'>Ingenting hittades</h2>
        <div class="alert alert-danger">
            <p>Tyvärr, men ingenting matchade dina sökkriterier. Försök igen med några olika nyckelord.</p>
        </div>
    </div>
<?php } ?>

<?php echo paginate_links() ?>
<?php get_footer(); ?>