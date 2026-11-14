<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi server-side
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    }
    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka antara 1 sampai 14.";
    }

    // Jika tidak ada error, simpan data ke arrays
    if (empty($error)) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .error { color: red; }
        .success { background: #e8f5e9; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 130px; }
    </style>
</head>
<body>

    <h2>Formulir Input Data Mahasiswa</h2>

    <!-- Tampilkan Pesan Error jika ada -->
    <?php if (!empty($error)): ?>
        <div class="error">
            <ul>
                <?php foreach ($error as $err): ?>
                    <li><?= htmlspecialchars($err, ENT_QUOTES, "UTF-8") ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Form HTML -->
    <form method="POST" action="">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($_POST['nama'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" value="<?= htmlspecialchars($_POST['nim'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
        <div class="form-group">
            <label for="prodi">Program Studi:</label>
            <input type="text" id="prodi" name="prodi" value="<?= htmlspecialchars($_POST['prodi'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
        <div class="form-group">
            <label for="semester">Semester:</label>
            <input type="number" id="semester" name="semester" min="1" max="14" value="<?= htmlspecialchars($_POST['semester'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
        <button type="submit">Kirim Data</button>
    </form>

    <!-- Tampilkan Ringkasan Data Jika Valid -->
    <?php if ($data): ?>
        <div class="success">
            <h3>Ringkasan Data Mahasiswa Berhasil Diterima:</h3>
            <p><strong>Nama:</strong> <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>NIM:</strong> <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Program Studi:</strong> <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Semester:</strong> <?= htmlspecialchars($data["semester"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?></p>
        </div>
    <?php endif; ?>

</body>
</html>