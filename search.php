<?php get_header(); ?>

<h1> <?php echo "Sökresultat för: "; the_search_query(); ?></h1>

<?php while(have_posts()){
    the_post();
    get_template_part('links');
}
    ?>
    <?php get_footer(); ?>