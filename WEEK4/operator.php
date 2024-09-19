<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$hasilTambahSama = $a += $b;
$hasilKurangSama = $a -= $b;
$hasilKaliSama = $a *= $b;
$hasilBagiSama = $a /= $b;
$sisaBagiSama = $a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil penambahan $a dan $b     : ($hasilTambah) <br>";
echo "Hasil pengurangan $a dan $b    : ($hasilKurang) <br>";
echo "Hasil perkalian $a dan $b      : ($hasilKali) <br>";
echo "Hasil pembagian $a dan $b      : ($hasilBagi) <br>";
echo "Sisa bagi $a dan $b            : ($sisaBagi) <br>";
echo "Pangkat $a dan $b              : ($pangkat) <br>";

echo "Hasil sama $a dan $b              : ($hasilSama) <br>";
echo "Hasil tidak sama $a dan $b        : ($hasilTidakSama) <br>";
echo "Hasil lebih kecil $a dan $b       : ($hasilLebihKecil) <br>";
echo "Hasil lebih besar $a dan $b       : ($hasilLebihBesar) <br>";
echo "Hasil lebih kecil sama $a dan $b  : ($hasilLebihKecilSama) <br>";
echo "Hasil lebih besar sama $a dan $b  : ($hasilLebihBesarSama) <br>";

echo "Hasil penambahan sama $a dan $b     : ($hasilTambahSama) <br>";
echo "Hasil pengurangan sama $a dan $b    : ($hasilKurangSama) <br>";
echo "Hasil perkalian sama $a dan $b      : ($hasilKaliSama) <br>";
echo "Hasil pembagian sama $a dan $b      : ($hasilBagiSama) <br>";
echo "Sisa bagi sama $a dan $b            : ($sisaBagiSama) <br>";

echo "Hasil identik A dan B ($hasilIdentik) <br>";
echo "Hasil tidak identik A dan B ($hasilTidakIdentik) <br>";

?>