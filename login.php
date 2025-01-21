<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Validasi input
    if (empty($username) || empty($password)) {
        echo "<script>
                alert('Username dan password harus diisi.');
                window.history.back();
              </script>";
        exit();
    }

    // Query untuk memeriksa username di database
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashedPassword);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $hashedPassword)) {
            // Jika berhasil login, simpan ID pengguna dalam sesi
            session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_logged_in'] = true; // Tambahkan ini

            echo "<script>
                    alert('Login berhasil! Anda akan diarahkan ke halaman home.');
                    window.location.href = 'home.php';
                  </script>";
        } else {
            // Jika password salah
            echo "<script>
                    alert('Password salah. Silakan coba lagi.');
                    window.history.back();
                  </script>";
        }
    } else {
        // Jika username tidak ditemukan
        echo "<script>
                alert('Username tidak ditemukan. Silakan coba lagi.');
                window.history.back();
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>