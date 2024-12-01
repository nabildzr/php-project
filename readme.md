# Restaurant Management System

Aplikasi ini dibuat untuk memudahkan pengguna dalam mengelola restoran, seperti mengelola menu, mengelola stok, mengelola transaksi, dan lain-lain.

## Fitur

* Mengelola menu
* Mengelola stok
* Mengelola transaksi
* Mengelola user
* Mengelola role
* Laporan transaksi
* Laporan stok
* Laporan keuangan
* Pembelian menu
* Client Mengelola menu yang di simpan / cart

## Instalasi

1. Clone repository ini
2. Jalankan laragon/xampp (apache & mysql)
3. Collision database harus utf8mb4_general_ci
4. Menjalankan address harus http://localhost/restaurant/
5. 

## Konfigurasi

Ada dua konfigurasi, yaitu database untuk bagian admin dan ada juga untuk bagian client nya. Konfigurasi admin menggunakan database yang ada di folder admin/conf/ dan client menggunakan database yang ada di folder conf/config.php untuk isi variable nya dan juga untuk conf/connection.php untuk koneksi nya seperti mysqli_connect() nya yang akan digunakan nanti