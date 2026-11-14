# Penjelasan Kasus Uji Input (Valid & Tidak Valid)

**Objek Pengujian:** Mini Project - Aplikasi Formulir Data Mahasiswa (`mini_project.php`)

## A. Kasus Input Valid

### 1. Kasus Valid 1: Data Standar Mahasiswa Aktif

* **Data yang Dimasukkan:**

  * **Nama:** Bima

  * **NIM:** 312510122

  * **Program Studi:** Teknik Informatika

  * **Semester:** 3

  * **Email:** bima@gmail.com

* **Hasil & Penjelasan:**

  * Sistem menerima seluruh data dan menampilkan kotak hijau **"Ringkasan Data Mahasiswa Berhasil Diterima"**.

  * Seluruh kolom terisi, semester berupa bilangan bulat positif dalam rentang yang diizinkan ($1 \le \text{semester} \le 14$), dan email lolos pemeriksaan fungsi `filter_var(..., FILTER_VALIDATE_EMAIL)`.

### 2. Kasus Valid 2: Input dengan Spasi Berlebih di Awal/Akhir dan Karakter Khusus

* **Data yang Dimasukkan:**

  * **Nama:** `  Siti Aisyah <script>alert('tes')</script>  `

  * **NIM:** `2023102011`

  * **Program Studi:** Sistem Informasi

  * **Semester:** 14

  * **Email:** siti_aisyah99@gmail.com

* **Hasil & Penjelasan:**

  * Sistem tetap menerima data dan menampilkan ringkasan hasil.

  * Fungsi `trim()` otomatis membersihkan spasi berlebih di awal dan akhir teks.

  * Karakter tag `<script>` tidak dieksekusi sebagai pop-up JavaScript, melainkan ditampilkan apa adanya sebagai teks biasa berkat sanitasi fungsi `htmlspecialchars()`. Nilai semester `14` juga diterima karena berada tepat pada batas maksimum rentang yang ditentukan.

## B. Kasus Input Tidak Valid

### 1. Kasus Tidak Valid 1: Format Email Salah dan Semester di Luar Rentang

* **Data yang Dimasukkan:**

  * **Nama:** Andi Wijaya

  * **NIM:** 2024101088

  * **Program Studi:** Teknik Informatika

  * **Semester:** 18 *(atau angka 0 / negatif)*

  * **Email:** andiwijaya.gmail.com *(tanpa tanda `@`)*

* **Hasil & Penjelasan:**

  * Sistem menolak penyimpanan data dan menampilkan daftar pesan kesalahan berwarna merah:

    * *"Format email tidak valid."*

    * *"Semester harus berupa angka antara 1 sampai 14."*

  * Validasi server-side menangkap ketidaksesuaian format email serta angka semester yang melebihi batas maksimal 14 (meskipun atribut `max="14"` di HTML dimanipulasi melalui *Inspect Element*).

### 2. Kasus Tidak Valid 2: Kolom Wajib Diisi Hanya dengan Spasi Kosong

* **Data yang Dimasukkan:**

  * **Nama:** `      ` *(hanya karakter spasi)*

  * **NIM:** `      ` *(hanya karakter spasi)*

  * **Program Studi:** Teknik Elektro

  * **Semester:** 2

  * **Email:** elektro@kampus.ac.id

* **Hasil & Penjelasan:**

  * Sistem menolak input dan memunculkan pesan error:

    * *"Nama wajib diisi."*

    * *"NIM wajib diisi."*

  * Meskipun atribut `required` pada HTML meloloskan karakter spasi karena dianggap berisi karakter, fungsi `trim()` di sisi server menghapus seluruh spasi kosong tersebut sehingga string menjadi kosong (`""`) dan berhasil diblokir oleh validasi PHP.