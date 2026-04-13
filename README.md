# Rest Server Example

Contoh project sederhana yang digunakan sebagai rest server pada materi latihan rest api, dibuat menggunakan Laravel 13 dan SQLite database.

## Preview
### Login
<img width="1680" height="974" alt="Screen Shot 2026-04-14 at 01 47 09" src="https://github.com/user-attachments/assets/138daf45-0723-4fa5-ad1f-eaef386ef587" />

### Dashboard
<img width="1680" height="974" alt="Screen Shot 2026-04-14 at 01 48 00" src="https://github.com/user-attachments/assets/f388c5ab-945b-4a42-9292-c1857dec258f" />

### Category
<img width="1680" height="974" alt="Screen Shot 2026-04-14 at 01 48 44" src="https://github.com/user-attachments/assets/8e4e3def-2d16-4aea-9721-a845e957c99c" />

### Product
<img width="1680" height="974" alt="Screen Shot 2026-04-14 at 01 49 05" src="https://github.com/user-attachments/assets/0ad9b33b-228d-4505-b08d-f5645952ba57" />

## Persyaratan
1. PHP (versi 8.3): `https://php.net`
2. Composer: `https://getcomposer.org`
3. Git (opsional): `https://git-scm.com`

## Tahapan Instalasi & Penggunaan
1. Download project menggunakan git dengan perintah: `git clone <url>` lalu masuk ke dalam `folder project` atau download secara manual
2. Install dependency: `composer install`
3. Copy file environment: `cp .env.example .env` atau `copy .env.example .env`
4. Konfigurasi database pada .env
5. Generate application key: `php artisan key:generate`
6. Storage link: `php artisan storage:link`
7. Jalankan migration: `php artisan migrate --seed`
8. Jalankan project: `php artisan serve`
9. Akses ke dashboard: `127.0.0.1:8000/admin`, login menggunakan email: `admin@example.com` password: `password`
