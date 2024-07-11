# DOKUMENTASI PROJECT CUSTOMER ORDER UNTUK PT MASHUD BERSAUDARA INTERNATIONAL

Ini adalah project dalam rangka menyimpan data-data yang diperlukan untuk pekerjaan terkait dalam Barokah Perkasa Group, khususnya pada business unit Shorebase di PT Mashud Bersaudara International. Saat ini project sudah siap dalam skala production dan bisa digunakan.

## TECH STACK

Project ini dibuat dengan:

-   PHP
-   Laravel
-   Filament
-   TailwindCSS
-   Livewire
-   AlpineJS
-   Filament Shield
-   PostgreSQL

## FITUR

Untuk sementara, fitur aplikasi ini masih terbatas dan digunakan untuk lingkup perusahaan saja. Beberapa diantaranya adalah:

-   Otentikasi dan otorisasi akses data
-   Merekam data penyewaan fasilitas bagi perusahaan yang ingin menggunakan fasilitas perusahaan

## KONFIGURASI

### Setup Environment

Sebelum memulai project, beberapa hal yang perlu diinstall adalah sebagai berikut:

-   PHP 7.4 keatas
-   PostgreSQL
-   Composer
-   Laragon

### Instalasi

Untuk memulai project dari awal, ada tiga metode

1. Dengan Laragon

-   Jalankan aplikasi Laragon, klik Start All, dan buat aplikasi dengan menu **Quick app**. Tunggu hingga instalasi project Laravel selesai, kemudian buka projectnya.
-   Install Filament dengan command `composer require filament/filament:"^3.2" -W`, setelah itu jalankan lagi `php artisan filament:install --panels`
-   Buat user baru dengan command `php artisan make:filament-user` untuk keperluan development. Setelah itu, pengembangan aplikasi bisa dilakukan sesuai dengan dokumentasi yang ada.
-   Untuk Filament Shield, instalasinya dilakukan dengan command `composer require bezhansalleh/filament-shield`, dan lakukan pengembangan sesuai dengan dokumentasi yang diberikan.

2. Dengan Composer (cara manual)

-   Install project dengan command `composer create-project laravel/laravel project-name`.
-   Untuk menjalankan aplikasi, bisa menggunakan command `php artisan serve`.
-   Untuk instalasi Filament dan Filament Shield, cara yang digunakan sama dengan cara instalasi diatas.

3. Clone project dari GitHub

-   Clone project ini dengan command `git clone https://github.com/data-center-bgp/data-center-bgp.git`.
-   Install project dengan menjalankan `composer install` dan `npm install`.
-   Untuk menjalankan aplikasi, bisa menggunakan command `php artisan serve`.
