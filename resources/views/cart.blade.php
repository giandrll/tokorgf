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
    <title>Keranjang Belanja</title>
    <style>
        body {
            background-color: #f8f9fa;
            /* Background color for the page */
        }

        .keranjang {
            max-width: 900px;
            /* Adjusted width for better visibility */
            margin: 50px auto;
            /* Centered in the middle */
            background: #fff;
            /* White background */
            border-radius: 10px;
            /* Rounded corners */
            padding: 30px;
            /* Padding inside */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            /* Shadow effect */
        }

        .keranjang h2 {
            font-weight: bold;
            /* Bold title */
        }

        .product-card {
            border: 1px solid #ddd;
            /* Border around product card */
            border-radius: 8px;
            /* Rounded corners */
            margin-bottom: 15px;
            /* Space between products */
            display: flex;
            /* Flexbox for layout */
            align-items: center;
            /* Center items vertically */
            padding: 15px;
            /* Padding for product card */
            transition: box-shadow 0.2s;
            /* Smooth shadow effect on hover */
        }

        .product-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Shadow on hover */
        }

        .product-image {
            width: 80px;
            /* Fixed width for image */
            height: 80px;
            /* Fixed height for image */
            border-radius: 8px;
            /* Rounded corners for image */
            object-fit: cover;
            /* Cover the container */
        }

        .product-details {
            flex: 1;
            /* Take remaining space */
            margin-left: 15px;
            /* Space between image and text */
        }

        .btn-danger {
            border-radius: 5px;
            /* Rounded corners for delete button */
        }

        .total-section {
            margin-top: 20px;
            /* Space above total section */
            border-top: 1px solid #ddd;
            /* Divider line */
            padding-top: 20px;
            /* Padding for total section */
        }

        .alert-info {
            background-color: #e7f3fe;
            /* Info background */
            color: #31708f;
            /* Info text color */
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            /* Agar navbar tetap di atas elemen lain */
        }

        .navbar-container {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-left a,
        .navbar-right a {
            color: white;
            padding: 0 10px;
            text-decoration: none;
            font-size: 14px;
        }

        .navbar-center {
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }

        .navbar-center {
    display: flex;
    justify-content: center;
    flex-grow: 1;
}

.navbar-center a {
    color: white;
    font-family: 'Sans-serif', Helvetica;
    padding: 0 10px;
    font-weight: bold;
    text-decoration: none;
    font-size: 14px;
    display: flex;
    align-items: center;
    transition: transform 0.2s ease, color 0.2s ease;
}

.navbar-center a i {
    margin-right: 5px; /* Spasi antara ikon dan teks */
    transition: transform 0.2s ease;
}

.navbar-center a:hover,
.navbar-left a:hover,
.navbar-right a:hover {
    color: #ddd;
}

.navbar-center a:hover i {
    transform: translateY(-3px) scale(1.2); /* Ikon naik 3px ke atas dan membesar 20% */
}

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            padding-top: 70px;
            /* Menambahkan ruang untuk navbar agar tidak menutupi konten */
        }

        .navbar-logo {
            height: 50px;
            width: auto;
            margin-left: 15px;
            max-height: 100%;
        }

        @media (max-width: 768px) {
            .navbar-logo {
                height: 50px;
            }

            .navbar-left a,
            .navbar-center a {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .navbar-logo {
                height: 25px;
            }
        }


        .custom-div {
            padding: 40px;
            background-color: white;
            /* Warna latar belakang (opsional) */
            border: 1px solid #ccc;
            /* Border (opsional) */
            border-radius: 5px;
            /* Sudut melengkung (opsional) */
        }

        .custom-heading {
            font-weight: 900;
            /* Membuat teks lebih tebal */
            font-size: 30px;
            /* Mengatur ukuran font */
            color: #333;
            /* Warna teks */
            text-transform: ;
            /* Mengubah teks menjadi huruf kapital */
            letter-spacing: 0px;
            /* Menambahkan jarak antar huruf */
            font-family: 'Arial', sans-serif;
            /* Mengatur font agar terlihat lebih modern */
            margin-bottom: 20px;
            /* Jarak bawah (opsional, sesuai dengan mb-4) */
        }

        .total-css {
            position: fixed;
            /* Membuat div mengambang */
            bottom: 20px;
            /* Jarak dari bawah */
            left: 50%;
            /* Memposisikan div ke tengah */
            transform: translateX(-50%);
            /* Memindahkan div agar berada di tengah */
            background-color: black;
            /* Warna latar belakang div */
            border: 1px solid #ddd;
            /* Garis batas div */
            border-radius: 8px;
            /* Sudut melengkung */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            /* Bayangan halus */
            padding: 15px;
            /* Padding di dalam div */
            width: calc(100% - 40px);
            /* Lebar div dengan margin */
            max-width: 500px;
            /* Maksimal lebar div */
            z-index: 1000;
            /* Pastikan div di atas elemen lain */
        }

        .total-css h4 {
            font-weight: bold;
            margin-bottom: 15px;
            color: #fff;
            /* Warna teks judul tetap putih */
        }

        .btn-payment {
            background-color: #444;
            /* Warna latar belakang tombol */
            border: none;
            /* Menghilangkan border tombol */
            color: #fff;
            /* Warna teks tombol */
            padding: 10px 20px;
            /* Padding tombol */
            border-radius: 5px;
            /* Sudut tombol melengkung */
            margin-left: 10px;
            /* Menambahkan jarak di sebelah kiri tombol pembayaran */
        }

        .btn-shopping {
            background-color: #444;
            /* Warna latar belakang tombol */
            border: none;
            /* Menghilangkan border tombol */
            color: #fff;
            /* Warna teks tombol */
            padding: 10px 20px;
            /* Padding tombol */
            border-radius: 5px;
            /* Sudut tombol melengkung */
            margin-right: 10px;
            /* Menambahkan jarak di sebelah kanan tombol belanja */
        }


        .btn-shopping:hover,
        .btn-payment:hover {
            background-color: #555;
            /* Warna tombol saat di-hover */
        }

        .quantity-wrapper {
            display: flex;
            align-items: center;
            width: 120px;
            /* Lebar keseluruhan */
            border: 1px solid #eaeaea;
            border-radius: 5px;
            overflow: hidden;
        }

        .minus-btn,
        .plus-btn {
            width: 35px;
            /* Ukuran tombol */
            height: 35px;
            border: none;
            background-color: #f1f1f1;
            color: #333;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.2s ease-in-out;
        }

        .minus-btn:hover,
        .plus-btn:hover {
            background-color: #dcdcdc;
            /* Warna hover */
        }

        .jumlah-input {
            width: 50px;
            /* Lebar input */
            height: 35px;
            text-align: center;
            border: none;
            font-size: 16px;
            background-color: #fff;
            color: #333;
            padding: 0;
            /* Menghilangkan padding default */
            -moz-appearance: textfield;
            /* Hilangkan tombol spinner di Firefox */
        }

        .jumlah-input::-webkit-outer-spin-button,
        .jumlah-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            /* Hilangkan spinner di Chrome, Safari, Edge */
        }

        /* Pastikan border dihilangkan antara tombol dan input */
        .minus-btn,
        .plus-btn,
        .jumlah-input {
            box-shadow: none;
        }

        .product-list {
    padding-bottom: 175px; /* Tambahkan padding bawah */
}

