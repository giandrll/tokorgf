<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RGF Store</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logomerah.png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: white;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
        }

        .floating {
            animation: float 3s ease-in-out infinite;
            max-width: 100%;
            height: auto;
        }

        @keyframes float {
            0% {
                transform: translatey(0px);
            }

            50% {
                transform: translatey(-20px);
            }

            100% {
                transform: translatey(0px);
            }
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
        }

        .content {
            background-color: rgba(245, 171, 98, 0.8);
            border-radius: 10px;
            padding: 2rem;
            margin: 2rem;
            box-sizing: border-box;
        }

        .contact-section {
            background-color: #ffffff01;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 2rem;
        }

        .contact-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        /* .whatsapp-logo {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 40px;
    z-index: 1000;
    transition: transform 0.2s ease, opacity 0.2s ease;
}

.whatsapp-logo:hover {
    transform: scale(1.1);
    opacity: 0.9;
}

.whatsapp-logo.clicked {
    transform: scale(1.2);
    opacity: 0.8;
}

.whatsapp-logo img {
    width: 100%;
    height: auto;
} */



        .footer {
            background-color: grey;
            color: white;
            padding: 2rem 0;
            margin-top: 2rem;
        }


        .navbar-nav {
            display: inline-flex;
            margin-right: 100px;
            margin-top: 30px;
            /* Mengatur item navbar dalam satu baris */
        }

        .nav-item {
            margin-right: 9px;
            top: 10px;
            /* Jarak antar item navbar */
        }

        .navbar-brand {
            display: inline-block;
            /* Memungkinkan untuk mengatur lebar dan tinggi */
            overflow-x: auto;
            /* Membuat elemen dapat digulir secara horizontal */
            white-space: nowrap;
            /* Mencegah konten membungkus ke baris berikutnya */
            max-width: 100%;
            margin-left: 30px;
            margin-top: 30px;
            /* Batasi lebar maksimum */
        }

        .navbar-brand img {
            max-width: none;
            /* Menghindari pemotongan gambar */
            height: auto;
            /* Menjaga aspek rasio gambar */
        }

        .content {
            padding: 20px;

        }

        .product-section {
    max-width: 1000px;
    margin: auto;
}

.slider-container {
    position: relative;
    overflow: hidden;
}

.slides {
    display: flex;
    transition: transform 0.5s ease;
}

.slide {
    min-width: 100%;
    display: flex;
    justify-content: center;
    /* Pusatkan produk dalam slide */
}

.product-card {
    text-align: center;
    border-radius: 4px;
    margin: 10px;
}

.product-card img {
    width: 350px; /* Atur lebar gambar produk */
    height: auto;
}

.navigation {
    position: absolute;
    top: 50%; /* Posisikan di tengah vertikal */
    width: 100%;
    display: flex;
    justify-content: space-between; /* Posisi tombol kiri dan kanan */
    transform: translateY(-50%);
    padding: 0 20px;
}

