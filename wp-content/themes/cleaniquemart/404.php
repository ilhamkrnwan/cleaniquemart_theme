<?php
/**
 * 404 Not Found Template
 *
 * @package CleaniqueMart
 */

get_header();
?>

<main id="main-content" class="cm-main-content">
	<section class="cm-section" style="padding:8rem 0;text-align:center;">
		<div class="cm-container cm-container-narrow">
			<div style="font-family:var(--cm-font-heading);font-size:6rem;font-weight:900;color:var(--cm-cyan-500);line-height:1;margin-bottom:1rem;">
				404
			</div>
			<h1 class="cm-section-title">Halaman Tidak Ditemukan</h1>
			<p class="cm-section-subtitle" style="margin-bottom:2.5rem;">
				Mohon maaf, halaman yang Anda tuju telah dipindahkan atau tautan tidak valid. Silakan kembali ke beranda atau hubungi layanan pelanggan kami.
			</p>
			<div style="display:flex;gap:1rem;justify-content:center;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cm-btn cm-btn-emerald cm-btn-lg">
					&larr; Kembali ke Beranda
				</a>
				<a href="<?php echo esc_url( home_url( '/kemitraan-cleanique-mart/' ) ); ?>" class="cm-btn cm-btn-outline cm-btn-lg">
					Lihat Paket Kemitraan
				</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