.product-card {
    display: flex;
    align-items: center;
    margin-bottom: 15px; /* Spasi antar produk */
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fff;
}

.product-image {
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-right: 15px; /* Spasi antara gambar dan detail produk */
    border-radius: 5px;
}

.product-details {
    flex: 1;
}

.product-price {
    color: #333;
    font-size: 18px;
}

.quantity-wrapper {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.minus-btn, .plus-btn {
    width: 30px;
    height: 30px;
}

.jumlah-input {
    max-width: 60px;
}

.btn-danger {
    margin-left: 10px; /* Spasi antara tombol hapus dan elemen lainnya */
}
.btn-abu {
    background-color: #b0b0b0; /* Warna abu-abu */
    color: white; /* Warna teks */
    border: none; /* Hilangkan border */
    padding: 10px 20px; /* Spasi dalam */
    border-radius: 5px; /* Sudut melengkung */
    font-size: 16px; /* Ukuran font */
    cursor: pointer; /* Ubah kursor jadi pointer saat hover */
    transition: background-color 0.3s ease; /* Animasi transisi */
    margin-right: 10px; /* Jarak dengan elemen di sebelah kanan */
}

.btn-abu:hover {
    background-color: #8e8e8e; /* Warna lebih gelap saat hover */
}



        /* Style untuk link 'RGF Store' */
    </style>
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
                            <i class="fab fa-whatsapp"  ></i> Check Out Via WA
                        </button>
                    </div>
                </div>
            </form>
        @endif
    </div>
    
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
            const waUrl = `https://wa.me/6283167735320?text=${encodeURIComponent(message)}`;
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
</body>

</html>
