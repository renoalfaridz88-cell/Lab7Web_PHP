<?php
// Function hitung diskon asli dari modul
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

$hargaAkhir = hitungDiskon(150000, 10);
echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".") . "<br><br>";

// Function tambahan 1: Menghitung Luas Persegi Panjang
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}
echo "Luas Persegi Panjang (p=10, l=5): " . hitungLuasPersegiPanjang(10, 5) . "<br>";

// Function tambahan 2: Menentukan Kelulusan
function cekKelulusan($nilai) {
    return ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
}
echo "Status Kelulusan (Nilai 75): " . cekKelulusan(75);
?>