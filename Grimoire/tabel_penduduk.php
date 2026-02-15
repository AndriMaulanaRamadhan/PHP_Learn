<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Penduduk Karawang</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Penduduk</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>Penduduk ke-$i</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>