<?php
/**
 * Front Page Component: Keuntungan & Varian Produk
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$theme_uri = get_template_directory_uri();
?>
<section id="section-528-100" class="ct-section">
	<div class="ct-section-inner-wrap">
		<h2 id="headline-529-100" class="ct-headline atomic-secondary-heading">Sabun curah sangat&nbsp;<br>dibutuhkan oleh pemilik usaha:</h2>
		
		<!-- 12 Target Usaha dengan Ikon SVG -->
		<div id="div_block-560-100" class="ct-div-block cm-sectors-grid">
			<?php
			$sectors = [
				['title' => 'Laundry', 'icon' => 'batch_Page 1.svg', 'color' => '#0037ff'],
				['title' => 'Rumah Makan/Restoran', 'icon' => 'batch_Page 2.svg', 'color' => '#ff0008'],
				['title' => 'Rumah Tangga', 'icon' => 'batch_Page 3.svg', 'color' => '#2dd300'],
				['title' => 'Industri Gedung', 'icon' => 'batch_Page 4.svg', 'color' => '#9e00d3'],
				['title' => 'Hotel/Penginapan', 'icon' => 'batch_Page 5.svg', 'color' => '#ffb200'],
				['title' => 'Salon/Spa', 'icon' => 'batch_Page 6.svg', 'color' => '#ff009d'],
				['title' => 'Klinik dan Rumah Sakit', 'icon' => 'batch_Page 7.svg', 'color' => '#1dada1'],
				['title' => 'Cuci Mobil/Motor', 'icon' => 'batch_Page 8.svg', 'color' => '#ff7200'],
				['title' => 'Tempat Ibadah', 'icon' => 'batch_Page 9.svg', 'color' => '#05b200'],
				['title' => 'Sekolah / Universitas', 'icon' => 'batch_Page 10.svg', 'color' => '#0284c7'],
				['title' => 'Perkantoran', 'icon' => 'batch_Page 11.svg', 'color' => '#6366f1'],
				['title' => 'Kopdes / SPPG', 'icon' => 'batch_Page 12.svg', 'color' => '#10b981'],
			];
			foreach ( $sectors as $s ) :
				$s_icon_url = esc_url($theme_uri . '/assets/images/icon/' . rawurlencode($s['icon']));
			?>
				<div class="cm-sector-card" style="border: 2px solid <?php echo esc_attr($s['color']); ?>;">
					<div class="cm-sector-icon-wrap">
						<img src="<?php echo $s_icon_url; ?>" alt="<?php echo esc_attr($s['title']); ?>" class="cm-sector-svg-icon" width="46" height="46" loading="lazy">
					</div>
					<div class="cm-sector-title" style="color: <?php echo esc_attr($s['color']); ?>;"><?php echo esc_html($s['title']); ?></div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Kenapa Bisnis Sabun Bersama Cleanique Mart (6 Gambar Fitur dengan Catatan Teks) -->
		<div id="div_block-597-100" class="ct-div-block cm-features-wrap">
			<h2 id="headline-596-100" class="ct-headline atomic-secondary-heading">Kenapa bisnis sabun<br>bersama Cleanique Mart</h2>
			<div id="div_block-603-100" class="ct-div-block cm-features-grid cm-gallery-grid" data-gallery="features">
				<?php
				$features = [
					[
						'img'   => 'Konsumsi Berulang.png',
						'icon'  => 'FontAwesomeicon-refresh',
						'title' => 'Konsumsi Berulang',
						'desc'  => 'Produk seperti deterjen dan sabun selalu dicari konsumen',
					],
					[
						'img'   => 'Terjual Lebih dari 1 Juta Produk.png',
						'icon'  => 'FontAwesomeicon-star-o',
						'title' => 'Terjual Lebih dari 1 Juta Produk',
						'desc'  => 'Inovasi kami yang terbukti sejak 2011',
					],
					[
						'img'   => 'Harga Kompetitif.png',
						'icon'  => 'FontAwesomeicon-tags',
						'title' => 'Harga Kompetitif',
						'desc'  => 'mitra tidak mengalami kesulitan dalam menjual produk',
					],
					[
						'img'   => 'Ramah Lingkungan.png',
						'icon'  => 'FontAwesomeicon-recycle',
						'title' => 'Ramah Lingkungan',
						'desc'  => 'Produk berkualitas yang mendukung kelestarian lingkungan',
					],
					[
						'img'   => 'Pelatihan Produk_ Kami.png',
						'icon'  => 'FontAwesomeicon-thumbs-o-up',
						'title' => 'Pelatihan Produk',
						'desc'  => 'Kami memastikan Anda bisa menghasilkan produk isi ulang dengan kualitas terbaik',
					],
					[
						'img'   => 'Pengurusan Izin Usaha.png',
						'icon'  => 'FontAwesomeicon-file-o',
						'title' => 'Pengurusan Izin Usaha',
						'desc'  => 'Legalitas lengkap dengan izin edar dan sertifikat halal',
					],
				];
				foreach ( $features as $feat ) :
					$feat_url = esc_url($theme_uri . '/assets/images/features/' . rawurlencode($feat['img']));
				?>
					<div class="cm-feature-card">
						<a href="<?php echo $feat_url; ?>" class="cm-feature-img-link cm-lightbox-trigger" data-title="<?php echo esc_attr($feat['title']); ?>" data-desc="<?php echo esc_attr($feat['desc']); ?>" title="<?php echo esc_attr($feat['title']); ?>">
							<div class="cm-feature-img-wrap">
								<img src="<?php echo $feat_url; ?>" alt="<?php echo esc_attr($feat['title']); ?>" class="cm-feature-img" loading="lazy">
								<span class="cm-review-zoom-badge">
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
									Perbesar
								</span>
							</div>
						</a>
						<div class="cm-feature-body">
							<div class="cm-feature-icon-badge">
								<svg class="cm-feature-svg"><use xlink:href="#<?php echo esc_attr($feat['icon']); ?>"></use></svg>
							</div>
							<div class="cm-feature-text-wrap">
								<h3 class="cm-feature-title"><?php echo esc_html($feat['title']); ?>:</h3>
								<p class="cm-feature-desc"><?php echo esc_html($feat['desc']); ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- Varian Produk Ukuran Lengkap -->
		<div id="div_block-690-100" class="ct-div-block">
			<h2 id="headline-692-100" class="ct-headline atomic-secondary-heading">Varian Produk&nbsp;<br>Ukuran Lengkap</h2>
			
			<?php
			$varian_products = [
				[
					'id'    => '1495',
					'img'   => 'Hand Washing 25L new.png',
					'title' => 'Hand Wash 25 L',
					'desc'  => 'Sabun Cuci Tangan Lembut Higienis Ukuran 25 Liter',
				],
				[
					'id'    => '1499',
					'img'   => 'Deterjen-Busa-25L.webp',
					'title' => 'Deterjen Busa 25 L',
					'desc'  => 'Formula Busa Melimpah Efektif Angkat Noda Membandel',
				],
				[
					'id'    => '1503',
					'img'   => 'Deterjen-Matic-25L.webp',
					'title' => 'Deterjen Matic 25 L',
					'desc'  => 'Deterjen Rendah Busa Khusus Mesin Cuci Komersial & Laundry',
				],
				[
					'id'    => '1507',
					'img'   => 'Parfum-Waterbase-25L.webp',
					'title' => 'Parfum Waterbase 25 L',
					'desc'  => 'Pewangi Pakaian Waterbase Ramah Serat Kain & Tahan Lama',
				],
				[
					'id'    => '1511',
					'img'   => 'Softener-25L.webp',
					'title' => 'Softener 25 L',
					'desc'  => 'Pelembut & Pewangi Pakaian Konsentrat Hasil Ekstra Lembut',
				],
				[
					'id'    => '1515',
					'img'   => 'Pelicin-Setrika-25L.webp',
					'title' => 'Pelicin Setrika 25 L',
					'desc'  => 'Pelicin & Pewangi Pakaian Memudahkan Menyetrika Lebih Rapi',
				],
				[
					'id'    => '1519',
					'img'   => 'Dish-Washing-25L.webp',
					'title' => 'Sabun Cuci Piring 25 L',
					'desc'  => 'Pembersih Lemak & Minyak Kesat Sekali Usap Aroma Jeruk Nipis',
				],
				[
					'id'    => '1523',
					'img'   => 'Pel-Lantai-25L.webp',
					'title' => 'Pel Lantai 25 L',
					'desc'  => 'Cairan Pembersih Lantai Antibakterial Wangi Segar Tahan Lama',
				],
			];
			?>
			<div id="div_block-1494-100" class="ct-div-block cm-gallery-grid" data-gallery="varian-produk">
				<?php foreach ( $varian_products as $vp ) :
					$vp_url = esc_url($theme_uri . '/assets/images/' . rawurlencode($vp['img']));
				?>
					<div id="div_block-<?php echo esc_attr($vp['id']); ?>-100" class="ct-div-block cm-product-card">
						<a href="<?php echo $vp_url; ?>" class="cm-product-img-link cm-lightbox-trigger" data-title="<?php echo esc_attr($vp['title']); ?>" data-desc="<?php echo esc_attr($vp['desc']); ?>" title="<?php echo esc_attr($vp['title']); ?>" style="width:100%; display:block; position:relative;">
							<div class="cm-product-img-wrap" style="position:relative; width:100%; display:flex; justify-content:center; align-items:center;">
								<img id="image-<?php echo (intval($vp['id']) + 1); ?>-100" alt="<?php echo esc_attr($vp['title'] . ' Cleanique Mart'); ?>" src="<?php echo $vp_url; ?>" class="ct-image" loading="lazy" />
								<span class="cm-review-zoom-badge">
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
									Perbesar
								</span>
							</div>
						</a>
						<div id="div_block-<?php echo (intval($vp['id']) + 2); ?>-100" class="ct-div-block">
							<h3 id="text_block-<?php echo (intval($vp['id']) + 3); ?>-100" class="ct-text-block"><?php echo esc_html($vp['title']); ?></h3>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
