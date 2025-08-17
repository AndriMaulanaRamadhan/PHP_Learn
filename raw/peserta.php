<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Nama Peserta</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Peserta</th>
            <th>Email</th>
        </tr>
        <?php
        for ($i=0; $i <= 100; $i++) { 
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>Peserta " . ($i + 1) . "</td>";
            echo "<td>peserta" . ($i + 1) . "@example.com</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>