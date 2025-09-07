<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <ol>
    <?php
    $mahasiswa = [
        ["nama" => "Andri", "umur" => 24],
        ["nama" => "Yura", "umur" => 19]
    ];

    $i = 0;
    while ($i < count($mahasiswa)) {
        echo "Nama saya " . $mahasiswa[$i]["nama"] . " umur " . $mahasiswa[$i]["umur"] . "<br>";
        $i++;
    }
    ?>
    </ol>
</body>
</html>