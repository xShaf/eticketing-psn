Disclaimer:
- Buat masa sekarang hanya login, update profile dan delete account sahaja berfungsi.
- Kalau sudah ada existing database dalam phpmyadmin 'psn', sila tukar nama database di dalam .env supaya semasa migrate boleh generate database baharu.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=psn //tukar nama disini
DB_USERNAME=root
DB_PASSWORD=



Cara nak guna:

Pastikan XAMPP sudah running di background.
Kalau MySQL guna port lain, sila tukar di file .env

1. Dapatkan files semua ni tak kisah macam mana cara sekali pun.
2. extract dan simpan semua files ni dalam satu folder
3. Buka VSCode dan Open folder korang save tu. Pastikan korang cd pada tempat yang betul
4. Buka Terminal dalam VSCode dan run: php artisan serve
5. Buka satu lagi terminal dan run: php artisan migrate
   Korang akan di prompt untuk create database, tulis yes
6. boom! dah boleh guna.

selamat mencuba
