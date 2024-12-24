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
    <link rel="stylesheet" href="customer/css/dashboardcustomer.css">

</head>

<body>
    <div class="navbarm">
        <div class="marqueem">
            @foreach ($data_setting as $item)
            Hai, {{$customer->nama}}!{{$item->textbranding_toko}}</div>
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
<form action="{{ route('dashboardproduk') }}" method="GET" class="input-group search-form d-none d-md-flex">
    <input type="text" name="search" class="form-control search-input" placeholder="Cari produk..."
        value="{{ request('search') }}" required>
    <input type="hidden" name="kategori" value="{{ request('kategori') }}"> <!-- Tetap kirim kategori -->
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
        <form action="{{ route('dashboardproduk') }}" method="GET" class="modal-content">
            <input type="text" name="search" class="form-control" placeholder="Cari produk..." required>
            <button type="submit" class="btn btn-secondary mt-2 w-100">Cari</button>
        </form>
    </div>

    <section class="productt-section" id="produk">
        <h3 class="h4p">OUR PRODUCTS</h3>
        <div class="sliderr-container">
            <div class="slidess" id="slidess">
                @foreach ($data_produk as $produk)
                <div class="slidee">
                    <div class="productt-card">
                        <a href="dashboardproduk">
                            <div class="image-wrapper">
                                <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" alt="{{ $produk->nama_produk }}">
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    
{{-- 
    <div class="video-branding">
        <!-- Video autoplay tanpa kontrol -->
        <video autoplay muted loop>
            @foreach ($data_setting as $item)
            <source src="{{ asset('video_setting/' . $item->video_toko) }}" type="video/mp4">
            Browser Anda tidak mendukung pemutaran video.
            @endforeach
        </video> --}}

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

    <h3 class="h3p">Produk Andalan Kami!</h3>
<div class="featured-products">
  <div class="product">
    <div class="image-container">
      <div class="discount">100% Ori</div>
      <div class="wishlist">
        <i class="fa fa-heart-o"></i>
      </div>
      <a href="/dashboardproduk">
        @foreach ($data_setting as $item)
        <img src="{{ asset('foto/fotoSetting/' . $item->fotoandalan_slide1 ) }}" alt="Slide1" class="product-image">
        @endforeach      </a>
    </div>
    <div class="product-info">
      <h5>T-shirt Oversize | RGF Apparel</h5>
      <div class="price">
        <span class="new-price">Rp 105.000</span>
      </div>
    </div>
  </div>

  <div class="product">
    <div class="image-container">
      <div class="discount">100% Ori</div>
      <div class="wishlist">
        <i class="fa fa-heart-o"></i>
      </div>
      <a href="/dashboardproduk">
        @foreach ($data_setting as $item)
        <img src="{{ asset('foto/fotoSetting/' . $item->fotoandalan_slide2 ) }}" alt="Slide2" class="product-image">
        @endforeach      </a>
    </div>
    <div class="product-info">
      <h5>T-shirt Oversize | RGF Apparel</h5>
      <div class="price">
        <span class="new-price">Rp 105.000</span>
      </div>
    </div>
  </div>

  <div class="product">
    <div class="image-container">
      <div class="discount">100% Ori</div>
      <div class="wishlist">
        <i class="fa fa-heart-o"></i>
      </div>
      <a href="/dashboardproduk">
        @foreach ($data_setting as $item)
        <img src="{{ asset('foto/fotoSetting/' . $item->fotoandalan_slide3 ) }}" alt="Slide3" class="product-image">
        @endforeach      </a>
    </div>
    <div class="product-info">
      <h5>T-shirt Oversize | RGF Apparel</h5>
      <div class="price">
        <span class="new-price">Rp 105.000</span>
      </div>
    </div>
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
    <div class="image-container">
      <div class="discount">100% Ori</div>
      <div class="wishlist">
        <i class="fa fa-heart-o"></i>
      </div>
      <a href="/dashboardproduk">
        @foreach ($data_setting as $item)
        <img src="{{ asset('foto/fotoSetting/' . $item->fotokolaburasi_slide1 ) }}" alt="Slide1" class="product-image">
        @endforeach      </a>
    </div>
    <div class="product-info">
        <h5>HOODIE Fluto | RGF STORE X RezaAlfa</h5>

    </div>
