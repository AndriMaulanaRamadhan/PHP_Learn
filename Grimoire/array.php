<?php
$siswa = array("Andi", "Budi", "Citra"); // Membuat array dengan tiga elemen
echo "Nama siswa pertama: " . $siswa[0] . "<br>"; // Output: Andi
echo "Nama siswa kedua: " . $siswa[1] . "<br>"; // Output: Budi
echo "Nama siswa ketiga: " . $siswa[2] . "<br>"; // Output: Citra
$siswa[1] = "Dewi"; // Mengubah nilai elemen kedua
echo "Nama siswa kedua setelah diubah: " . $siswa[1] . "<br>"; // Output: Dewi
echo "Jumlah siswa: " . count($siswa) . "<br>"; // Output: 3

// cara menambah elemen baru ke dalam array
$siswa[] = "Eka"; // Menambahkan elemen baru ke dalam array
echo "Nama siswa keempat: " . $siswa[3] . "<br>"; // Output: Eka
echo "Jumlah siswa setelah ditambah: " . count($siswa) . "<br>";
// cara menghapus elemen dari array
unset($siswa[2]); // Menghapus elemen ketiga (Citra)
echo "Jumlah siswa setelah dihapus: " . count($siswa) . "<br>"; // Output: 3 (karena elemen ketiga sudah dihapus)
echo "Daftar siswa setelah dihapus: <br>";
foreach ($siswa as $nama) {
    echo $nama . "<br>"; // Output: Andi, Dewi, Eka
}

//array multidimensi
$matriks = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo "Elemen di baris pertama, kolom kedua: " . $matriks[0][1] . "<br>"; // Output: 2
echo "Elemen di baris kedua, kolom ketiga: " . $matriks[1][2] . "<br>"; // Output: 6
echo "Elemen di baris ketiga, kolom pertama: " . $matriks[2][0] . "<br>"; // Output: 7

//short syntax array multidimensi
$matriks2 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo "Elemen di baris pertama, kolom kedua: " . $matriks2[0][1] . "<br>"; // Output: 2
echo "Elemen di baris kedua, kolom ketiga: " . $matriks2[1][2] . "<br>"; // Output: 6
echo "Elemen di baris ketiga, kolom pertama: " . $matriks2[2][0] . "<br>"; // Output: 7

echo "<pre>";
print_r($siswa); // Output: Array ( [0] => Andi [1] => Dewi [3] => Eka )
print_r($matriks); // Output: Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) [2] => Array ( [0] => 7 [1] => 8 [2] => 9 ) )
print_r($matriks2); // Output: Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) [2] => Array ( [0] => 7 [1] => 8 [2] => 9 ) )
echo "</pre>";

//short syntax array 3 dimensi
$kubus = [
    [
        [1, 2],
        [3, 4]
    ],
    [
        [5, 6],
        [7, 8]
    ]
];
echo "Elemen di baris pertama, kolom pertama, lapisan pertama: " . $kubus[0][0][0] . "<br>"; // Output: 1
echo "Elemen di baris pertama, kolom kedua, lapisan pertama: " . $kubus[0][0][1] . "<br>"; // Output: 2
echo "Elemen di baris kedua, kolom pertama, lapisan pertama: " . $kubus[0][1][0] . "<br>"; // Output: 3
echo "Elemen di baris kedua, kolom kedua, lapisan pertama: " . $kubus[0][1][1] . "<br>"; // Output: 4
echo "Elemen di baris pertama, kolom pertama, lapisan kedua: " . $kubus[1][0][0] . "<br>"; // Output: 5
echo "Elemen di baris pertama, kolom kedua, lapisan kedua: " . $kubus[1][0][1] . "<br>"; // Output: 6
echo "Elemen di baris kedua, kolom pertama, lapisan kedua: " . $kubus[1][1][0] . "<br>"; // Output: 7


//array asosiatif short syntax
$mahasiswa = [
    "nama" => "Andi",
    "umur" => 20,
    "jurusan" => "Informatika"
];
echo "Nama mahasiswa: " . $mahasiswa["nama"] . "<br>"; // Output: Andi
echo "Umur mahasiswa: " . $mahasiswa["umur"] . "<br>"; // Output: 20
echo "Jurusan mahasiswa: " . $mahasiswa["jurusan"] . "<br>"; // Output: Informatika

//print_r untuk array asosiatif
echo "<pre>";
print_r($mahasiswa); // Output: Array ( [nama] => Andi [umur] => 20 [jurusan] => Informatika )
echo "</pre>";

//cara menambah elemen baru ke dalam array asosiatif
$mahasiswa["alamat"] = "Jl. Merdeka No. 123"; // Menambahkan elemen baru ke dalam array asosiatif
echo "Alamat mahasiswa: " . $mahasiswa["alamat"] . "<br>"; // Output: Jl. Merdeka No. 123
echo "<pre>";
print_r($mahasiswa); // Output: Array ( [nama] => Andi [umur] => 20 [jurusan] => Informatika [alamat] => Jl. Merdeka No. 123 )
echo "</pre>";

//array asosiatif murid kelas x, xi, xii
$kelas = [
    "X" => ["Andi", "Budi", "Citra"],
    "XI" => ["Dewi", "Eka", "Fajar"],
    "XII" => ["Gina", "Hadi", "Ika"]
];
//munculkan nama murid kelas XI
echo "Murid kelas XI: " . implode(", ", $kelas["XI"]) . "<br>"; // Output: Dewi, Eka, Fajar
echo "<pre>";
print_r($kelas); // Output: Array ( [X] => Array ( [0] => Andi [1] => Budi [2] => Citra ) [XI] => Array ( [0] => Dewi [1] => Eka [2] => Fajar ) [XII] => Array ( [0] => Gina [1] => Hadi [2] => Ika ) )
echo "</pre>";
?>