<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Mahasiswa</title>
</head>
<body>
    <h2>Daftar Nama Mahasiswa</h2>
    <ol>
        <?php
        for ($i=1; $i <= 1000; $i++) { 
            echo "<li>Daftar Nama Mahasiswa Ke-$i</li>";
        }
        ?>
    </ol>
</body>
</html>