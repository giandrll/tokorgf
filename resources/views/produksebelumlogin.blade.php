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

   

        .card-footer {
            background-color: transparent;
            border-top: none;
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
                <a href="javascript:void(0)" class="cart-icon ml-3" onclick="checkLogin()">

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
                <a href="/" class="nav-item">
                    <div class="icon-container">
                        <i class="fas fa-home icon-hover"></i>
                    </div>                   
                    <span>Home</span>
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-cubes icon-hover"></i>
                    <span>Product</span>
                </a>
                <a href="javascript:void(0)" class="nav-item" onclick="checkabout()">
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
                            <!-- Link Semua Kategori -->
                            <a href="{{ route('produksebelumlogin') }}" class="list-group-item list-group-item-action {{ $selected_kategori_id == null ? 'bg-secondary text-white' : '' }}">
                                <i class="fas fa-tags"></i> Semua Kategori
                            </a>
                            @foreach ($data_kategori as $kategori)
                                <a href="{{ route('produksebelumlogin', ['kategori' => $kategori->id]) }}"
                                   class="list-group-item list-group-item-action {{ $selected_kategori_id == $kategori->id ? 'bg-secondary text-white' : '' }}">
                                    <i class="fas fa-tag"></i> {{ $kategori->nama_kategori }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Produk -->
            <div class="col-lg-9 col-md-8">
                <!-- Tampilkan Nama Kategori yang Dipilih di Atas Produk -->
                @if ($selected_kategori_id)
                    @php
                        $selectedCategory = $data_kategori->where('id', $selected_kategori_id)->first();
                    @endphp
                    <div class="alert alert-info text-center" style="font-size: 16px;">
                        Anda melihat produk dari kategori: <strong>{{ $selectedCategory ? $selectedCategory->nama_kategori : 'Kategori Tidak Ditemukan' }}</strong>
                    </div>
                @endif
    
                <div class="row row-cols-2">
                    @if($data_produk->isEmpty())
                        <div class="col-12 text-center" style="padding: 20px;">
                            <p class="text-muted" style="font-size: 18px; font-weight: bold;">Produk belum tersedia</p>
                        </div>
                    @else  
                        @foreach ($data_produk as $produk)
                            <div class="col" style="padding: 15px;">
                                <div class="card h-100">
                                    <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" class="card-img-top" alt="{{ $produk->nama_produk }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                                        <p class="card-text">
                                            <strong>Rp {{ number_format($produk->harga, 0, ',', '.') }}</strong>
                                        </p>
                                        
                                        <!-- Detail Produk -->
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-6">
                                                    <div class="text-muted small">Category:</div>
                                                    <div class="fw-semibold">{{ $produk->kategori ? $produk->kategori->nama_kategori : 'Tidak Ada' }}</div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-muted small">Stock:</div>
                                                    <div class="fw-semibold">{{ $produk->stok }}</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-muted small">Size:</div>
                                                    <div class="fw-semibold">{{ $produk->size }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text">
                                            <span class="short-text">{{ Str::limit($produk->deskripsi, 50) }}...</span>
                                            <span class="full-text" style="display: none;">{{ $produk->deskripsi }}</span>
                                            <a href="javascript:void(0)" class="toggle-text">Baca Selengkapnya</a>
                                        </p>                          
                                        
                                            <div class="card-footer">
                                                <a href="javascript:void(0)" class="btn btn-primary w-100" onclick="checkLogin({{ $produk->id }}, '{{ $produk->nama_produk }}', '{{ $produk->foto }}',
                                                 {{ $produk->harga }}, {{ $produk->stok }}, '{{ $produk->size }}')">
                                            <i class="fas fa-shopping-bag"></i> BELI SEKARANG
                                                </a>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
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
    <!-- Sertakan SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
 function checkabout() {
    Swal.fire({
        title: 'Anda harus login terlebih dahulu!',
        text: "Silakan login untuk mengakses halaman About.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Login Sekarang',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/authcustomer"; // Arahkan ke halaman login jika pengguna menekan tombol login
        }
    });
}

    function checkLogin(productId, productName, productImage, productPrice, productStock, productSize) {
        // Simulasikan status login
        const isLoggedIn = false; // Ganti dengan kondisi nyata, misalnya dari session atau token

        if (!isLoggedIn) {
            // Jika pengguna belum login, munculkan SweetAlert untuk meminta login
            Swal.fire({
                title: 'Anda harus login terlebih dahulu!',
                text: 'Silakan login untuk melanjutkan pembelian.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Login Sekarang',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke halaman login jika tombol 'Login Sekarang' ditekan
                    window.location.href = '/authcustomer';
                }
            });
        } else {
            // Jika sudah login, lanjutkan dengan proses membeli
            showCartModal(productId, productName, productImage, productPrice, productStock, productSize);
        }
    }

          

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
