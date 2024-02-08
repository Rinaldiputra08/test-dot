<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

<h1>Langkah-langkah Testing Sprint 2</h1>

<ol>
  <li>
    <strong>Pindah ke Branch Sprint 2:</strong>
    <ul>
      <li>Gunakan perintah <code>git checkout sprint2</code> untuk beralih ke branch <code>sprint2</code>.</li>
    </ul>
  </li>
  <li>
    <strong>Gunakan Database dari Sprint 1:</strong>
    <ul>
      <li>Gunakan database yang sama yang digunakan pada sprint 1.</li>
    </ul>
  </li>
  <li>
    <strong>Menambahkan Data Dummy untuk User:</strong>
    <ul>
      <li>Gunakan perintah <code>php artisan db:seed</code> untuk menambahkan data dummy untuk user menggunakan seeder.</li>
    </ul>
  </li>
  <li>
    <strong>Testing Aplikasi Menggunakan Postman:</strong>
    <ul>
      <li>Buka Postman dan buat tiga request baru:</li>
        <li>Notes : url http://127.0.0.1:8000 disesuaikan dengan url sever yang berjalan di local</li>
      <ol type="a">
        <li>
          <strong>Login:</strong>
          <ul>
            <li>Masukkan URL <code>http://127.0.0.1:8000/api/login</code> dengan method POST.</li>
            <li>Pada bagian body, isi form data dengan:
              <ul>
                <li>Key <code>email</code>, value <code>user@example.com</code>.</li>
                <li>Key <code>password</code>, value <code>password</code>.</li>
              </ul>
            </li>
            <li>Klik SEND. Jika berhasil, akan mengembalikan token. Salin nilai dari key token.</li>
          </ul>
        </li>
        <li>
          <strong>Get Province:</strong>
          <ul>
            <li>Masukkan URL <code>http://127.0.0.1:8000/api/search/provinces</code>.</li>
            <li>Pada bagian param, masukkan key <code>Id</code> dengan nilai angka yang Anda cari (misalnya 1).</li>
            <li>URL akan menjadi: <code>http://127.0.0.1:8001/api/search/provinces?id=1</code>.</li>
            <li>Pilih method GET.</li>
            <li>Pada bagian Authorization, pilih Bearer Token, lalu masukkan token yang telah disalin saat login.</li>
            <li>Klik SEND.</li>
            <li>Hasil dari API akan ditampilkan.</li>
          </ul>
        </li>
        <li>
          <strong>Get Cities:</strong>
          <ul>
            <li>Masukkan URL <code>http://127.0.0.1:8000/api/search/cities?id=1</code>.</li>
            <li>Pada bagian param, masukkan key <code>Id</code> dengan nilai angka yang Anda cari (misalnya 1).</li>
            <li>URL akan menjadi: <code>http://127.0.0.1:8000/api/search/cities?id=1</code>.</li>
            <li>Pilih method GET.</li>
            <li>Pada bagian Authorization, pilih Bearer Token, lalu masukkan token yang telah disalin saat login.</li>
            <li>Klik SEND.</li>
            <li>Hasil dari API akan ditampilkan.</li>
          </ul>
        </li>
      </ol>
    </ul>
  </li>
</ol>

