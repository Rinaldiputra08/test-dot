<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Cara Instalasi dan menjalankan project ini

<h1>Sprint 1</h1>
<ol>
  <li>
    <strong>Clone Proyek dari GitHub:</strong>
    <ul>
      <li>Gunakan perintah <code>git clone https://github.com/Rinaldiputra08/test-dot.git</code> untuk mengunduh proyek dari GitHub.</li>
    </ul>
  </li>
  <li>
    <strong>Install Dependensi Menggunakan Composer:</strong>
    <ul>
      <li>Setelah proyek berhasil di-clone, buka terminal dan navigasikan ke direktori proyek.</li>
      <li>Jalankan perintah <code>composer install</code> untuk menginstal semua dependensi proyek.</li>
    </ul>
  </li>
  <li>
    <strong>Pindah ke Branch Sprint 1:</strong>
    <ul>
      <li>Gunakan perintah <code>git checkout sprint1</code> untuk beralih ke branch <code>sprint1</code>.</li>
    </ul>
  </li>
  <li>
    <strong>Nyalakan Server Lokal:</strong>
    <ul>
      <li>Gunakan MAMP, XAMPP, atau aplikasi sejenisnya untuk menyalakan server lokal.</li>
    </ul>
  </li>
  <li>
    <strong>Buka phpMyAdmin di Browser:</strong>
    <ul>
      <li>Buka browser dan masukkan alamat untuk phpMyAdmin (biasanya <code>http://localhost/phpmyadmin</code>).</li>
    </ul>
  </li>
  <li>
    <strong>Buat Database Baru:</strong>
    <ul>
      <li>Buat database baru dengan nama sesuai keinginan Anda.</li>
    </ul>
  </li>
  <li>
    <strong>Konfigurasi File .env:</strong>
    <ul>
      <li>Jika tidak ada, salin file <code>.env.example</code> dan beri nama <code>.env</code>.</li>
      <li>Edit file <code>.env</code> dan isi nilai <code>DB_DATABASE</code> dengan nama database yang baru dibuat.</li>
      <li>Jika menggunakan MAC, tambahkan <code>DB_PASSWORD=root</code> dan <code>DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock</code>.</li>
    </ul>
  </li>
  <li>
    <strong>Jalankan Migrasi Database:</strong>
    <ul>
      <li>Jalankan perintah <code>php artisan migrate</code> untuk menjalankan migrasi database.</li>
    </ul>
  </li>
  <li>
    <strong>Ambil Data dari API RajaOngkir:</strong>
    <ul>
      <li>Jalankan perintah <code>php artisan rajaongkir:fetch-data</code> untuk mengambil data dari API RajaOngkir.</li>
    </ul>
  </li>
  <li>
    <strong>Jalankan Aplikasi:</strong>
    <ul>
      <li>Gunakan perintah <code>php artisan serve</code> untuk menjalankan aplikasi.</li>
    </ul>
  </li>
  <li>
    <strong>Testing Menggunakan Postman:</strong>
    <ul>
      <li>Buka Postman dan buat 2 request baru untuk menguji endpoint <code>get province</code>.</li> dan <code>get cities</code>.</li>
      <li>Masukkan URL <code>http://127.0.0.1:8000/api/search/provinces</code>.</li> untuk testing province dan untuk testing cities masukan URL <code>http://127.0.0.1:8000/api/search/cities</code>.</li>
      <li>Tambahkan parameter dengan key <code>id</code> dan value sesuai dengan data yang ingin Anda cari (misalnya <code>1</code>).</li>
      <li>Pastikan untuk menambahkan header <code>Accept: application/json</code>.</li>
      <li>Pastikan method request adalah GET.</li>
      <li>Kirim request dan periksa hasil respons dari API.</li>
    </ul>
  </li>
</ol>
