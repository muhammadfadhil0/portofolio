# Laravel Portfolio

Sebuah template portfolio modern yang dibangun dengan Laravel. Template ini siap dan boleh kalian pakai.

## Konfigurasi

Untuk mengubah data portfolio, edit file `config/portofolio.php`. Tidak memerlukan database karena semua konfigurasi disimpan dalam file PHP.

```php
// config/portofolio.php
return [
    'name' => 'Nama Anda',
    'title' => 'Job Title',
    'bio' => 'Deskripsi singkat tentang Anda',
    // ... dankonfigurasi lainnya
];
```

## Struktur Component

Template ini menggunakan sistem component yang terpisah untuk setiap bagian UI, bisa di lihat di dalam `resources/views/components`:

-   `resources/views/components/education-section.blade.php` - Riwayat pendidikan
-   `resources/views/components/hero-section.blade.php` - Section hero/banner
-   `resources/views/components/work-experience.blade.php` - Section riwayat pekerjaan
-   `resources/views/components/project-section.blade.php` - Section portfolio/karya
-   `resources/views/components/contact.blade.php` - Section kontak

## Tutorial Deploy Laravel ke Shared Hosting (AeonFree)

Jika Anda ingin coba untuk deploy website kalian ke dalam web hosting, akan saya bantu untuk tutorialnya. Sebenarnya paling tepat jika Anda deploy VPS atau penyedia seperti railway, dan lain sebagainya.

### Persiapan

**Requirements:**

-   Project Laravel yang sudah jadi
-   Hosting dengan PHP 8.1+ (AeonFree support PHP 8.3)
-   File Manager atau FTP Access

### Sebelum mulai

**Yang harus di perhatikan**

-   Tutorial ini hanya untuk kebutuhan deploy website tanpa database
-   Untuk Infinityfree, atau hosting yang lain saya belum tahu. Di sini saya hanya menggunakan AeonFree dan terbukti berhasil.

### Langkah 1: Persiapan File di Local

Optimize Laravel untuk production:

```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Langkah 2: Upload File ke Hosting

Upload semua file dan folder Laravel ke `htdocs/`:

✅ **Semua folder:** `app/`, `bootstrap/`, `config/`, `database/`, `public/`, `resources/`, `routes/`, `storage/`, `vendor/`, `tests/`

✅ **Semua file:** `artisan`, `composer.json`, `composer.lock`, `.env`, dll

❌ **SKIP:** folder `node_modules/` (tidak perlu diupload)

### Langkah 3: Setup File .htaccess

Buat file `.htaccess` di root `htdocs/` dengan isi:

```apache
# Proteksi file sensitif
<Files ".env">
    Order allow,deny
    Deny from all
</Files>

<Files "composer.json">
    Order allow,deny
    Deny from all
</Files>

RedirectMatch 403 ^/storage/(.*)$
RedirectMatch 403 ^/bootstrap/(.*)$
RedirectMatch 403 ^/app/(.*)$
RedirectMatch 403 ^/config/(.*)$

# Laravel Rewrite Rules
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Handle X-XSRF-Token Header
    RewriteCond %{HTTP:x-xsrf-token} .
    RewriteRule .* - [E=HTTP_X_XSRF_TOKEN:%{HTTP:X-XSRF-Token}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

### Langkah 4: Pindahkan File dari Folder public/

Pindahkan semua isi `htdocs/public/` ke `htdocs/`:

-   `index.php`
-   folder `build/` (assets CSS/JS)
-   folder `img/` (gambar)
-   `robots.txt`
-   `favicon.ico`

Hapus folder `public/` yang sudah kosong

### Langkah 5: Edit File index.php

Edit file `htdocs/index.php`, ubah path:

**Sebelumnya:**

```php
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
```

**Menjadi:**

```php
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
```

### Langkah 6: Konfigurasi File .env

Edit file `htdocs/.env`:

```env
APP_NAME=Laravel
APP_ENV=production
APP_KEY=base64:your-app-key-here
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=
SESSION_DRIVER=file
CACHE_STORE=file
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

### Langkah 7: Set Permission Folder

Set permission folder `storage/` dan subfoldernya ke **755**:

-   `storage/`
-   `storage/framework/`
-   `storage/framework/cache/`
-   `storage/framework/sessions/`
-   `storage/framework/views/`
-   `storage/logs/`

### Langkah 8: Fix Vite Assets (Jika Error)

Jika ada error "Vite manifest not found":

1. Buat folder `htdocs/public/`
2. Copy folder `htdocs/build/` ke dalam `htdocs/public/`
3. Struktur akhir: `htdocs/public/build/manifest.json`

### Langkah 9: Fix CSS Framework (Jika Styling Berantakan)

Jika Tailwind CSS tidak load dengan sempurna:

Tambahkan CDN Tailwind di blade template:

```html
<script src="https://cdn.tailwindcss.com"></script>
```

## Troubleshooting

-   **Error 403:** File `index.php` tidak di root `htdocs`
-   **Error 500:** Permission folder `storage` salah atau path di `index.php` salah
-   **Database Error:** Set `DB_CONNECTION=` kosong di `.env`
-   **Style Berantakan:** Gunakan CDN CSS framework

✅ **Verified Working:** Tutorial ini sudah ditest dan berhasil di AeonFree dengan PHP 8.3

## License

Free to use untuk personal dan komersial.
