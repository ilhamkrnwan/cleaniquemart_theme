<?php
/**
 * Template Part: Interactive Profit Simulator (Calibrated to 30jt/mo Real Distributor Case)
 * Theme: Peluang Usaha Laundry
 */
?>
<section class="simulator-section section-padding" id="kalkulator">
  <div class="container">
    <div class="section-header">
      <span class="clean-badge">
        <span class="badge-dot"></span>
        Simulasi Laba Bersih Nyata
      </span>
      <h2>Berapa Potensi Keuntungan Bersih yang Bisa Anda Hasilkan per Bulan?</h2>
      <p>Berdasarkan studi kasus nyata distributor kami di lapangan yang mampu mencetak omzet 100+ Juta dan profit ± 30 Juta per bulan, Anda bisa mengukur potensi pendapatan di wilayah Anda:</p>
    </div>

    <div class="simulator-glass-card">
      <div class="simulator-controls">
        <h3>Atur Target Pasokan Harian di Wilayah Anda</h3>
        <p class="subtitle">Geser slider untuk menyesuaikan estimasi suplai harian ke laundry kiloan langganan, hotel melati, resto, dan rumah tangga.</p>

        <div class="slider-group">
          <div class="slider-header-row">
            <span class="slider-label">Penjualan per Hari (Jerigen 5 Liter):</span>
            <span class="slider-val-pill" id="val-volume">40 Jerigen / Hari</span>
          </div>
          <input type="range" id="slider-volume" min="5" max="150" value="40" step="5">
          <div class="slider-markers">
            <span>5 Jerigen (Starter)</span>
            <span>40 Jerigen (Target GM Hotel ±30jt)</span>
            <span>150+ Jerigen (Master)</span>
          </div>
        </div>

        <div class="slider-group">
          <div class="slider-header-row">
            <span class="slider-label">Margin Keuntungan Bersih per Jerigen:</span>
            <span class="slider-val-pill" id="val-margin">Rp 25.000</span>
          </div>
          <input type="range" id="slider-margin" min="5000" max="40000" value="25000" step="1000">
          <div class="slider-markers">
            <span>Rp 10.000</span>
            <span>Rp 25.000 (Margin Standar Pabrik)</span>
            <span>Rp 40.000</span>
          </div>
        </div>

        <div style="background: var(--bg-surface-subtle); padding: 1.15rem 1.35rem; border-radius: var(--radius-sm); border: 1px solid var(--border-subtle); font-size: 0.875rem; color: var(--text-muted); line-height: 1.55;">
          💡 <strong>Fakta Lapangan:</strong> 1 outlet laundry kiloan rata-rata membutuhkan 2&ndash;4 jerigen per minggu. Melayani 10&ndash;15 outlet tetap di kecamatan Anda sudah mampu menembus kuota 40 jerigen per hari secara rutin!
        </div>
      </div>

      <div class="simulator-dashboard">
        <div>
          <div class="profit-ticker-label">Proyeksi Laba Bersih Bulanan Anda</div>
          <div class="profit-display-amount" id="calc-monthly-profit">Rp 30.000.000</div>
          <div class="profit-sub-note">100% laba bersih milik Anda &mdash; tanpa potongan royalti sepeserpun</div>

          <div class="calc-breakdown-card">
            <div class="calc-row">
              <span class="label">Laba Bersih per Hari:</span>
              <span class="val" id="calc-daily-profit">Rp 1.000.000</span>
            </div>
            <div class="calc-row">
              <span class="label">Total Volume Terjual / Bulan:</span>
              <span class="val" id="calc-monthly-bottles">1.200 Jerigen</span>
            </div>
            <div class="calc-row">
              <span class="label">Status Margin:</span>
              <span class="val" style="color: #10B981;">Tangan Pertama Pabrik</span>
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-whatsapp btn-block btn-lg" id="btn-amankan-cuan">
          <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.83.82 2.796.82 3.18 0 5.767-2.586 5.768-5.766 0-3.18-2.587-5.766-5.768-5.766zm9.969 5.766c0 5.485-4.484 9.969-9.969 9.969-1.748 0-3.385-.456-4.819-1.252l-5.212 1.368 1.393-5.087c-.911-1.488-1.431-3.238-1.431-5.11 0-5.485 4.484-9.969 9.969-9.969 5.485 0 9.969 4.484 9.969 9.969z"/></svg>
          Konsultasikan Kuota Wilayah Ini ke WhatsApp Pabrik
        </button>
      </div>
    </div>
  </div>
</section>
