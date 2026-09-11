<?php
/**
 * Footer Template — LIQUID CLEAN × CLEAN LAB × NEO FACTORY
 * Theme: Peluang Usaha Laundry
 */
?>

<!-- Lead Modal -->
<div class="lead-modal-backdrop" id="lead-modal-backdrop" role="dialog" aria-modal="true" aria-labelledby="modal-title-text" aria-hidden="true">
  <div class="lead-modal">
    <div class="modal-header">
      <div>
        <div class="modal-title" id="modal-title-text">Konsultasi dengan Tim Pabrik</div>
        <div class="modal-subtitle">Isi formulir singkat — respons dalam &lt; 1 jam kerja</div>
      </div>
      <button type="button" class="modal-close-cross" id="modal-close-btn" aria-label="Tutup formulir">
        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    <div class="modal-body">
      <form id="lead-form" novalidate>
        <div class="form-group">
          <label for="lead-name" class="form-label">Nama lengkap <span class="req" aria-label="wajib diisi">*</span></label>
          <input type="text" id="lead-name" name="nama" class="form-input" placeholder="mis. Budi Santoso" required autocomplete="name">
        </div>

        <div class="form-group">
          <label for="lead-city" class="form-label">Kota / Kabupaten <span class="req" aria-label="wajib diisi">*</span></label>
          <input type="text" id="lead-city" name="kota" class="form-input" placeholder="mis. Surabaya, Jawa Timur" required autocomplete="address-level2">
        </div>

        <div class="form-group">
          <label for="lead-phone" class="form-label">Nomor WhatsApp aktif <span class="req" aria-label="wajib diisi">*</span></label>
          <input type="tel" id="lead-phone" name="whatsapp" class="form-input" placeholder="mis. 08123456789" required autocomplete="tel">
        </div>

        <div class="form-group">
          <label for="lead-interest" class="form-label">Tertarik sebagai</label>
          <select id="lead-interest" name="minat" class="form-select">
            <option value="">Pilih minat Anda</option>
            <option value="starter">Agen pemula / Starter</option>
            <option value="distributor">Distributor Resmi</option>
            <option value="depo">Mitra Depo Wilayah</option>
            <option value="korporat">Pengadaan Korporat (hotel, RS, restoran)</option>
            <option value="maklon">Maklon / Private Label</option>
            <option value="lainnya">Lainnya / Ingin tanya-tanya dulu</option>
          </select>
        </div>

        <div class="form-group">
          <label for="lead-message" class="form-label">Pertanyaan atau pesan (opsional)</label>
          <textarea id="lead-message" name="pesan" class="form-textarea" rows="3" placeholder="Ceritakan kebutuhan Anda..."></textarea>
        </div>

        <input type="hidden" name="paket" id="lead-package" value="">
        <input type="hidden" name="url" value="<?php echo esc_url(home_url('/')); ?>">

        <button type="submit" class="btn btn-aqua-grad btn-block btn-lg" id="lead-submit-btn">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.83.82 2.796.82 3.18 0 5.767-2.586 5.768-5.766 0-3.18-2.587-5.766-5.768-5.766zm9.969 5.766c0 5.485-4.484 9.969-9.969 9.969-1.748 0-3.385-.456-4.819-1.252l-5.212 1.368 1.393-5.087c-.911-1.488-1.431-3.238-1.431-5.11 0-5.485 4.484-9.969 9.969-9.969 5.485 0 9.969 4.484 9.969 9.969z"/></svg>
          Kirim via WhatsApp
        </button>
        <p class="modal-note">Data Anda aman dan hanya digunakan untuk keperluan konsultasi pabrik.</p>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand col -->
      <div>
        <div class="footer-brand-logo">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/agen_orchid_logo-removebg-preview-e1663827329523.png"
            alt="Logo Orchid Brand"
            class="footer-brand-img"
            width="32" height="32"
            loading="lazy"
          >
          <div class="footer-brand-name">PeluangUsaha<span>Laundry</span></div>
        </div>
        <p class="footer-tagline">
          Platform distribusi kimia laundry &amp; pembersih rumah tangga Orchid Brand — langsung dari pabrik PT Indotech Berkah Abadi, Sleman D.I. Yogyakarta.
        </p>
        <a
          href="https://wa.me/628785590088"
          target="_blank"
          rel="noopener"
          class="btn btn-wa btn-sm"
          style="display: inline-flex;"
          aria-label="Chat WhatsApp Pabrik"
        >
          <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.83.82 2.796.82 3.18 0 5.767-2.586 5.768-5.766 0-3.18-2.587-5.766-5.768-5.766zm9.969 5.766c0 5.485-4.484 9.969-9.969 9.969-1.748 0-3.385-.456-4.819-1.252l-5.212 1.368 1.393-5.087c-.911-1.488-1.431-3.238-1.431-5.11 0-5.485 4.484-9.969 9.969-9.969 5.485 0 9.969 4.484 9.969 9.969z"/></svg>
          WhatsApp Pabrik
        </a>
      </div>

      <!-- Products col -->
      <div>
        <div class="footer-col-title">Produk</div>
        <ul class="footer-links" role="list">
          <li><a href="#katalog" class="footer-link">Parfum Laundry</a></li>
          <li><a href="#katalog" class="footer-link">Deterjen Cair &amp; Biang</a></li>
          <li><a href="#katalog" class="footer-link">Softener &amp; Pelicin</a></li>
          <li><a href="#katalog" class="footer-link">Anti Noda</a></li>
          <li><a href="#katalog" class="footer-link">Sabun Cuci Piring</a></li>
          <li><a href="#katalog" class="footer-link">Biang Konsentrat</a></li>
        </ul>
      </div>

      <!-- Program col -->
      <div>
        <div class="footer-col-title">Program Mitra</div>
        <ul class="footer-links" role="list">
          <li><a href="#paket" class="footer-link">Paket Starter</a></li>
          <li><a href="#paket" class="footer-link">Distributor Resmi</a></li>
          <li><a href="#paket" class="footer-link">Program Depo Wilayah</a></li>
          <li><a href="#paket" class="footer-link">Korporat &amp; Hotel</a></li>
          <li><a href="#ekosistem" class="footer-link">Ekosistem Indotech</a></li>
        </ul>
      </div>

      <!-- Contact col -->
      <div>
        <div class="footer-col-title">Kontak Pabrik</div>
        <address style="font-style: normal;">
          <p class="footer-contact-item">
            Jl. Garuda No. 19C, Maguwoharjo,<br>
            Depok, Sleman, DIY 55282
          </p>
          <p class="footer-contact-item">
            <a href="tel:+628785590088">0878-5590-088</a>
          </p>
          <p class="footer-contact-item">
            <a href="mailto:info@orchid.co.id">info@orchid.co.id</a>
          </p>
          <p class="footer-contact-item">
            <a href="https://orchid.co.id" target="_blank" rel="noopener">orchid.co.id</a>
          </p>
        </address>
      </div>

    </div><!-- /footer-grid -->

    <!-- Bottom bar -->
    <div class="footer-bottom">
      <p class="footer-copy">
        &copy; <?php echo date('Y'); ?> PT Indotech Berkah Abadi. Hak cipta dilindungi.
      </p>
      <nav class="footer-legal" aria-label="Legal links">
        <a href="#" class="footer-legal-link">Kebijakan Privasi</a>
        <a href="#" class="footer-legal-link">Syarat &amp; Ketentuan</a>
      </nav>
    </div>

  </div><!-- /container -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
