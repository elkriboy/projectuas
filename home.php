<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Grand Aveline</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  
  <!-- Link ke Google Font yang ingin ditambahkan -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- AOS Library for Scroll Animations -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-gray-100 text-[#0a0a0a]" onload="AOS.init()">
  <!-- Header Section -->
  <header class="relative">
    <img alt="Aerial view of Avallon hotel with pool" class="w-full h-screen object-cover" src="image/hotelpage.jpg"/>
    <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center text-center text-white z-40" data-aos="fade-up">
      <h1 class="text-5xl md:text-6xl" style="font-family: 'Raleway', serif;">
        Welcome to Our Hotel
      </h1>
      <p class="text-lg md:text-xl mt-4" style="font-family: Merriweather, serif;">
        Grand Aveline Resort & Spa
      </p>
      <a href="book.html" class="book-link mt-8 px-8 py-3 bg-[#451a03] text-white font-semibold rounded-2xl inline-block hover:bg-[#7a3e1f] hover:scale-105 transition-all duration-300 ease-in-out">
        BOOK NOW
      </a>
    </div>
    <nav class="absolute top-0 left-0 right-0 flex justify-between items-center p-6 bg-transparent text-white z-50">
      <div class="text-3xl font-bold" style="font-family: Merriweather, serif;">
        Grand Aveline
      </div>
      <ul class="hidden md:flex space-x-6" style="font-family: 'Raleway', serif;">
        <li><a class="hover:text-[#fcd34d]" href="home.php">Home</a></li>
        <li><a class="hover:text-[#fcd34d]" href="#about">About</a></li>
        <li><a class="hover:text-[#fcd34d]" href="login.html">Login</a></li>
        <li><a class="hover:text-[#fcd34d]" href="room.php">Rooms</a></li>
        <li><a class="book-link hover:text-[#fcd34d]" href="book.html">Book</a></li>
        <li><a class="hover:text-[#fcd34d]" href="#facilities">Facilities</a></li>
        <li><a class="hover:text-[#fcd34d]" href="contactdesain.php">Contact us</a></li>
        <li><button class="hover:text-[#fcd34d]" id="logout-button">Logout</button></li>
      </ul>
      <div class="md:hidden">
        <button id="menu-button" class="text-white focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </nav>
  </header>

  <!-- Mobile Menu -->
  <nav id="mobile-menu" class="hidden md:hidden bg-[#451a03] text-white p-6 z-50 relative">
    <ul class="space-y-4">
      <li><a class="hover:text-[#fcd34d]" href="home.php">Home</a></li>
      <li><a class="hover:text-[#fcd34d]" href="#about">About</a></li>
      <li><a class="hover:text-[#fcd34d]" href="login.html">Login</a></li>
      <li><a class="hover:text-[#fcd34d]" href="room.php">Rooms</a></li>
      <li><a class="book-link hover:text-[#fcd34d]" href="book.html">Book</a></li>
      <li><a class="hover:text-[#fcd34d]" href="#facilities">Facilities</a></li>
      <li><a class="hover:text-[#fcd34d]" href="contactdesain.php">Contact us</a></li>
    </ul>
  </nav>
  
  <!-- Main Content -->
  <main class="px-6 md:px-12 lg:px-24 py-12">
    <!-- About Section -->
    <section class="flex flex-col md:flex-row items-center mb-16" id="about">
        <div class="md:w-1/2 md:pr-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-6" style="font-family: Merriweather, serif;">
            About
          </h2>
          <p class="text-lg md:text-xl mb-8 leading-relaxed" style="font-family: 'Open Sans', serif;">
            A perfect blend of modern luxury and timeless elegance in the heart of Bali. Offering a range of exceptional services, we cater to both business and leisure travelers.
          </p>
          <div id="about-more" class="hidden">
            <p class="text-lg md:text-xl mb-8 leading-relaxed" style="font-family: 'Open Sans', serif;">
              Our hotel features a stunning infinity pool, a world-class spa, and gourmet dining options that will make your stay unforgettable. We also offer personalized services to ensure that every guest feels special and valued.
            </p>
          </div>
          <a href="#" id="about-toggle" class="text-[#451a03] font-semibold border-b-2 border-[#451a03] hover:text-[#92400e] hover:border-[#451a03] transition">
            Read More
          </a>
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0">
          <img alt="Spacious hotel room with modern amenities" class="w-full rounded-xl shadow-lg" src="image/aboutni.jpg">
        </div>
      </section>
  
      <!-- History Section -->
      <section class="flex flex-col md:flex-row-reverse items-center mb-16">
        <div class="md:w-1/2 md:pl-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-6" style="font-family: Merriweather, serif;">
            History
          </h2>
          <p class="text-lg md:text-xl mb-8 leading-relaxed" style="font-family: 'Open Sans', serif;">
            Hotel Grand Aveline was founded in 2001 with a vision to redefine luxury in hospitality. From a humble boutique hotel to a symbol of excellence and innovation, we have welcomed guests from around the world and continue to evolve to meet the needs of the future.
          </p>
          <div id="history-more" class="hidden">
            <p class="text-lg md:text-xl mb-8 leading-relaxed" style="font-family: 'Open Sans', serif;">
              Over the years, we have expanded our services and facilities to ensure that every guest has a memorable experience. Our commitment to quality and service has made us a favorite among travelers.
            </p>
          </div>
          <a href="#" id="history-toggle" class="text-[#451a03] font-semibold border-b-2 border-[#451a03] hover:text-[#92400e] hover:border-[#451a03] transition">
            Read More
          </a>
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0">
          <img alt="Spacious hotel room with modern amenities" class="w-full rounded-xl shadow-lg" src="image/historyni.jpg">
        </div>
      </section>

    <section class="text-center mb-12" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-[#451a03]" style="font-family: 'Raleway', serif;">Rooms Include</h2>
    </section>

    <section class="container mx-auto px-6">
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-6">
        <div class="card bg-white p-6 rounded-2xl shadow-lg text-center" data-aos="zoom-in">
          <i class="fas fa-utensils text-4xl text-[#451a03] mb-4"></i>
          <p class="text-lg">Breakfast</p>
        </div>

        <div class="card bg-white p-6 rounded-2xl shadow-lg text-center" data-aos="zoom-in">
          <i class="fas fa-wifi text-4xl text-[#451a03] mb-4"></i>
          <p class="text-lg">Free Wifi</p>
        </div>

        <div class="card bg-white p-6 rounded-2xl shadow-lg text-center" data-aos="zoom-in">
            <i class="fas fa-concierge-bell text-4xl text-[#451a03] mb-4"></i>
            <p class="text-lg">Room Service</p>
          </div>
  
          <div class="card bg-white p-6 rounded-2xl shadow-lg text-center" data-aos="zoom-in">
            <i class="fas fa-wine-glass text-4xl text-[#451a03] mb-4"></i>
            <p class="text-lg">Welcome Drink</p>
          </div>
        </div>
      </section>
    </main>
  
    <!-- Facilities Section -->
    <section class="px-6 md:px-12 lg:px-24 py-12" id="facilities">
      <h1 class="text-3xl md:text-4xl font-bold text-center mb-12 text-[#451a03]" style="font-family: 'Raleway', serif;">
        Facilities
      </h1>
      <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="card bg-[#451a03] text-white shadow-lg rounded-lg overflow-hidden hover:bg-[#5a2605] transition duration-300" data-aos="zoom-in">
          <img alt="Modern gym with various equipment" src="image/gym.jpg" class="w-full h-48 object-cover">
          <div class="card-content p-4">
            <h2 class="text-xl font-bold mb-2">State-of-the-art Gym</h2>
            <p class="text-sm">
              Equipped with the latest fitness machines and free weights to keep you in shape during your stay.
            </p>
          </div>
        </div>
    
        <!-- Card 2 -->
        <div class="card bg-[#451a03] text-white shadow-lg rounded-lg overflow-hidden hover:bg-[#5a2605] transition duration-300" data-aos="zoom-in">
          <img alt="Elegant restaurant dining area" src="image/restaurant.jpg" class="w-full h-48 object-cover">
          <div class="card-content p-4">
            <h2 class="text-xl font-bold mb-2">Gourmet Restaurant</h2>
            <p class="text-sm">
              Enjoy a fine dining experience with a variety of international cuisines prepared by our top chefs.
            </p>
          </div>
        </div>
    
        <!-- Card 3 -->
        <div class="card bg-[#451a03] text-white shadow-lg rounded-lg overflow-hidden hover:bg-[#5a2605] transition duration-300" data-aos="zoom-in">
          <img alt="Children's playground with various play equipment" src="image/playground.jpg" class="w-full h-48 object-cover">
          <div class="card-content p-4">
            <h2 class="text-xl font-bold mb-2">Kids' Playground</h2>
            <p class="text-sm">
              A fun and safe area for children to play and enjoy their time.
            </p>
          </div>
        </div>
    
        <!-- Card 4 -->
        <div class="card bg-[#451a03] text-white shadow-lg rounded-lg overflow-hidden hover:bg-[#5a2605] transition duration-300" data-aos="zoom-in">
          <img alt="Luxurious swimming pool area" src="image/swimmingpool.jpg" class="w-full h-48 object-cover">
          <div class="card-content p-4">
            <h2 class="text-xl font-bold mb-2">Swimming Pool</h2>
            <p class="text-sm">
              Relax and unwind in our outdoor swimming pool with a stunning view.
            </p>
          </div>
        </div>
    
        <!-- Card 5 -->
        <div class="card bg-[#451a03] text-white shadow-lg rounded-lg overflow-hidden hover:bg-[#5a2605] transition duration-300" data-aos="zoom-in">
          <img alt="Cozy library with bookshelves" src="image/library.jpg" class="w-full h-48 object-cover">
          <div class="card-content p-4">
            <h2 class="text-xl font-bold mb-2">Cozy Library</h2>
            <p class="text-sm">
              A quiet place to read and relax with a wide selection of books.
            </p>
          </div>
        </div>
      </div>
    </section>
  
    <section class="relative" style="font-family: roboto , serif;" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-[#451a03] text-center mb-10" style="font-family: 'Raleway', serif;">
        Best Seller
      </h2>    
      <div class="relative w-10/12 md:w-8/12 lg:w-6/12 mx-auto shadow-xl rounded-lg overflow-hidden mb-8">
        <img alt="Luxurious hotel room with modern decor" class="w-full h-full object-cover" src="image/kamar1.jpg"/>
        
        <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center text-center text-white p-6">
          <!-- Judul dengan ukuran teks yang lebih besar dan shadow -->
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-shadow-lg">
            Standard Room
          </h2>
          
          <!-- Deskripsi dengan ukuran teks lebih kecil dan shadow -->
          <p class="text-lg md:text-xl lg:text-2xl mb-6 text-shadow-lg">
            Kamar standar dengan fasilitas dasar yang nyaman dan praktis untuk tamu yang mencari kenyamanan tanpa banyak tambahan.
          </p>
          
          <div class="flex items-center justify-center mt-6 space-x-4">
            <div class="flex items-center">
              <i class="material-icons text-xl">person</i>
              <span class="ml-2">1 Guests</span>
            </div>
          </div>
          
          <p class="text-3xl md:text-4xl font-bold mt-4">
            Rp.700.000
            <span class="text-lg">/ Malam</span>
          </p>
          
          <a href="book.html" class="book-link mt-6 px-8 py-3 bg-[#451a03] text-white font-semibold rounded-2xl inline-block hover:bg-[#7a3e1f] hover:scale-105 transition-all duration-300 ease-in-out" data-aos="zoom-in">
            BOOK ROOMS
          </a>
        </div>
      </div>
    
      <!-- Gambar kedua dengan jarak atas -->
      <div class="relative w-10/12 md:w-8/12 lg:w-6/12 mx-auto shadow-xl rounded-lg overflow-hidden">
        <img alt="Luxurious hotel room with modern decor" class="w-full h-full object-cover" src="image/kamar1.jpg"/>
        
        <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center text-center text-white p-6">
          <!-- Judul dengan ukuran teks yang lebih besar dan shadow -->
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-shadow-lg">
            Deluxe Room
          </h2>
          
          <!-- Deskripsi dengan ukuran teks lebih kecil dan shadow -->
          <p class="text-lg md:text-xl lg:text-xl mb-6 text-shadow-lg">
            Kamar deluxe yang luas, dengan fasilitas premium dan pemandangan yang indah, cocok untuk tamu yang mencari pengalaman lebih mewah.
          </p>
          
          <div class="flex items-center justify-center mt-6 space-x-4">
           <div class="flex items-center">
              <i class="material-icons text-xl">person</i>
              <span class="ml-2">2-3 Guests</span>
            </div>
          </div>
          
          <p class="text-3xl md:text-4xl font-bold mt-4">
            Rp1.300.000
            <span class="text-lg">/ night</span>
          </p>
          
          <a href="book.html" class="book-link mt-6 px-8 py-3 bg-[#451a03] text-white font-semibold rounded-2xl inline-block hover:bg-[#7a3e1f] hover:scale-105 transition-all duration-300 ease-in-out" data-aos="zoom-in">
            BOOK ROOMS
          </a>
        </div>
      </div>
    </section>
    
    <footer class="bg-[#451a03] text-white py-6 mt-20">
      <div class="container mx-auto text-center">
        <p class="text-lg font-semibold">Follow Us</p>
        <div class="flex justify-center space-x-4 mt-4">
            <!-- Facebook -->
        <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.003 3.657 9.127 8.438 9.878v-6.988H8.077v-2.89h2.361V9.605c0-2.332 1.402-3.61 3.548-3.61 1.029 0 2.101.183 2.101.183v2.31h-1.183c-1.165 0-1.53.725-1.53 1.469v1.759h2.602l-.416 2.89h-2.186v6.988C18.343 21.127 22 17.003 22 12z" />
            </svg>
          </a>
          <!-- Twitter -->
          <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0016.29 2c-2.72 0-4.92 2.2-4.92 4.92 0 .39.04.77.12 1.14C7.69 7.76 4.06 5.87 1.64 2.85a4.92 4.92 0 001.52 6.57A4.92 4.92 0 01.96 8.1v.06c0 2.28 1.62 4.18 3.77 4.61a4.92 4.92 0 01-2.21.08 4.92 4.92 0 004.59 3.42A9.86 9.86 0 010 20.29a13.92 13.92 0 007.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.42-.01-.63A10.08 10.08 0 0023 3z" />
            </svg>
          </a>
          <!-- Instagram -->
          <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-pink-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7.75 2A5.75 5.75 0 002 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zM12 6.91a5.09 5.09 0 110 10.18 5.09 5.09 0 010-10.18zm6.1-1.86a1.41 1.41 0 110 2.82 1.41 1.41 0 010-2.82zM12 8.09a3.91 3.91 0 100 7.82 3.91 3.91 0 000-7.82z" />
            </svg>
          </a>
        </div>
        <p class="text-sm text-gray-500 mt-6">© 2025 YourWebsite. All Rights Reserved.</p>
      </div>
    </footer>
   <script>
    // Inisialisasi AOS
    AOS.init({
        duration: 1200, // Durasi animasi
    });

    // Toggle menu mobile
    document.getElementById('menu-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Toggle bagian About
    document.getElementById('about-toggle').addEventListener('click', function(event) {
        event.preventDefault();
        const aboutMore = document.getElementById('about-more');
        const toggleText = this;

        if (aboutMore.classList.contains('hidden')) {
            aboutMore.classList.remove('hidden');
            toggleText.textContent = 'Hide';
        } else {
            aboutMore.classList.add('hidden');
            toggleText.textContent = 'Read More';
        }
    });

    // Toggle bagian History
    document.getElementById('history-toggle').addEventListener('click', function(event) {
        event.preventDefault();
        const historyMore = document.getElementById('history-more');
        const toggleText = this;

        if (historyMore.classList.contains('hidden')) {
            historyMore.classList.remove('hidden');
            toggleText.textContent = 'Hide';
        } else {
            historyMore.classList.add('hidden');
            toggleText.textContent = 'Read More';
        }
    });

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
    // Fungsi untuk logout
     function logout() {
    // Hapus status login dari sessionStorage
    sessionStorage.removeItem('user_logged_in');
    // Arahkan ke logout.php untuk menghapus sesi PHP
    window.location.href = 'logout.php';
}

// Tambahkan event listener ke tombol logout
document.getElementById('logout-button').addEventListener('click', logout);
</script>
    
   
  </body>
  </html>