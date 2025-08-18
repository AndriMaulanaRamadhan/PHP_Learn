<?php
echo "Jika nilai andri adalah 80, 90, 75, 89, 60, 100. maka berapakah nilai rata-rata yang akan didapatkan andri?";
echo "<br>";
$a = 80;
$b = 90;
$c = 75;
$d = 89;
$e = 60;
$f = 100;

$nilai_rata_rata = ($a + $b + $c + $d + $e +$f) / 6;
echo "Jawabannya adalah : " . $nilai_rata_rata;
echo "<br>";

echo "jika rata-rata nilai yang dimiliki andri lebih dari 75 maka lulus, apakah andri lulus?";

if ($nilai_rata_rata >= 75) {
    echo "Lulus";
}else {
    echo"Tidak Lulus";
}