<?php
/**
 * Single Post Template
 * Theme: Peluang Usaha Laundry
 */

get_header();
?>

<div class="container section-padding">
  <div style="max-width: 860px; margin: 0 auto; background: #FFFFFF; padding: 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div style="margin-bottom: 0.75rem;">
          <span class="badge badge-primary"><?php the_category(', '); ?></span>
        </div>
        <h1 style="font-size: 2.25rem; margin-bottom: 0.75rem;"><?php the_title(); ?></h1>
        <div style="color: var(--color-text-muted); font-size: 0.85rem; margin-bottom: 2rem; padding-bottom: 1rem; border-bottom: 1px solid var(--color-border);">
          Oleh <?php the_author(); ?> &bull; <?php echo get_the_date(); ?>
        </div>
        <div class="entry-content" style="line-height: 1.8; font-size: 1.05rem;">
          <?php the_content(); ?>
        </div>
        <div style="margin-top: 2.5rem; padding-top: 1.5rem; border-top: 1px solid var(--color-border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-outline btn-sm">← Kembali ke Beranda</a>
          <button type="button" class="btn btn-whatsapp btn-sm" data-open-modal data-package="Konsultasi dari Artikel">Tanya Admin Via WhatsApp</button>
        </div>
      </article>
    <?php endwhile; endif; ?>
  </div>
</div>

<?php
get_footer();
