# 🌸 Portofolio Kuliah - Vanesa Mardiana Putri

Website portofolio modern yang dibangun menggunakan **Framework Laravel**, menampilkan karya selama masa perkuliahan di bidang **Web Development**, **UI/UX Design**, dan **Machine Learning**.

---

## ✨ Fitur Utama

1. **Header & Profile Showcase**:
   - Foto profil representatif dengan animasi gradient ring & badge status ketersediaan kerja (*Open for Opportunities*).
   - Deskripsi singkat profil mahasiswi Teknik Informatika (*Vanesa Mardiana Putri*).
   - Metrik statistik pencapaian kuliah (proyek selesai, tahun koding, indeks kepuasan SUS 87.5).

2. **Animated Tech Stack Marquee ("Skill yang Bisa Berjalan")**:
   - Banner animasi berjalan horizontal tak terbatas (*infinite continuous marquee stream*).
   - Dilengkapi logo vektor otentik: HTML5, CSS3, JavaScript, PHP, Laravel, Python, MySQL, Tailwind CSS, Bootstrap, Figma, Git & GitHub, Scikit-Learn, Pandas, dan Jupyter Notebook.
   - Efek interaktif: otomatis berhenti berputar saat kursor diarahkan (*pause on hover*).

3. **Keahlian & Kompetensi Mendalam**:
   - Pembagian 4 pilar kompetensi: Web Development, UI/UX Design, Machine Learning & Data Science, serta Development Workflow.
   - Progress bar persentase penguasaan beserta deskripsi implementasi teknis.

4. **Portofolio Proyek Kuliah**:
   - **Machine Learning (Featured Project)**:
     - *Segmentasi Produk–Outlet Kedai Kopi untuk Perencanaan Stok*
     - Berdasarkan analisis 53.820 struk transaksi kasir aktual di 3 cabang outlet.
     - Komparasi 7 model klaster: K-Means (Euclidean, Manhattan, Cosine), DBSCAN (Euclidean, Manhattan, Cosine), dan HDBSCAN dengan evaluasi metrik Silhouette & Davies-Bouldin.
   - **Web Development**:
     - *KopiKita - Point of Sale (POS) & Smart Inventory Web App* (Laravel 11/13, PHP 8, MySQL, Tailwind CSS, Alpine.js)
     - *EduPortal - Sistem Informasi Manajemen Akademik Kampus* (Laravel, Bootstrap 5, MySQL, Role Auth)
     - *EcoCare - Platform Donasi & Penjemputan Sampah Daur Ulang* (Laravel REST API, Leaflet.js)
   - **UI/UX Design**:
     - *KopiKita Mobile - Quick Order & Digital Loyalty App UX Case Study* (Figma, SUS Score 87.5 / Grade A)
     - *HealthEase - Telemedicine & Senior-Friendly Healthcare Mobile App* (WCAG 2.1 AA Accessibility)
     - *FinVibe - Personal Finance & Budget Planner Dashboard* (Figma, Data Visualization, Dark/Light Mode)
   - Filter tab interaktif untuk menyaring kategori proyek.
   - Modal dialog detail lengkap saat kartu proyek diklik.

5. **Hubungan Sosial & Kontak Interaktif**:
   - Tautan langsung ke **GitHub**, **LinkedIn**, **Email**, dan **WhatsApp**.
   - Formulir pesan interaktif dengan proteksi CSRF, validasi data, pesan feedback, dan penyimpanan langsung ke database SQLite Laravel.

---

## 🚀 Cara Menjalankan Proyek

Pastikan Anda berada di direktori `vanesa-portfolio`:

```bash
cd vanesa-portfolio
```

Jalankan server lokal Laravel:

```bash
php artisan serve
```

Buka peramban (browser) dan akses alamat:
```
http://127.0.0.1:8000
```

---

## 🧪 Menjalankan Pengujian Otomatis (Testing)

Proyek ini dilengkapi pengujian fitur otomatis (Pest / PHPUnit):

```bash
php artisan test
```

Semua endpoint, render halaman, dan formulir kontak telah teruji 100% lulus (Pass).

---

## 📁 Struktur Direktori Penting

- `app/Http/Controllers/PortfolioController.php` : Data profil, skill berjalan, dan daftar proyek portofolio.
- `app/Http/Controllers/ContactController.php` : Logika penanganan pesan masuk formulir kontak.
- `resources/views/portfolio.blade.php` : Antarmuka utama Blade dengan Tailwind CSS dan animasi marquee.
- `public/images/` : Aset ilustrasi SVG avatar Vanesa dan thumbnail mockup proyek.
- `database/migrations/` : Migrasi database untuk tabel kontak dan sistem.
- `tests/Feature/PortfolioTest.php` : Pengujian fungsionalitas portofolio dan formulir kontak.
