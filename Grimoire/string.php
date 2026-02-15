<?php
$huruf = "A";
$nama = "John Doe";
$situs = "www.example.com";
$kalimat = "PHP adalah bahasa pemrograman yang populer.";

$single_quote = 'Ini adalah string dengan tanda kutip tunggal.';
$double_quote = "Ini adalah string dengan tanda kutip ganda.";

$single_quote_escape = 'It\'s a nice day!'; // Menggunakan backslash untuk meng-escape tanda kutip tunggal
$double_quote_escape = "She said, \"Hello!\""; // Menggunakan backslash

$var_dump_huruf = var_dump($huruf);
echo "<br>";
$var_dump_nama = var_dump($nama);
echo "<br>";
$var_dump_situs = var_dump($situs);
echo "<br>";
$var_dump_kalimat = var_dump($kalimat);
echo "<br>";
$var_dump_single_quote = var_dump($single_quote);
echo "<br>";
$var_dump_double_quote = var_dump($double_quote);
echo "<br>";
$var_dump_single_quote_escape = var_dump($single_quote_escape);
echo "<br>";
$var_dump_double_quote_escape = var_dump($double_quote_escape);
echo "<br>";

$string_heredoc = <<<EOD
Ini adalah string dengan heredoc.
Heredoc memungkinkan kita untuk menulis string yang panjang tanpa harus menggunakan tanda kutip.
EOD;
var_dump($string_heredoc);
echo "<br>";

$string_nowdoc = <<<'EOD'
Ini adalah string dengan nowdoc.
Nowdoc mirip dengan heredoc, tetapi tidak memproses variabel di dalamnya.
EOD;
var_dump($string_nowdoc);
?>