<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Mahasiswa</title>
</head>
<body>
    <h1>Sekolah Teknik Mahir Ilmu Komputer Bandung</h1>
    <p>Selamat datang di list data mahasiswa yang aktif di fakultas teknik informatika</p>
    <h2>Data Diri Mahasiswa Teknik Informatika</h2>
    <table border = 1;>
        <tr>
            <th>NAMA</th>
            <th>UMUR</th>
            <th>ALAMAT</th>
            <th>KEGIATAN</th>
            <th>HOBI</th>
            <th>PESAN YANG INGIN DISAMPAIKAN</th>
        </tr>
            <?php
                $mahasiswa = [
                    ["nama" => "Andri", "umur" => 24, "alamat" => "Karawang", "kegiatan" => "Membuat game", "hobi" => "Catur", "pesan" => "Kegagalan adalah awal dari cerita hidupmu"],
                    ["nama" => "Yura", "umur" => 17, "alamat" => "Bandung", "kegiatan" => "Membuat Website", "hobi" => "Sepak Bola", "pesan" => "Lindungilah orang yang membuat kamu hidup"]
                ];
                for ($i=0; $i < count($mahasiswa); $i++) { 
                    print "<tr>" . "<td>" . $mahasiswa[$i]["nama"] . "</td>" . "<td>" . $mahasiswa[$i]["umur"] . "</td>" ."<td>" . $mahasiswa[$i]["alamat"] . "</td>" . "<td>" . $mahasiswa[$i]["kegiatan"] . "</td>" . "<td>" . $mahasiswa[$i]["hobi"] . "</td>" . "<td>" . $mahasiswa[$i]["pesan"] . "</td>" . "</tr>";
                }
            ?>
    </table>
</body>
</html>