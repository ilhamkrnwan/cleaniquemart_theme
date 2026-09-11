<?php
/**
 * Standard Page Template
 * Theme: Peluang Usaha Laundry
 */

get_header();
?>

<div class="container section-padding">
  <div style="max-width: 860px; margin: 0 auto; background: #FFFFFF; padding: 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 style="font-size: 2.25rem; margin-bottom: 1.5rem;"><?php the_title(); ?></h1>
        <div class="entry-content" style="line-height: 1.75; font-size: 1.05rem;">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; endif; ?>
  </div>
</div>

<?php
get_footer();
