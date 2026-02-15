<?php
$nama = "John Doe"; // Variabel
echo "Nama sebelum dihapus: $nama\n";
unset($nama); // Menghapus variabel $nama
echo "Nama setelah dihapus: $nama\n"; // Akan menghasilkan error karena variabel sudah dihapus
?>