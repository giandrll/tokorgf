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
    <link rel="stylesheet" href="customer/css/dashboard.css">

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
            <div class="AKU">
                @foreach ($data_setting as $item)
                    <p>{{ $item->nama_toko }}</p>
                @endforeach
            </div>

            <!-- Pilihan Tengah -->
            <div class="navbar-center">
                <a href="/" >Home</a>
                <a href="/produksebelumlogin">Product</a>
                <a href="javascript:void(0)" onclick="checkLogin()">About</a>
            </div>

            <!-- Pilihan Kanan -->
            <div class="navbar-right">
                <a href="/authcustomer" class="btn-login">Login</a>
            </div>

        </div>
    </nav>
    <div class="navbarm">
        <div class="marqueem">
          @foreach ($data_setting as $item)
          Hai,{{$item->textbranding_toko}}</div>
          @endforeach
        </div>
    </div>
<div class="video-branding">
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
</div>
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
                        <a href="dashboardproduk">
                        <img src="{{ asset('foto/fotoproduk/' . $produk->foto) }}" alt="{{ $produk->nama_produk }}">
                    </a>
                        <h4>{{ $produk->nama_produk }}</h4>
                        <p>Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
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


<a href="https://wa.me/6281297535513" class="whatsapp-logo" target="_blank" onclick="showHelpText()">
    <img src="/foto/help.png" alt="Help">
    <span class="help-text">Butuh Bantuan? Klik di sini!</span>
</a>

@include('footer.footerdsbrutm')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

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
