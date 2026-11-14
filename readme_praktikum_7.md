# Praktikum 7: Pemrograman Server-Side dengan PHP

## 1. Tujuan Praktikum
* Memahami perbedaan konsep pemrosesan *client-side* dan *server-side*.
* Mengenali sintaks dasar PHP serta menjalankan file PHP melalui web server lokal.
* Menerapkan penggunaan variabel, tipe data, operator, percabangan, perulangan, dan *function* dalam PHP.
* Menerima dan memproses data masukan dari form HTML menggunakan metode `GET` dan `POST`.
* Melakukan validasi dan sanitasi input dasar di sisi server sebelum data ditampilkan atau diproses lebih lanjut.
* Membangun aplikasi web sederhana berbasis PHP yang mampu menerima, memproses, dan menampilkan ringkasan data pengguna secara aman.

## 2. Perangkat yang Digunakan
* **Sistem Operasi:** Windows 10 / 11
* **Web Server & PHP:** XAMPP (Apache Web Server & PHP)
* **Code Editor:** Visual Studio Code (VS Code)
* **Web Browser:** Google Chrome / Mozilla Firefox / Microsoft Edge

## 3. Cara Menjalankan Server Lokal
1. Buka aplikasi **XAMPP Control Panel** di komputer.
2. Klik tombol **Start** pada layanan **Apache** hingga statusnya berubah menjadi hijau (berjalan).
3. Pastikan seluruh file proyek telah disimpan di dalam folder `C:\xampp\htdocs\Lab7Web_PHP\`.
4. Buka web browser, lalu ketikkan alamat URL berikut pada address bar:
   * Halaman Utama (Latihan 1): `http://localhost/Lab7Web_PHP/`
   * File Latihan Lainnya: `http://localhost/Lab7Web_PHP/nama_file.php` (contoh: `http://localhost/Lab7Web_PHP/mini_project.php`).

## 4. Struktur File Proyek
```text
Lab7Web_PHP/
├── screenshots/       # Folder penyimpanan 7 gambar hasil screenshot browser
│   ├── latihan1.png
│   ├── latihan2.png
│   ├── latihan3.png
│   ├── latihan4.png
│   ├── latihan5.png
│   ├── latihan6.png
│   └── latihan7.png
├── index.php          # Latihan 1: Menjalankan script PHP dasar dan menampilkan waktu server
├── latihan2.php       # Latihan 2: Variabel, operator aritmatika, dan percabangan predikat nilai
├── latihan3.php       # Latihan 3: Penggunaan array dan perulangan foreach untuk daftar mahasiswa
├── latihan4.php       # Latihan 4: Pembuatan dan pemanggilan function (hitung diskon, luas, kelulusan)
├── latihan5.php       # Latihan 5: Pemrosesan form HTML menggunakan metode GET
├── latihan6.php       # Latihan 6: Pemrosesan form HTML menggunakan metode POST dan sanitasi output
├── latihan7.php       # Latihan 7: Pengolahan data transaksi sederhana beserta validasi angka
├── mini_project.php   # Mini Project: Aplikasi formulir pendaftaran data mahasiswa dengan validasi lengkap
├── kasus_uji_input.md # Dokumentasi kasus uji coba input valid dan tidak valid
└── README.md          # Dokumentasi utama laporan praktikum
```

## 5. Ringkasan Hasil Praktikum
* **Eksekusi Server-Side:** Kode PHP yang dijalankan melalui server lokal Apache berhasil diterjemahkan menjadi output HTML murni tanpa menampilkan kode sumber PHP di sisi browser.
* **Logika & Fungsi:** Perhitungan nilai akhir, predikat kelulusan, serta pemanggilan *function* berjalan akurat sesuai alur percabangan dan perulangan yang ditetapkan.
* **Metode GET vs POST:** Pada metode `GET`, parameter input terlihat langsung pada bagian query string URL browser, sedangkan pada metode `POST`, data dikirimkan melalui body request sehingga URL tetap bersih.
* **Validasi & Keamanan:** Penerapan validasi sisi server (`ctype_digit`, `is_numeric`, `filter_var`) berhasil menolak input yang tidak sesuai format meskipun atribut validasi HTML di sisi klien dilewati. Penggunaan fungsi `htmlspecialchars()` juga terbukti efektif mencegah eksekusi tag HTML/JavaScript berbahaya (XSS) saat menampilkan kembali input pengguna.

## 6. Dokumentasi Hasil Eksekusi (Screenshot)

### Latihan 1: Menjalankan PHP (`index.php`)
![Output Latihan 1](screenshots/latihan1.png)

### Latihan 2: Variabel, Operator, dan Percabangan (`latihan2.php`)
![Output Latihan 2](screenshots/latihan2.png)

### Latihan 3: Perulangan dan Array (`latihan3.php`)
![Output Latihan 3](screenshots/latihan3.png)

### Latihan 4: Membuat Function (`latihan4.php`)
![Output Latihan 4](screenshots/latihan4.png)

### Latihan 5: Memproses Form dengan GET (`latihan5.php`)
![Output Latihan 5](screenshots/latihan5.png)

### Latihan 6: Memproses Form dengan POST (`latihan6.php`)
![Output Latihan 6](screenshots/latihan6.png)

### Latihan 7: Pengolahan Data Sederhana (`latihan7.php`)
![Output Latihan 7](screenshots/latihan7.png)