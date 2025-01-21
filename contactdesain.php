<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@2.6.4/dist/email.min.js"></script>
    <script>
        (function() {
            emailjs.init("YOUR_USER_ID");
        })();
    </script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Header Section -->
    <header>
        <nav class="w-full flex justify-between items-center p-6 bg-[#451a03] text-white">
            <div class="text-2xl font-bold" style="font-family: Merriweather, serif;">
                Grand Aveline
            </div>
            <ul class="hidden md:flex space-x-6">
                <li><a class="hover:text-[#fcd34d]" href="home.php">Home</a></li>
                <li><a class="hover:text-[#fcd34d]" href="home.php#about">About</a></li>
                <li><a class="hover:text-[#fcd34d]" href="login.html">Login</a></li>
                <li><a class="hover:text-[#fcd34d]" href="room.php">Rooms</a></li>
                <li><a class="hover:text-[#fcd34d]" href="book.html">Book</a></li>
                <li><a class="hover:text-[#fcd34d]" href="home.html#facilities">Facilities</a></li>
                <li><a class="hover:text-[#fcd34d]" href="contact.html">Contact us</a></li>
            </ul>
            <div class="md:hidden">
                <button id="menu-button" class="text-white focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden bg-[#451a03] text-white p-6">
            <ul class="space-y-4">
                <li><a class="hover:text-[#fcd34d]" href="home.php">Home</a></li>
                <li><a class="hover:text-[#fcd34d]" href="home.php#about">About</a></li>
                <li><a class="hover:text-[#fcd34d]" href="login.html">Login</a></li>
                <li><a class="hover:text-[#fcd34d]" href="room.php">Rooms</a></li>
                <li><a class="book-link hover:text-[#fcd34d]" href="book.html">Book</a></li>
                <li><a class="hover:text-[#fcd34d]" href="home.php#facilities">Facilities</a></li>
                <li><a class="hover:text-[#fcd34d]" href="contact.html">Contact us</a></li>
            </ul>
        </div>
    </header>

    <!-- Contact Form Section -->
    <main class="flex-grow flex items-center justify-center p-4" data-aos="zoom-in">
        <div class="container mx-auto p-6 max-w-2xl">
            <div class="bg-white p-8 rounded-2xl shadow-2xl flex flex-col bg-opacity-90">
                <!-- Contact Details -->
                <div class="mb-8 text-center" data-aos="fade-up">
                    <h1 class="text-4xl font-bold mb-4 text-[#451a03]" style="font-family: Raleway, serif;">Contact Us</h1>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We'd love to hear from you! Whether you have questions, feedback, or need assistance, feel free to reach out to us. Our team is here to help and respond as quickly as possible.
                    </p>
                    <div class="flex justify-center items-center mb-4">
                        <i class="fas fa-phone-alt text-[#451a03] mr-3"></i>
                        <p class="text-gray-700">+62 812 457</p>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <i class="fas fa-envelope text-[#451a03] mr-3"></i>
                        <a href="mailto:kadangkiding@gmail.com" class="text-gray-700">kadangkiding@gmail.com</a>
                    </div>
                </div>

                <!-- Social Media Icons -->
                <div class="flex justify-center space-x-6 mt-6">
                    <a href="#" class="text-[#451a03] text-2xl hover:text-[#ea580c]"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-[#451a03] text-2xl hover:text-[#ea580c]"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-[#451a03] text-2xl hover:text-[#ea580c]"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </main>
    <script>
         AOS.init();
        // Cek status login saat halaman dimuat
    window.onload = function() {
        // Cek apakah user sudah login di sessionStorage
        const isLoggedIn = <?php echo isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true ? 'true' : 'false'; ?>;
        
        // Ambil semua link dengan class 'book-link'
        const bookLinks = document.querySelectorAll('.book-link');
        
        // Jika belum login, nonaktifkan link dan arahkan ke halaman login
        if (!isLoggedIn) {
            bookLinks.forEach(link => {
                // Tambahkan event listener untuk mencegah navigasi dan menampilkan alert
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah navigasi
                    alert('Anda harus login terlebih dahulu!'); // Menampilkan pesan alert
                    window.location.href = 'login.html'; // Arahkan ke halaman login
                });
            });
        }
    };
    </script>
</body>
</html>