<?php
/**
 * Main Fallback Index Template
 *
 * @package CleaniqueMart
 */

get_header();
?>

<main id="main-content" class="cm-main-content">
	<div class="cm-container" style="padding:4rem 1.5rem;">
		<?php if ( have_posts() ) : ?>
			<div style="display:grid;grid-template-columns:repeat(3, 1fr);gap:2rem;">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div><?php the_excerpt(); ?></div>
					</article>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<p>Konten tidak ditemukan.</p>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
