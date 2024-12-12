<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice{{ $order->id }}</title>
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-light: #818cf8;
            --secondary-color: #f8fafc;
            --border-color: #e2e8f0;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 40px 20px;
            background-color: #f1f5f9;
            color: var(--text-primary);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 48px;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05),
                        0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 32px;
            border-bottom: 2px solid var(--border-color);
            margin-bottom: 40px;
            position: relative;
        }

        .invoice-header::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .invoice-title {
            color: var(--primary-color);
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: -1px;
            position: relative;
        }

        .invoice-number {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-top: 1px;
            font-weight: 500;
        }

        .customer-details, .product-details {
            background-color: var(--secondary-color);
            padding: 32px;
            border-radius: 12px;
            margin-bottom: 32px;
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .customer-details::before, .product-details::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--primary-color);
        }

        .section-title {
            color: var(--text-primary);
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .section-title::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: var(--primary-color);
            margin-right: 12px;
            border-radius: 50%;
        }

        .detail-row {
            margin-bottom: 12px;
            display: flex;
            align-items: baseline;
        }

        .detail-label {
            font-weight: 500;
            color: var(--text-secondary);
            width: 120px;
            flex-shrink: 0;
        }

        .total-section {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            color: white;
            padding: 32px;
            border-radius: 12px;
            text-align: right;
            position: relative;
            overflow: hidden;
        }

        .total-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(45deg);
        }

        .total-amount {
            font-size: 2rem;
            font-weight: 700;
            margin-top: 8px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-logo {
            max-height: 120px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        @media print {
            body {
                background-color: white;
                padding: 0;
                margin: 0;
            }

            .container {
                box-shadow: none;
                padding: 40px;
                max-width: 100%;
            }

            .total-section,
            .customer-details,
            .product-details {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .navbar-logo {
                max-width: 200px;
                height: auto;
            }
        }
        .invoice-1, .invoice-2, .invoice-number {
    padding-top: 5px;
    padding-bottom: 5px;
    margin: 0; /* Menghilangkan margin bawaan */
}

    </style>
    <script>
        window.onload = function() {
            setTimeout(function() {
                window.print();
                window.onafterprint = function() {
                    window.close();
                };
            }, 1000);
        };
    </script>
</head>
<body>
    <div class="container">
        <div class="invoice-header">
            <div >
                <h1 class="invoice-title">INVOICE RGF STORE</h1>
                <h6 class="invoice-1">Jl. Doang Jadian Kagak 0987654</h6>
                <h6 class="invoice-2">Contack : 081297535513</h6>
                <div class="invoice-number">No Order :{{ $order->id }}</div>
            </div>
            <div>
                @foreach ($data_setting as $item)
                <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Logo" class="navbar-logo">
                @endforeach
            </div>
        </div>

        <div class="customer-details">
            <div class="section-title">Informasi Pelanggan</div>
            <div class="detail-row">
                <span class="detail-label">Nama:</span>
                <span>{{ $order->customer->nama }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Alamat:</span>
                <span>{{ $order->customer->alamat }}</span>
            </div>
        </div>

        <div class="product-details">
            <div class="section-title">Detail Produk</div>
            <div class="detail-row">
                <span class="detail-label">Nama Produk:</span>
                <span>{{ $order->produk->nama_produk }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Jumlah:</span>
                <span>{{ $order->jumlah }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Ukuran:</span>
                <span>{{ $order->size }}</span>
            </div>
        </div>

        <div class="total-section">
            <div class="detail-row">Total Pembayaran</div>
            <div class="total-amount">
                Rp {{ number_format($order->total_harga, 0, ',', '.') }}
            </div>
        </div>
    </div>
</body>
</html>