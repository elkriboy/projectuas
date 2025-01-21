<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id']; // Ambil ID pengguna dari sesi
    $room_id = $_POST['room_id']; // Ambil ID kamar dari form
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $num_rooms = $_POST['num_rooms'];
    $total_price = str_replace('IDR ', '', str_replace(',', '', $_POST['total_price'])); // Hapus format IDR dan koma

    // Gabungkan ID pengguna dan ID kamar
    $booking_id = $user_id . '-' . $room_id;

    // Masukkan data ke dalam tabel database
    $stmt = $conn->prepare("INSERT INTO bookings (booking_id, user_id, room_id, checkin, checkout, num_rooms, total_price) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssid", $booking_id, $user_id, $room_id, $checkin, $checkout, $num_rooms, $total_price);

    if ($stmt->execute()) {
        echo "<script>
                alert('Booking berhasil!');
                window.location.href = 'home.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan. Silakan coba lagi.');
                window.history.back();
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>