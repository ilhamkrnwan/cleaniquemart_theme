/**
 * Main JavaScript — LIQUID CLEAN × CLEAN LAB × NEO FACTORY
 * Theme: Peluang Usaha Laundry
 *
 * Features:
 * - Sticky header scroll behavior
 * - Mobile drawer toggle
 * - Scroll-reveal (Intersection Observer, no external library)
 * - Product catalog tab filter
 * - FAQ hairline accordion
 * - Lead modal (open/close/WhatsApp dispatch)
 * - prefers-reduced-motion awareness
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  initStickyHeader();
  initMobileDrawer();
  initScrollReveal();
  initCatalogTabs();
  initFaqAccordion();
  initLeadModal();
  initNavHighlight();
});

/* ==========================================================================
   1. STICKY HEADER — transparent → frosted on scroll
   ========================================================================== */
function initStickyHeader() {
  const header = document.getElementById('site-header');
  if (!header) return;

  const onScroll = () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // Run once on load
}

/* ==========================================================================
   2. MOBILE DRAWER
   ========================================================================== */
function initMobileDrawer() {
  const toggleBtn = document.getElementById('mobile-toggle-btn');
  const drawer    = document.getElementById('mobile-drawer');
  const backdrop  = document.getElementById('drawer-backdrop');
  const closeBtn  = document.getElementById('drawer-close-btn');

  if (!toggleBtn || !drawer) return;

  function openDrawer() {
    drawer.classList.add('open');
    backdrop.classList.add('open');
    toggleBtn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    closeBtn?.focus();
  }

  function closeDrawer() {
    drawer.classList.remove('open');
    backdrop.classList.remove('open');
    toggleBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    toggleBtn.focus();
  }

  toggleBtn.addEventListener('click', openDrawer);
  closeBtn?.addEventListener('click', closeDrawer);
  backdrop?.addEventListener('click', closeDrawer);

  // Close on nav link click
  drawer.querySelectorAll('.drawer-link').forEach(link => {
    link.addEventListener('click', closeDrawer);
  });

  // Close on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && drawer.classList.contains('open')) {
      closeDrawer();
    }
  });
}

/* ==========================================================================
   3. SCROLL-REVEAL — Intersection Observer
   ========================================================================== */
function initScrollReveal() {
  // Respect prefers-reduced-motion
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReduced) {
    // Make all reveals immediately visible
    document.querySelectorAll('.reveal').forEach(el => {
      el.classList.add('visible');
    });
    return;
  }

  const reveals = document.querySelectorAll('.reveal');
  if (!reveals.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // Fire once
      }
    });
  }, {
    threshold: 0.10,
    rootMargin: '0px 0px -40px 0px'
  });

  reveals.forEach(el => observer.observe(el));
}

/* ==========================================================================
   4. PRODUCT CATALOG TABS
   ========================================================================== */
