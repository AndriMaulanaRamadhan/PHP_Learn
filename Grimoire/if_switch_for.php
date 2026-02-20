<?php
// if user is admin, then echo welcome to my website, else echo you are not admin
$user = "admin";
if ($user == "admin") {
    echo "Welcome to my website";
} else {
    echo "You are not admin";
}

// multiple if, when variable is admin, then echo welcome to my website, when variable is user, then echo welcome user, else echo you are not admin

$user = "user";
if ($user == "admin") {
    echo "Welcome to my website";
} elseif ($user == "user") {
    echo "Welcome user";
} else {
    echo "You are not admin";
}

// multiple if, variable angka menentukan ganjil dan genap, jika variable angka adalah 1, 3, 5, 7, 9 maka echo angka ganjil, jika variable angka adalah 2, 4, 6, 8, 10 maka echo angka genap, else echo angka tidak valid

$angka = 5;
if ($angka == 1 || $angka == 3 || $angka == 5 || $angka == 7 || $angka == 9) {
    echo "Angka ganjil";
} elseif ($angka == 2 || $angka == 4 || $angka == 6 || $angka == 8 || $angka == 10) {
    echo "Angka genap";
} else {
    echo "Angka tidak valid";
}

// multiple if, variable angka menentukan ganjil dan genap, jika variable angka adalah 1, 3, 5, 7, 9 maka echo angka ganjil, jika variable angka adalah 2, 4, 6, 8, 10 maka echo angka genap, else echo angka tidak valid, tapi pakailah modulus untuk menentukan ganjil dan genap

$angka = 5;
if ($angka % 2 == 1) {
    echo "Angka ganjil";
} elseif ($angka % 2 == 0) {
    echo "Angka genap";
} else {
    echo "Angka tidak valid";
}

// membuat sebuah kode program terdiri dari 2 variabel : $a dan $b. kedua variabel ini berisi angka integer atau float. tampilan akhir adalah salah satu kondisi berikut : jika $a lebih besar dari $b, maka tampilkan "$a lebih besar dari $b", jika $a lebih kecil dari $b, maka tampilkan "$a lebih kecil dari $b", jika $a sama dengan $b, maka tampilkan "$a sama dengan $b"

$a = 5;
$b = 10;
if ($a > $b) {
    echo "$a lebih besar dari $b";
} elseif ($a < $b) {
    echo "$a lebih kecil dari $b";
} else {
    echo "$a sama dengan $b";
}

//membuat kode program untuk : username sesuai, password sesua, jika username dan password benar, maka tampilkan "Login berhasil", jika username benar tapi password salah, maka tampilkan "Password salah", jika username salah tapi password benar, maka tampilkan "Username salah", jika username dan password salah, maka tampilkan "Login gagal"

$username = "admin";
$password = "password123";
if ($username == "admin" && $password == "password123") {
    echo "Login berhasil";
} elseif ($username == "admin" && $password != "password123") {
    echo "Password salah";
} elseif ($username != "admin" && $password == "password123") {
    echo "Username salah";
} else {
    echo "Login gagal";
}

//buatlah menjadi nested if

$username = "admin";
$password = "password123";
if ($username == "admin") {
    if ($password == "password123") {
        echo "Login berhasil";
    } else {
        echo "Password salah";
    }
} else {
    if ($password == "password123") {
        echo "Username salah";
    } else {
        echo "Login gagal";
    }
}

//membuat kode program untuk nama hari menggunakan if else, jika variable $hari adalah 1, maka tampilkan "Hari ini adalah hari Senin", jika variable $hari adalah 2, maka tampilkan "Hari ini adalah hari Selasa", jika variable $hari adalah 3, maka tampilkan "Hari ini adalah hari Rabu", jika variable $hari adalah 4, maka tampilkan "Hari ini adalah hari Kamis", jika variable $hari adalah 5, maka tampilkan "Hari ini adalah hari Jumat", jika variable $hari adalah 6, maka tampilkan "Hari ini adalah hari Sabtu", jika variable $hari adalah 7, maka tampilkan "Hari ini adalah hari Minggu", else tampilkan "Hari tidak valid"

