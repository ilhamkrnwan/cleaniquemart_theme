<?php
/**
 * Template Part: Accordion FAQ with Scannable Highlights
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$faqs = array(
	array(
		'tag' => 'Royalti & Bagi Hasil',
		'pill' => 'cm-pill-emerald',
		'q'   => 'Apakah ada biaya royalti bulanan atau bagi hasil omzet?',
		'a'   => '<strong>Tidak ada sama sekali.</strong> Cleanique Mart menganut sistem kemitraan murni tanpa royalti fee. <span class="cm-highlight-emerald">Seluruh 100% laba keuntungan depot adalah hak milik Anda sepenuhnya.</span> Anda hanya perlu repeat order produk/konsentrat saat stok menipis.',
	),
	array(
		'tag' => 'Pelatihan & SOP',
		'pill' => 'cm-pill-cyan',
		'q'   => 'Saya belum pernah jualan sabun dan kimia, apakah ada bimbingan?',
		'a'   => '<strong>Ya, dibimbing sampai bisa.</strong> Setiap mitra mendapatkan <span class="cm-highlight-text">modul pelatihan intensif Cleanique Academy</span> mengenai SOP penanganan cairan, pengisian higienis via filter UV, penentuan harga jual kompetitif, hingga teknik pemasaran offline dan online di wilayah sekitar Anda.',
	),
	array(
		'tag' => 'Izin Edar & Legalitas',
		'pill' => 'cm-pill-amber',
		'q'   => 'Apakah produk Cleanique Mart memiliki izin edar resmi?',
		'a'   => '<strong>Legalitas terjamin resmi.</strong> Seluruh formula produk kami telah memiliki sertifikat <span class="cm-highlight-emerald">izin edar resmi Kemenkes RI (PKRT)</span> dan bersertifikat Halal MUI dari pabrik PT Indotech Berkah Abadi. Legalitas ini memberikan ketenangan bagi Anda dan konsumen saat bertransaksi.',
	),
	array(
		'tag' => 'Kebutuhan Lokasi',
		'pill' => 'cm-pill-cyan',
		'q'   => 'Berapa luas ruangan yang dibutuhkan untuk membuka depot?',
		'a'   => '<strong>Sangat fleksibel &amp; hemat tempat.</strong> Rak display depot 8 kontainer Cleanique Mart <span class="cm-highlight-text">hanya butuh ruang sekitar 2 x 3 meter</span>. Anda bisa membukanya di teras depan rumah, garasi kosong, kios pasar, ruko, maupun digabung dengan usaha laundry atau toko kelontong yang sudah berjalan.',
	),
	array(
		'tag' => 'Estimasi Balik Modal',
		'pill' => 'cm-pill-emerald',
		'q'   => 'Berapa estimasi waktu pengembalian modal (Break Even Point / BEP)?',
		'a'   => '<strong>Rata-rata 2 hingga 4 bulan.</strong> Berdasarkan riwayat mitra kami di berbagai kota, dengan penjualan rata-rata 8–12 jerigen per hari, modal awal Paket Starter (Rp 15 Juta) maupun Paket King (Rp 27,5 Juta) <span class="cm-highlight-emerald">kembali modal penuh dalam kurun waktu 2–4 bulan</span>.',
	),
	array(
		'tag' => 'Pengiriman & Kargo',
		'pill' => 'cm-pill-cyan',
		'q'   => 'Bagaimana cara pemesanan dan pengiriman paket kemitraan ke luar kota/pulau?',
		'a'   => '<strong>Kirim aman ke seluruh Indonesia.</strong> Kami bermitra dengan ekspedisi kargo resmi spesialis muatan cairan dan rak display. <span class="cm-highlight-text">Pengiriman dilengkapi proteksi asuransi &amp; packing kayu</span> hingga ke alamat tujuan di pulau Jawa, Sumatera, Kalimantan, Sulawesi, Bali, dan daerah lainnya.',
	),
);
?>

<section class="cm-section" id="faq">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-highlight-pill cm-pill-cyan" style="margin-bottom:0.75rem;">
				Tanya Jawab &amp; FAQ
			</div>
			<h2 class="cm-section-title">Pertanyaan yang Sering Diajukan Seputar Kemitraan</h2>
			<p class="cm-section-subtitle">
				Informasi transparan dan jelas untuk memudahkan Anda memahami seluruh sistem operasional sebelum bergabung.
			</p>
		</div>

		<div class="cm-faq-list" style="max-width:860px;margin:0 auto;">
			<?php foreach ( $faqs as $idx => $faq ) : ?>
				<div class="cm-faq-item <?php echo ( 0 === $idx ) ? 'cm-open' : ''; ?>" style="margin-bottom:1rem;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);background:#FFFFFF;overflow:hidden;box-shadow:var(--cm-shadow-sm);">
					<button type="button" class="cm-faq-question" aria-expanded="<?php echo ( 0 === $idx ) ? 'true' : 'false'; ?>" style="width:100%;display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:1.25rem 1.5rem;text-align:left;background:transparent;border:none;cursor:pointer;font-family:var(--cm-font-heading);font-weight:700;font-size:1.025rem;color:var(--cm-dark-900);">
						<span style="display:flex;align-items:center;gap:0.75rem;flex-wrap:wrap;">
							<span class="cm-highlight-pill <?php echo esc_attr( $faq['pill'] ); ?>" style="font-size:0.68rem;padding:0.15rem 0.5rem;">
								<?php echo esc_html( $faq['tag'] ); ?>
							</span>
							<span><?php echo esc_html( $faq['q'] ); ?></span>
						</span>
						<svg class="cm-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="flex-shrink:0;transition:transform 0.25s ease;"><polyline points="6 9 12 15 18 9"/></svg>
					</button>
					<div class="cm-faq-answer" style="padding:0 1.5rem 1.25rem 1.5rem;font-size:0.925rem;color:var(--cm-dark-700);line-height:1.7;">
						<p><?php echo wp_kses_post( $faq['a'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