function initCatalogTabs() {
  const tabs  = document.querySelectorAll('.cat-tab');
  const cards = document.querySelectorAll('.product-card');

  if (!tabs.length || !cards.length) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Update tab states
      tabs.forEach(t => {
        t.classList.remove('active');
        t.setAttribute('aria-selected', 'false');
      });
      tab.classList.add('active');
      tab.setAttribute('aria-selected', 'true');

      const filter = tab.dataset.filter;

      cards.forEach(card => {
        const categories = (card.dataset.category || '').split(' ');
        const show = filter === 'all' || categories.includes(filter);

        if (show) {
          card.style.display = 'flex';
          // Small stagger on re-reveal
          requestAnimationFrame(() => {
            card.style.opacity = '1';
          });
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/* ==========================================================================
   5. FAQ ACCORDION
   ========================================================================== */
function initFaqAccordion() {
  const items = document.querySelectorAll('.faq-item');
  if (!items.length) return;

  items.forEach(item => {
    const btn  = item.querySelector('.faq-btn');
    const body = item.querySelector('.faq-body');
    if (!btn || !body) return;

    btn.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');

      // Close all others
      items.forEach(other => {
        if (other !== item) {
          other.classList.remove('active');
          const otherBtn = other.querySelector('.faq-btn');
          if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
        }
      });

      // Toggle this one
      item.classList.toggle('active', !isOpen);
      btn.setAttribute('aria-expanded', String(!isOpen));
    });
  });
}

/* ==========================================================================
   6. LEAD MODAL
   ========================================================================== */
function initLeadModal() {
  const backdrop   = document.getElementById('lead-modal-backdrop');
  const closeBtn   = document.getElementById('modal-close-btn');
  const packageInput = document.getElementById('lead-package');
  const form       = document.getElementById('lead-form');

  if (!backdrop) return;

  // Open triggers
  const openTriggers = document.querySelectorAll('[data-open-modal]');
  openTriggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
      const pkg = trigger.dataset.package || '';
      if (packageInput) packageInput.value = pkg;
      openModal();
    });
  });

  function openModal() {
    backdrop.classList.add('active');
    backdrop.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    // Focus first input
    setTimeout(() => {
      const first = backdrop.querySelector('input, select, textarea');
      first?.focus();
    }, 100);
  }

  function closeModal() {
    backdrop.classList.remove('active');
    backdrop.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  // Close triggers
  closeBtn?.addEventListener('click', closeModal);

  backdrop.addEventListener('click', (e) => {
    if (e.target === backdrop) closeModal();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && backdrop.classList.contains('active')) {
      closeModal();
    }
  });

  // Form submit — build WhatsApp message
  form?.addEventListener('submit', (e) => {
    e.preventDefault();

    const nama    = document.getElementById('lead-name')?.value.trim();
    const kota    = document.getElementById('lead-city')?.value.trim();
    const phone   = document.getElementById('lead-phone')?.value.trim();
    const minat   = document.getElementById('lead-interest')?.value;
    const pesan   = document.getElementById('lead-message')?.value.trim();
    const paket   = packageInput?.value || 'Umum';

    // Basic validation
    if (!nama || !kota || !phone) {
      // Focus first empty required field
      const required = ['lead-name', 'lead-city', 'lead-phone'];
      for (const id of required) {
        const el = document.getElementById(id);
        if (el && !el.value.trim()) {
          el.focus();
          el.style.borderColor = '#DC2626';
          el.addEventListener('input', () => { el.style.borderColor = ''; }, { once: true });
          return;
        }
      }
      return;
    }

    // Build WhatsApp message
    const waNumber = '628785590088';
    const minatMap = {
      'starter':     'Agen Pemula / Starter',
      'distributor': 'Distributor Resmi',
      'depo':        'Mitra Depo Wilayah',
      'korporat':    'Pengadaan Korporat',
      'maklon':      'Maklon / Private Label',
      'lainnya':     'Informasi umum',
    };

    const lines = [
      `Halo, saya tertarik bergabung sebagai mitra Orchid Brand.`,
      ``,
      `*Nama:* ${nama}`,
      `*Kota:* ${kota}`,
      `*No. WA:* ${phone}`,
      `*Minat:* ${minatMap[minat] || 'Informasi umum'}`,
      paket && paket !== 'Umum' ? `*Paket:* ${paket}` : '',
      pesan ? `*Pesan:* ${pesan}` : '',
    ].filter(Boolean).join('\n');

    const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(lines)}`;

    // Disable button briefly
    const submitBtn = document.getElementById('lead-submit-btn');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.textContent = 'Membuka WhatsApp…';
    }

    window.open(waUrl, '_blank', 'noopener,noreferrer');

    // Reset form after short delay
    setTimeout(() => {
      closeModal();
      form.reset();
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = `
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.83.82 2.796.82 3.18 0 5.767-2.586 5.768-5.766 0-3.18-2.587-5.766-5.768-5.766zm9.969 5.766c0 5.485-4.484 9.969-9.969 9.969-1.748 0-3.385-.456-4.819-1.252l-5.212 1.368 1.393-5.087c-.911-1.488-1.431-3.238-1.431-5.11 0-5.485 4.484-9.969 9.969-9.969 5.485 0 9.969 4.484 9.969 9.969z"/></svg>
          Kirim via WhatsApp
        `;
      }
    }, 800);
  });
}

/* ==========================================================================
   7. ACTIVE NAV HIGHLIGHT — on scroll
   ========================================================================== */
function initNavHighlight() {
  const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
  if (!navLinks.length) return;

  const sections = Array.from(navLinks)
    .map(link => {
      const id = link.getAttribute('href').slice(1);
      return { link, section: document.getElementById(id) };
    })
    .filter(({ section }) => section !== null);

  const onScroll = () => {
    const scrollY = window.scrollY + 100; // Offset for header height

    let current = null;
    for (const { section } of sections) {
      if (section.offsetTop <= scrollY) {
        current = section.id;
      }
    }

    sections.forEach(({ link, section }) => {
      link.classList.toggle('active', section.id === current);
    });
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}
