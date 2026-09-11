<?php
/**
 * Template Part: Smart WhatsApp Lead Generator Modal
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="cm-modal" id="cm-lead-modal" role="dialog" aria-modal="true" aria-labelledby="cm-modal-title-text">
	<div class="cm-modal-overlay"></div>
	<div class="cm-modal-content">
		<button type="button" class="cm-modal-close" id="cm-modal-close" aria-label="Tutup Dialog">&times;</button>
		
		<div style="display:inline-flex;align-items:center;gap:0.4rem;color:var(--cm-emerald-600);font-size:0.8125rem;font-weight:700;margin-bottom:0.5rem;">
			<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
			Terhubung Langsung ke CS Resmi
		</div>

		<h3 class="cm-modal-title" id="cm-modal-title-text">Konsultasi Kemitraan Depot Sabun</h3>
		<p class="cm-modal-subtitle">
			Isi data singkat Anda di bawah ini, sistem kami akan langsung menyusun pesan otomatis ke WhatsApp CS Cleanique Mart.
		</p>

		<form id="cm-lead-form">
			<div class="cm-form-group">
				<label class="cm-form-label" for="cm-lead-name">Nama Lengkap Anda *</label>
				<input type="text" class="cm-form-control" id="cm-lead-name" placeholder="Contoh: Budi Santoso" required>
			</div>

			<div class="cm-form-group">
				<label class="cm-form-label" for="cm-lead-city">Kota / Kabupaten Rencana Buka *</label>
				<input type="text" class="cm-form-control" id="cm-lead-city" placeholder="Contoh: Sleman, Depok, Malang" required>
			</div>

			<div class="cm-form-group">
				<label class="cm-form-label" for="cm-lead-package">Peminatan Paket Kemitraan</label>
				<select class="cm-form-control" id="cm-lead-package">
					<option value="Paket King (Promo Rp 27.5 Juta) [Best Seller]">Paket King (Promo Rp 27.5 Juta) [Paling Diminati]</option>
					<option value="Paket Starter (Rp 15 Juta)">Paket Starter (Rp 15 Juta)</option>
					<option value="Konsultasi Terlebih Dahulu / Tanya Wilayah">Konsultasi Terlebih Dahulu / Tanya Wilayah</option>
					<option value="Pemesanan Jerigen Curah / Bahan Kimia">Pemesanan Jerigen Curah / Bahan Kimia</option>
				</select>
			</div>

			<div class="cm-form-group">
				<label class="cm-form-label" for="cm-lead-need">Catatan / Rencana Lokasi (Opsional)</label>
				<input type="text" class="cm-form-control" id="cm-lead-need" placeholder="Contoh: Sudah punya ruko / ingin buka di teras rumah">
			</div>

			<button type="submit" class="cm-btn cm-btn-emerald cm-btn-lg cm-btn-block" style="margin-top:1.5rem;">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
				Lanjutkan Chat ke WhatsApp &rarr;
			</button>
		</form>
	</div>
</div>
