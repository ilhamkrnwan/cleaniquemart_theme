<?php
/**
 * Generic Page Template
 *
 * @package CleaniqueMart
 */

get_header();
?>

<main id="main-content" class="cm-main-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<section class="cm-hero" style="padding-bottom:2.5rem;text-align:center;">
			<div class="cm-container cm-container-narrow">
				<h1 class="cm-hero-title"><?php the_title(); ?></h1>
			</div>
		</section>

		<section class="cm-section" style="padding-top:1.5rem;">
			<div class="cm-container cm-container-narrow">
				<div class="cm-entry-content" style="font-size:1.05rem;line-height:1.8;color:var(--cm-dark-800);">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
</main>

<?php
get_footer();
