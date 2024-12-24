<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logomerah.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="customer/css/cart.css">

    <title>Keranjang Belanja</title>
   
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

            <!-- Pilihan Kanan -->

        </div>
    </nav>
    <div class="custom-div">
        <h2 class="mb-4 custom-heading">Keranjang Belanja</h2>
    
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    
        @if ($cartItems->isEmpty())
            <div class="alert alert-info text-center">
                <strong>Keranjang Anda kosong.</strong>
                <br> <a href="/dashboardproduk" class="btn btn-primary mt-3">Belanja Sekarang</a>
            </div>
        @else
            <form id="checkoutForm">
                @csrf
                <div class="product-list">
                    @foreach ($cartItems as $item)
                        <div class="product-card" data-product-id="{{ $item->produk->id }}">
                            <input type="checkbox" name="selected_items[]" value="{{ $item->produk->id }}"
                                class="me-3 product-checkbox" 
                                data-price="{{ $item->produk->harga }}"
                                data-name="{{ $item->produk->nama_produk }}" 
                                data-size="{{ $item->size }}"
                                onchange="updateTotal()">
                            <img src="{{ asset('foto/fotoproduk/' . $item->produk->foto) }}" class="product-image"
                                alt="{{ $item->produk->nama_produk }}">
                            <div class="product-details">
                                <strong>{{ $item->produk->nama_produk }}</strong>
                                <p class="product-size"><b>Ukuran: </b>{{ $item->size }}</p>
                                <h3 class="product-price">
                                    <strong>Rp{{ number_format($item->produk->harga, 0, ',', '.') }}</strong>
                                </h3>
                                
                                <form action="{{ route('cart.destroy', $item->id) }}" method="POST" class="d-inline" id="delete-form-{{ $item->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDelete({{ $item->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                               
    
                                <div class="input-group quantity-wrapper">
                                    <button type="button" class="btn btn-outline-secondary minus-btn"
                                        onclick="decreaseQuantity({{ $item->id }})">-</button>
                                    <input type="number" id="jumlah_{{ $item->id }}"
                                        name="jumlah[{{ $item->id }}]"
                                        class="form-control text-center jumlah-input" 
                                        value="{{ $item->jumlah }}"
                                        min="1" 
                                        max="{{ $item->produk->stok }}" 
                                        readonly
                                        onchange="updateTotal()">
                                    <button type="button" class="btn btn-outline-secondary plus-btn"
                                        onclick="increaseQuantity({{ $item->id }}, {{ $item->produk->stok }})">+</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    
                <div class="total-css">
    <h4>Total Keranjang: <span class="text-success" id="totalAmount">Rp 0</span></h4>
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3 gap-2">
        <button type="button" class="btn-abu">
            <a href="/dashboardproduk" class="btn-abu">
                <i class="fas fa-shopping-bag"></i> Lanjutkan Belanja
            </a>
        </button>
        <button type="button" class="btn-abu" onclick="processWhatsAppOrder()">
            <i class="fab fa-whatsapp"></i> Check Out Via WA
        </button>
    </div>
</div>

            </form>
        @endif
    </div>
    @foreach ($data_setting as $item)
    <script>
            function confirmDelete(id) {
        Swal.fire({
            title: 'Anda yakin?',
            text: "Produk ini akan dihapus dari keranjang!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        });
    }

    function updateTotal() {
        let total = 0;
        document.querySelectorAll('.product-checkbox:checked').forEach(checkbox => {
            const productCard = checkbox.closest('.product-card');
            const quantity = parseInt(productCard.querySelector('.jumlah-input').value);
            const price = parseFloat(checkbox.dataset.price);
            total += price * quantity;
        });
    
        document.getElementById('totalAmount').innerText = 'Rp ' + total.toLocaleString('id-ID');
    }
    
    function decreaseQuantity(itemId) {
        const input = document.getElementById('jumlah_' + itemId);
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
            updateTotal();
        }
    }
    
    function increaseQuantity(itemId, maxStock) {
        const input = document.getElementById('jumlah_' + itemId);
        if (parseInt(input.value) < maxStock) {
            input.value = parseInt(input.value) + 1;
            updateTotal();
        }
    }
    
    async function processWhatsAppOrder() {
        try {
            const selectedCheckboxes = document.querySelectorAll('.product-checkbox:checked');
    
            if (selectedCheckboxes.length === 0) {
                await Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Silakan pilih produk terlebih dahulu!'
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
    
            const selectedProducts = [];
            let totalOrderPrice = 0;
    
            selectedCheckboxes.forEach(checkbox => {
                const productCard = checkbox.closest('.product-card');
                const quantity = parseInt(productCard.querySelector('.jumlah-input').value);
                const price = parseFloat(checkbox.dataset.price);
                const total = price * quantity;
    
                selectedProducts.push({
                    id_produk: checkbox.value, // Using the value from checkbox which contains produk->id
                    name: checkbox.dataset.name,
                    size: checkbox.dataset.size,
                    jumlah: quantity,
                    total_harga: total
                });
    
                totalOrderPrice += total;
            });
    
            const formattedTotalPrice = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(totalOrderPrice);
    
            let message = `Halo, saya *{{ $customer->nama }}*, dan saya tertarik untuk membeli produk berikut dari toko Anda:\n\n`;

selectedProducts.forEach(product => {
    message += `*Nama Produk:* ${product.name}\n`;
    message += `*Ukuran:* ${product.size}\n`;
    message += `*Jumlah:* ${product.jumlah}\n`;
    message += `*Total Harga:* ${new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(product.total_harga)}\n\n`;
});

message += `*Total Keseluruhan:* ${formattedTotalPrice}\n\n`;
message += `Mohon bantuannya untuk memproses pengiriman ke alamat berikut:\n`;
message += `*Alamat Pengiriman:* {{ $customer->alamat }}\n`;
message += `*Nomor Telepon:* {{ $customer->no_telpon }}\n\n`;
message += `Terima kasih banyak, dan saya sangat menantikan produk ini!`;

            // Track orders one by one
            for (const product of selectedProducts) {
                const formData = {
                    id_produk: product.id_produk,
                    jumlah: product.jumlah,
                    size: product.size,
                    total_harga: product.total_harga,
                    whatsapp_message: message
                };
    
                const response = await fetch('{{ route('track.wa.order') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify(formData)
                });
    
                const result = await response.json();
                
                if (!result.success) {
                    throw new Error(result.message || 'Gagal memproses pesanan');
                }
            }
    
            await loadingSwal.close();
    
            await Swal.fire({
                title: 'Pesanan Berhasil!',
                text: 'Anda akan dialihkan ke WhatsApp',
                icon: 'success',
                timer: 2000,
                showConfirmButton: false
            });
    
            // Open WhatsApp
            const waUrl = `https://wa.me/62{{ $item->telefon_toko }}?text=${encodeURIComponent(message)}`;
            window.open(waUrl, '_blank');
    
            // Reload page after successful order
            setTimeout(() => {
                location.reload();
            }, 2000);
    
        } catch (error) {
            console.error('Error details:', error);
            await Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: error.message || 'Terjadi kesalahan saat memproses pesanan. Silakan coba lagi.'
            });
        }
    }
    
    // Initialize total on page load
    document.addEventListener('DOMContentLoaded', updateTotal);
    </script>
    @endforeach
</body>

</html>
