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
			<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
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
				<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
				Lanjutkan Chat ke WhatsApp &rarr;
			</button>
		</form>
	</div>
</div>
