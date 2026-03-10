<?php
/**
 * Template Name: Gallery Page
 *
 * @package KnockOut_Theme
 */

get_header(); ?>

<main id="primary" class="site-main page-gallery">

    <section class="page-header">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="page-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> /
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="glass-panel page-intro">
                <p class="neon-text">A neon-soaked peek inside KnockOut.</p>
                <p>Bar, bowling, arcade, lounge — captured in full glow.</p>
            </div>

            <div class="gallery-grid gallery-page-grid">
                <?php
                $images = array(
                    'ambiance-1.jpg' => 'The Bar',
                    'ambiance-2.jpg' => 'Bowling',
                    'ambiance-3.jpg' => 'VIP Lounge',
                    'ambiance-4.jpg' => 'Arcade',
                    'ambiance-5.jpg' => 'Lounge',
                );
                foreach ($images as $file => $label) :
                    $src = get_template_directory_uri() . '/assets/images/' . $file;
                ?>
                    <div class="gallery-item glass-card">
                        <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($label); ?>">
                        <div class="image-overlay">
                            <span class="neon-text"><?php echo esc_html($label); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

