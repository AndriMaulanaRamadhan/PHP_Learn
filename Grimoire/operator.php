<?php
$hasil = 10 + 5; // Penjumlahan
$hasil2 = +5; // Unary plus
$hasil3 = -5; // Unary minus
$hasil4 = 10 - 5; // Pengurangan
$hasil5 = 10 * 5; // Perkalian
$hasil6 = 10 / 5; // Pembagian
$hasil7 = 10 % 3; // Modulus
$hasil8 = 10 ** 2; // Eksponensiasi

var_dump($hasil);
echo "<br>";
var_dump($hasil2);
echo "<br>";
var_dump($hasil3);
echo "<br>";
var_dump($hasil4);
echo "<br>";
var_dump($hasil5);
echo "<br>";
var_dump($hasil6);
echo "<br>";
var_dump($hasil7);
echo "<br>";
var_dump($hasil8);
echo "<br>";

//aritmatika tanda kurung
$hasil9 = (10 + 5) * 2; // Hasilnya 30 karena operasi dalam tanda kurung dilakukan terlebih dahulu
var_dump($hasil9);
echo "<br>";

//aritmatika bukan angka
$hasil10 = "10" + 5; // Hasilnya 15 karena string "10" akan dikonversi menjadi angka 10
var_dump($hasil10);
echo "<br>";
$hasil11 = "10" . 5; // Hasilnya "105" karena operator titik (.) digunakan untuk menggabungkan string
var_dump($hasil11);
echo "<br>";

//increment dan decrement
$angka = 10;
$angka++; // Increment, angka menjadi 11
var_dump($angka);
echo "<br>";
$angka--; // Decrement, angka menjadi 10
var_dump($angka);
echo "<br>";

//operator perbandingan
var_dump(10 == "10"); // true, karena nilai sama meskipun tipe berbeda
var_dump(10 === "10"); // false, karena tipe berbeda
var_dump(10 != "10"); // false, karena nilai sama
var_dump(10 !== "10"); // true, karena tipe berbeda
var_dump(10 > 5); // true
var_dump(10 < 5); // false
var_dump(10 >= 10); // true
var_dump(10 <= 9); // false


//operator logika
var_dump(true && false); // false
var_dump(true || false); // true
var_dump(!true); // false
var_dump(true xor false); // true
var_dump(true and false); // false (sama dengan &&)
var_dump(true or false); // true (sama dengan ||)
var_dump(true && true || false); // true, karena && dievaluasi terlebih dahulu
var_dump((true && true) || false); // true, karena && dievaluasi terlebih dahulu
var_dump(true || false && false); // true, karena && dievaluasi terlebih dahulu
var_dump(true || (false && false)); // true, karena && dievaluasi terlebih dahulu
var_dump(true && (false || true)); // true, karena || dievaluasi terlebih dahulu
var_dump((true && false) || (false && true)); // false, karena kedua bagian menghasilkan false
var_dump((true || false) && (false || true)); // true, karena kedua bagian menghasilkan true

//operator string
$nama_depan = "John";
$nama_belakang = "Doe";
$nama_lengkap = $nama_depan . " " . $nama_belakang; // Menggabungkan string dengan operator titik (.)
var_dump($nama_lengkap);
echo "<br>";
$nama_lengkap .= " Jr."; // Menambahkan string ke variabel yang sudah ada
var_dump($nama_lengkap);
echo "<br>";

//operator bitwise
var_dump(5 & 3); // AND bitwise, hasilnya 1 (000001)
var_dump(5 | 3); // OR bitwise, hasilnya 7 (000111)
var_dump(5 ^ 3); // XOR bitwise, hasilnya 6 (000110)
var_dump(~5); // NOT bitwise, hasilnya -6 (11111010)
var_dump(5 << 1); // Shift kiri, hasilnya 10 (0001010)
var_dump(5 >> 1); // Shift kanan, hasilnya 2 (0000010)

//operator assignment
$angka = 10;
$angka += 5; // Sama dengan $angka = $angka + 5, hasil
var_dump($angka);
echo "<br>";
$angka -= 3; // Sama dengan $angka = $angka - 3, hasil
var_dump($angka);
echo "<br>";
$angka *= 2; // Sama dengan $angka = $angka * 2, hasil
var_dump($angka);
echo "<br>";
$angka /= 4; // Sama dengan $angka = $angka / 4, hasil
var_dump($angka);
echo "<br>";
$angka %= 3; // Sama dengan $angka = $angka % 3, hasil
var_dump($angka);
echo "<br>";
$angka **= 2; // Sama dengan $angka = $angka ** 2, hasil
var_dump($angka);
echo "<br>";
$angka .= "5"; // Sama dengan $angka = $angka . "5", hasil
var_dump($angka);
echo "<br>";

