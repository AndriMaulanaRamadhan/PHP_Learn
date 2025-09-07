<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid black;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Sekolah Teknik Mahir Ilmu Komputer Bandung</h1>
    <p>Selamat datang di list data mahasiswa yang aktif di fakultas teknik informatika</p>
    <h2>Data Diri Mahasiswa Teknik Informatika</h2>

    <table>
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
                [
                    "nama" => "Andri",
                    "umur" => 24,
                    "alamat" => "Karawang",
                    "kegiatan" => "Membuat game",
                    "hobi" => "Catur",
                    "pesan" => "Kegagalan adalah awal dari cerita hidupmu"
                ],
                [
                    "nama" => "Yura",
                    "umur" => 17,
                    "alamat" => "Bandung",
                    "kegiatan" => "Membuat Website",
                    "hobi" => "Sepak Bola",
                    "pesan" => "Lindungilah orang yang membuat kamu hidup"
                ]
            ];

            foreach ($mahasiswa as $data) {
                echo "<tr>";
                echo "<td>{$data['nama']}</td>";
                echo "<td>{$data['umur']}</td>";
                echo "<td>{$data['alamat']}</td>";
                echo "<td>{$data['kegiatan']}</td>";
                echo "<td>{$data['hobi']}</td>";
                echo "<td>{$data['pesan']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