$hari = 3;
if ($hari == 1) {
    echo "Hari ini adalah hari Senin";
} elseif ($hari == 2) {
    echo "Hari ini adalah hari Selasa";
} elseif ($hari == 3) {
    echo "Hari ini adalah hari Rabu";
} elseif ($hari == 4) {
    echo "Hari ini adalah hari Kamis";
} elseif ($hari == 5) {
    echo "Hari ini adalah hari Jumat";
} elseif ($hari == 6) {
    echo "Hari ini adalah hari Sabtu";
} elseif ($hari == 7) {
    echo "Hari ini adalah hari Minggu";
} else {
    echo "Hari tidak valid";
}

//sekarang buatlah menggunakan switch case
$hari = 3;
switch ($hari) {
    case 1:
        echo "Hari ini adalah hari Senin";
        break;
    case 2:
        echo "Hari ini adalah hari Selasa";
        break;
    case 3:
        echo "Hari ini adalah hari Rabu";
        break;
    case 4:
        echo "Hari ini adalah hari Kamis";
        break;
    case 5:
        echo "Hari ini adalah hari Jumat";
        break;
    case 6:
        echo "Hari ini adalah hari Sabtu";
        break;
    case 7:
        echo "Hari ini adalah hari Minggu";
        break;
    default:
        echo "Hari tidak valid";
}

//sekarang buatlah tanpa break, dan sekarang jika 1 maka angka satu, jika 2 maka angka dua, jika 3 maka angka tiga, jika 4 maka angka empat, jika 5 maka angka lima, jika 6 maka angka enam, jika 7 maka angka tujuh, else tampilkan "Angka tidak valid"

$angka = 3;
switch ($angka) {
    case 1:
        echo "Angka satu";
    case 2:
        echo "Angka dua";
    case 3:
        echo "Angka tiga";
    case 4:
        echo "Angka empat";
    case 5:
        echo "Angka lima";
    case 6:
        echo "Angka enam";
    case 7:
        echo "Angka tujuh";
        break;
    default:
        echo "Angka tidak valid";
}

//sekarang gunakan break untuk setiap case, dan sekarang jika 1 maka angka satu, jika 2 maka angka dua, jika 3 maka angka tiga, jika 4 maka angka empat, jika 5 maka angka lima, jika 6 maka angka enam, jika 7 maka angka tujuh, else tampilkan "Angka tidak valid"

$angka = 3;
switch ($angka) {
    case 1:
        echo "Angka satu";
        break;
    case 2:
        echo "Angka dua";
        break;
    case 3:
        echo "Angka tiga";
        break;
    case 4:
        echo "Angka empat";
        break;
    case 5:
        echo "Angka lima";
        break;
    case 6:
        echo "Angka enam";
        break;
    case 7:
        echo "Angka tujuh";
        break;
    default:
        echo "Angka tidak valid";
}

//sekarang buatlah program dengan menggunakan range angka, jika variable $angka adalah 1 sampai 10, maka tampilkan "Angka antara 1 dan 10", jika variable $angka adalah 11 sampai 20, maka tampilkan "Angka antara 11 dan 20", jika variable $angka adalah 21 sampai 30, maka tampilkan "Angka antara 21 dan 30", else tampilkan "Angka tidak valid"

$angka = 15;
if ($angka >= 1 && $angka <= 10) {
    echo "Angka antara 1 dan 10";
} elseif ($angka >= 11 && $angka <= 20) {
    echo "Angka antara 11 dan 20";
} elseif ($angka >= 21 && $angka <= 30) {
    echo "Angka antara 21 dan 30";
} else {
    echo "Angka tidak valid";
}

// gunakan switch case untuk program di atas

$angka = 15;
switch (true) {
    case ($angka >= 1 && $angka <= 10):
        echo "Angka antara 1 dan 10";
        break;
    case ($angka >= 11 && $angka <= 20):
        echo "Angka antara 11 dan 20";
        break;
    case ($angka >= 21 && $angka <= 30):
        echo "Angka antara 21 dan 30";
        break;
    default:
        echo "Angka tidak valid";
}