//operator error control
$result = @file_get_contents("nonexistentfile.txt"); // Menggunakan operator @ untuk menekan pesan error jika file tidak ditemukan
if ($result === false) {
    echo "Gagal membaca file.";
} else {
    echo $result;
}

//operator array
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = $array1 + $array2; // Operator union, hasilnya [1, 2, 3, 4, 5, 6]
var_dump($array3);
echo "<br>";
$array4 = $array1 == $array2; // Operator perbandingan, hasilnya false karena isi array berbeda
var_dump($array4);
echo "<br>";
$array5 = $array1 === $array2; // Operator identitas, hasilnya false karena isi array berbeda
var_dump($array5);
echo "<br>";
$array6 = $array1 != $array2; // Operator perbandingan, hasilnya
var_dump($array6);
echo "<br>";
$array7 = $array1 !== $array2; // Operator identitas, hasilnya true karena isi array berbeda
var_dump($array7);
echo "<br>";

//operator spaceship
var_dump(5 <=> 3); // Hasilnya 1 karena 5 lebih besar dari 3
var_dump(3 <=> 5); // Hasilnya -1 karena 3 lebih kecil dari 5
var_dump(5 <=> 5); // Hasilnya 0 karena 5 sama dengan 5

//urutan operator
$result = 10 + 5 * 2; // Hasilnya 20 karena perkalian dilakukan sebelum penjumlahan
var_dump($result);
echo "<br>";
$result2 = (10 + 5) * 2; // Hasilnya 30 karena operasi dalam tanda kurung dilakukan terlebih dahulu
var_dump($result2);
echo "<br>";
$result3 = 10 + 5 * 2 > 20; // Hasilnya false karena 10 + 5 * 2 menghasilkan 20, dan 20 > 20 adalah false
var_dump($result3);
echo "<br>";
$result4 = 10 + 5 * 2 > 15 && 10 < 20; // Hasilnya true karena 10 + 5 * 2 menghasilkan 20, dan 20 > 15 adalah true, serta 10 < 20 adalah true
var_dump($result4);
echo "<br>";
$result5 = 10 + 5 * 2 > 15 || 10 > 20; // Hasilnya true karena 10 + 5 * 2 menghasilkan 20, dan 20 > 15 adalah true, meskipun 10 > 20 adalah false
var_dump($result5);
echo "<br>";
$result6 = !false && (10 + 5 * 2 > 15); // Hasilnya true karena !false adalah true, dan 10 + 5 * 2 menghasilkan 20, serta 20 > 15 adalah true
var_dump($result6);
echo "<br>";
$result7 = (10 + 5) * 2 > 30 || (10 < 20 && !false); // Hasilnya true karena (10 + 5) * 2 menghasilkan 30, dan 30 > 30 adalah false, tetapi (10 < 20 && !false) adalah true
var_dump($result7);
echo "<br>";
$result8 = (10 + 5) * 2 > 30 && (10 < 20 || !false); // Hasilnya false karena (10 + 5) * 2 menghasilkan 30, dan 30 > 30 adalah false, meskipun (10 < 20 || !false) adalah true
var_dump($result8);
echo "<br>";
$result9 = (10 + 5) * 2 > 30 && (10 < 20 || !false) || (5 > 3); // Hasilnya true karena (10 + 5) * 2 menghasilkan 30, dan 30 > 30 adalah false, tetapi (10 < 20 || !false) adalah true, sehingga keseluruhan ekspresi menjadi true
var_dump($result9);
echo "<br>";
$result10 = (10 + 5) * 2 > 30 && (10 < 20 || !false) || (5 > 3) && (2 < 1); // Hasilnya true karena (10 + 5) * 2 menghasilkan 30, dan 30 > 30 adalah false, tetapi (10 < 20 || !false) adalah true, sehingga keseluruhan ekspresi menjadi true meskipun (5 > 3) && (2 < 1) adalah false
var_dump($result10);
echo "<br>";

//type juggling
var_dump("10" + 5); // Hasilnya 15 karena string "10" dikonversi menjadi angka 10
echo "<br>";
var_dump("10" . 5); // Hasilnya "105" karena operator titik (.) digunakan untuk menggabungkan string
echo "<br>";
var_dump("10" * 2); // Hasilnya 20 karena string "10" dikonversi menjadi angka 10
echo "<br>";
var_dump("10" / 2); // Hasilnya 5 karena string "10" dikonversi menjadi angka 10
echo "<br>";
var_dump("10" % 3); // Hasilnya 1 karena string "10" dikonversi menjadi angka 10
echo "<br>";
var_dump("10" ** 2); // Hasilnya 100 karena string "10" dikonversi menjadi angka 10
echo "<br>";
var_dump("10" > 5); // Hasilnya true karena string "10" dikonversi menjadi angka 10
?>