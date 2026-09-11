<?php
/**
 * Template Name: Kontak & Peta
 *
 * Authentic Oxygen Theme layout (matching oxygen-512.css) with enriched
 * contact options, interactive Google Maps, operational schedule, and instant WhatsApp consultation.
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$theme_uri   = get_template_directory_uri();
$img_dir     = $theme_uri . '/assets/images/';
$wa_phone    = get_theme_mod( 'cleaniquemart_wa_phone', '087885590088' );
$office_addr = get_theme_mod( 'cleaniquemart_office_address', 'Jongke Tengah no. 30 RT.01/RW.23, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285' );
$wa_url      = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*' );
?>

<main id="main-content" class="oxygen-main-content">
	<!-- Authentic Oxygen Hero Section -->
	<section id="section-3-512" class="ct-section ct-section-with-shape-divider">
		<div class="ct-section-inner-wrap">
			<div id="div_block-4-512" class="ct-div-block">
				<div class="cm-badge-glass-hero">
					Layanan Representatif &amp; Konsultasi Kemitraan
				</div>
				<h1 id="headline-5-512" class="ct-headline atomic-primary-heading">Contact Us</h1>
				<p id="text_block-6-512" class="ct-text-block atomic-subheading">
					Hubungi kami melalui kontak resmi dan kunjungi kantor pusat PT Indotech Berkah Abadi di bawah ini.
				</p>
			</div>

			<!-- Ocean Waves Shape Divider -->
			<div id="-shape-divider-7-512" class="oxy-shape-divider">
				<div class="oxy_shape_divider">
					<svg viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
						<g id="Ocean-Waves" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<path d="M60.0736562,199.999824 C74.730684,216.560111 96.1461381,227.000176 120,227.000176 C143.853862,227.000176 165.269316,216.560111 179.926344,199.999824 L180.073656,199.999824 C194.730684,216.560111 216.146138,227.000176 240,227.000176 C263.853862,227.000176 285.269316,216.560111 299.926344,199.999824 L300.073656,199.999824 C314.730684,216.560111 336.146138,227.000176 360,227.000176 C383.853862,227.000176 405.269316,216.560111 419.926344,199.999824 L420.073656,199.999824 C434.730684,216.560111 456.146138,227.000176 480,227.000176 C503.853862,227.000176 525.269316,216.560111 539.926344,199.999824 L540.073656,199.999824 C554.730684,216.560111 576.146138,227.000176 600,227.000176 C623.853862,227.000176 645.269316,216.560111 659.926344,199.999824 L660.073656,199.999824 C674.730684,216.559935 696.146138,227 720,227 C743.853862,227 765.269316,216.559935 779.926344,199.999824 L780.073656,199.999824 C794.730684,216.560111 816.146138,227.000176 840,227.000176 C863.853862,227.000176 885.269316,216.560111 899.926344,199.999824 L900.073656,199.999824 C914.730684,216.560111 936.146138,227.000176 960,227.000176 C983.853862,227.000176 1005.26932,216.560111 1019.92634,199.999824 L1020.07366,199.999824 C1034.73068,216.560111 1056.14614,227.000176 1080,227.000176 C1103.85386,227.000176 1125.26932,216.560111 1139.92634,199.999824 L1140.07366,199.999824 C1154.73068,216.560111 1176.14614,227.000176 1200,227.000176 C1223.85386,227.000176 1245.26932,216.560111 1259.92634,199.999824 L1260.07366,199.999824 C1274.73068,216.560111 1296.14614,227.000176 1320,227.000176 C1343.85386,227.000176 1365.26932,216.560111 1379.92634,199.999824 L1380.07366,199.999824 C1394.73068,216.560111 1416.14614,227.000176 1440,227.000176 L1440,319.999824 L0,319.999824 L0,227.000176 C23.8538619,227.000176 45.269316,216.560111 59.9263438,199.999824 L60.0736562,199.999824 Z" fill="currentColor"></path>
						</g>
					</svg>
				</div>
			</div>

			<!-- Bubble decoration -->
			<img id="image-8-512" alt="" src="<?php echo esc_url( $img_dir ); ?>bubble.webp" class="ct-image" />
		</div>
	</section>

	<!-- Contact Details & Map Section -->
	<section id="section-13-512" class="ct-section" style="padding-top:60px;padding-bottom:100px;">
		<div class="ct-section-inner-wrap">
			<div id="new_columns-14-512" class="ct-new-columns" style="display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:start;">
				
				<!-- Left Column: Contact Cards -->
				<div id="div_block-15-512" class="ct-div-block" style="width:100%;">
					<div style="margin-bottom:28px;">
						<span style="display:inline-block;padding:4px 12px;background:#e0f2fe;color:#0284c7;font-size:12px;font-weight:700;border-radius:6px;margin-bottom:10px;">
							RESPON CEPAT KONSULTASI
						</span>
						<h2 id="headline-16-512" class="ct-headline atomic-secondary-heading" style="margin-top:0;margin-bottom:12px;font-size:32px;">
							Hubungi Kami
						</h2>
						<div id="text_block-17-512" class="ct-text-block atomic-subheading" style="font-size:16px;color:#475569;line-height:1.7;">
							Memiliki pertanyaan mengenai paket kemitraan depot, ketersediaan sabun curah isi ulang grosir, atau ingin mengecek kuota wilayah eksklusif di kota Anda? Tim representatif resmi kami siap melayani Anda.
						</div>
					</div>

					<!-- WhatsApp Card -->
					<div style="background:#f0fdf4;border:1.5px solid #22c55e;border-radius:14px;padding:22px;margin-bottom:20px;box-shadow:0 4px 12px rgba(34,197,94,0.08);">
						<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
							<div style="font-size:13px;font-weight:700;color:#16a34a;display:flex;align-items:center;gap:6px;">
								<span style="width:8px;height:8px;border-radius:50%;background:#22c55e;display:inline-block;animation:pulse 2s infinite;"></span>
								HOTLINE WHATSAPP UTAMA
							</div>
							<span style="font-size:11px;background:#dcfce7;color:#15803d;padding:2px 8px;border-radius:4px;font-weight:700;">Online Hari Ini</span>
						</div>
						<a 
							id="text_block-19-512" 
							class="ct-link-text" 
							href="<?php echo esc_url( $wa_url ); ?>" 
							target="_blank" 
							rel="nofollow"
							style="display:flex;align-items:center;justify-content:space-between;text-decoration:none;margin-top:10px;"
						>
							<span style="font-size:24px;font-weight:800;color:#14532d;letter-spacing:0.5px;">
								<?php echo esc_html( $wa_phone ); ?>
							</span>
							<span style="background:#22c55e;color:#ffffff;padding:8px 18px;border-radius:999px;font-size:13px;font-weight:700;display:flex;align-items:center;gap:6px;">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
								Chat Sekarang &rarr;
							</span>
						</a>
					</div>

					<!-- Email Card -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:14px;padding:20px;margin-bottom:20px;">
						<div style="font-size:12px;font-weight:700;color:#64748b;text-transform:uppercase;margin-bottom:6px;">
							Email Resmi Perusahaan
						</div>
						<a 
							id="text_block-21-512" 
							class="ct-link-text" 
							href="mailto:info@cleaniquemart.com" 
							style="font-size:17px;font-weight:700;color:#0c00ff;text-decoration:none;display:flex;align-items:center;gap:8px;"
						>
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
							info@cleaniquemart.com
						</a>
					</div>

					<!-- Office Address Card -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:14px;padding:22px;margin-bottom:20px;">
						<div style="font-size:12px;font-weight:700;color:#64748b;text-transform:uppercase;margin-bottom:6px;">
							Kantor Pusat Marketing &amp; Showroom
						</div>
						<div style="font-size:17px;font-weight:800;color:#0f172a;margin-bottom:6px;">
							PT. Indotech Berkah Abadi
						</div>
						<div id="text_block-39-512" class="ct-text-block" style="font-size:14px;color:#475569;line-height:1.6;margin-bottom:12px;">
							<?php echo esc_html( $office_addr ); ?>
						</div>
						<a 
							href="https://maps.google.com/?q=PT.+Indotech+Berkah+Abadi" 
							target="_blank" 
							rel="noopener noreferrer"
							style="font-size:13px;font-weight:700;color:#0c00ff;text-decoration:none;display:inline-flex;align-items:center;gap:4px;"
						>
							Buka Petunjuk Rute Google Maps &rarr;
						</a>
					</div>

					<!-- Operating Hours Card -->
					<div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:14px;padding:20px;">
						<div style="font-size:12px;font-weight:700;color:#64748b;text-transform:uppercase;margin-bottom:8px;">
							Jam Operasional Kerja
						</div>
						<div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;font-size:13.5px;color:#334155;">
							<div>
								<strong>Senin – Jumat:</strong><br>
								08.00 – 17.00 WIB
							</div>
							<div>
								<strong>Sabtu:</strong><br>
								08.00 – 15.00 WIB
							</div>
						</div>
						<div style="font-size:12px;color:#64748b;margin-top:10px;padding-top:8px;border-top:1px dashed #cbd5e1;">
							<em>*Hari Minggu &amp; Libur Nasional tetap melayani via WhatsApp Hotline</em>
						</div>
					</div>
				</div>

				<!-- Right Column: Interactive Map & Quick Consultation Form -->
				<div id="div_block-22-512" class="ct-div-block" style="width:100%;">
					<!-- Google Map Embed -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;overflow:hidden;box-shadow:0 6px 18px rgba(0,0,0,0.06);margin-bottom:28px;">
						<div style="padding:14px 18px;background:#f8fafc;border-bottom:1px solid #e2e8f0;display:flex;align-items:center;justify-content:space-between;">
							<div style="font-size:13px;font-weight:700;color:#0f172a;display:flex;align-items:center;gap:6px;">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0c00ff" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
								Lokasi Google Maps PT Indotech Berkah Abadi
							</div>
							<span style="font-size:11px;color:#64748b;">Sleman, Yogyakarta</span>
						</div>
						<div id="shortcode-36-512" class="ct-shortcode" style="height:340px;width:100%;">
							<iframe 
								src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3953.5551500464962!2d110.3701973!3d-7.7307823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59288dd94bf1%3A0x85893801502c7f4c!2sPT.%20Indotech%20Berkah%20Abadi!5e0!3m2!1sid!2sid!4v1755759794114!5m2!1sid!2sid" 
								width="100%" 
								height="100%" 
								style="border:0;display:block;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade"
							></iframe>
						</div>
					</div>

					<!-- Quick Consultation Form Card -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;padding:28px;box-shadow:0 6px 18px rgba(0,0,0,0.06);">
						<div style="display:flex;align-items:center;gap:10px;margin-bottom:12px;">
							<span style="width:36px;height:36px;border-radius:8px;background:#e0e7ff;display:flex;align-items:center;justify-content:center;color:#0c00ff;">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
							</span>
							<div>
								<h3 style="font-size:18px;font-weight:800;color:#0f172a;margin:0;">Form Konsultasi Cepat</h3>
								<div style="font-size:12px;color:#64748b;">Langsung terhubung dengan Tim Customer Support</div>
							</div>
						</div>

						<form id="cm-contact-form" onsubmit="handleContactSubmit(event);">
							<div style="margin-bottom:14px;">
								<label style="display:block;font-size:13px;font-weight:700;color:#334155;margin-bottom:6px;">Nama Lengkap</label>
								<input 
									type="text" 
									id="cm-contact-name" 
									required 
									placeholder="Contoh: Bpk. Hendra Pratama" 
									style="width:100%;padding:10px 14px;border:1.5px solid #cbd5e1;border-radius:8px;font-size:14px;box-sizing:border-box;outline:none;"
								>
							</div>

							<div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:14px;">
								<div>
									<label style="display:block;font-size:13px;font-weight:700;color:#334155;margin-bottom:6px;">Nomor WhatsApp</label>
									<input 
										type="tel" 
										id="cm-contact-phone" 
										required 
										placeholder="08xxxxxxxxxx" 
										style="width:100%;padding:10px 14px;border:1.5px solid #cbd5e1;border-radius:8px;font-size:14px;box-sizing:border-box;outline:none;"
									>
								</div>
								<div>
									<label style="display:block;font-size:13px;font-weight:700;color:#334155;margin-bottom:6px;">Kota / Domisili</label>
									<input 
										type="text" 
										id="cm-contact-city" 
										required 
										placeholder="Contoh: Yogyakarta" 
										style="width:100%;padding:10px 14px;border:1.5px solid #cbd5e1;border-radius:8px;font-size:14px;box-sizing:border-box;outline:none;"
									>
								</div>
							</div>

							<div style="margin-bottom:14px;">
								<label style="display:block;font-size:13px;font-weight:700;color:#334155;margin-bottom:6px;">Keperluan / Pertanyaan</label>
								<select 
									id="cm-contact-topic" 
									style="width:100%;padding:10px 14px;border:1.5px solid #cbd5e1;border-radius:8px;font-size:14px;box-sizing:border-box;outline:none;background:#ffffff;"
								>
									<option value="Peluang Usaha Paket Kemitraan">Peluang Usaha Paket Kemitraan Depot</option>
									<option value="Cek Kuota Wilayah Kecamatan">Cek Kuota Wilayah / Radius 3 Km</option>
									<option value="Pemesanan Sabun Curah Grosir">Pemesanan Sabun Curah / Kimia Laundry</option>
									<option value="Konsultasi Lainnya">Konsultasi Lainnya</option>
								</select>
							</div>

							<div style="margin-bottom:18px;">
								<label style="display:block;font-size:13px;font-weight:700;color:#334155;margin-bottom:6px;">Pesan Tambahan (Opsional)</label>
								<textarea 
									id="cm-contact-notes" 
									rows="3" 
									placeholder="Tuliskan pertanyaan spesifik Anda seputar Cleanique Mart..." 
									style="width:100%;padding:10px 14px;border:1.5px solid #cbd5e1;border-radius:8px;font-size:14px;box-sizing:border-box;outline:none;resize:vertical;"
								></textarea>
							</div>

							<button 
								type="submit" 
								style="width:100%;background:#0c00ff;color:#ffffff;padding:14px 20px;border:none;border-radius:999px;font-size:15px;font-weight:700;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:8px;transition:background 0.2s;"
								onmouseover="this.style.background='#0800a5'"
								onmouseout="this.style.background='#0c00ff'"
							>
								<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
								Kirim via WhatsApp CS Resmi &rarr;
							</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
</main>

<script>
function handleContactSubmit(e) {
	e.preventDefault();
	var name  = document.getElementById('cm-contact-name').value.trim();
	var phone = document.getElementById('cm-contact-phone').value.trim();
	var city  = document.getElementById('cm-contact-city').value.trim();
	var topic = document.getElementById('cm-contact-topic').value;
	var notes = document.getElementById('cm-contact-notes').value.trim();

	var text = "Halo *Cleanique Mart*, saya ingin berkonsultasi:\n\n"
	         + "👤 *Nama:* " + name + "\n"
	         + "📱 *WhatsApp:* " + phone + "\n"
	         + "📍 *Kota:* " + city + "\n"
	         + "📌 *Topik:* " + topic + "\n";
	
	if (notes) {
		text += "📝 *Pesan:* " + notes + "\n";
	}

	var waUrl = "https://api.whatsapp.com/send/?phone=6287885590088&text=" + encodeURIComponent(text);
	window.open(waUrl, '_blank');
}
</script>

<?php
get_footer();
