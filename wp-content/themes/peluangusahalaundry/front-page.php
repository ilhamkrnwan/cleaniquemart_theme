<?php
/**
 * Master Front Page Template
 * Theme: Peluang Usaha Laundry
 */

get_header();
?>

<main id="main-content" class="site-main">
  <?php
  get_template_part('template-parts/hero');
  get_template_part('template-parts/metrics');
  get_template_part('template-parts/problem-solution');
  get_template_part('template-parts/products-catalog');
  get_template_part('template-parts/advantages');
  get_template_part('template-parts/packages');
  get_template_part('template-parts/ecosystem');
  get_template_part('template-parts/testimonials');
  get_template_part('template-parts/faq');
  get_template_part('template-parts/cta-banner');
  ?>
</main>

<?php
get_footer();
