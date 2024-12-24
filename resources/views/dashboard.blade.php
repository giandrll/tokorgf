<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RGF Store</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logomerah.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="customer/css/dashboard.css">

</head>
<body>
  

<!-- Konten utama -->
<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo dan tombol untuk membuka sidebar di mobile -->
        <div class="navbar-left">
        @foreach ($data_setting as $item)
            <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Logo" class="navbar-logo">
            @endforeach
            @foreach ($data_setting as $item)
                <div class="AKU">
                    <p>{{ $item->nama_toko }}</p>
                </div>
            @endforeach
        </div>
        <div class="navbar-center1">
          <div class="navbar-center">
            <a href="/" class="navbar-link">Home |</a>
            <a href="/produksebelumlogin" class="navbar-link">Product |</a>
            <a href="javascript:void(0)" onclick="checkLogin()" class="navbar-link">About</a>
          </div>
        </div>
        <div class="navbar-right">
        <a href="/authcustomer" class="btn-login sidebar-link">Login</a> <!-- Login Button in Sidebar -->
        </div>
        <!-- Tombol untuk toggle sidebar pada mobile -->
        <div class="navbar-toggle" onclick="toggleSidebar()">☰</div>
    </div>
</nav>
<!-- Sidebar -->
<div id="sidebar" class="sidebar">
    <!-- Close Button -->
    <div class="sidebar-close" onclick="toggleSidebar()">×</div>

    <!-- Sidebar Content -->
    <div class="sidebar-content">

         <!-- Navigation Links with Arrow -->
         <a href="/" class="sidebar-link">
            <span class="sidebar-arrow">→ </span> Home
        </a>
        <a href="/produksebelumlogin" class="sidebar-link">
            <span class="sidebar-arrow">→ </span> Product
        </a>
        <a href="javascript:void(0)" onclick="checkLogin()" class="sidebar-link">
            <span class="sidebar-arrow">→ </span> About
        </a>

        <!-- Join Section -->
        <div class="sidebar-join">
            <a href="/authcustomer" class="sidebar-join-link1">Login</a>
            <a href="/register" class="sidebar-join-link">Sign Up</a>
        </div>
    </div>
</div>


    <div class="navbarm">
        <div class="marqueem">
          @foreach ($data_setting as $item)
          Hai,{{$item->textbranding_toko}}</div>
          @endforeach
        </div>
    </div>


    
    <section class="productt-section" id="produk">
      <h3 class="h4p">OUR PRODUCTS</h3>
      <div class="sliderr-container">
          <div class="slidess" id="slidess">
              @foreach ($data_produk as $produk)
              <div class="slidee">
                  <div class="productt-card">
                      <a href="produksebelumlogin">
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



{{-- <div class="video-branding">
    <!-- Video autoplay tanpa kontrol -->

    <video autoplay muted loop>
        @foreach ($data_setting as $item)
        <source src="{{ asset('video_setting/' . $item->video_toko) }}" type="video/mp4">
        Browser Anda tidak mendukung pemutaran video.
        @endforeach
    </video>

    <!-- Teks di tengah video -->
    <div class="text-overlay">
       RGF STORE
    </div>
</div> --}}
    <div class="brand2">
    <div class="brand-content">
        <h6>Brand Kami</h6>
        @foreach ($data_setting as $item)
        <h1>{{ $item->nama_toko }}</h1>
       @endforeach
        <p>Dibuat dengan penuh keyakinan dan penuh keikhlasan sehingga terjadinya produk yang berkualitas.</p>
        <div class="shop-now-container">
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
      <a href="/produksebelumlogin">
        @foreach ($data_setting as $item)
        <img src="{{ asset('foto/fotoSetting/' . $item->fotoandalan_slide1 ) }}" alt="Slide1" class="product-image">
        @endforeach
      </a>
    </div>
    <div class="product-info">
      <h5>T-shirt Oversize | RGF Apparel</h5>
    </div>
  </div>

  <div class="product">
    <div class="image-container">
      <div class="discount">100% Ori</div>
      <div class="wishlist">
        <i class="fa fa-heart-o"></i>
      </div>
      <a href="/produksebelumlogin">
        @foreach ($data_setting as $item)

        <img src="{{ asset('foto/fotoSetting/' . $item->fotoandalan_slide2 ) }}" alt="Slide1" class="product-image">
        @endforeach
     </a>
    </div>
    <div class="product-info">
      <h5>T-shirt Oversize | RGF Apparel</h5>
    </div>
  </div>

  <div class="product">
    <div class="image-container">
      <div class="discount">100% Ori</div>
      <div class="wishlist">
        <i class="fa fa-heart-o"></i>
      </div>
      <a href="/produksebelumlogin">
        @foreach ($data_setting as $item)

        <img src="{{ asset('foto/fotoSetting/' . $item->fotoandalan_slide3 ) }}" alt="Slide1" class="product-image">
        @endforeach      </a>
    </div>
    <div class="product-info">
      <h5>T-shirt Oversize | RGF Apparel</h5>
    </div>
  </div>
</div>



<h3 class="h3p">Lihat Produk Kami!</h3>
<div class="product-section" id="produk">
    <div class="slider-container">
        <div class="slides">
            @foreach($data_produk as $produk)
                <div class="slide">
                    <div class="product-card">
                        <a href="produksebelumlogin">
                        <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" alt="{{ $produk->nama_produk }}">
                    </a>
                        <h4>{{ $produk->nama_produk }}</h4>
                        <p>Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="navigation">
            <button class="prev" onclick="SliderTwo.moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="SliderTwo.moveSlide(1)">&#10095;</button>
        </div>
    </div>
