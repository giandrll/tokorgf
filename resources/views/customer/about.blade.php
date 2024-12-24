<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logomerah.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="customer/css/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <!-- Sertakan SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    
    <div class="container">
        <nav class="navbar8">
            <i class="fas fa-arrow-left close-icon" onclick="closePage()"></i> <!-- Icon close dari Font Awesome -->
    <div class="page-title">About</div>
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
        
        <div class="profile-header mt-4">
            <a href="{{ route('customer.profile') }}">
                <img src="{{ asset('storage/customer_photos/' . $customer->foto) }}" alt="User Avatar" id="userAvatar">
            </a>

            <div>
                <div class="name" id="userName">{{ $customer->nama }}</div>
                <div class="user-info">Email: {{ $customer->email }}</div>
                <div class="user-info">ID Pengguna: {{ $customer->id }}</div>
            </div>
        </div>

        <!-- Menu Profil -->
        <div class="profile-menu">
        <a href="/cart">
            <div class="menu-item">
                    <div class="menu-item-text">
                        <i class="fas fa-shopping-cart" style=" color: grey;"></i> Keranjang
                    </div>
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <a href="/customer/profile">
            <div class="menu-item">
                    <div class="menu-item-text">
                        <i class="fas fa-cog" style=" color: grey;"></i> Pengaturan Akun
                    </div>
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
 
<div class="menu-item" onclick="confirmLogout()">
  <form id="logoutForm" action="{{ route('customer.logout') }}" method="POST">
    @csrf
    <div class="menu-item-text">
        <i class="fas fa-sign-out-alt"  style="color: grey;"></i>Logout
    </div>
  </form>
</div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
  function confirmLogout() {
    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: "Anda akan keluar dari akun ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, Logout',
      cancelButtonText: 'Batal',
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        // Jika konfirmasi di-klik, submit form logout
        document.getElementById('logoutForm').submit();
      } else {
        Swal.fire({
          title: 'Batal',
          text: "Anda tetap berada di akun ini.",
          icon: 'info',
          timer: 1000,
          showConfirmButton: false,
        });
      }
    });
  }
        document.getElementById('userAvatar').addEventListener('click', function() {
            fetch('/customer/profile')
                .then(response => response.json())
                .then(data => {
                    // Tampilkan data pengguna di modal atau bagian lain di halaman
                    document.getElementById('userName').textContent = data.nama;
                    document.getElementById('userEmail').textContent = data.email;
                });
        });
        function closePage() {
        window.history.back(); // Kembali ke halaman sebelumnya
    }
    </script>
</body>

</html>
