<?php
/**
 * Main Template File (Fallback)
 * Theme: Peluang Usaha Laundry
 */

get_header();
?>

<div class="container section-padding">
  <div style="max-width: 800px; margin: 0 auto;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('opportunity-card'); ?> style="margin-bottom: 2rem;">
        <h2 style="font-size: 1.75rem; margin-bottom: 0.75rem;">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div style="color: var(--color-text-muted); margin-bottom: 1rem; font-size: 0.85rem;">
          Dipublikasikan pada <?php echo get_the_date(); ?> oleh <?php the_author(); ?>
        </div>
        <div style="line-height: 1.7;">
          <?php the_excerpt(); ?>
        </div>
        <div style="margin-top: 1.25rem;">
          <a href="<?php the_permalink(); ?>" class="btn btn-outline btn-sm">Baca Selengkapnya →</a>
        </div>
      </article>
    <?php endwhile; else : ?>
      <div class="opportunity-card text-center">
        <h2>Belum Ada Artikel</h2>
        <p>Silakan kembali lagi nanti atau hubungi admin untuk informasi lebih lanjut.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-aqua" style="margin-top: 1rem;">Kembali ke Beranda</a>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php
get_footer();
