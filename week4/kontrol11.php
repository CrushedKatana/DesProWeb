<?php

$nilaiSiswaa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswaa);
$jumlahSiswa = count($nilaiSiswaa);
$totalNilai = 0;

for ($i = 2; $i < $jumlahSiswa - 2; $i++) {
    $totalNilai += $nilaiSiswaa[$i];
}

$rataRata = $totalNilai / ($jumlahSiswa - 4);

echo "Total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Nilai rata-rata siswa: $rataRata";
?>