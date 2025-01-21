<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id']; // Ambil ID pengguna dari sesi
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Masukkan data ke dalam tabel database
        $stmt = $conn->prepare("INSERT INTO contacts (user_id, name, email, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $user_id, $name, $email, $message);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Pesan berhasil dikirim!');
                    window.location.href = 'contact.html';
                  </script>";
        } else {
            echo "<script>
                    alert('Terjadi kesalahan. Silakan coba lagi.');
                    window.history.back();
                  </script>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<script>
                alert('Anda harus login terlebih dahulu.');
                window.location.href = 'login.html';
              </script>";
    }
}
?>