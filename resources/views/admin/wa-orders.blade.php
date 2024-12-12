@extends('admin.layouts.mainlayout')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Payment</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="container">
                                <h2 class="mb-4">WhatsApp Orders</h2>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>Customer</th>
                                                        <th>Alamat</th>
                                                        <th>Products</th>
                                                        <th>Total</th>
                                                        <th>Status Pembayaran</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @csrf
                                                    @foreach ($orders as $order)
                                                        <tr>
                                                            <td>#{{ $order->id }}</td>
                                                            <td>{{ $order->customer->nama }}</td>
                                                            <td>{{ $order->customer->alamat ?? 'Alamat tidak tersedia' }}
                                                            </td>
                                                            <td>
                                                                @foreach ($order->getProductDetails() as $item)
                                                                    <div class="mb-2">
                                                                        <strong>{{ $item['product']->nama_produk }}</strong><br>
                                                                        Quantity: {{ $item['quantity'] }}<br>
                                                                        Size: {{ $item['size'] }}<br>
                                                                        Subtotal: Rp
                                                                        {{ number_format($item['subtotal'], 0, ',', '.') }}
                                                                    </div>
                                                                    @if (!$loop->last)
                                                                        <hr>
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>Rp {{ number_format($order->total_harga, 0, ',', '.') }}
                                                            </td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('admin.orders.updatePaymentStatus', $order->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <select name="status"
                                                                        class="form-select form-select-sm"
                                                                        onchange="this.form.submit()" style="width: auto;">
                                                                        <option value="belum_bayar"
                                                                            {{ $order->status === 'belum_bayar' ? 'selected' : '' }}>
                                                                            Belum Bayar
                                                                        </option>
                                                                        <option value="sudah_bayar"
                                                                            {{ $order->status === 'sudah_bayar' ? 'selected' : '' }}>
                                                                            Sudah Bayar
                                                                        </option>
                                                                    </select>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <form action="{{ route('order.destroy', $order) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-danger">
                                                                            <i class="fa fa-times menu-icon"></i> Cancel
                                                                        </button>
                                                                    </form>

                                                                    @if ($order->status === 'sudah_bayar')
                                                                        <button type="button" class="btn btn-sm btn-info">
                                                                            <a href="{{ route('invoice.print', $order->id) }}"
                                                                                target="_blank" class="text-white">
                                                                                <i class="icon-printer menu-icon"></i>
                                                                                Invoice
                                                                            </a>
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="custom-pagination d-flex justify-content-center mt-3">
                                        {{ $orders->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Add this JavaScript code
        $(document).ready(function() {
            // Handle click event on delete button
            $('.delete-order').click(function(e) {
                e.preventDefault();

                var orderId = $(this).data('order-id');

                // Show confirmation dialog
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Send delete request
                        $.ajax({
                            url: '/orders/' + orderId,
                            type: 'DELETE',
                            data: {
                                "_token": $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                // Show success message
                                Swal.fire(
                                    'Terhapus!',
                                    'Data berhasil dihapus.',
                                    'success'
                                ).then(() => {
                                    // Reload the page or remove the row
                                    location.reload();
                                });
                            },
                            error: function(xhr) {
                                // Show error message
                                Swal.fire(
                                    'Error!',
                                    'Terjadi kesalahan saat menghapus data.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