.navigation button {
    background-color: rgba(0, 0, 0, 0.6); /* Warna latar belakang semi-transparan */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.navigation button:hover {
    background-color: rgba(0, 0, 0, 0.8); /* Warna saat hover */
}

/* Responsif: agar tombol tidak terlalu besar di layar kecil */
@media (max-width: 768px) {
    .navigation {
        padding: 0 10px;
    }
    .navigation button {
        padding: 8px 12px;
        font-size: 16px;
    }
    .product-card img {
        width: 250px; /* Atur lebar gambar produk lebih kecil di layar kecil */
    }
}

        .footer {
            background-color: #EEEEEE;
            color: white;
            padding: 40px 0 20px;
        }

        .footer .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer2,
        .footer3,
        .footer4 {
            flex: 1;
            min-width: 200px;
            margin-bottom: 20px;
            padding: 0 15px;
        }

        .footer img {
            margin-bottom: 15px;
        }

        .footer h4 {
            font-family: 'small-caps bold', sans-serif;
            color: #000;
            /* Teks hitam */
            margin: 10px 0;
            /* Margin vertikal */
            font-weight: 900;
        }

        .footer h6 {
            margin-bottom: 5px;
        }

        .footer a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #ddd;
        }

        .footer p {
            margin-bottom: 10px;
        }

        .social-links a {
            margin-right: 10px;
        }

        .text-center {
            width: 100%;
            text-align: `center`;
            padding-top: 20px;
            margin-top: 20px;
            border-top: 1px solid #555;
            padding-bottom:60px;
        }

        @media (max-width: 768px) {
            .footer .container {
                flex-direction: column;
            }

            .footer2,
            .footer3,
            .footer4 {
                width: 100%;
                margin-bottom: 30px;
            }
        }



        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .product-card h4 {
            margin: 10px 0;
        }

        .product-card p {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .product-card {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .product-card {
                width: 100%;
            }
        }

        .abouth1 {
            font-weight: bold;
            /* Atau bisa menggunakan '700' */
        }

        .footerlogo {
            display: block;
            /* Pastikan logo ditampilkan sebagai blok */
        }

        .footer3 {
            display: flex;
            flex-direction: column;
            /* Mengatur elemen menjadi kolom */
            align-items: flex-start;
            /* Mengatur item di kiri */
            padding: 15px;
            /* Tambahkan padding sesuai kebutuhan */
            background-color: #0;
            /* Contoh warna latar belakang */
            color: white;
            /* Warna teks */
            border-radius: 8px;
            /* Radius border jika diinginkan */
            transition: transform 0.3s ease;
            margin: 10px;
            /* Tambahkan margin untuk spasi */
        }

        .footer4 {
            display: flex;
            flex-direction: column;
            /* Mengatur elemen menjadi kolom */
            align-items: flex-start;
            /* Mengatur item di kiri */
            padding: 15px;
            /* Tambahkan padding sesuai kebutuhan */
            background-color: #0;
            /* Contoh warna latar belakang */
            color: white;
            /* Warna teks */
            border-radius: 8px;
            /* Radius border jika diinginkan */
            transition: transform 0.3s ease;
            margin: 10px;
            /* Tambahkan margin untuk spasi */
        }

        /* Navbar Styling */
        .navbar {
            width: 100%;
            background-color: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 0px;
            position: fixed;
            bottom: 0;
            /* Make the navbar stick to the bottom */
            left: 0;
            z-index: 1000;
            /* Ensure it's on top */
            box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

        /* Navbar Left (Logo) */
        .navbar-logo {
            width: 55px;
            height: auto;
        }
        .navbar-center {
            display: flex;
            justify-content: space-around;
            /* Menjaga elemen tetap bersebelahan */
        }

        /* Navbar Center (Middle Links) */
        .navbar-center a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
        }

        .navbar-center a:hover {
            /* background-color: #575757; */
            border-radius: 5px;
        }

        /* Navbar Right (Login) */
        .navbar-right a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
        }

        .navbar-right a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        /* Content for Scroll Testing */
        .content {
            height: 2000px;
            /* To create enough scrolling space */
            padding: 20px;
        }

        /* Navbar Styling */
        .navbar3 {
            background-color: #333;
            color: white;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            border-bottom: 1px solid #f7f3f3;

        }

        .navbar-container3 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        /* Search Bar Button Styling */
        .search-icon,
        .search-form button {
            background-color: #e0e0e0;
            /* Abu-abu */
            border: none;
        }

        .search-icon i,
        .search-form button i {
            color: #333;
            /* Warna ikon abu gelap */
        }

        /* Cart Icon Styling */
        .cart-icon i {
            font-size: 24px;
            color: #b9bec2;
            /* Abu-abu untuk ikon keranjang */
        }

        /* Search Modal Styling */
        .search-modal {
            display: none;
            position: fixed;
            top: 50px;
            width: 100%;
            background-color: white;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 1050;
        }

        .modal-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .search-form {
                display: none;
            }
        }


        /* Styling for the AKU div */
        .AKU {
            display: flex;
            justify-content: flex-start;
            /* Aligns content to the left */
            align-items: center;
            /* Centers text vertically */
            padding: 10px 20px;
            /* Adds some padding for spacing */
            /* Dark background for contrast */
            border-radius: 8px;
            /* Slightly rounded corners */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            /* Adds a soft shadow for a lifted look */
        }

        /* Styling for the text inside the AKU div */
        .AKU p {
            margin: 0;
            font-size: 20px;
            /* Increase font size for visibility */
            font-weight: 700;
            /* Makes text bold */
            color: #fff;
            /* Sets text color to white */
            letter-spacing: 1px;
            /* Adds slight spacing between letters for readability */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-family: 'Poppins', sans-serif;
            /* Adds a subtle shadow to the text */
        }

        .video-branding {
            position: relative;
            width: 100%;
            /* Mengatur lebar video menjadi 90% agar tidak mepet */
            max-width: 1200px;
            /* Membatasi lebar maksimum video */
            margin: 0 auto;
            /* Agar video berada di tengah layar */
            height: auto;
            padding: 20px;
            margin-top: 70px;
            box-sizing: border-box;
            /* Memastikan padding tidak menambah ukuran total elemen */
        }

        /* Video */
        .video-branding video {
            width: 100%;
            height: auto;
            /* Menyesuaikan tinggi sesuai rasio lebar */
            object-fit: cover;
            /* Agar video tetap memenuhi container */
        }

        /* Teks di atas video */
        .video-branding .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2.5em;
            font-weight: bold;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            /* Bayangan agar teks lebih jelas */
        }

        /* Responsive text size */
        @media (max-width: 768px) {
            .video-branding .text-overlay {
                font-size: 1.5em;
            }
        }


        .brand2 {
            display: flex;
            justify-content: center;
            /* Mengatur konten agar berada di tengah secara horizontal */
            align-items: center;
            /* Mengatur konten agar berada di tengah secara vertikal */
            height: 30vh;
            /* Mengisi tinggi viewport */
            background-color: #fff;
            padding-top: 30px;
            padding-bottom: 60px;
            /* Latar belakang putih */
        }

        .brand-content {
            text-align: center;
            /* Mengatur teks agar rata tengah */
            max-width: 600px;
            /* Maksimal lebar konten */
            padding: 20px;
            /* Ruang dalam untuk konten */
            background-color: #fff;
            /* Latar belakang putih untuk konten */
            /* Bayangan halus untuk efek kedalaman */
            border-radius: 8px;
            /* Sudut melengkung */
        }

        h6 {
            font-family: 'Roboto', sans-serif;
            /* Font untuk h6 */
            color: #000;
            /* Teks hitam */
            font-weight: 600;
            /* Berat font normal */
        }

        h1 {
            font-family: 'small-caps bold', sans-serif;
            color: #000;
            /* Teks hitam */
            margin: 10px 0;
            /* Margin vertikal */
            font-weight: 900;
            /* Berat font tebal */
        }

        p {
            font-family: 'Roboto', sans-serif;
            /* Font untuk p */
            color: #000;
            /* Teks hitam */
            line-height: 1.5;
            /* Jarak antar baris */
        }

        .shop-now-container {
            text-align: center;
            /* Center the button */
            margin: 0px;
            /* Add some margin */
        }

        .shop-now-button {
            display: inline-block;
            /* Make the button an inline-block */
            padding: 10px 24px;
            /* Add some padding */
            background-color: black;
            /* Black background */
            color: white;
            /* White text */
            text-decoration: none;
            /* Remove underline from the link */
            font-size: 18px;
            /* Increase font size */
            border-radius: 35px;
            /* Rounded corners */
            transition: background-color 0.3s ease;
           
            /* Smooth transition */
        }

        .shop-now-button:hover {
            background-color: #333;
            /* Darker background on hover */
        }

        .featured-products {
            display: flex;
            /* Use flexbox to arrange products in a row */
            justify-content: space-around;
            /* Space out the products */
            margin: 20px;
            /* Add some margin around the container */
        }

        .product {
            position: relative;
            /* Set position relative for absolute positioning of text */
            width: 450px;
            /* Set a fixed width for each product */
        }

       