// buatlah switch case good morning kepada semua orang, jika variable $nama adalah "John", maka tampilkan "Good morning John", jika variable $nama adalah "Jane", maka tampilkan "Good morning Jane", jika variable $nama adalah "Doe", maka tampilkan "Good morning Doe", else tampilkan "Good morning everyone"

$nama = "John";
switch ($nama) {
    case "John":
        echo "Good morning John";
        break;
    case "Jane":
        echo "Good morning Jane";
        break;
    case "Doe":
        echo "Good morning Doe";
        break;
    default:
        echo "Good morning everyone";
}

// buatlah match expression untuk nama hari menggunakan match expression, jika variable $hari adalah 1, maka tampilkan "Hari ini adalah hari Senin", jika variable $hari adalah 2, maka tampilkan "Hari ini adalah hari Selasa", jika variable $hari adalah 3, maka tampilkan "Hari ini adalah hari Rabu", jika variable $hari adalah 4, maka tampilkan "Hari ini adalah hari Kamis", jika variable $hari adalah 5, maka tampilkan "Hari ini adalah hari Jumat", jika variable $hari adalah 6, maka tampilkan "Hari ini adalah hari Sabtu", jika variable $hari adalah 7, maka tampilkan "Hari ini adalah hari Minggu", else tampilkan "Hari tidak valid"

$hari = 3;
$days = [
    1 => "Hari ini adalah hari Senin",
    2 => "Hari ini adalah hari Selasa",
    3 => "Hari ini adalah hari Rabu",
    4 => "Hari ini adalah hari Kamis",
    5 => "Hari ini adalah hari Jumat",
    6 => "Hari ini adalah hari Sabtu",
    7 => "Hari ini adalah hari Minggu",
];
$result = $days[$hari] ?? "Hari tidak valid";

echo $result;

// membuat perulangan for "saya sedang belajar PHP" sebanyak 5 kali dan tambahkan br
for ($i = 0; $i < 5; $i++) {
    echo "Saya sedang belajar PHP<br>";
}

//perulangan menjadi 20 kali
for ($i = 0; $i < 20; $i++) {
    echo "Saya sedang belajar PHP<br>";
}

//perulangan "anak kucing ada $i" sebanyak kurang dari 100
for ($i = 0; $i < 100; $i++) {
    echo "Anak kucing ada $i<br>";
}

//perulangan "induk semut beranak $i" sebanyak 21 kali, lalu tambahkan 2 pada setiap perulangan, mulailah dari 1
for ($i = 1; $i <= 21; $i += 2) {
    echo "Induk semut beranak $i<br>";
}

//perulangan "anak ayam turun $i" sebanyak 10 kali, lalu kurangi 1 pada setiap perulangan, mulailah dari 10
for ($i = 10; $i > 0; $i--) {
    echo "Anak ayam turun $i<br>";
}

//perulangan for pilih tanggal 1 sampai 31, lalu tampilkan "Hari ini tanggal $i, gunakan tag select untuk memilih tanggal
echo "<select name='tanggal' id='tanggal'>";
for ($i = 1; $i <= 31; $i++) {
    echo "<option value='$i'>Hari ini tanggal $i</option>";
}
echo "</select>";

//buatlah lebih lengkap dengan menambahkan bulan dan tahun, gunakan tag select untuk memilih bulan dan tahun

//buatlah bulan dengan tag select untuk memilih bulan, lalu tampilkan "Bulan ini adalah bulan $i" sebanyak 12 kali
echo "<select name='bulan' id='bulan'>";
$bulan = [
    1 => "Januari",
    2 => "Februari",
    3 => "Maret",
    4 => "April",
    5 => "Mei",
    6 => "Juni",
    7 => "Juli",
    8 => "Agustus",
    9 => "September",
    10 => "Oktober",
    11 => "November",
    12 => "Desember",
];
for ($i = 1; $i <= 12; $i++) {
    echo "<option value='$i'>Bulan ini adalah bulan " . $bulan[$i] . "</option>";
}
echo "</select>";

echo "<select name='tahun' id='tahun'>";
for ($i = 1900; $i <= date("Y"); $i++) {
    echo "<option value='$i'>$i</option>";
}
echo "</select>";
