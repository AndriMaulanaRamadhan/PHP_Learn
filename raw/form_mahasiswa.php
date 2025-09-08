<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 10px 20px;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }

        .hasil {
            background: #f2f2f2;
            padding: 15px;
        }
    </style>
    <script>
        function validateForm() {
            const nama = document.forms["formMahasiswa"]["nama"].value.trim();
            const umur = document.forms["formMahasiswa"]["umur"].value.trim();
            const alamat = document.forms["formMahasiswa"]["alamat"].value.trim();
            const hobi = document.forms["formMahasiswa"]["hobi"].value.trim();

            let errorMsg = "";

            if (nama === "" || umur === "" || alamat === "" || hobi === "") {
                errorMsg += "Semua field wajib diisi.\n";
            }

            if (isNaN(umur) || umur <= 0) {
                errorMsg += "Umur harus berupa angka dan lebih dari 0.\n";
            }

            if (errorMsg !== "") {
                alert(errorMsg);
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

    <h2>Form Data Mahasiswa</h2>

    <form name="formMahasiswa" method="POST" action="" onsubmit="return validateForm();">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">

        <label for="umur">Umur:</label>
        <input type="number" name="umur" id="umur" min="1">

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" rows="3"></textarea>

        <label for="hobi">Hobi:</label>
        <input type="text" name="hobi" id="hobi">

        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama   = htmlspecialchars($_POST["nama"]);
        $umur   = (int) $_POST["umur"];
        $alamat = htmlspecialchars($_POST["alamat"]);
        $hobi   = htmlspecialchars($_POST["hobi"]);

        echo "<div class='hasil'>";
        echo "<h3>Data Mahasiswa:</h3>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Umur:</strong> $umur</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
        echo "<p><strong>Hobi:</strong> $hobi</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
