# kenalan-yuk
Project PKL dengan judul kenalan yuk

# Langkah-langkah akses website
1. buat database dengan nama "kenalan"
2. buka file .env
3. sesuaikan DB_USERNAME dan DB_PASSWORD sesuai dengan lokal Anda
4. buka terminal / cmd pada direktori project
5. jalankan "php artisan serve" pada terminal / cmd
6. akses website dengan alamat yang tertera pada terminal / cmd

# step setup project
1. usahakan pakai php 7.4
2. copy .env.example jadi .env
3. jalankan composer install (jangan sampai ada error)
4. jalankan npm install (jangan sampai ada error, warning tidak apa-apa)
5. jalankan npm run dev
6. buat db di local
7. setting .env sesuai local masing-masing
8. jalankan php artisan key:generate
9. jalankan php artisan migrate:fresh --seed
10. (OPSIONAL) jalankan php artisan serve
11. akses webnya, selesai

Note : silahkan jalankan perintah "php artisan serve" kalau pingin pakai web servernya laravel sendiri

# akun default
1. Halaman /admin-panel
    username: admin
    password: pastibisa
2. Halaman /login
    email: user@mail.com
    password: pastibisa
