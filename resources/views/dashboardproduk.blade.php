<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>RGF Store</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logomerah.png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        .whatsapp-logo {
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
        }



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

        .product-card img {
            width: 350px;
            /* Atur lebar gambar produk */
            height: auto;
        }

        .navigation {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
        }

        button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .footer {
            background-color: #EEEEEE;
            color: white;
            padding: 40px 0 20px;
            padding-bottom: 90px;
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
        /* Style untuk link 'RGF Store' */


        .store-link {
            font-family: 'Cursive', Brush Script MT;
            /* Ganti dengan font yang diinginkan */
            font-size: 18px;
            /* Ukuran font */
            color: white;
            right: 20px;
            /* Warna teks */
            text-decoration: none;
            /* Hilangkan underline */
            padding: 0 10px;
            /* Padding di sekeliling teks */

        }

        /* Hover effect */
        .store-link:hover {
            color: #ddd;
            /* Warna saat di-hover */
            text-decoration: underline;
            /* Tambahkan underline saat di-hover */
        }

        /* Responsive styling (opsional) */
        @media (max-width: 768px) {
            .store-link {
                font-size: 16px;
                /* Ukuran font lebih kecil untuk layar kecil */
            }
        }

        @media (max-width: 480px) {
            .store-link {
                font-size: 14px;
                /* Ukuran font lebih kecil lagi untuk layar sangat kecil */
            }
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
    background-color: #808284;
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
    background-color: #333; /* Latar belakang lebih gelap */
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
            width: 100%;
            /* Make the image fill the product div */
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 5px;
            /* Optional: rounded corners for images */
        }

        .product-text {
            position: absolute;
            /* Position text inside the image */
            bottom: 10px;
            /* Position it at the bottom */
            left: 10px;
            /* Add some padding from the left */
            color: white;
            /* White text */
            background-color: rgba(0, 0, 0, 0.6);
            /* Semi-transparent background */
            padding: 5px;
            /* Padding around the text */
            border-radius: 3px;
            /* Optional: rounded corners for text background */
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

        /* Style untuk marquee */
        .marquee {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee p {
            display: inline-block;
            padding-left: 100%;
            font-size: 16px;
            color: #black;
            animation: slide 15s linear infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-footer {
            background-color: transparent;
            border-top: none;
        }

        .card-text {
            font-family: 'Arial', sans-serif;
            /* Mengatur font family */
            font-size: 20px;
            /* Ukuran font default */
            color: #333;
            /* Warna teks */
            line-height: 1.5;
            /* Spasi antar baris */
        }

        .card-text strong {
            font-weight: bold;
            /* Membuat teks <strong> lebih tebal */
            font-size: 16px;
            /* Ukuran font lebih besar untuk elemen strong */
            color: black;
            /* Warna teks <strong> */
        }

        .card-text br {
            margin-bottom: 5px;
            /* Memberikan jarak antar baris setelah <br> */
        }

        /* Style untuk container row */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-left: -15px;
            margin-right: -15px;
        }

        /* Style untuk setiap kolom (card container) */
        .col-md-4 {
            padding-left: 15px;
            padding-right: 15px;
            margin-bottom: 30px;
        }

        /* Style untuk card */
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Style untuk gambar produk */
        .card-img-top {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        /* Style untuk isi card (body) */
        .card-body {
            padding: 20px;
        }

        /* Style untuk judul produk */
        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Style untuk teks di dalam card */
        .card-text {
            font-size: 14px;
            margin-bottom: 10px;
            color: black;
        }

        /* Style untuk tombol checkout */
        .btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            color: #fff;
            background-color: #000;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #333;
        }

        /* Style untuk footer card */
        .card-footer {
            padding: 10px 20px;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
            text-align: center;
        }

        .btn1 {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #343a40;
            /* Warna latar belakang hitam gelap */
            color: white;
            /* Warna teks putih */
            border: none;
            /* Tanpa garis batas */
            border-radius: 5px;
            /* Sudut membulat */
            text-decoration: none;
            /* Tanpa garis bawah */
            font-size: 1em;
            /* Ukuran font */
            transition: background-color 0.3s ease;
            /* Transisi halus saat hover */
        }

        .btn1:hover {
            background-color: #495057;
            /* Warna latar belakang saat hover */
        }

        .btn1 i {
            margin-right: 8px;
            /* Jarak antara ikon dan teks */
        }


        .cart-icon {
            display: flex;
            align-items: right;
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .cart-icon i {
            font-size: 24px;
            color: white;
            /* Set icon color to white */
        }

        .cart-icon span {
            margin-left: 5px;
            font-size: 16px;
        }

        /* Wrapper untuk ukuran */
#sizeOptions {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

/* Input radio tersembunyi */
.size-option-input {
    display: none;
}

/* Label yang terlihat seperti tombol */
.size-option-label {
    display: inline-block;
    padding: 10px 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    text-align: center;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    user-select: none;
}

/* Efek hover */
.size-option-label:hover {
    border-color: #535151;
    background-color: #c8c5c4;
}

/* Efek aktif ketika dipilih */
.size-option-input:checked + .size-option-label {
    border-color: #525050;
    background-color: #474444;
    color: #f8f4f4;
    font-weight: bold;
}


        .quantity-wrapper {
            display: flex;
            align-items: center;
        }

        .minus-btn,
        .plus-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            color: #333;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            user-select: none;
        }

        .jumlah-input {
            width: 50px;
            /* Sesuaikan lebar sesuai kebutuhan */
            text-align: center;
            border: 1px solid #ccc;
            font-size: 15px;
            background-color: #fff;
            color: #333;
        }

        .minus-btn:hover,
        .plus-btn:hover {
            background-color: #eaeaea;
        }

        .card {
    background-color: #f0f0f0; /* Warna abu-abu muda untuk kartu */
}

.card-header {
    background-color: #d3d3d3; /* Warna abu-abu untuk header */
    cursor: pointer; /* Menunjukkan bahwa header bisa diklik */
}

.list-group-item {
    transition: background-color 0.3s;
}

.list-group-item:hover {
    background-color: #e0e0e0; /* Efek hover pada item daftar */
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
        .card {
      border: none;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .card-img-top {
      height: 300px;
      object-fit: cover;
    }
    .product-colors {
      display: flex;
      justify-content: center;
      margin-bottom: 1rem;
    }
    .product-colors .color-option {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      margin: 0 5px;
      cursor: pointer;
    }
    .product-colors .color-option.active {
      border: 2px solid #007bff;
    }
    .btn-buy {
      background-color: #007bff;
      color: #fff;
      font-weight: bold;
    }
    .btn-buy:hover {
      background-color: #0056b3;
      color: #fff;
    }
    .discount-badge {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: #dc3545;
      color: #fff;
      padding: 5px 10px;
      border-radius: 3px;
    }




        
    </style>
</head>

<body>
    <nav class="navbar3">
        <div class="navbar-container3">
            <!-- Store Name -->
            <div class="AKU">
                @foreach ($data_setting as $item)
                    <p>{{ $item->nama_toko }}</p>
                @endforeach
            </div>

        
                <!-- Cart Icon -->
                <a href="/cart" class="cart-icon ml-3">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
    </nav>

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
    
   <div class="container">
    <h1 class="mb-4" style="padding-top: 50px;">Our Products</h1>
    <div class="row">
            <!-- Sidebar Kategori -->
            <div class="col-lg-3 col-md-4 mb-4" style="padding: 0 15px;">
                <div class="card">
                    <div class="card-header bg-light text-dark d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <a class="text-dark text-decoration-none" data-toggle="collapse" href="#kategoriCollapse" role="button" aria-expanded="false" aria-controls="kategoriCollapse">
                                <i class="fas fa-list"></i> Kategori
                            </a>
                        </h5>
                    </div>
                    <div class="collapse show" id="kategoriCollapse">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('dashboardproduk') }}" class="list-group-item list-group-item-action {{ request('kategori') == null ? 'bg-secondary text-white' : '' }}">
                                <i class="fas fa-tags"></i> Semua Kategori
                            </a>
                            @foreach ($data_kategori as $kategori)
                                <a href="{{ route('dashboardproduk', ['kategori' => $kategori->id]) }}"
                                   class="list-group-item list-group-item-action {{ request('kategori') == $kategori->id ? 'bg-secondary text-white' : '' }}">
                                    <i class="fas fa-tag"></i> {{ $kategori->nama_kategori }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="position-relative">
                        <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" class="card-img-top" alt="{{ $produk->nama_produk }}">
                        <div class="discount-badge">-25%</div>
                      </div>
                      <div class="card-body">
                        <div class="product-colors">
                          <div class="color-option active" style="background-color: #fff;"></div>
                          <div class="color-option" style="background-color: #007bff;"></div>
                          <div class="color-option" style="background-color: #28a745;"></div>
                        </div>
                        <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                        <p class="card-text"><s>Rp {{ number_format($produk->harga, 0, ',', '.') }}</s> <span class="text-danger font-weight-bold">Rp {{ number_format($produk->harga * 0.75, 0, ',', '.') }}</span></p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-secondary">S</button>
                            <button type="button" class="btn btn-outline-secondary">M</button>
                            <button type="button" class="btn btn-outline-secondary">L</button>
                          </div>
                          <a href="javascript:void(0)" class="btn btn-buy btn-sm" data-bs-toggle="modal" data-bs-target="#cartModal" onclick="showCartModal({{ $produk->id }}, '{{ $produk->nama_produk }}', '{{ $produk->foto }}', {{ $produk->harga * 0.75 }}, {{ $produk->stok }}, '{{ $produk->size }}')">
                            <i class="fas fa-shopping-bag"></i> Beli Sekarang
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card">
                      <div class="position-relative">
                        <img src="{{ asset('foto/fotoproduk/' . $produk2->foto) }}" class="card-img-top" alt="{{ $produk2->nama_produk }}">
                        <div class="discount-badge">-25%</div>
                      </div>
                      <div class="card-body">
                        <div class="product-colors">
                          <div class="color-option active" style="background-color: #007bff;"></div>
                          <div class="color-option" style="background-color: #6c757d;"></div>
                        </div>
                        <h5 class="card-title">{{ $produk2->nama_produk }}</h5>
                        <p class="card-text"><s>Rp {{ number_format($produk2->harga, 0, ',', '.') }}</s> <span class="text-danger font-weight-bold">Rp {{ number_format($produk2->harga * 0.75, 0, ',', '.') }}</span></p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-secondary">S</button>
                            <button type="button" class="btn btn-outline-secondary">M</button>
                            <button type="button" class="btn btn-outline-secondary">L</button>
                          </div>
                          <a href="javascript:void(0)" class="btn btn-buy btn-sm" data-bs-toggle="modal" data-bs-target="#cartModal" onclick="showCartModal({{ $produk2->id }}, '{{ $produk2->nama_produk }}', '{{ $produk2->foto }}', {{ $produk2->harga * 0.75 }}, {{ $produk2->stok }}, '{{ $produk2->size }}')">
                            <i class="fas fa-shopping-bag"></i> Beli Sekarang
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
<!-- Modal untuk Detail Produk -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Detail Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalFoto" src="" alt="" class="img-fluid mb-3">
                <h5 id="modalNamaProduk"></h5>
                <p><strong>Harga:</strong> Rp <span id="modalHarga"></span></p>
                <p><strong>Stok Tersedia:</strong> <span id="modalStok"></span></p>

                <form id="cartForm" action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_produk" id="modalProdukId">

                    <!-- Size -->
                    <div class="form-group">
                        <label>Size</label>
                        <div id="sizeOptions" class="d-flex flex-wrap"></div>
                    </div>

                    <!-- Input jumlah beli -->
                    <div class="form-group">
                        <label>Jumlah Beli</label>
                        <div class="quantity-wrapper d-flex align-items-center">
                            <button type="button" class="minus-btn btn btn-outline-secondary" onclick="changeQuantity(-1)">-</button>
                            <span id="jumlahBeliDisplay" class="mx-3">1</span>
                            <button type="button" class="plus-btn btn btn-outline-secondary" onclick="changeQuantity(1)">+</button>
                        </div>
                    </div>

                    <!-- Input hidden untuk menyimpan jumlah yang dipilih -->
                    <input type="hidden" name="jumlah" id="modalJumlahBeli" value="1">

                    <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Keranjang</button>
                    <button type="button" class="btn btn-success" onclick="buyViaWhatsApp()"><i class="fab fa-whatsapp"></i> Beli via WA</button>
                </form>
            </div>
        </div>
    </div>
</div>



    <div class="brand2">
        <div class="brand-content">
            <h1> Tunggu Apa Lagi !</h1>
            <p>Ayo Check Out Sekarang.
            </p>
            
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Color option click event
    $(".color-option").click(function() {
      $(this).addClass("active").siblings().removeClass("active");
    });
  </script>

    <script>
          

          document.addEventListener('DOMContentLoaded', function() {
  const toggleLinks = document.querySelectorAll('.toggle-text'); // Ambil semua tombol

  toggleLinks.forEach(function(link) {
    link.addEventListener('click', function() {
      const parentText = link.parentElement;
      const shortText = parentText.querySelector('.short-text');
      const fullText = parentText.querySelector('.full-text');
      
      // Periksa apakah teks penuh sedang ditampilkan
      if (fullText.style.display === 'none' || fullText.style.display === '') {
        fullText.style.display = 'inline';
        shortText.style.display = 'none';
        link.innerText = 'Sembunyikan';
      } else {
        fullText.style.display = 'none';
        shortText.style.display = 'inline';
        link.innerText = 'Baca Selengkapnya';
      }
    });
  });
});




        function showCartModal(id, nama_produk, foto, harga, stok, size) {
            document.getElementById('modalProdukId').value = id;
            document.getElementById('modalNamaProduk').innerText = nama_produk;
            document.getElementById('modalFoto').src = `/foto/fotoproduk/${foto}`;
            document.getElementById('modalHarga').innerText = harga.toLocaleString('id-ID');
            document.getElementById('modalStok').innerText = stok;
            document.getElementById('modalJumlahBeli').max = stok;
    
            const sizeOptions = document.getElementById('sizeOptions');
sizeOptions.innerHTML = '';

const sizes = size.split(',');
sizes.forEach(function(sizeValue) {
    const sizeOption = `
        <div class="size-option-wrapper">
            <input type="radio" name="size" value="${sizeValue}" class="size-option-input" id="size_${sizeValue}" required>
            <label for="size_${sizeValue}" class="size-option-label">${sizeValue}</label>
        </div>`;
    sizeOptions.insertAdjacentHTML('beforeend', sizeOption);
});

    
            document.getElementById('modalJumlahBeli').value = 1;
            document.getElementById('jumlahBeliDisplay').innerText = 1;
        }
    
        function changeQuantity(amount) {
            const quantityDisplay = document.getElementById('jumlahBeliDisplay');
            const modalJumlahBeli = document.getElementById('modalJumlahBeli');
            const maxStok = parseInt(document.getElementById('modalStok').innerText);
    
            let currentValue = parseInt(quantityDisplay.innerText);
            let newValue = currentValue + amount;
    
            if (newValue > maxStok) {
                newValue = maxStok;
            }
            if (newValue < 1) {
                newValue = 1;
            }
    
            quantityDisplay.innerText = newValue;
            modalJumlahBeli.value = newValue;
        }
    
        function buyViaWhatsApp() {
            const selectedSize = document.querySelector('input[name="size"]:checked');
            if (!selectedSize) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Silakan pilih ukuran terlebih dahulu!'
                });
                return;
            }
            const loadingSwal = Swal.fire({
                title: 'Memproses pesanan...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
    
    
            const produkId = document.getElementById('modalProdukId').value;
            const jumlah = document.getElementById('modalJumlahBeli').value;
            const namaProduk = document.getElementById('modalNamaProduk').innerText;
            const size = selectedSize.value;
    
            const hargaProdukText = document.getElementById('modalHarga').innerText;
            const hargaProduk = parseFloat(hargaProdukText.replace(/\./g, '').replace(/,/g, ''));
            const totalHarga = hargaProduk * jumlah;
    
            const alamat = '{{ $customer->alamat }}';
            const namaCustomer = '{{ $customer->nama }}';
            const noTelpCustomer = '{{ $customer->no_telpon }}';
            const customerId = '{{ $customer->id }}';
    
            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            });
            const formattedTotalHarga = formatter.format(totalHarga);
    
            const message =
                `Halo, saya *${namaCustomer}*, dan saya tertarik untuk membeli produk berikut dari toko Anda:\n\n` +
                ` *Nama Produk:* ${namaProduk}\n` +
                ` *Ukuran:* ${size}\n` +
                ` *Jumlah:* ${jumlah}\n` +
                ` *Total Harga:* ${formattedTotalHarga}\n\n` +
                `Mohon bantuannya untuk proses pengiriman ke alamat berikut:\n` +
                ` *Alamat Pengiriman:* ${alamat}\n\n` +
                `Jika ada informasi lebih lanjut yang diperlukan, Anda dapat menghubungi saya melalui nomor telepon:\n` +
                ` *Nomor Telepon:* ${noTelpCustomer}\n\n` +
                `Terima kasih sebelumnya, dan saya sangat menantikan untuk segera menerima produk ini!`;
    
            fetch('{{ route("track.wa.order") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    customer_id: customerId,
                    id_produk: produkId,
                    jumlah: jumlah,
                    size: size,
                    total_harga: totalHarga,
                    whatsapp_message: message
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Pesanan Berhasil!',
                        text: 'Anda akan dialihkan ke WhatsApp',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        const waUrl = `https://wa.me/6283167735320?text=${encodeURIComponent(message)}`;
                        window.open(waUrl, '_blank');
    
                        const modal = bootstrap.Modal.getInstance(document.getElementById('cartModal'));
                        modal.hide();
                    });
                } else {
                    throw new Error(data.message || 'Failed to track order');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Terjadi kesalahan saat memproses pesanan Anda. Silakan coba lagi.'
                });
            });
        }
    
// Tambahkan event listener saat dokumen sudah siap
document.addEventListener('DOMContentLoaded', function() {
    const cartForm = document.getElementById('cartForm');
    if (cartForm) {
        cartForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validasi ukuran
            const selectedSize = document.querySelector('input[name="size"]:checked');
            if (!selectedSize) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Silakan pilih ukuran terlebih dahulu!'
                });
                return;
            }

            // Show loading state
            Swal.fire({
                title: 'Memproses...',
                text: 'Sedang menambahkan ke keranjang',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Submit form menggunakan fetch
            const formData = new FormData(this);
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Produk berhasil ditambahkan ke keranjang',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    // Tutup modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('cartModal'));
                    if (modal) {
                        modal.hide();
                    }
                    // Refresh halaman setelah berhasil
                    window.location.reload();
                });
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Terjadi kesalahan saat menambahkan ke keranjang. Silakan coba lagi.'
                });
            });
        });
    }
});



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
    </script>
    
</body>

</html>
