<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @foreach ($data_setting as $item)
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}">
    @endforeach
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="customer/css/cart.css">

    <title>Keranjang Belanja</title>
   
</head>

<body>
    <nav class="navbar8">
        <i class="fas fa-arrow-left close-icon" onclick="closePage()"></i> <!-- Icon close dari Font Awesome -->
        <div class="page-title">
            Keranjang Saya 
            <span class="cart-count">
                ({{ $cartItems->sum('jumlah') }}) <!-- Display the total quantity of items in the cart -->
            </span>
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
                <div class="shopee-checkout">
                    <div class="checkout-content">
                        <div class="select-all-section">
                            <label class="checkbox-wrapper">
                                <input type="checkbox" id="selectAll" onchange="toggleSelectAll()">
                                <span class="checkmark"></span>
                                <span class="select-all-text">Pilih Semua</span>
                            </label>
                            <div class="total-section">
                                <div class="total-label">Total Pesanan:</div>
                                <div class="total-amount" id="totalAmount">Rp 0</div>
                            </div>
                        </div>
                        <button type="button" class="checkout-button" onclick="processWhatsAppOrder()">
                            <i class="fab fa-whatsapp"></i>
                            <span>Checkout Sekarang</span>
                        </button>
                    </div>
                </div>
                

            </form>
        @endif
    </div>
    @foreach ($data_setting as $item)
    <script>

function closePage() {
        window.history.back(); // Kembali ke halaman sebelumnya
    }


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

   // Function to toggle all product selections
function toggleSelectAll() {
    const selectAllCheckbox = document.getElementById('selectAll');
    const productCheckboxes = document.querySelectorAll('.product-checkbox');
    
    productCheckboxes.forEach(checkbox => {
        checkbox.checked = selectAllCheckbox.checked;
    });
    
    updateTotal(); // Using the enhanced updateTotal function
}

// Main function to update total based on selected products and their quantities
function updateTotal() {
    let total = 0;
    const checkedProducts = document.querySelectorAll('.product-checkbox:checked');
    
    checkedProducts.forEach(checkbox => {
        const productCard = checkbox.closest('.product-card');
        const quantity = parseInt(productCard.querySelector('.jumlah-input').value) || 1;
        const price = parseFloat(checkbox.dataset.price) || 0;
        total += price * quantity;
    });
    
    document.getElementById('totalAmount').innerText = 'Rp ' + total.toLocaleString('id-ID');
}

// Function to decrease quantity
function decreaseQuantity(itemId) {
    const input = document.getElementById('jumlah_' + itemId);
    const currentValue = parseInt(input.value);
    
    if (currentValue > 1) {
        input.value = currentValue - 1;
        updateTotal();
    }
}

// Function to increase quantity
function increaseQuantity(itemId, maxStock) {
    const input = document.getElementById('jumlah_' + itemId);
    const currentValue = parseInt(input.value);
    
    if (currentValue < maxStock) {
        input.value = currentValue + 1;
        updateTotal();
    }
}

// Event listener for quantity input changes
function setupQuantityInputListeners() {
    document.querySelectorAll('.jumlah-input').forEach(input => {
        input.addEventListener('change', function() {
            const maxStock = parseInt(this.dataset.maxStock);
            const value = parseInt(this.value);
            
            // Validate input
            if (isNaN(value) || value < 1) {
                this.value = 1;
            } else if (value > maxStock) {
                this.value = maxStock;
            }
            
            updateTotal();
        });
    });
}

// Event listener for checkbox changes
function setupCheckboxListeners() {
    document.querySelectorAll('.product-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', updateTotal);
    });
}

// Initialize all listeners when document is ready
document.addEventListener('DOMContentLoaded', function() {
    setupQuantityInputListeners();
    setupCheckboxListeners();
    updateTotal(); // Initial total calculation
});
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
