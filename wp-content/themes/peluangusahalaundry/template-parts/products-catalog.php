<?php
/**
 * Template Part: Products Catalog — Dark NEO FACTORY
 * Theme: Peluang Usaha Laundry
 */
?>
<section class="catalog-section" id="katalog" aria-label="Katalog produk kimia laundry">
  <div class="container" style="position: relative; z-index: 1;">

    <!-- Header -->
    <div class="catalog-header">
      <div class="catalog-header-text">
        <span class="t-section-label reveal">Koleksi Lengkap Manufaktur</span>
        <h2 class="catalog-heading reveal reveal-delay-1">Galeri Produk Chemical<br>&amp; Pewangi Laundry</h2>
      </div>
    </div>

    <!-- Filter tabs -->
    <div class="catalog-tabs" role="tablist" aria-label="Filter kategori produk">
      <button type="button" class="cat-tab active" data-filter="all"    role="tab" aria-selected="true">Semua</button>
      <button type="button" class="cat-tab" data-filter="parfum"        role="tab" aria-selected="false">Parfum Laundry</button>
      <button type="button" class="cat-tab" data-filter="deterjen"      role="tab" aria-selected="false">Deterjen</button>
      <button type="button" class="cat-tab" data-filter="softener"      role="tab" aria-selected="false">Softener &amp; Pelicin</button>
      <button type="button" class="cat-tab" data-filter="antinoda"      role="tab" aria-selected="false">Anti Noda</button>
      <button type="button" class="cat-tab" data-filter="biang"         role="tab" aria-selected="false">Biang Konsentrat</button>
      <button type="button" class="cat-tab" data-filter="cucipiring"    role="tab" aria-selected="false">Cuci Piring &amp; Tangan</button>
    </div>

    <!-- Products grid -->
    <div class="products-grid" role="list">

      <!-- 1. Parfum Laundry Orchid Brand -->
      <article class="product-card reveal" data-category="parfum" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/PARFUM-removebg-preview.png"
            alt="Parfum Laundry Orchid Brand — Bibit IFRA Swiss"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Parfum Laundry</span>
          <h3 class="product-name">Parfum Laundry Orchid Brand</h3>
          <p class="product-desc">Formulasi bibit parfum standar IFRA dengan pelarut murni demineral. Harum mewah tahan 14–30 hari, tidak meninggalkan bercak pada pakaian.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">Botol 1L &bull; Jerigen 5L</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Parfum Laundry Orchid Brand">Pesan Grosir</button>
        </div>
      </article>

      <!-- 2. DETERMAT Liquid -->
      <article class="product-card reveal reveal-delay-1" data-category="deterjen" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/deterjen-cair.png"
            alt="DETERMAT Liquid Detergent — Matic Front & Top Load"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Deterjen Cair</span>
          <h3 class="product-name">DETERMAT Liquid Detergent</h3>
          <p class="product-desc">Deterjen cair rendah busa untuk mesin cuci front &amp; top loading. Teknologi Color Arrest — tidak meninggalkan kerak pada selang mesin.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">Formula Color Arrest</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Deterjen Determat Matic">Pesan Grosir</button>
        </div>
      </article>

      <!-- 3. DETERMAT ECO (Biang) -->
      <article class="product-card reveal reveal-delay-2" data-category="deterjen biang" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/NEW-DETERMAT-ECO-6.png"
            alt="Determat ECO Biang Konsentrat 1kg Jadi 20 Liter"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Biang Konsentrat</span>
          <h3 class="product-name">DETERMAT ECO Konsentrat</h3>
          <p class="product-desc">1 Kg menghasilkan 20 Liter deterjen siap pakai. Solusi hemat kargo terbaik untuk mitra luar Pulau Jawa. Lolos uji Labkesda DIY.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">1 kg &rarr; 20 L</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Determat Eco">Pesan Grosir</button>
        </div>
      </article>

      <!-- 4. ESSENZ O'Clean -->
      <article class="product-card reveal" data-category="deterjen" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/essenZ.jpg"
            alt="ESSENZ O Clean Deterjen Ultra Konsentrat"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Deterjen Konsentrat</span>
          <h3 class="product-name">ESSENZ &amp; O&apos;CLEAN Detergent</h3>
          <p class="product-desc">Formula pelepasan kotoran aktif untuk pakaian kerja berat, seragam bernoda minyak, dan linen hotel berbintang.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">Ekstra Bersih Aktif</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Essenz O Clean">Pesan Grosir</button>
        </div>
      </article>

      <!-- 5. SOFTSENSE Softener -->
      <article class="product-card reveal reveal-delay-1" data-category="softener" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/softener.png"
            alt="SOFTSENSE Fabric Softener — Pelembut Pakaian"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Softener</span>
          <h3 class="product-name">SOFTSENSE Fabric Softener</h3>
          <p class="product-desc">Melembutkan serat kain hingga pori terdalam, mereduksi listrik statis, memudahkan proses setrika agar pakaian licin sempurna.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">Aroma Lembut Mewah</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Softener Softsense">Pesan Grosir</button>
        </div>
      </article>

      <!-- 6. Pelicin Setrika GLIKA -->
      <article class="product-card reveal reveal-delay-2" data-category="softener" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/pelicin_setrika-removebg-preview.png"
            alt="Pelicin Setrika Glika Orchid Brand"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Pelicin Setrika</span>
          <h3 class="product-name">Pelicin &amp; Pewangi Setrika Glika</h3>
          <p class="product-desc">Pakaian licin seketika, mencegah kain gosong akibat panas setrika, mengunci semerbak keharuman segar sepanjang hari.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">Kemasan 1L &bull; 5L</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Pelicin Setrika Glika">Pesan Grosir</button>
        </div>
      </article>

      <!-- 7. Kimia Anti Noda -->
      <article class="product-card reveal" data-category="antinoda" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/anti-noda-bandel-5l-e-1.jpg"
            alt="Chemical Anti Noda Bandel — Darah, Karat, Tinta"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Anti Noda</span>
          <h3 class="product-name">Varian Kimia Anti Noda Bandel</h3>
          <p class="product-desc">Formula spotting spesifik: noda darah, karat, tinta, jamur, minyak, &amp; kuning kerah — tanpa merusak warna dasar kain.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">Darah &bull; Karat &bull; Tinta</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Kimia Anti Noda">Pesan Grosir</button>
        </div>
      </article>

      <!-- 8. Sabun Cuci Piring CUPIR -->
      <article class="product-card reveal reveal-delay-1" data-category="cucipiring" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/cupir001.png"
            alt="Sabun Cuci Piring CUPIR Ekstrak Jeruk Nipis"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Cuci Piring</span>
          <h3 class="product-name">Sabun Cuci Piring CUPIR</h3>
          <p class="product-desc">Formula kesat seketika penghilang lemak &amp; bau amis. Busa melimpah, food grade, lembut di tangan, sangat hemat untuk rumah makan &amp; warteg.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">Jerigen 5L &bull; Botol</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Sabun Cuci Piring Cupir">Pesan Grosir</button>
        </div>
      </article>

      <!-- 9. Biang O'Clean -->
      <article class="product-card reveal reveal-delay-2" data-category="cucipiring biang" role="listitem">
        <div class="product-img-area">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2022-06-06-at-11.33.29-1.jpeg"
            alt="Paket Biang O Clean Sabun Cuci Piring 1kg Jadi 15L"
            width="220" height="220" loading="lazy"
          >
        </div>
        <div>
          <span class="product-cat-label">Biang Konsentrat</span>
          <h3 class="product-name">Paket Bahan O&apos;CLEAN (1kg → 15L)</h3>
          <p class="product-desc">Biang sabun cuci piring konsentrat. Campur air di kota Anda — menghasilkan 15 Liter sabun kental siap pakai atau siap repack.</p>
        </div>
        <div class="product-footer">
          <span class="product-spec">Hemat Ongkir Kargo 10×</span>
          <button type="button" class="btn btn-ghost btn-sm" data-open-modal data-package="Pemesanan Paket Bahan O Clean">Pesan Grosir</button>
        </div>
      </article>

    </div><!-- /products-grid -->
  </div><!-- /container -->
</section>
