<?php
/**
 * The main template file
 * 
 * @package Sports_Cafe_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>
                    </header>
                    
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php
            endwhile;
            
            the_posts_navigation();
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>