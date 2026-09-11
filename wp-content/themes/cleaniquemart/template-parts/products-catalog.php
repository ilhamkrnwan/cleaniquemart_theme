<?php
/**
 * Template Part: Products Catalog with Category Filter Tabs & Real Images
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';

$products = array(
	array(
		'name'     => 'Deterjen Matic 25 Liter',
		'category' => 'laundry',
		'badge'    => 'Best Seller Laundry',
		'desc'     => 'Formula rendah busa dirancang khusus mesin cuci front load & top load. Tidak meninggalkan kerak pada tabung mesin.',
		'vol'      => 'Jerigen Curah 25 Liter',
		'image'    => 'deterjen-cair.png',
	),
	array(
		'name'     => 'Deterjen Extra Busa 25 Liter',
		'category' => 'laundry',
		'badge'    => 'Cuci Manual & Kiloan',
		'desc'     => 'Busa melimpah, aktif meluruhkan noda membandel pada pakaian kerja, seragam, dan sprei dengan wangi segar.',
		'vol'      => 'Jerigen Curah 25 Liter',
		'image'    => 'NEW-DETERMAT-ECO-6.png',
	),
	array(
		'name'     => 'Parfum Laundry Waterbase 25 Liter',
		'category' => 'laundry',
		'badge'    => '30 Pilihan Aroma',
		'desc'     => 'Formula waterbase ramah serat pakaian, tidak menimbulkan bercak kuning, dan wangi mewah tahan lama standar IFRA.',
		'vol'      => 'Jerigen Curah 25 Liter',
		'image'    => 'PARFUM-removebg-preview.png',
	),
	array(
		'name'     => 'Softener Soft Sense 25 Liter',
		'category' => 'laundry',
		'badge'    => 'Pelembut Serat',
		'desc'     => 'Menjadikan serat kain halus, empuk, wangi tahan lama, serta mempercepat proses setrika pakaian pelanggan.',
		'vol'      => 'Jerigen Curah 25 Liter',
		'image'    => 'softener.png',
	),
	array(
		'name'     => 'Pelicin Setrika Pakaian 25 Liter',
		'category' => 'laundry',
		'badge'    => 'Anti Kusut',
		'desc'     => 'Cairan pelicin setrika wangi bunga sakura fresh yang membuat pakaian rapi seketika tanpa meninggalkan noda gosong.',
		'vol'      => 'Jerigen Curah 25 Liter',
		'image'    => 'pelicin_setrika-removebg-preview.png',
	),
	array(
		'name'     => 'Sabun Cuci Piring Ekstrak Jeruk 25 Liter',
		'category' => 'dapur',
		'badge'    => 'Pilihan Resto & Kuliner',
		'desc'     => 'Konsentrat peluruh lemak membandel pada wajan dan piring berminyak. Busa melimpah, dibilas kesat, dan lembut di tangan.',
		'vol'      => 'Jerigen Curah 25 Liter',
		'image'    => 'cupir001.png',
	),
	array(
		'name'     => 'Hand Wash Anti Bakteri 25 Liter',
		'category' => 'dapur',
		'badge'    => 'Higienis Lembut',
		'desc'     => 'Sabun cuci tangan aroma buah segar dengan pelembap alami. Sangat cocok untuk wastafel cafe, restoran, dan perkantoran.',
		'vol'      => 'Jerigen Curah 25 Liter',
		'image'    => 'Iklan-Arai-1.png',
	),
	array(
		'name'     => 'Pembersih Pel Lantai Aromaterapi 25 Liter',
		'category' => 'lantai',
		'badge'    => 'Anti Kuman & Wangi',
		'desc'     => 'Membunuh bakteri di lantai, cepat kering tanpa rasa lengket, dan menebarkan aroma segar apel, pinus, atau lavender.',
		'vol'      => 'Jerigen Curah 25 Liter',
		'image'    => 'Biang-Pel-Lantai.webp',
	),
	array(
		'name'     => 'Biang Karbol Wangi Sereh Pinus',
		'category' => 'lantai',
		'badge'    => 'Konsentrat 1 Jadi 5L',
		'desc'     => 'Formula pekat konsentrat karbol alami mengusir nyamuk/serangga, desinfektan lantai kamar mandi, dan wangi alami.',
		'vol'      => 'Paket Biang Hemat',
		'image'    => 'Biang-Karbol.webp',
	),
	array(
		'name'     => 'Biang Deterjen Concentrated Octa',
		'category' => 'laundry',
		'badge'    => '1 Paket Jadi 5 Liter',
		'desc'     => 'Bahan konsentrat deterjen laundry aktif. Cukup ditambah air 5L, langsung menghasilkan deterjen wangi berkualitas tinggi.',
		'vol'      => 'Paket Konsentrat 5L',
		'image'    => 'Octa-.webp',
	),
	array(
		'name'     => 'Biang Pelembut Pakaian Softa',
		'category' => 'laundry',
		'badge'    => '1 Paket Jadi 5 Liter',
		'desc'     => 'Konsentrat pelembut pakaian micro-capsule fragrance. Hemat ongkos kirim hingga 80% dibanding membawa jerigen cair.',
		'vol'      => 'Paket Konsentrat 5L',
		'image'    => 'Softa.webp',
	),
	array(
		'name'     => 'Biang Sabun Cuci Piring Detta+',
		'category' => 'dapur',
		'badge'    => '1 Paket Jadi 5 Liter',
		'desc'     => 'Konsentrat sabun cuci piring busa tebal peluruh lemak membandel. Solusi paling hemat untuk restoran dan katering.',
		'vol'      => 'Paket Konsentrat 5L',
		'image'    => 'Detta-Plus-1.webp',
	),
);
?>

<section class="cm-section cm-section-alt" id="katalog">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-eyebrow cm-eyebrow-cyan">Katalog Kimia Pembersih Resmi</div>
			<h2 class="cm-section-title">Varian Lengkap Jerigen Curah 25L &amp; Biang Konsentrat</h2>
			<p class="cm-section-subtitle">
				Diproduksi dengan standar industri kimia modern, izin edar PKRT Kemenkes RI, dan aroma IFRA standar laundry hotel berbintang.
			</p>
		</div>

		<!-- Category Tabs Filter -->
		<div class="cm-tabs-nav" role="tablist">
			<button type="button" class="cm-tab-btn cm-active" data-filter="all">Semua Produk</button>
			<button type="button" class="cm-tab-btn" data-filter="laundry">Chemical Laundry</button>
			<button type="button" class="cm-tab-btn" data-filter="dapur">Dapur &amp; Resto</button>
			<button type="button" class="cm-tab-btn" data-filter="lantai">Pembersih Lantai</button>
		</div>

		<!-- Products Grid -->
		<div class="cm-products-grid">
			<?php foreach ( $products as $prod ) : 
				$order_wa = cleaniquemart_get_wa_url( 'Halo CS Cleanique Mart, saya ingin memesan produk ' . $prod['name'] . '. Mohon info harga grosir dan pengiriman.' );
			?>
				<div class="cm-product-card" data-category="<?php echo esc_attr( $prod['category'] ); ?>" style="padding:1.5rem;display:flex;flex-direction:column;justify-content:space-between;">
					<div>
						<!-- Product Image Showcase -->
						<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);padding:1rem;margin-bottom:1.25rem;display:flex;align-items:center;justify-content:center;height:180px;overflow:hidden;">
							<img 
								src="<?php echo esc_url( $img_dir . $prod['image'] ); ?>" 
								alt="<?php echo esc_attr( $prod['name'] ); ?>"
								style="max-height:160px;width:auto;max-width:100%;object-fit:contain;"
								loading="lazy"
							>
						</div>

						<span class="cm-product-badge"><?php echo esc_html( $prod['badge'] ); ?></span>
						<h3 class="cm-product-title" style="font-size:1.15rem;margin-top:0.35rem;"><?php echo esc_html( $prod['name'] ); ?></h3>
						<p class="cm-product-desc"><?php echo esc_html( $prod['desc'] ); ?></p>
					</div>

					<div style="margin-top:1.25rem;padding-top:1rem;border-top:1px solid var(--cm-border);">
						<div style="font-size:0.8125rem;font-weight:700;color:var(--cm-dark-500);margin-bottom:0.75rem;">
							Kemasan: <span style="color:var(--cm-primary-800);"><?php echo esc_html( $prod['vol'] ); ?></span>
						</div>
						<a href="<?php echo esc_url( $order_wa ); ?>" class="cm-btn cm-btn-outline cm-btn-sm cm-btn-block" target="_blank" rel="noopener noreferrer">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
							<span>Pesan Jerigen Curah</span>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
