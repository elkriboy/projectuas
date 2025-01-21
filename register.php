<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST['nama']);
    $username = trim($_POST['username']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input
    if (strlen($nama) < 3 || strlen($username) < 3) {
        die("<script>
                alert('Nama lengkap dan username harus minimal 3 karakter.');
                window.history.back();
             </script>");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<script>
                alert('Format email tidak valid.');
                window.history.back();
             </script>");
    }

    if (!preg_match("/^[0-9]{10,14}$/", $phone)) {
        die("<script>
                alert('Nomor telepon harus 10-14 digit.');
                window.history.back();
             </script>");
    }

    if ($password !== $confirm_password) {
        die("<script>
                alert('Password dan konfirmasi password tidak sama.');
                window.history.back();
             </script>");
    }

    if (strlen($password) < 6) {
        die("<script>
                alert('Password harus minimal 6 karakter.');
                window.history.back();
             </script>");
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Generate user_id
    $result = $conn->query("SELECT COUNT(*) AS total FROM users");
    $row = $result->fetch_assoc();
    $totalUsers = $row['total'] + 1;
    $id = 'USR' . $totalUsers;

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO users (id, nama, username, phone, email, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $id, $nama, $username, $phone, $email, $hashedPassword);

    if ($stmt->execute()) {
        // Redirect otomatis ke login.html tanpa menunggu
        echo "<script>
                alert('Registrasi berhasil!');
                window.location.href = 'login.html';
             </script>";
    } else {
        // Menampilkan pesan error jika terjadi kesalahan
        echo "<script>
                alert('Terjadi kesalahan: " . $stmt->error . "');
                window.history.back();
             </script>";
    }

    $stmt->close();
    $conn->close();
}
?>