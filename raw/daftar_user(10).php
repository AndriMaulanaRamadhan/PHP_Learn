<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
</head>
<body>
    <h2>Daftar nama user</h2>
    <ol>
        <?php
        for ($i=1; $i<=10; $i++) {
            echo "<li>Nama User ke-$i</li>";
        }
        ?>
    </ol>
</body>
</html>