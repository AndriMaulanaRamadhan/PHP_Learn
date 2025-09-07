<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>List Data Mahasiswa dan Umurnya</h2>
    <ol>
        <?php
        $mahasiswa =   [    
                        ["nama" => "Andri", "umur" => 18],
                        ["nama" => "Budi", "umur" => 25],
                        ["nama" => "Yura", "umur" => 30],
                        ["nama" => "Lucy", "umur" => 29]
                        ]; 
            for ($i=1; $i < count($mahasiswa); $i++) { 
                echo "<li>Nama mahasiswa " . $mahasiswa[$i]["nama"] . " umur " . $mahasiswa[$i]["umur"] . "</li>";
            }
        ?>
    </ol>
</body>
</html>