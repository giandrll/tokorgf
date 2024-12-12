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

        .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000; /* Agar navbar berada di depan elemen lain */
}

.navbar-container {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.navbar-left a,
.navbar-right a {
    color: white;
    padding: 0 10px;
    text-decoration: none;
    font-size: 14px;
}

.navbar-center {
    display: flex;
    justify-content: center;
    flex-grow: 1;
}

.navbar-center a {
    color: white;
    font-family: 'Sans-serif', Helvetica;
    padding: 0 10px;
    font-weight: bold;
    text-decoration: none;
    font-size: 14px;
}

.navbar-center a:hover,
.navbar-left a:hover,
.navbar-right a:hover {
    color: #ddd;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    padding-top: 70px; /* Menyediakan ruang untuk navbar agar konten tidak tertutup */
}

.navbar-logo {
    height: 50px;
    width: auto;
    margin-left: 15px;
    max-height: 100%;
}

@media (max-width: 768px) {
    .navbar-logo {
        height: 50px;
    }

    .navbar-left a,
    .navbar-center a {
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .navbar-logo {
        height: 25px;
    }
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

        .size-label {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.size-label:hover {
    background-color: #f0f0f0;
}

.form-check-input:checked + .size-label {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
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


        
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo/Kiri -->
            <div class="navbar-left">
                @foreach ($data_setting as $item)
                    
                <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Logo" class="navbar-logo">
                @endforeach
            </div>

            <!-- Pilihan Tengah -->
            <div class="navbar-center">
                <a href="/dashboardcustomer"><i class="fas fa-home"></i> Home</a>
                <a href="/dashboardproduk"><i class="fas fa-cubes"></i> Product</a>
                <a href="/customer/about"><i class="fas fa-user"></i> About</a>
            </div>
            <a href="/cart" class="cart-icon">
                <i class="fas fa-shopping-cart"></i> <!-- FontAwesome Icon -->
            </a>
        </div>
    </nav>
    <div class="container">
        <h1 class="mb-4">Our Products</h1>
        <div class="row">
            <!-- Sidebar Kategori -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-header bg-light text-dark d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <a 
                                class="text-dark" 
                                data-toggle="collapse" 
                                href="#kategoriCollapse" 
                                role="button" 
                                aria-expanded="false" 
                                aria-controls="kategoriCollapse">
                                <i class="fas fa-list"></i> Kategori
                            </a>
                        </h5>
                    </div>
                    <div class="collapse" id="kategoriCollapse">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('dashboardproduk') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-tags"></i> Semua Kategori
                            </a>
                            @foreach ($data_kategori as $kategori)
                                <a href="{{ route('dashboardproduk', ['kategori' => $kategori->id]) }}" 
                                   class="list-group-item list-group-item-action">
                                    <i class="fas fa-tag"></i> {{ $kategori->nama_kategori }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Produk -->
            <div class="col-md-9">
                <div class="row">
                    @foreach ($data_produk as $produk)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" class="card-img-top" alt="{{ $produk->nama_produk }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                                    <p class="card-text">
                                        <strong>Rp {{ number_format($produk->harga, 0, ',', '.') }}</strong><br>
                                        <strong>Kategori:</strong> {{ $produk->nama_kategori }}<br>
                                        <strong>Stok:</strong> {{ $produk->stok }}<br>
                                        <strong>Ukuran:</strong> {{ $produk->size }}
                                    </p>
                                    <p class="card-text">{{ Str::limit($produk->deskripsi, 1000) }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                       data-bs-target="#productDetailModal"
                                       onclick="showCartModal({{ $produk->id }}, '{{ $produk->nama_produk }}', '{{ $produk->foto }}', {{ $produk->harga }}, {{ $produk->stok }}, '{{ $produk->size }}')">
                                        <i class="fas fa-shopping-bag"></i> BELI SEKARANG
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    
        <!-- Modal Detail Produk -->
        <div class="modal fade" id="productDetailModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="modalFoto" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" id="modalProdukId">
                                <h4 id="modalNamaProduk"></h4>
                                <p class="mb-2">Harga: Rp <span id="modalHarga"></span></p>
                                <p class="mb-3">Stok Tersedia: <span id="modalStok"></span></p>
    
                                <form id="orderForm" method="POST" action="{{ route('cart.store') }}">
                                    @csrf
                                    <input type="hidden" name="id_produk" id="produkIdInput">
                                    <div class="mb-3">
                                        <label class="form-label">Size</label>
                                        <div id="sizeOptions" class="d-flex flex-wrap gap-2">
                                            <!-- Size options will be inserted here -->
                                        </div>
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah Beli</label>
                                        <div class="input-group">
                                            <button type="button" class="btn btn-outline-secondary" onclick="changeQuantity(-1)">-</button>
                                            <span class="input-group-text" id="jumlahBeliDisplay">1</span>
                                            <input type="hidden" id="modalJumlahBeli" name="jumlah" value="1">
                                            <button type="button" class="btn btn-outline-secondary" onclick="changeQuantity(1)">+</button>
                                        </div>
                                    </div>
    
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-dark" onclick="buyViaWhatsApp()">
                                            <i class="fab fa-whatsapp me-2"></i>Beli via WA
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="brand2">
        <div class="brand-content">
            <h1>KAMI MULAI !</h1>
            <p>Dibuat dengan tugas pkl penuh keyakinan dan penuh keikhlasan sehingga terjadinya produk yang berkualitas.
            </p>
            <div class="shop-now-container">
                <a href="#" class="shop-now-button">Shop</a>
            </div>
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
                <h4 style=" font-weight: bold; font-weight: 900; cursor: pointer; text-decoration: none;  text-decoration: underline;"
                    id="contact">Contac Us</h4>
                <h6 style="color: black;">Email</a></h6>
                <p><a href="{{ $item->email_toko }}" style="color: #6495ED;">{{ $item->email_toko }}</a></p>
                <h6 style="color: black;">Telepon</a></h6>
                <p><a href="https://wa.me/62{{ $item->telefon_toko }}" style="color: #6495ED;">Hubungi Kami di WhatsApp</a></p>

                <h6 style="color: black;">Media Sosial</a></h6>
                <p style="color: #6495ED;">
                    <a href="#" style="color: #6495ED;">Facebook</a> |
                    <a href="#" style="color: #6495ED;">Twitter</a> |
                    <a href="https://www.instagram.com/{{ $item->instagram_toko }}" style="color: #6495ED;">Instagram</a>
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
    <script>
      function showCartModal(id, nama_produk, foto, harga, stok, size) {
    document.getElementById('modalProdukId').value = id;
    document.getElementById('modalNamaProduk').innerText = nama_produk;
    document.getElementById('modalFoto').src = `/foto/fotoproduk/${foto}`;
    document.getElementById('modalHarga').innerText = harga.toLocaleString('id-ID');
    document.getElementById('modalStok').innerText = stok;

    const sizeOptions = document.getElementById('sizeOptions');
    sizeOptions.innerHTML = '';

    const sizes = size.split(',');
    sizes.forEach(function(sizeValue) {
        const trimmedSize = sizeValue.trim();
        const sizeOption = `
            <div class="form-check me-3">
                <input type="radio" name="size" value="${trimmedSize}" 
                       class="form-check-input" id="size_${trimmedSize}" required>
                <label class="form-check-label size-label" for="size_${trimmedSize}">${trimmedSize}</label>
            </div>`;
        sizeOptions.insertAdjacentHTML('beforeend', sizeOption);
    });

    document.getElementById('modalJumlahBeli').value = 1;
    document.getElementById('jumlahBeliDisplay').innerText = '1';

    new bootstrap.Modal(document.getElementById('productDetailModal')).show();
}

function changeQuantity(amount) {
    const quantityDisplay = document.getElementById('jumlahBeliDisplay');
    const modalJumlahBeli = document.getElementById('modalJumlahBeli');
    const maxStok = parseInt(document.getElementById('modalStok').innerText);

    let currentValue = parseInt(quantityDisplay.innerText);
    let newValue = currentValue + amount;

    if (newValue > maxStok) newValue = maxStok;
    if (newValue < 1) newValue = 1;

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

    const produkId = document.getElementById('modalProdukId').value;
    const jumlah = document.getElementById('modalJumlahBeli').value;
    const namaProduk = document.getElementById('modalNamaProduk').innerText;
    const size = selectedSize.value;
    const hargaText = document.getElementById('modalHarga').innerText;
    const harga = parseInt(hargaText.replace(/\./g, ''), 10);
    const totalHarga = harga * jumlah;

    // Using Blade syntax to directly embed customer data
    const alamat = "{{ $customer->alamat }}";
    const namaCustomer = "{{ $customer->nama }}";
    const noTelpCustomer = "{{ $customer->no_telpon }}";
    const customerId = "{{ $customer->id }}"; // Ensure you have this variable

    const message = `Halo, saya *${namaCustomer}*, dan saya tertarik untuk membeli produk berikut dari toko Anda:\n\n` +
        `*Nama Produk:* ${namaProduk}\n` +
        `*Ukuran:* ${size}\n` +
        `*Jumlah:* ${jumlah}\n` +
        `*Total Harga:* Rp ${totalHarga.toLocaleString('id-ID')}\n\n` +
        `Mohon bantuannya untuk proses pengiriman ke alamat berikut:\n` +
        `*Alamat Pengiriman:* ${alamat}\n\n` +
        `Jika ada informasi lebih lanjut yang diperlukan, Anda dapat menghubungi saya melalui nomor telepon:\n` +
        `*Nomor Telepon:* ${noTelpCustomer}\n\n` +
        `Terima kasih sebelumnya, dan saya sangat menantikan untuk segera menerima produk ini!`;

    // Track the order
    fetch('{{ route("track.wa.order") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            customer_id: customerId,  // Make sure this is defined
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
            // Show success message
            Swal.fire({
                title: 'Pesanan Berhasil!',
                text: 'Anda akan dialihkan ke WhatsApp',
                icon: 'success',
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                // Open WhatsApp
                const waUrl = `https://wa.me/6283167735320?text=${encodeURIComponent(message)}`;
                window.open(waUrl, '_blank');
                
                // Close the modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('productDetailModal'));
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