</div>

<div class="brand2">
    <div class="brand-content">
        <h1>KAMI MULAI !</h1>
        <p>Dibuat dengan tugas pkl  penuh keyakinan dan penuh keikhlasan sehingga terjadinya produk yang berkualitas.</p>
        <div class="shop-now-container">
             <a href="/produksebelumlogin" class="shop-now-button">Shop</a>
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
      <a href="/produksebelumlogin">
        @foreach ($data_setting as $item)

        <img src="{{ asset('foto/fotoSetting/' . $item->fotokolaburasi_slide1 ) }}" alt="Slide1" class="product-image">
        @endforeach
    </a>
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
      <a href="/produksebelumlogin">
        @foreach ($data_setting as $item)

        <img src="{{ asset('foto/fotoSetting/' . $item->fotokolaburasi_slide2 ) }}" alt="Slide1" class="product-image">
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
      <a href="/produksebelumlogin">
        @foreach ($data_setting as $item)

        <img src="{{ asset('foto/fotoSetting/' . $item->fotokolaburasi_slide3 ) }}" alt="Slide1" class="product-image">
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
        <img src="fotokami/c0lpat.jpeg" alt="Product 1">
    </div>
    <div class="andalan">
        <img src="fotokami/c0lpat.jpeg" alt="Product 2">
    </div>
</div>

<div class="brand2">
    <div class="brand-content">
        <h1>UNTUK KALIAN ! !</h1>
        <p>Menyakini adanya produk berkualitas.</p>
        <div class="shop-now-container">
             <a href="/produksebelumlogin" class="shop-now-button">Get Now</a>
       </div>
    </div>
</div>


<a href="https://wa.me/62{{ $item->telefon_toko }}" class="whatsapp-logo" target="_blank" onclick="showHelpText()">
    <img src="/foto/help.png" alt="Help">
    <span class="help-text">Butuh Bantuan? Klik di sini!</span>
</a>

@include('footer.footerdsbrutm')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

    // Fungsi untuk toggle sidebar
function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('open'); // Menambahkan kelas 'open' untuk membuka sidebar
}



function checkLogin() {
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
      // First Slider Implementation
const SliderOne = {
    slides: null,
    currentIndex: 0,
    autoSlide: null,
    
    initialize() {
        this.slides = document.getElementById('slidess');
        if (!this.slides) return;

        // Clone first slide for infinite loop
        const firstSlide = this.slides.children[0];
        const clonedFirstSlide = firstSlide.cloneNode(true);
        this.slides.appendChild(clonedFirstSlide);

        // Set up event listeners
        this.setupEventListeners();
        this.startAutoSlide();
    },

    moveSlide(direction) {
        const slideCount = this.slides.children.length;
        this.currentIndex = (this.currentIndex + direction + slideCount) % slideCount;
        this.updateSliderPosition();
    },

    updateSliderPosition() {
        const slideWidth = this.slides.children[0].offsetWidth;
        this.slides.style.transform = `translateX(-${this.currentIndex * slideWidth}px)`;
    },

    startAutoSlide() {
        this.autoSlide = setInterval(() => this.moveSlide(1), 3000);
    },

    stopAutoSlide() {
        if (this.autoSlide) {
            clearInterval(this.autoSlide);
        }
    },

    setupEventListeners() {
        // Mouse events
        this.slides.addEventListener('mouseover', () => this.stopAutoSlide());
        this.slides.addEventListener('mouseout', () => this.startAutoSlide());

        // Handle infinite loop transition
        this.slides.addEventListener('transitionend', () => {
            if (this.currentIndex === this.slides.children.length - 1) {
                this.slides.style.transition = 'none';
                this.currentIndex = 0;
                this.updateSliderPosition();
                setTimeout(() => {
                    this.slides.style.transition = 'transform 0.5s ease-in-out';
                }, 50);
            }
        });
    }
};

// JavaScript untuk Toggle Sidebar
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("show"); // Mengaktifkan atau menonaktifkan kelas 'show'
}

// Untuk membuka sidebar
function openSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.add("show");
}

// Untuk menutup sidebar
function closeSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.remove("show");
}


// Second Slider Implementation
const SliderTwo = {
    currentSlide: 0,
    slideInterval: null,

    initialize() {
        this.showSlide(0);
        this.startAutoSlide();
    },

    showSlide(index) {
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        if (index >= totalSlides) {
            this.currentSlide = 0;
        } else if (index < 0) {
            this.currentSlide = totalSlides - 1;
        } else {
            this.currentSlide = index;
        }

        const offset = -this.currentSlide * 100;
        const slidesContainer = document.querySelector('.slides');
        if (slidesContainer) {
            slidesContainer.style.transform = `translateX(${offset}%)`;
        }
    },

    moveSlide(direction) {
        this.showSlide(this.currentSlide + direction);
    },

    startAutoSlide() {
        this.slideInterval = setInterval(() => {
            this.moveSlide(1);
        }, 5000);
    },

    stopAutoSlide() {
        if (this.slideInterval) {
            clearInterval(this.slideInterval);
        }
    }
};



// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    SliderOne.initialize();
    SliderTwo.initialize();
});

    </script>
</body>
</html>
