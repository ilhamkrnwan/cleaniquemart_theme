const fs = require('fs');
const path = require('path');

const posts = JSON.parse(fs.readFileSync('docs/raw-data/posts.json', 'utf8'));

// Helper to convert HTML to clean Markdown
function htmlToMarkdown(html) {
  let md = html;
  
  // Clean up scripts, styles
  md = md.replace(/<script[\s\S]*?<\/script>/gi, '');
  md = md.replace(/<style[\s\S]*?<\/style>/gi, '');
  
  // Headings
  md = md.replace(/<h1[^>]*>([\s\S]*?)<\/h1>/gi, '\n# $1\n');
  md = md.replace(/<h2[^>]*>([\s\S]*?)<\/h2>/gi, '\n## $1\n');
  md = md.replace(/<h3[^>]*>([\s\S]*?)<\/h3>/gi, '\n### $1\n');
  md = md.replace(/<h4[^>]*>([\s\S]*?)<\/h4>/gi, '\n#### $1\n');
  md = md.replace(/<h5[^>]*>([\s\S]*?)<\/h5>/gi, '\n##### $1\n');
  
  // Paragraphs & Line Breaks
  md = md.replace(/<p[^>]*>([\s\S]*?)<\/p>/gi, '\n$1\n');
  md = md.replace(/<br\s*[\/]?>/gi, '\n');
  
  // Strong & Emphasis
  md = md.replace(/<strong[^>]*>([\s\S]*?)<\/strong>/gi, '**$1**');
  md = md.replace(/<b[^>]*>([\s\S]*?)<\/b>/gi, '**$1**');
  md = md.replace(/<em[^>]*>([\s\S]*?)<\/em>/gi, '*$1*');
  md = md.replace(/<i[^>]*>([\s\S]*?)<\/i>/gi, '*$1*');
  
  // Lists
  md = md.replace(/<li[^>]*>([\s\S]*?)<\/li>/gi, '- $1\n');
  md = md.replace(/<ul[^>]*>/gi, '\n');
  md = md.replace(/<\/ul>/gi, '\n');
  md = md.replace(/<ol[^>]*>/gi, '\n');
  md = md.replace(/<\/ol>/gi, '\n');
  
  // Links
  md = md.replace(/<a[^>]*href="([^"]*)"[^>]*>([\s\S]*?)<\/a>/gi, '[$2]($1)');
  
  // Images
  md = md.replace(/<img[^>]*src="([^"]*)"[^>]*alt="([^"]*)"[^>]*[\/]?>/gi, '![$2]($1)');
  md = md.replace(/<img[^>]*src="([^"]*)"[^>]*[\/]?>/gi, '![]($1)');
  
  // Blockquotes
  md = md.replace(/<blockquote[^>]*>([\s\S]*?)<\/blockquote>/gi, '\n> $1\n');
  
  // Strip remaining HTML tags
  md = md.replace(/<[^>]+>/g, '');
  
  // Decode common HTML entities
  md = md.replace(/&amp;/g, '&');
  md = md.replace(/&quot;/g, '"');
  md = md.replace(/&#8211;/g, '–');
  md = md.replace(/&#8217;/g, "'");
  md = md.replace(/&#8220;/g, '"');
  md = md.replace(/&#8221;/g, '"');
  md = md.replace(/&nbsp;/g, ' ');
  
  // Clean excessive blank lines
  md = md.replace(/\n{3,}/g, '\n\n');
  
  return md.trim();
}

const articleSlugMap = {
  'biang-karbol-wangi-sereh-pinus-cemara-5-liter': 'biang-karbol-wangi-sereh-pinus-cemara.md',
  'sabun-cuci-tangan-cair-dengan-paket-bahan-arai': 'sabun-cuci-tangan-cair-arai.md',
  'konsentrat-pembersih-lantai-solusi-super-hemat-untuk-lantai-bersih-dan-harum': 'konsentrat-pembersih-lantai.md',
  'softener-softsense-solusi-praktis-dan-ekonomis': 'softener-softsense.md',
  'konsentrat-pelicin-pakaian-praktis-hemat-dan-wangi': 'konsentrat-pelicin-pakaian.md',
  'paket-bahan-pewangi-laundry': 'paket-bahan-pewangi-laundry-essenz.md',
  'biang-sabun-cuci-piring-konsentrat': 'biang-sabun-cuci-piring-konsentrat.md',
  'deterjen-cair-terbaik': 'deterjen-cair-terbaik.md'
};

posts.forEach((p, idx) => {
  const fileName = articleSlugMap[p.slug] || (p.slug + '.md');
  const targetFile = path.join('docs/articles', fileName);
  
  const title = p.title.rendered.replace(/&amp;/g, '&');
  const excerpt = htmlToMarkdown(p.excerpt.rendered);
  const bodyMarkdown = htmlToMarkdown(p.content.rendered);
  
  const docLines = [
    '# Dokumentasi Artikel & Formulasi: ' + title,
    '',
    '> **URL Asli**: [' + p.link + '](' + p.link + ')  ',
    '> **Slug**: `' + p.slug + '`  ',
    '> **Tanggal Publikasi**: ' + p.date + '  ',
    '> **Kategori**: Artikel / Edukasi Produk Cleanique Lab  ',
    '> **Template WordPress Acuan**: `single.php`  ',
    '',
    '---',
    '',
    '## 1. Metadata & SEO Spec',
    '',
    '| Parameter | Nilai / Konfigurasi |',
    '| :--- | :--- |',
    '| **Title Tag** | ' + title + ' - Cleanique Mart |',
    '| **Meta Excerpt** | ' + excerpt.slice(0, 160) + '... |',
    '| **Canonical URL** | ' + p.link + ' |',
    '| **Schema Types** | `Article`, `BlogPosting`, `Product` |',
    '',
    '---',
    '',
    '## 2. Ringkasan Eksekutif & Karakter Produk',
    '',
    '- **Lini Produk**: Formulasi Inovasi Cleanique Lab & Cleanique Mart.',
    '- **Kemasan Asli**: Paket Konsentrat Biang Kering / Pasta (Mudah & Ringan Dikirim via Kargo).',
    '- **Rasio Pelarutan Air**: Menghasilkan 5 Liter hingga 15 Liter sabun siap pakai hanya dengan penambahan air.',
    '- **Nilai Jual Utama**: Menghemat biaya kebersihan bulanan hingga 60%, ramah lingkungan, tidak merusak kulit/serat, dan bersertifikasi aman.',
    '',
    '---',
    '',
    '## 3. Konten Lengkap Artikel (Wrapped Body Content)',
    '',
    bodyMarkdown,
    '',
    '---',
    '',
    '## 4. Implementasi Single Post WordPress (`single.php`)',
    '',
    '- **Template Hierarchy**: `single.php` -> `template-parts/content-single.php`',
    '- **Elemen Wajib**: Breadcrumbs (`Home > Blog > ' + title + '`), Author & Date badge, Social Share buttons, Floating WhatsApp Inquiry CTA, Related Posts (3 artikel serupa).',
    '- **Tautan Konversi WhatsApp**: Pada akhir artikel disematkan tombol order bahan:',
    '  ```',
    '  Halo CS Cleanique Mart, saya membaca artikel ' + title + '. Saya ingin memesan paket bahan konsentrat ini. Mohon info harga dan cara pengiriman.',
    '  ```'
  ];
  
  fs.writeFileSync(targetFile, docLines.join('\n'), 'utf8');
  console.log('Created ' + targetFile);
});

console.log('All 8 article docs successfully created!');
