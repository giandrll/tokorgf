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
            padding: 10px 10px;
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
            /* Adds a soft shadow for a lifted look */
        }

        /* Styling for the text inside the AKU div */
        .AKU p {
            margin: 0;
            font-size: 17px;
            /* Increase font size for visibility */
            font-weight: 700;
            /* Makes text bold */
            color: #fff;
            /* Sets text color to white */
            letter-spacing: 1px;
            /* Adds slight spacing between letters for readability */
            font-family: 'Poppins', sans-serif;
            /* Adds a subtle shadow to the text */
        }


        .cardkategori {
    background-color: #ffffff; /* Latar belakang putih untuk kebersihan desain */
    border: none;
    border-radius: 10px; /* Sudut membulat untuk memberikan kesan lembut */
    width: 100%; /* Menggunakan 100% dari ruang yang tersedia */
    max-width: 230px; /* Batas lebar maksimum untuk menjaga responsivitas */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19); /* Bayangan untuk kedalaman */
    transition: transform 0.2s ease, box-shadow 0.2s ease; /* Animasi lembut ketika hover */
}

.cardkategori:hover {
    transform: translateY(-3px); /* Efek mengangkat ketika hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2), 0 8px 25px rgba(0, 0, 0, 0.2); /* Perbaikan bayangan ketika hover */
}

.card-header {
    background-color: #f8f9fa; /* Warna abu-abu lembut untuk header */
    color: #333333; /* Warna teks yang kontras dan mudah dibaca */
    border-top-left-radius: 10px; 
    border-top-right-radius: 10px;
    padding: 10px 15px;
    font-size: 16px;
    font-weight: bold;
}

.list-group-item {
    color: #535353; /* Warna teks utama untuk item */
    border: none; /* Menghilangkan border bawaan dari list-group-item */
    padding: 10px 15px; 
    transition: background-color 0.2s ease, color 0.2s ease;
}

.list-group-item:hover {
    background-color: #8c8d8d; /* Warna biru menarik saat hover */
    color: #ffffff; /* Mengubah teks putih saat hover */
}

.list-group-item-active {
    background-color: #6c757d !important; /* Aktif dengan warna abu yang konsisten */
    color: #ffffff !important;
}

.fa-tags,
.fa-tag {
    margin-right: 8px; /* Memberi ruang antara ikon dan teks */
}
.card {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 100%; /* Menggunakan 100% dari ruang yang tersedia dengan lebar maksimum */
    max-width: 200px; /* Membatasi lebar maksimum agar tidak melebihi ukuran yang ditentukan */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: transform 0.2s ease; /* Efek animasi */
}


/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .card {
        width: 230px; /* Lebar lebih kecil untuk tablet atau layar sedang */
    }
}

@media (max-width: 480px) {
    .card {
        width: 100%; /* Mengisi seluruh lebar wadah pada layar HP */
        max-width: none; /* Menghilangkan batas lebar jika diperlukan */
    }
}

/* Basic Styles */
.image-container {
  position: relative;
}

.thumbnail-image {
  border-radius: 10px !important;
}

.discount {
  background-color: red;
  padding: 1px 4px;
  font-size: 10px;
  border-radius: 6px;
  color: #fff;
}

.first {
  position: absolute;
  width: 100%;
  padding: 9px;
}

.dress-name {
  font-size: 13px;
  font-weight: bold;
  width: 100%;
  text-align: center;
}

.product-container {
  margin: 10px 0;
  text-align: right;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 20px;
  padding: 20px 0;
}

.new-price {
  font-size: 15px;
  font-weight: bold;
  color: red;
}

.btn {
  width: 14px;
  height: 14px;
  border-radius: 50%;
  padding: 3px;
}

.creme {
  background-color: #fff;
  border: 2px solid grey;
}

.creme:hover {
  border: 3px solid grey;
}

.creme:focus {
  background-color: grey;
}

.red {
  background-color: #fff;
  border: 2px solid red;
}

.red:hover {
  border: 3px solid red;
}

.red:focus {
  background-color: red;
}

.blue {
  background-color: #fff;
  border: 2px solid #40C4FF;
}

.blue:hover {
  border: 3px solid #40C4FF;
}

.blue:focus {
  background-color: #40C4FF;
}

.item-size {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #e9e7e7;
  border: 1px solid grey;
  color: grey;
  font-size: 10px;
  text-align: center;
  align-items: center;
  display: flex;
  justify-content: center;
}

.buy {
  font-size: 12px;
  color: purple;
  font-weight: 500;
  cursor: pointer;
  padding-left: 20px;
}

.buy-button {
  background-color: #000000;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

.buy-button:hover {
  background-color: #747474;
  transform: translateY(-3px);
  box-shadow: 0 6px 8px rgba(0, 0, 0, 0.3);
}

.buy-button:active {
  transform: translateY(1px);
}

.old-price {
  text-decoration: line-through;
  color: #888;
  font-size: 10px;
}

.modal-custom {
  --bs-modal-bg: #f8f9fa;
  --bs-modal-border-color: #e9ecef;
}

.modal-content {
  border-radius: 15px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.modal-header {
  border-bottom: 2px solid #e9ecef;
  padding: 1rem 1.5rem;
}

.modal-body {
  padding: 1.5rem;
}

#modalFoto {
  width: 100%;
  max-height: 300px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 1rem;
}

#modalNamaProduk {
  color: #333;
  margin-bottom: 1rem;
}