.product img {
    width: 100%; /* Make the image fill the product div */
    height: auto; /* Maintain aspect ratio */
    padding: 10px;
    border-radius: 5px; /* Optional: rounded corners for images */
}
.product-text {
    position: absolute;
    bottom: 10px;
    left: 10px;
    color: white;
    background-color: rgba(0, 0, 0, 0.6);
    padding: 5px;
    border-radius: 3px;
    font-size: 16px; /* Default font size */
}

@media (max-width: 768px) { /* Tablet and below */
    .product-text {
        font-size: 6px; /* Smaller font for tablets */
        padding: 4px;
    }
}

@media (max-width: 500px) { /* Mobile screens */
    .product-text {
        font-size: 6px; /* Smaller font for mobile */
        padding: 3px;
    }
}


        .h3p {
            color: black;
            /* Set text color to black */
            padding: 10px;
            /* Add padding */
            margin: 0 20px;
            /* Add margin on the left and right for spacing */
            left: 18px;
            font-weight: bold;
        }


       

        .nav-item {
            display: inline-flex;
            flex-direction: column;
            /* Agar icon di atas teks */
            align-items: center;
            text-decoration: none;
            color: inherit;
            margin: 0 15px;
            /* Memberi sedikit jarak antara item */
        }

        .nav-item i {
            font-size: 24px;
            /* Ukuran ikon */
        }

        .nav-item span {
            font-size: 12px;
            /* Ukuran teks */
            margin-top: 4px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

.navbarm {
    background-color:#808284;
    height: 20px;
    width: 100%;
    overflow: hidden;
    position: fixed;
    top: 50px;
    left: 0;
    position: fixed;
    z-index: 9000;
}

.marqueem {
    font-family: 'Poppins', sans-serif;
    color: white;
    font-weight: 600;
    white-space: nowrap;
    animation: marqueem 20s linear infinite;
    font-size: 14px;
    line-height: 20px;
}

@keyframes marqueem {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
.icon-hover {
    font-size: 28px; /* Ukuran ikon */
    color: white;
    /* Warna latar belakang */
    padding: 5px; /* Ruang di sekitar ikon */
    border-radius: 50%; /* Membuat bentuk lingkaran */
    transition: transform 0.3s ease, background-color 0.3s ease;
    display: inline-flex; /* Untuk memastikan ikon berada di tengah */
    justify-content: center;
    align-items: center;
}

.icon-hover:hover {
    transform: translateY(-20px) scale(1.2); /* Naik ke atas dan membesar */
            background-color: #333;
           /* Latar belakang lebih gelap */
}
.produkandalan {
    width: 100%; /* Full width of the container */
    display: flex;
    justify-content: space-between;
    padding: 20px; /* Add padding around the entire container */
    box-sizing: border-box; /* Ensure padding doesn't increase total width */
    gap: 20px; /* Space between the images */
}

.andalan {
    flex: 1; /* Distribute space evenly between images */
}

.andalan img {
    width: 100%; /* Make image fill its container */
    height: 300px; /* Fixed height */
    object-fit: cover; /* Maintain image proportions */
    border-radius: 10px; /* Optional: add rounded corners */
}


    </style>

</head>

<body>
    <div class="navbarm">
        <div class="marqueem">
            @foreach ($data_setting as $item)
            Hai, {{$customer->nama}}! Selamat datang di {{$item->nama_toko}} Temukan berbagai penawaran menarik hanya untuk Anda!
             Kami sangat senang Anda mengunjungi toko kami. Nikmati berbagai promo menarik dan temukan produk favorit Anda yang
              siap mempercantik hidup Anda. Selamat berbelanja dan semoga hari Anda menyenankan!</div>
            @endforeach
        </div>
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo/Kiri -->
            <div class="navbar-left">
                @foreach ($data_setting as $item)
                    
                <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Logo" class="navbar-logo">
                @endforeach
            </div>

            <div class="navbar-center">
                <a href="/dashboardcustomer" class="nav-item">
                    <div class="icon-container">
                        <i class="fas fa-home icon-hover"></i>
                    </div>                   
                    <span>Home</span>
                </a>
                <a href="/dashboardproduk" class="nav-item">
                    <i class="fas fa-cubes icon-hover"></i>
                    <span>Product</span>
                </a>
                <a href="/customer/about" class="nav-item">
                    <i class="fas fa-user icon-hover"></i>
                    <span>About</span>
                </a>
            </div>


            <!-- Pilihan Kanan -->
            <div class="navbar-right">

            </div>
        </div>
    </nav>
    <!-- Navbar Section -->
    <nav class="navbar3">
        <div class="navbar-container3">
            <!-- Store Name -->
            <div class="AKU">
                @foreach ($data_setting as $item)
                    <p>{{ $item->nama_toko }}</p>
                @endforeach
            </div>

            <!-- Search and Cart Section -->
            <div class="d-flex align-items-center">
                <!-- Search Icon for Small Screens -->
                <button class="btn btn-secondary search-icon d-md-none" onclick="toggleSearchModal()">
                    <i class="fas fa-search"></i>
                </button>

                <!-- Full Search Bar for Desktop -->
                <form action="{{ route('dashboard.search') }}" method="GET"
                    class="input-group search-form d-none d-md-flex">
                    <input type="text" name="query" class="form-control search-input" placeholder="Cari produk..."
                        required>
                    <button type="submit" class="btn btn-secondary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <!-- Cart Icon -->
                <a href="/cart" class="cart-icon ml-3">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Search Modal for Small Screens -->
    <div id="searchModal" class="search-modal">
        <form action="{{ route('dashboard.search') }}" method="GET" class="modal-content">
            <input type="text" name="query" class="form-control" placeholder="Cari produk..." required>
            <button type="submit" class="btn btn-secondary mt-2 w-100">Cari</button>
        </form>
    </div>


    <div class="video-branding">
        <!-- Video autoplay tanpa kontrol -->
        <video autoplay muted loop>
            <source src="fotokami/dr.mp4" type="video/mp4">
            Browser Anda tidak mendukung pemutaran video.
        </video>

        <!-- Teks di tengah video -->
        <div class="text-overlay">
            
        </div>
    </div>
    <div class="brand2">
        <div class="brand-content">
            <h6>Brand Kami</h6>
            @foreach ($data_setting as $item)
                <h1>{{ $item->nama_toko }}</h1>
            @endforeach
            <p>Dibuat dengan penuh keyakinan dan penuh keikhlasan sehingga terjadinya produk yang berkualitas.</p>
            <div class="shop-now-container">
                {{-- <a href="/dashboardproduk" class="shop-now-button">Shop Now</a> --}}
            </div>
        </div>
    </div>

    <h3 class="h3p"> Produk Andalan Kami!</h3>
    <div class="featured-products">
        <div class="product">
        <a href="dashboardproduk">
            <img src="fotokami/baju1.jpeg" alt="Product 1">
            <div class="product-text">T-shirt Oversize | RGF Apparel<br>Rp 105.000</div>
        </a>
        </div>
        <div class="product">
            <a href="dashboardproduk">
            <img src="fotokami/baju4.jpeg" alt="Product 2">
            <div class="product-text">T-shirt Oversize | RGF Apparel<br>Rp 105.000</div>
            </a>
        </div>
        <div class="product">
            <a href="dashboardproduk">
            <img src="fotokami/acuk3.jpeg" alt="Product 3">
            <div class="product-text">T-shirt Oversize | RGF Apparel<br>Rp 105.000</div>
            </a>
        </div>
    </div>




    <h3 class="h3p">Lihat Produk Kami!</h3>
    <div class="product-section" id="produk">
        <div class="slider-container">
            <div class="slides">

                {{-- @dd($data_setting) --}}
                @foreach ($data_produk as $produk)
                    <div class="slide">
                        <div class="product-card">
                            <a href="dashboardproduk">
                            <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" alt="{{ $produk->nama_produk }}">
                            </a>
                            <h4>{{ $produk->nama_produk }}</h4>
                            <p>Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                            {{-- <p>Stok: {{ $produk->stok }}</p>
                            <p>Size: {{ $produk->size }}</p> <!-- Tambahkan size di sini --> --}}
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="navigation">
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>
            </div>
        </div>
    </div>


    <div class="brand2" id="idabout">
        <div class="brand-content">
            <h1>KAMI MULAI !</h1>
            <p>Dibuat dengan tugas pkl penuh keyakinan dan penuh keikhlasan sehingga terjadinya produk yang berkualitas.
            </p>
            <div class="shop-now-container">
                <a href="/dashboardproduk" class="shop-now-button">Shop</a>
            </div>
        </div>
    </div>

    <h3 class="h3p">Collaborate!</h3>
    <div class="featured-products">
        <div class="product">
            <a href="dashboardproduk">
            <img src="fotokami/limitededitionrezaalfa.jpeg" alt="Product 1">
            </a>
        </div>
        <div class="product">
            <a href="dashboardproduk">
            <img src="fotokami/c0lpat.jpeg" alt="Product 2">
            </a>
        </div>
        <div class="product">
            <a href="dashboardproduk">
            <img src="fotokami/ozan.jpeg" alt="Product 3">
            </a>
        </div>
    </div>
    <h3 class="h3p"> Sedang Trend !</h3>
    <div class="produkandalan">
        <div class="andalan">
            <img src="fotokami/1.jpeg" alt="Product 1">
        </div>
        <div class="andalan">
            <img src="fotokami/3.jpeg" alt="Product 2">
        </div>
    </div>
    
    <div class="brand2">
        <div class="brand-content">
            <h1>UNTUK KALIAN ! !</h1>
            <p>Menyakini adanya produk berkualitas.</p>
            <div class="shop-now-container">
                 <a href="/dashboardproduk" class="shop-now-button">Get Now</a>
           </div>
        </div>
    </div>
    
    <!-- <a href="https://wa.me/6281297535513" class="whatsapp-logo" target="_blank">
        <img src="/foto/was.png" alt="WhatsApp Logo">
    </a> -->

    <footer class="footer">
        <div class="container">
            <div class="footer2">
                @foreach ($data_setting as $item)
                    {{-- @dd($item) --}}
                    <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Logo" width="230">
                    <h4>{{ $item->nama_toko }}</h4>
                    <p>To Infinity And Beyond</p>
            </div>
            <div class="footer3">
                <h4
                    style=" font-weight: bold; font-weight: 900; cursor: pointer; text-decoration: none;  text-decoration: underline;">
                    Company</h4>
                <h6><a href="#about" style="color: black;">About {{ $item->nama_toko }}</a></h6>
                <h6><a href="#contact" style="color: black;">News</a></h6>
                <h6><a href="#produk" style="color: black;">Carrers</a></h6>
            </div>
            <div class="footer4">
                <h4 style=" font-weight: bold; font-weight: 900; cursor: pointer; text-decoration: none;  text-decoration: underline;" id="contact">Contac Us</h4>
                <h6 style="color: black;">Email</a></h6>
                <p><a href="{{ $item->email_toko }}" style="color: #6495ED;"><i class="fas fa-envelope" style="color: #6495ED;"></i>  {{ $item->email_toko }}</a></p>
                <h6 style="color: black;">Telepon</a></h6>
                <p><a href="https://wa.me/62{{ $item->telefon_toko }}"  style="color: #6495ED;">      <i class="fab fa-whatsapp"></i>  Whatapp
                </a></p>

                <h6 style="color: black;">Media Sosial</a></h6>
                <p  style="color: #6495ED;">
                        <a href="{{ $item->facebook_toko }}"  style="color: #6495ED;"><i class="fab fa-facebook"></i></a> |
                        <a href="{{ $item->twitter_toko }}"  style="color: #6495ED;">      <i class="fab fa-twitter"></i>
                        </a> |
                        <a href="https://www.instagram.com/{{ $item->instagram_toko }}"  style="color: #6495ED;">      <i class="fab fa-instagram"></i>
                        </a>
                    </p>
            </div>
            <p class="text-center">&copy; 2024 {{ $item->nama_toko }}, Idn. All rights reserved</p>
            @endforeach
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.slide');
            const totalSlides = slides.length;

            if (index >= totalSlides) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }

            const offset = -currentSlide * 100;
            document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
        }

        function moveSlide(direction) {
            showSlide(currentSlide + direction);
        }

        // Automatic slide
        setInterval(() => {
            moveSlide(1);
        }, 5000); // Ganti slide setiap 5 detik

        // Inisialisasi untuk menampilkan slide pertama
        showSlide(currentSlide);

        function toggleSearchModal() {
            const modal = document.getElementById("searchModal");
            if (modal.style.display === "none" || modal.style.display === "") {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>
