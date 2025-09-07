<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Nama Mahasiswa IPA-2</h2>
    <ol>
        <?php
        // Cari tahu pengulangan yang dapat menggunakan variabel menggunakan print juga
        $mahasiswa = ["Andri", "Bayu", "Ahmad", "Fajri", "Caca", "Desi", "Cecil"];

            for ($i=1; $i < count($mahasiswa); $i++) { 
                echo "Siswa Ke-$i bernama : $mahasiswa[$i] <br>";
            }
        ?>
    </ol>
</body>
</html>