</div>

<div class="product">
    <div class="image-container">
        <div class="discount">100% Ori</div>
        <div class="wishlist">
            <i class="fa fa-heart-o"></i>
        </div>
        <a href="/dashboardproduk">
            @foreach ($data_setting as $item)
            <img src="{{ asset('foto/fotoSetting/' . $item->fotokolaburasi_slide2 ) }}" alt="Slide2" class="product-image">
            @endforeach
        </a>
    </div>
    <div class="product-info">
        <h5>T-Shirt Have Or Fun | RGF STORE X Giandrll</h5>
    </div>
</div>

<div class="product">
    <div class="image-container">
        <div class="discount">100% Ori</div>
        <div class="wishlist">
            <i class="fa fa-heart-o"></i>
        </div>
        <a href="/dashboardproduk">
            @foreach ($data_setting as $item)
            <img src="{{ asset('foto/fotoSetting/' . $item->fotokolaburasi_slide3 ) }}" alt="Slide3" class="product-image">
            @endforeach
        </a>
    </div>
    <div class="product-info">
        <h5>Crewneck Kojek | RGF STORE X FauzanM</h5>
    </div>
</div>
</div>


<h3 class="h3p"> Sedang Trend !</h3>
<div class="produkandalan">
    <div class="andalan">
            @foreach ($data_setting as $item)
            <img src="{{ asset('foto/fotoSetting/' . $item->fotosedangtrend_slide1 ) }}" alt="Slide1" >
            @endforeach
        </div>
        <div class="andalan">
            @foreach ($data_setting as $item)
            <img src="{{ asset('foto/fotoSetting/' . $item->fotosedangtrend_slide2 ) }}" alt="Slide2">
            @endforeach
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
    @include('footer.footer')


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


// Mendapatkan elemen slider
const slides = document.getElementById('slidess');
let currentIndex = 0;

// Menyalin produk pertama ke akhir untuk membuat loop
const firstSlide = slides.children[0];
const lastSlide = slides.children[slides.children.length - 1];

// Menambahkan slide pertama di akhir (infinite loop)
const clonedFirstSlide = firstSlide.cloneNode(true);
slides.appendChild(clonedFirstSlide);

// Fungsi untuk memindahkan slide (menggeser kiri atau kanan)
function moveSlide(direction) {
    const slideCount = slides.children.length; // Jumlah slide
    currentIndex = (currentIndex + direction + slideCount) % slideCount; // Menghitung index yang valid
    updateSliderPosition();
}

// Memperbarui posisi slider berdasarkan index saat ini
function updateSliderPosition() {
    const slideWidth = slides.children[0].offsetWidth; // Mendapatkan lebar slide
    slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`; // Memindahkan slider
}

// Mengatur interval auto-slide setiap 3 detik (3000ms)
let autoSlide = setInterval(() => moveSlide(1), 3000);

// Menghentikan auto-slide saat hover dan mengaktifkannya kembali saat mouse keluar
slides.addEventListener('mouseover', () => clearInterval(autoSlide)); // Stop auto-slide saat hover
slides.addEventListener('mouseout', () => {
    autoSlide = setInterval(() => moveSlide(1), 1000); // Mulai lagi setelah mouse keluar
});

// Menangani akhir dari slider (ketika mencapai elemen terakhir)
slides.addEventListener('transitionend', () => {
    if (currentIndex === slides.children.length - 1) {
        slides.style.transition = 'none'; // Hentikan transisi
        currentIndex = slides.children.length - slides.children.length; // Kembali ke slide pertama
        updateSliderPosition(); // Memperbarui posisi
        setTimeout(() => {
            slides.style.transition = 'transform 0.5s ease-in-out'; // Mulai transisi kembali
        }, 50); // Tunggu sejenak untuk memastikan tidak ada efek transisi yang terlihat
    }
});

    </script>
</body>

</html>
