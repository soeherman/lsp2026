## Latihan Kelas XII 2026

Langkah-langkah yang harus dilakukan

- Buat Migrasi (Sesuai urutan dibawah)
- Buat View Menggunakan konsep Blade Templating 

## Cara membuat Model + Migration
`php artisan make:model Kategori -m` <br>
`php artisan make:model Penulis -m` <br>
`php artisan make:model Berita -m`

## Cara menjalankan migration
`php artisan migrate` <br>
`php artisan migrate:fresh` <br>
- jika ada perubahan pada migration

## Cara membuat Controller
`php artisan make:controller ControllerPenulis -r` <br>
`php artisan make:controller ControllerBerita -r`

## Cara link storage
`php artisan storage:link`