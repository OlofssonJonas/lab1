<!-- ?php get_header(); ?>

<h1> ?php echo "Sökresultat för: "; the_search_query(); ?></h1>

?php while(have_posts()){
    the_post();
    get_template_part('links');
}
    ?>
    ?php get_footer(); ? -->

     
    <?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1><?php echo "Sökresultat för: "; the_search_query(); ?></h1>
                    <div class="searchform-wrap">
                        <form id="searchform" class="searchform">
                            <input type="text" name="search_query" placeholder="Search...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <article>
                                <?php the_post_thumbnail('large'); ?>
                                 <?php get_template_part('links'); ?>
                                
                                <ul class="meta">
                                    <?php get_template_part('article'); ?>
                                </ul>
                                <?php the_excerpt(); ?>
                            </article>
                    <?php endwhile; else : _e('Could not match'); endif;?>          
                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <a class="prev page-numbers" href="">Föregående</a>
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="">2</a>
                        <a class="next page-numbers" href="">Nästa</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>