<?php
// buatlah perulangan while "saya sedang belajar PHP" sebanyak 5 kali
$counter = 1; // inisialisasi counter
while ($counter <= 5) { // kondisi perulangan
    echo "Saya sedang belajar PHP<br>"; // tampilkan pesan
    $counter++; // increment counter
}

//perulangan while "anak ayam turun $i" lalu kurangi 1 setiap perulangan sampai 0
$i = 5; // inisialisasi jumlah anak ayam
while ($i > 0) { // kondisi perulangan
    echo "Anak ayam turun $i<br>"; // tampilkan pesan
    $i--; // decrement jumlah anak ayam
}

//buatlah perulangan tebak angka dengan while, dimana program akan menghasilkan angka acak antara 1-10 dan meminta user untuk menebak angka tersebut, program akan terus meminta input sampai user menebak dengan benar
$angkaAcak = rand(1, 10); // menghasilkan angka acak antara 1-10
$tebakan = 0; // inisialisasi tebakan user
while ($tebakan != $angkaAcak) { // kondisi perulangan
    $tebakan = (int)readline("Tebak angka antara 1-10: "); // meminta input dari user
    if ($tebakan < $angkaAcak) {
        echo "Tebakan terlalu rendah, coba lagi.<br>";
    } elseif ($tebakan > $angkaAcak) {
        echo "Tebakan terlalu tinggi, coba lagi.<br>";
    } else {
        echo "Selamat! Tebakan Anda benar.<br>";
    }
}