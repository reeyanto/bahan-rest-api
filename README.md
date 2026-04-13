# Rest Server Example

Contoh project sederhana yang digunakan sebagai rest server pada materi latihan rest api, dibuat menggunakan Laravel 13 dan SQLite database.

## Persyaratan
1. PHP (versi 8.3): `https://php.net`
2. Composer: `https://getcomposer.org`
3. Git (opsional): `https://git-scm.com`

## Tahapan Instalasi
1. Download project menggunakan git dengan perintah: `git clone <url>` lalu masuk ke dalam `folder project` atau download secara manual
2. Install dependency: `composer install`
3. Copy file environment: `cp .env.example .env` atau `copy .env.example .env`
4. Konfigurasi database pada .env
5. Generate application key: `php artisan key:generate`
6. Storage link: `php artisan storage:link`
7. Jalankan migration: `php artisan migrate --seed` 