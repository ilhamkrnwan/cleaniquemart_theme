/**
 * Cleanique Mart Theme - Main Interactive JavaScript
 * Vanilla ES6+, Zero Dependencies, High Performance
 */

document.addEventListener('DOMContentLoaded', () => {
  initProductTabs();
  initAccordionFAQ();
  initMobileDrawer();
  initWhatsAppModal();
  initHeaderScroll();
  initSmoothScroll();
});

/**
 * 1. Product Catalog Category Filter Tabs
 */
function initProductTabs() {
  const tabButtons = document.querySelectorAll('.cm-tab-btn');
  const productCards = document.querySelectorAll('.cm-product-card');

  if (!tabButtons.length || !productCards.length) return;

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      tabButtons.forEach(b => b.classList.remove('cm-active'));
      btn.classList.add('cm-active');

      const filter = btn.getAttribute('data-filter');

      productCards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          card.style.display = 'flex';
          setTimeout(() => { card.style.opacity = '1'; }, 20);
        } else {
          card.style.display = 'none';
          card.style.opacity = '0';
        }
      });
    });
  });
}

/**
 * 2. Accordion FAQ
 */
function initAccordionFAQ() {
  const faqItems = document.querySelectorAll('.cm-faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.cm-faq-question');
    if (!question) return;

    question.addEventListener('click', () => {
      const isOpen = item.classList.contains('cm-open');

      // Tutup item lain
      faqItems.forEach(i => i.classList.remove('cm-open'));

      // Buka item yang di-klik jika belum terbuka
      if (!isOpen) {
        item.classList.add('cm-open');
      }
    });
  });
}

/**
 * 3. Mobile Navigation Drawer
 */
function initMobileDrawer() {
  const toggle = document.getElementById('cm-mobile-toggle');
  const drawer = document.getElementById('cm-mobile-drawer');
  const close = document.getElementById('cm-drawer-close');
  const overlay = document.getElementById('cm-drawer-overlay');
  const links = document.querySelectorAll('.cm-drawer-nav a, .cm-drawer-cta a');

  if (!toggle || !drawer) return;

  function openDrawer() {
    drawer.classList.add('cm-open');
    if (overlay) overlay.classList.add('cm-open');
    drawer.setAttribute('aria-hidden', 'false');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    drawer.classList.remove('cm-open');
    if (overlay) overlay.classList.remove('cm-open');
    drawer.setAttribute('aria-hidden', 'true');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  toggle.addEventListener('click', (e) => {
    e.preventDefault();
    openDrawer();
  });

  if (close) {
    close.addEventListener('click', (e) => {
      e.preventDefault();
      closeDrawer();
    });
  }

  if (overlay) {
    overlay.addEventListener('click', closeDrawer);
  }

  links.forEach(l => {
    l.addEventListener('click', closeDrawer);
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && drawer.classList.contains('cm-open')) {
      closeDrawer();
    }
  });
}

/**
 * 4. Smart WhatsApp Lead Modal
 */
function initWhatsAppModal() {
  const modal = document.getElementById('cm-lead-modal');
  const triggers = document.querySelectorAll('.cm-trigger-modal');
  const closeBtn = document.getElementById('cm-modal-close');
  const overlay = modal ? modal.querySelector('.cm-modal-overlay') : null;
  const form = document.getElementById('cm-lead-form');

  if (!modal) return;

  function openModal(presetPackage = '') {
    modal.classList.add('cm-open');
    document.body.style.overflow = 'hidden';

    if (presetPackage && form) {
      const select = form.querySelector('#cm-lead-package');
      if (select) select.value = presetPackage;
    }
  }

  function closeModal() {
    modal.classList.remove('cm-open');
    document.body.style.overflow = '';
  }

  triggers.forEach(trig => {
    trig.addEventListener('click', (e) => {
      e.preventDefault();
      const pkg = trig.getAttribute('data-package') || '';
      openModal(pkg);
    });
  });

  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  if (overlay) overlay.addEventListener('click', closeModal);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('cm-open')) {
      closeModal();
    }
  });

  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('cm-lead-name').value.trim();
      const city = document.getElementById('cm-lead-city').value.trim();
      const pkg = document.getElementById('cm-lead-package').value;
      const need = document.getElementById('cm-lead-need').value.trim();

      const phone = (window.cleaniqueData && window.cleaniqueData.waPhone) ? window.cleaniqueData.waPhone : '087885590088';
      const cleanPhone = phone.replace(/[^0-9]/g, '').replace(/^0/, '62');

      const message = `Halo *cleaniquemart.com*, saya ingin konsultasi pendaftaran kemitraan depot sabun:
- *Nama:* ${name}
- *Kota/Wilayah:* ${city}
- *Pilihan Paket:* ${pkg}
- *Keterangan Tambahan:* ${need || 'Mohon kirimkan proposal dan informasi ketersediaan kuota wilayah.'}`;

      const waUrl = `https://api.whatsapp.com/send/?phone=${cleanPhone}&text=${encodeURIComponent(message)}&type=phone_number&app_absent=0`;
      
      closeModal();
      window.open(waUrl, '_blank');
    });
  }
}

/**
 * 5. Sticky Header Shadow on Scroll
 */
function initHeaderScroll() {
  const header = document.getElementById('cm-header');
  if (!header) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      header.classList.add('cm-scrolled');
    } else {
      header.classList.remove('cm-scrolled');
    }
  }, { passive: true });
}

/**
 * 6. Smooth Scrolling for In-Page Anchors with Header Offset
 */
function initSmoothScroll() {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  const header = document.getElementById('cm-header');

  anchorLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href === '#' || href.startsWith('#cm-lead-modal')) return;

      const targetEl = document.querySelector(href);
      if (targetEl) {
        e.preventDefault();
        const headerHeight = header ? header.offsetHeight : 70;
        const targetPos = targetEl.getBoundingClientRect().top + window.pageYOffset - headerHeight - 12;

        window.scrollTo({
          top: targetPos,
          behavior: 'smooth'
        });
      }
    });
  });
}
