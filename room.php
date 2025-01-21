<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Types</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gray-100">
    <header>
        <nav class="absolute top-0 left-0 right-0 flex justify-between items-center p-6 bg-[#451a03] text-white z-50">
            <div class="text-2xl font-bold" style="font-family: Merriweather, serif;">
                Grand Aveline
            </div>
            <ul class="hidden md:flex space-x-6">
                <li><a class="hover:text-[#fcd34d]" href="home.php">Home</a></li>
                <li><a class="hover:text-[#fcd34d]" href="home.php#about">About</a></li>
                <li><a class="hover:text-[#fcd34d]" href="login.html">Login</a></li>
                <li><a class="hover:text-[#fcd34d]" href="roominfo.html">Rooms</a></li>
                <li><a class="hover:text-[#fcd34d]" href="book.html">Book</a></li>
                <li><a class="hover:text-[#fcd34d]" href="home.php#facilities">Facilities</a></li>
                <li><a class="hover:text-[#fcd34d]" href="contact.html">Contact us</a></li>
            </ul>
            <div class="md:hidden">
                <button id="menu-button" class="text-white focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden bg-[#451a03] text-white p-6 mt-16 z-50">
            <ul class="space-y-4">
                <li><a class="hover:text-[#fcd34d]" href="home.php">Home</a></li>
                <li><a class="hover:text-[#fcd34d]" href="home.php#about">About</a></li>
                <li><a class="hover:text-[#fcd34d]" href="login.html">Login</a></li>
                <li><a class="hover:text-[#fcd34d]" href="roominfo.html">Rooms</a></li>
                <li><a class="hover:text-[#fcd34d]" href="book.html">Book</a></li>
                <li><a class="hover:text-[#fcd34d]" href="home.php#facilities">Facilities</a></li>
                <li><a class="hover:text-[#fcd34d]" href="contact.html">Contact us</a></li>
            </ul>
        </div>
    </header>
    <main class="container mx-auto p-5 mt-20">
        <h1 class="text-4xl font-bold text-center text-gray-900 mb-10" style="font-family: Raleway,serif;">Our Rooms</h1>
        <div class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="categoryFilter" class="block text-gray-700 text-sm font-bold mb-2">Filter by Room Type:</label>
                <input type="text" id="categoryFilter" onkeyup="filterRooms()" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter room type (e.g., Standard, Deluxe, Suite)">
            </div>
            <div>
                <label for="priceFilter" class="block text-gray-700 text-sm font-bold mb-2">Filter by Price (max):</label>
                <input type="number" id="priceFilter" onkeyup="filterRooms()" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter max price">
            </div>
            <div>
                <label for="guestFilter" class="block text-gray-700 text-sm font-bold mb-2">Filter by Guests:</label>
                <select id="guestFilter" onchange="filterRooms()" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Select guests</option>
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4 Guests</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" style="font-family: 'Open Sans', serif;">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden room-card" data-room-type="Standard Room" data-room-price="700000" data-room-guests="1">
                <img class="w-full h-48 object-cover" src="image/standard.jpg" alt="Single Room">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Standard Room</h2>
                    <p class="text-gray-700 mb-4">A room perfect for solo travelers. Includes a single bed, free Wi-Fi, and a private bathroom.</p>
                    <p class="text-gray-900 font-bold mb-4">Rp700.000 / night</p>
                    <p class="text-gray-700 flex items-center mb-4">
                        <span class="material-icons text-gray-600 mr-2">person</span> 1 Guest
                    </p>
                    <a href="book.html" class="book-link bg-[#451a03] hover:bg-[#fcd34d] text-white font-bold py-2 px-4 rounded inline-block text-center">
                        Book Now
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden room-card" data-room-type="Superior Room" data-room-price="950000" data-room-guests="1,2">
    <img class="w-full h-48 object-cover" src="image/superior.jpg" alt="Double Room">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Superior Room</h2>
        <p class="text-gray-700 mb-4">Ideal for couples or friends. Features a double bed, free Wi-Fi, and a private bathroom.</p>
        <p class="text-gray-900 font-bold mb-4">Rp950.000 / night</p>
        <p class="text-gray-700 flex items-center mb-4">
            <span class="material-icons text-gray-600 mr-2">person</span> 1-2 Guest
        </p>
        <a href="book.html" class="book-link bg-[#451a03] hover:bg-[#fcd34d] text-white font-bold py-2 px-4 rounded inline-block text-center">
            Book Now
        </a>
    </div>
</div>
<!-- Card 3 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden room-card" data-room-type="Suite Room" data-room-price="2300000" data-room-guests="3,4">
    <img class="w-full h-48 object-cover" src="image/suite.jpg" alt="Suite">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Suite Room</h2>
        <p class="text-gray-700 mb-4">Luxurious suite with a king-size bed, living area, free Wi-Fi, and a private bathroom.</p>
        <p class="text-gray-900 font-bold mb-4">Rp2.300.000 / night</p>
        <p class="text-gray-700 flex items-center mb-4">
            <span class="material-icons text-gray-600 mr-2">person</span> 3-4 Guest
        </p>
        <a href="book.html" class="book-link bg-[#451a03] hover:bg-[#fcd34d] text-white font-bold py-2 px-4 rounded inline-block text-center">
            Book Now
        </a>
    </div>
