<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RGF Store</title>
    @foreach ($data_setting as $item)
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}">
    @endforeach
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
 @include('navbar.navbar')

    <!-- Navbar Section -->
    <nav class="navbar3">
        <div class="navbar-container3">
            <!-- Store Name -->
            <div class="navbar-left">
                @foreach ($data_setting as $item)

                <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Logo" class="navbar-logo1">
                @endforeach
            </div>
            <div class="AKU">
                @foreach ($data_setting as $item)
                    <p>{{ $item->nama_toko }}</p>
                @endforeach
            </div>

            <div class="navbar-center1">
                <div class="navbar-center1">
                    <a href="#" class="navbar-link">Home</a>|
                    <a href="/dashboardproduk" class="navbar-link">Product</a>|
                    <a href="/customer/about" class="navbar-link">About</a>
                </div>
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
        <h3 class="h4p">SEDANG HITS!!!</h3>
        <div class="sliderr-container">
            <div class="slidess" id="slidess">
              @foreach ($data_setting as $item)
                 @if ($item->fotosedanghits)
                   @foreach (json_decode($item->fotosedanghits, true) as $foto)
                    <div class="slidee">
                      <div class="productt-card">
                        <a href="dashboardproduk">
                          <div class="image-wrapper">
                              <!-- Update the image path to use 'hits' directory -->
                              <img src="{{ asset('foto/fotoSetting/hits/' . $foto) }}" alt="Foto Sedang Hits">
                          </div>
                      </a>
                  </div>
               </div>
              @endforeach
               @endif
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
      <h5>Inilah produk andalan kami, pilihan terbaik yang telah terbukti memuaskan banyak pelanggan!</h5>
      <div class="price">
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
      <h5>Inilah produk andalan kami, pilihan terbaik yang telah terbukti memuaskan banyak pelanggan!</h5>
      <div class="price">
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
      <h5>Inilah produk andalan kami, pilihan terbaik yang telah terbukti memuaskan banyak pelanggan!</h5>
      <div class="price">
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
                        <a href="dashboardproduk">
                        <div class="product-card">
                           
                            <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" alt="{{ $produk->nama_produk }}">
                           
                            <h4>{{ $produk->nama_produk }}</h4>
                            <p>Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                            {{-- <p>Stok: {{ $produk->stok }}</p>
                            <p>Size: {{ $produk->size }}</p> <!-- Tambahkan size di sini --> --}}
                        </div>
                    </a>
                    </div>
                @endforeach

            </div>
            <div class="navigation">
                <button class="prev" onclick="SliderTwo.moveSlide(-1)">&#10094;</button>
                <button class="next" onclick="SliderTwo.moveSlide(1)">&#10095;</button>
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
        <h5>Hasil kerja sama yang tidak biasa, produk kolaborasi ini adalah perpaduan sempurna dari inovasi dan gaya.</h5>

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
        <h5>Hasil kerja sama yang tidak biasa, produk kolaborasi ini adalah perpaduan sempurna dari inovasi dan gaya.</h5>
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
        <h5>Hasil kerja sama yang tidak biasa, produk kolaborasi ini adalah perpaduan sempurna dari inovasi dan gaya.</h5>
    </div>
</div>
</div>


<h3 class="h3p"> Sedang Trend !</h3>
<div class="produkandalan">
    <div class="andalan">
        <a href="/dashboardproduk">
            @foreach ($data_setting as $item)
            <img src="{{ asset('foto/fotoSetting/' . $item->fotosedangtrend_slide1 ) }}" alt="Slide1" >
            @endforeach
        </a>
        </div>
        <div class="andalan">
            <a href="/dashboardproduk">
            @foreach ($data_setting as $item)
            <img src="{{ asset('foto/fotoSetting/' . $item->fotosedangtrend_slide2 ) }}" alt="Slide2">
            @endforeach
            </a>
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

// Search Modal Implementation
const SearchModal = {
    modal: null,

    initialize() {
        this.modal = document.getElementById("searchModal");
    },

    toggle() {
        if (!this.modal) return;
        
        if (this.modal.style.display === "none" || this.modal.style.display === "") {
            this.modal.style.display = "block";
        } else {
            this.modal.style.display = "none";
        }
    }
};

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    SliderOne.initialize();
    SliderTwo.initialize();
    SearchModal.initialize();
});

// Make toggle function available globally for onclick handlers
window.toggleSearchModal = () => SearchModal.toggle();
    </script>
</body>

</html>
