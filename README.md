<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Belajar Laravel Spatie

### Repository untuk belajar basic laravel CRUD dan Extension Laravel Spatie

### Warning !!!

-   Php 8.0 atau diatasnya
-   Keperluan Spatie
    -   require "spatie/laravel-medialibrary:^10.0.0"
    -   require "spatie/laravel-activitylog:^4.0.0"
    -   require "spatie/laravel-permission:^5.0.0"

### Instalasi

-   Buka `cmd` atau `terminal` sejenisnya
-   Clone repository berikut `git clone https://github.com/farhanaghif/contoh_spatie.git`
-   Jalankan perintah `cd` untuk masuk ke direktori `contoh_spatie` yang baru saja dibuat
-   Install composer terlebih dahulu `composer install`
-   Buat database `contoh_spatie` dan hubungkan (cek di `.env`)
-   Jalankan `php artisan migrate` untuk data kosong
-   Atau import `contoh_spatie.sql` untuk data yang sudah disediakan
-   Jalankan `npm install` dan `npm run build` atau `npm run dev`
-   Clear cache terlebih dahulu dengan menjalankan `php artisan config:clear` atau `php artisan config:cache` atau `php artisan optimize`
-   Jalankan `php artisan serve` untuk menjalankan aplikasi
-   Done

<img src="https://github.com/farhanaghif/contoh_spatie/blob/main/public/screenshot/dashboard.png">

## Spatie Laravel Permission

### Contoh di Controller

![image.png](https://github.com/farhanaghif/contoh_spatie/blob/main/public/screenshot/permission-in-controller.png)

### Contoh di Blade View

![image.png](https://github.com/farhanaghif/contoh_spatie/blob/main/public/screenshot/permission-in-blade-view.png)

## Spatie Laravel Activity Log

![image.png](https://github.com/farhanaghif/contoh_spatie/blob/main/public/screenshot/activity-log.png)

## Spatie Laravel Media-Library

![image.png](https://github.com/farhanaghif/contoh_spatie/blob/main/public/screenshot/media-library.png)

## Polymorphic

![image.png](https://github.com/farhanaghif/contoh_spatie/blob/main/public/screenshot/polymorphic-1.png)
![image.png](https://github.com/farhanaghif/contoh_spatie/blob/main/public/screenshot/polymorphic-2.png)