.size-option {
  margin-right: 0.5rem;
  margin-bottom: 0.5rem;
  padding: 0.5rem 1rem;
  border: 1px solid #dee2e6;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.size-option:hover, .size-option.selected {
  background-color: #007bff;
  color: white;
}

.quantity-wrapper {
  background-color: #f1f3f5;
  border-radius: 25px;
  padding: 0.25rem 0.5rem;
}

.btn-cart {
  margin-top: 1rem;
  width: 100%;
  padding: 0.75rem;
}

.btn-whatsapp {
  background-color: #25d366;
  color: white;
  margin-top: 0.5rem;
}

.btn-whatsapp:hover {
  background-color: #20ba5a;
  color: white;
}

/* Mobile Responsive Design */
@media (max-width: 768px) {
  .product-grid {
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Reduce min-width for mobile */
  }

  .new-price {
    font-size: 13px; /* Slightly smaller price on mobile */
  }

  .buy-button {
    padding: 8px 16px; /* Reduce padding for smaller screens */
    font-size: 9px; /* Smaller text on mobile */
  }

  .modal-content {
    border-radius: 10px; /* Smaller border radius for modal */
  }

  #modalFoto {
    max-height: 200px; /* Limit image height for mobile */
  }

  .size-option {
    padding: 0.25rem 0.5rem; /* Smaller padding for size options */
  }

  .item-size {
    width: 12px; /* Smaller size indicators */
    height: 12px;
    font-size: 9px;
  }

  .product-container {
    text-align: left; /* Align text to the left on smaller screens */
  }

  .first {
    padding: 7px; /* Less padding in product labels */
  }

  .dress-name {
    font-size: 12px; /* Smaller font for mobile */
  }
}

@media (max-width: 480px) {
  .product-grid {
    grid-template-columns: 1fr; /* Single column layout for very small screens */
  }

  .buy-button {
    font-size: 8px;
    padding: 6px 12px;
  }

  .discount {
    font-size: 8px; /* Reduce font size for mobile */
  }

  .item-size {
    width: 10px;
    height: 10px;
    font-size: 8px;
  }

  .size-option {
    padding: 0.25rem;
    font-size: 8px; /* Smaller size option text */
  }
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
                <div class="cardkategori">
                    <div class="card-header bg-light text-dark d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <a class="text-dark text-decoration-none" data-toggle="collapse" href="#kategoriCollapse" role="button" aria-expanded="false" aria-controls="kategoriCollapse">
                                <i class="fas fa-list"></i> Kategori
                            </a>
                        </h5>
                    </div>
                    <div class="collapse show" id="kategoriCollapse">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('produksebelumlogin') }}" class="list-group-item list-group-item-action {{ request('kategori') == null ? 'bg-secondary text-white' : '' }}">
                                <i class="fas fa-tags"></i> Semua Kategori
                            </a>
                            @foreach ($data_kategori as $kategori)
                                <a href="{{ route('produksebelumlogin', ['kategori' => $kategori->id]) }}"
                                   class="list-group-item list-group-item-action {{ request('kategori') == $kategori->id ? 'bg-secondary text-white' : '' }}">
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
                @if (request('kategori'))
                    @php
                        $selectedCategory = $data_kategori->where('id', request('kategori'))->first();
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
                    <div class="col-md-3" style="padding-bottom: 30px;">
                        <div class="card">
                            <div class="image-container">
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">100% Ori</span>
                                        <span class="wishlist"><i class="fa fa-heart-o"></i></span>
                                    </div>
                                </div>
                                <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" style=" width: 200px; height: 200px; object-fit: cover; border-radius: 8px;" class="img-fluid rounded thumbnail-image" alt="{{ $produk->nama_produk }}">
                            </div>
    
                            <div class="product-detail-container p-2">
                                <div class="d-flex justify-content-between align-items-center" style="padding: 10px 15px;">
                                    <h5 class="dress-name">{{ $produk->nama_produk }}</h5>
                                </div>
    
                                <div class="d-flex">
                                    <div class="text-muted small">Category:</div>
                                    <div class="fw-semibold ms-1">
                                        <a href="{{ route('produksebelumlogin', ['kategori' => $produk->id_kategori]) }}" 
                                           class="text-dark text-decoration-none">
                                            {{ $produk->nama_kategori }}
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Sisa kode tetap sama -->
                                <div class="d-flex justify-content-between align-items-center pt-1">
                                    <div class="d-flex">
                                        <span class="item-size mr-2 btn" type="button">S</span>
                                        <span class="item-size mr-2 btn" type="button">M</span>
                                        <span class="item-size mr-2 btn" type="button">L</span>
                                        <span class="item-size btn" type="button">XL</span>
                                    </div>
                                </div>
                             
                                <div class="product-container">
                                    <span class="new-price">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
                                   
                                        <span class="buy">
                                          <a href="javascript:void(0)"  
                                             onclick="checkLogin({{ $produk->id }}, '{{ $produk->nama_produk }}', '{{ $produk->foto }}', {{ $produk->harga }}, {{ $produk->stok }}, '{{ $produk->size }}')">
                                            <button class="buy-button">BUY +</button>
                                          </a>
                                        </span>
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

    @include('footer.footer')

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