</div>
<!-- Card 4 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden room-card" data-room-type="Deluxe Room" data-room-price="1300000" data-room-guests="2,3">
    <img class="w-full h-48 object-cover" src="image/deluxe.jpg" alt="Deluxe Room">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Deluxe Room</h2>
        <p class="text-gray-700 mb-4">A spacious room with premium amenities, including a minibar, electric kettle, larger TV.</p>
        <p class="text-gray-900 font-bold mb-4">Rp1.300.000 / night</p>
        <p class="text-gray-700 flex items-center mb-4">
            <span class="material-icons text-gray-600 mr-2">person</span> 2-3 Guest
        </p>
        <a href="book.html" class="book-link bg-[#451a03] hover:bg-[#fcd34d] text-white font-bold py-2 px-4 rounded inline-block text-center">
            Book Now
        </a>
    </div>
</div>
<!-- Card 5 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden room-card" data-room-type="Family Room" data-room-price="1800000" data-room-guests="4,5">
    <img class="w-full h-48 object-cover" src="image/family.jpg" alt="Family Room">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Family Room</h2>
        <p class="text-gray-700 mb-4">A spacious room for families, with extra beds or bunk beds for children.</p>
        <p class="text-gray-900 font-bold mb-4">Rp1.800.000 / night</p>
        <p class="text-gray-700 flex items-center mb-4">
            <span class="material-icons text-gray-600 mr-2">person</span> 4-5 Guest
        </p>
        <a href="book.html" class="book-link bg-[#451a03] hover:bg-[#fcd34d] text-white font-bold py-2 px-4 rounded inline-block text-center">
            Book Now
        </a>
    </div>
</div>
<!-- Card 6 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden room-card" data-room-type="Executive Room" data-room-price="1700000" data-room-guests="1,2">
    <img class="w-full h-48 object-cover" src="image/executive.jpg" alt="Executive Room">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Executive Room</h2>
        <p class="text-gray-700 mb-4">A business-friendly room with a large desk, fast Wi-Fi, and premium facilities.</p>
        <p class="text-gray-900 font-bold mb-4">Rp1.700.000 / night</p>
        <p class="text-gray-700 flex items-center mb-4">
            <span class="material-icons text-gray-600 mr-2">person</span> 1-2 Guest
        </p>
        <a href="book.html" class="book-link bg-[#451a03] hover:bg-[#fcd34d] text-white font-bold py-2 px-4 rounded inline-block text-center">
            Book Now
        </a>
    </div>
</div>
<!-- Card 7 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden room-card" data-room-type="View Room" data-room-price="1700000" data-room-guests="2,3">
    <img class="w-full h-48 object-cover" src="image/view (2).jpg" alt="View Room">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">View Room</h2>
        <p class="text-gray-700 mb-4">A room offering scenic views with varying amenities based on room class.</p>
        <p class="text-gray-900 font-bold mb-4">Rp1.700.000 / night</p>
        <p class="text-gray-700 flex items-center mb-4">
            <span class="material-icons text-gray-600 mr-2">person</span> 2-3 Guest
        </p>
        <a href="book.html" class="book-link bg-[#451a03] hover:bg-[#fcd34d] text-white font-bold py-2 px-4 rounded inline-block text-center">
            Book Now
        </a>
    </div>
</div>
<!-- Card 8 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden room-card" data-room-type="Honeymoon Room" data-room-price="2500000" data-room-guests="2">
    <img class="w-full h-48 object-cover" src="image/honeymoon.jpg" alt="Honeymoon Room">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Honeymoon Room</h2>
        <p class="text-gray-700 mb-4">A romantic room for couples with luxurious amenities and special touches.</p>
        <p class="text-gray-900 font-bold mb-4">Rp2.500.000 / night</p>
        <p class="text-gray-700 flex items-center mb-4">
            <span class="material-icons text-gray-600 mr-2">person</span> 2 Guest
        </p>
        <a href="book.html" class="book-link bg-[#451a03] hover:bg-[#fcd34d] text-white font-bold py-2 px-4 rounded inline-block text-center">
            Book Now
        </a>
    </div>
</div>
</div>
</main>
<script>
    AOS.init();
  
    function filterRooms() {
      const categoryFilter = document.getElementById('categoryFilter').value.toLowerCase();
      const priceFilter = document.getElementById('priceFilter').value;
      const guestFilter = document.getElementById('guestFilter').value;
      const cards = document.getElementsByClassName('room-card');
      
      for (let i = 0; i < cards.length; i++) {
        const card = cards[i];
        const roomType = card.getAttribute('data-room-type').toLowerCase();
        const roomPrice = parseInt(card.getAttribute('data-room-price'));
        const roomGuests = card.getAttribute('data-room-guests').split(',').map(Number);
        
        const matchesCategory = categoryFilter === '' || roomType.includes(categoryFilter);
        const matchesPrice = priceFilter === '' || roomPrice <= parseInt(priceFilter);
        const matchesGuests = guestFilter === '' || roomGuests.includes(parseInt(guestFilter));
        
        if (matchesCategory && matchesPrice && matchesGuests) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      }
    }
  
    // Toggle mobile menu
    document.getElementById('menu-button').addEventListener('click', function() {
      var mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
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
  </script>
  </body>
  </html>