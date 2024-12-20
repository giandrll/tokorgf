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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="customer/css/dashboardproduk.css">
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
                <!-- Link untuk semua kategori -->
                <a href="{{ route('dashboardproduk', ['search' => request('search')]) }}" 
                   class="list-group-item list-group-item-action {{ request('kategori') == null ? 'bg-secondary text-white' : '' }}">
                    <i class="fas fa-tags"></i> Semua Kategori
                </a>
                <!-- Loop untuk menampilkan kategori -->
                @foreach ($data_kategori as $kategori)
                    <a href="{{ route('dashboardproduk', ['kategori' => $kategori->id, 'search' => request('search')]) }}"
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
    <!-- Indikator pencarian dan kategori -->
    @if (request('search'))
        <div class="alert alert-info text-center" style="font-size: 16px;">
            Menampilkan hasil pencarian untuk: <strong>{{ request('search') }}</strong>
        </div>
    @endif

    @if (request('kategori'))
        <div class="alert alert-info text-center" style="font-size: 16px;">
            Anda melihat produk dari kategori: 
            <strong>{{ $selectedCategory ? $selectedCategory->nama_kategori : 'Kategori Tidak Ditemukan' }}</strong>
        </div>
    @endif

    <!-- Produk Grid -->
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
                                <a href="{{ route('dashboardproduk', ['kategori' => $produk->kategori_id, 'search' => request('search')]) }}" 
                                   class="text-dark text-decoration-none">
                                    {{ $produk->nama_kategori }}
                                </a>
                            </div>
                        </div>

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
                                   data-bs-toggle="modal"
                                   data-bs-target="#cartModal"
                                   onclick="showCartModal({{ $produk->id }}, '{{ $produk->nama_produk }}', '{{ $produk->foto }}', {{ $produk->harga }}, {{ $produk->stok }}, '{{ $produk->size }}', '{{ $produk->deskripsi }}')">
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

   <!-- Modal untuk Detail Produk -->
   @foreach ($data_produk as $produk)
   <div class="modal fade modal-custom" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Detail Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalFoto" src="" alt="" class="img-fluid mb-3">
                <h5 id="modalNamaProduk" class="text-center"></h5>
                <div class="text-center mb-3">
                    <p class="text-muted"><strong>Harga:</strong><span  class="new-price"> Rp <span id="modalHarga"></span></span>
                    </p>
                    <p class="text-muted"><strong>Stok Tersedia:</strong> <span id="modalStok"></span></p>
                </div>
                <div>
                    <i class="fa fa-star-o rating-star"></i>
                    <p class="card-text">
                        {{-- <span class="short-text">{{ Str::limit($produk->deskripsi, 50) }}</span>
                        <span class="full-text" style="display: none;" >{{ $produk->deskripsi }}</span> --}}
                        {{-- <span class="short-text" id="modalDeskripsiSmall" ></span>
                        <span class="full-text" style="display: none;" id="modalDeskripsiFull"></span>
                        <a href="javascript:void(0)" class="toggle-text" id='toggle-text' style="color: grey;">Deskripsi</a> --}}

                        <span class="short-text" id="modalDeskripsiSmall"></span>
                        <span class="full-text" style="display: none;" id="modalDeskripsiFull"></span>
                        <a href="javascript:void(0)" class="toggle-text" id='toggle-text' style="color: grey;">Deskripsi</a>
                    </p>
                </div>

                <form id="cartForm" action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_produk" id="modalProdukId">

                    <!-- Size -->
                    <div class="form-group mb-3">
                        <label class="mb-2">Pilih Ukuran</label>
                        <div id="sizeOptions" class="d-flex flex-wrap"></div>
                    </div>

                    <!-- Input jumlah beli -->
                    <div class="form-group mb-3">
                        <label class="mb-2">Jumlah Beli</label>
                        <div class="quantity-wrapper d-flex align-items-center justify-content-center">
                            <button type="button" class="minus-btn btn btn-sm btn-outline-secondary" onclick="changeQuantity(-1)">-</button>
                            <span id="jumlahBeliDisplay" class="mx-3">1</span>
                            <button type="button" class="plus-btn btn btn-sm btn-outline-secondary" onclick="changeQuantity(1)">+</button>
                        </div>
                    </div>

                    <input type="hidden" name="jumlah" id="modalJumlahBeli" value="1">

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn-cart">
                                <i class="fas fa-cart-plus"></i> Keranjang
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn-cart" onclick="buyViaWhatsApp()">
                                <i class="fab fa-whatsapp"></i> Beli via WA
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

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
    @foreach ($data_setting as $item)

    <script>


    function showCartModal(id, nama_produk, foto, harga, stok, size, deskripsi) {
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

        const shortTextEl = document.getElementById('modalDeskripsiSmall');
        const fullTextEl = document.getElementById('modalDeskripsiFull');
        const toggleLink = document.getElementById('toggle-text');

        const shortDescription = limitText(deskripsi, 70);
        shortTextEl.innerText = shortDescription;
        fullTextEl.innerText = deskripsi;
        fullTextEl.style.display = 'none'; // Initially hide full description
        shortTextEl.style.display = 'inline'; // Show short description
        toggleLink.innerText = 'Deskripsi'; // Set toggle link initial text

        toggleLink.onclick = function() {
            if (fullTextEl.style.display === 'none') {
                fullTextEl.style.display = 'inline';
                shortTextEl.style.display = 'none';
                toggleLink.innerText = 'Sembunyikan';
            } else {
                fullTextEl.style.display = 'none';
                shortTextEl.style.display = 'inline';
                toggleLink.innerText = 'Deskripsi';
            }
        };
    }

    function limitText(text, limit) {
        return text.length > limit ? text.substring(0, limit) + '...' : text;
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
                    const waUrl = `https://wa.me/62{{ $item->telefon_toko }}?text=${encodeURIComponent(message)}`;
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
@endforeach
</body>

</html>
