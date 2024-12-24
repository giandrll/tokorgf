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
    <link rel="stylesheet" href="customer/css/produksebelumlogin.css">

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
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
