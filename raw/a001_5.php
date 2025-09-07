<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Nama Mahasiswa</h2>
    <ol>
        <?php
            for ($i=1; $i <= 10; $i++) { 
                print "<li>Nama Mahasiswa Ke-$i</li>";
            }
        ?>
    </ol>
</body>
</html>