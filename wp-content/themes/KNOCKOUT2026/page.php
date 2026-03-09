<?php
/**
 * Default page template
 *
 * @package Knockout2026
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="py-5">
	<div class="container fade-in">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class(); ?>>
					<header class="section-header mb-4">
						<h1 class="section-title"><?php the_title(); ?></h1>
					</header>
					<div class="page-content">
						<?php the_content(); ?>
					</div>
				</article>
				<?php
			endwhile;
		endif;
		?>
	</div>
</main>

<?php
get_footer();


