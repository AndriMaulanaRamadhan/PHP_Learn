<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Document</title>";
echo "</head>";
echo "<body>";
echo "<h2>Daftar Nama Peserta</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Nama Peserta</th>";
echo "<th>Email</th>";
echo "</tr>";
for ($i = 0; $i <= 100; $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>Peserta " . ($i + 1) . "</td>";
    echo "<td>peserta" . ($i + 1) . "@example.com</td>";
    echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>