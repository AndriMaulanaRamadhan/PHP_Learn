<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        form { max-width: 400px; }
        label { display: block; margin-top: 10px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; }
        input[type="submit"] { margin-top: 15px; padding: 10px 20px; }
        .hasil { background: #f9f9f9; padding: 15px; margin-top: 20px; }
    </style>
    <script>
        function validateForm() {
            const fields = ['nama', 'umur', 'alamat', 'hobi'];
            let valid = true;
            let messages = [];

            fields.forEach(field => {
                const value = document.forms["formMahasiswa"][field].value.trim();
                if (!value) {
                    valid = false;
                    messages.push(field.charAt(0).toUpperCase() + field.slice(1) + " wajib diisi.");
                }
                if (field === 'umur' && (isNaN(value) || value <= 0)) {
                    valid = false;
                    messages.push("Umur harus angka lebih dari 0.");
                }
            });

            if (!valid) {
                alert(messages.join('\n'));
            }

            return valid;
        }
    </script>
</head>
<body>

<h2>Form Data Mahasiswa</h2>

<?php
// Fungsi untuk membersihkan input
function sanitize($data) {
    return htmlspecialchars(trim($data));
}

// Daftar field yang digunakan
$fields = ['nama', 'umur', 'alamat', 'hobi'];
$data = [];

// Tangani form saat disubmit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($fields as $field) {
        $data[$field] = isset($_POST[$field]) ? sanitize($_POST[$field]) : '';
    }
}
?>

<form name="formMahasiswa" method="POST" onsubmit="return validateForm();">
    <?php foreach ($fields as $field): ?>
        <label for="<?= $field ?>"><?= ucfirst($field) ?>:</label>
        <?php if ($field === 'alamat'): ?>
            <textarea name="<?= $field ?>" id="<?= $field ?>" rows="3"><?= $data[$field] ?? '' ?></textarea>
        <?php else: ?>
            <input
                type="<?= $field === 'umur' ? 'number' : 'text' ?>"
                name="<?= $field ?>"
                id="<?= $field ?>"
                value="<?= $data[$field] ?? '' ?>"
                <?= $field === 'umur' ? 'min="1"' : '' ?>
            >
        <?php endif; ?>
    <?php endforeach; ?>
    <input type="submit" value="Kirim">
</form>

<?php if (!empty($data)): ?>
    <div class="hasil">
        <h3>Data Mahasiswa:</h3>
        <ul>
            <?php foreach ($data as $key => $value): ?>
                <li><strong><?= ucfirst($key) ?>:</strong> <?= $value ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

</body>
</html>
