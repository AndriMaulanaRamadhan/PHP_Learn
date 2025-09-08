<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data List Mahasiswa</h2>
    <?php
    $mahasiswa = [
        ["nama" => "Andri", "umur" => 19],
        ["nama" => "Yura", "umur" => 28]
    ];
        if ($mahasiswa == true) {
            for ($i=0; $i < count($mahasiswa); $i++) { 
                echo "Nama saya adalah " . $mahasiswa[$i]["nama"] . " yang berumur " . $mahasiswa[$i]["umur"] . "<br>";
            }
        }
        else {
            echo "Data Mahasiswa Tidak Tertera";
        }
    ?>
</body>
</html>