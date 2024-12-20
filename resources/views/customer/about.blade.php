<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logomerah.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <!-- Sertakan SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: white;
        }

        .profile-header {
            background-color: black;
            color: white;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
        }

        .profile-header img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin-right: 20px;
        }

        .profile-header .name {
            font-size: 1.5rem;
        }

        .profile-header .user-info {
            font-size: 0.9rem;
        }

        .profile-menu {
            margin-top: 20px;
        }

        .profile-menu a {
            text-decoration: none;
            color: black;
        }

        .profile-menu .menu-item {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-menu .menu-item i {
            font-size: 1.2rem;
            color: black;
        }

        .menu-item-text {
            display: flex;
            align-items: center;
        }

        .menu-item-text i {
            margin-right: 10px;
        }

        .submenu {
            margin-top: 10px;
            display: flex;
            /* Mengatur submenu menjadi flex */
            gap: 20px;
            /* Menambahkan jarak antara submenu */
        }

        .submenu-item {
            display: flex;
            align-items: center;
            padding: 10px;
            color: black;
            /* Mengatur warna ikon */
            cursor: pointer;
            /* Menunjukkan bahwa ini dapat diklik */
        }

        .submenu-item i {
            margin-right: 5px;
            /* Menambahkan jarak antara ikon dan teks */
        }

    /* Posisi dan gaya tombol close */
    #closeButtonContainer {
        position: fixed;
        top: -10px;
        left: -5px;
        z-index: 9999; /* Pastikan z-index tinggi agar terlihat di atas elemen lain */
    }

    #closeButtonContainer button {
        background: transparent;
        border: none;
        font-size: 30px; /* Ukuran standar untuk ikon */
        cursor: pointer;
        color: #333; /* Warna ikon */
    }

    /* Responsif untuk perangkat kecil */
    @media (max-width: 600px) {
        #closeButtonContainer button {
            font-size: 29px; /* Ukuran ikon sedikit lebih kecil di layar kecil */
        }
    }
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar8 {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 12px 16px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            border-bottom: 1px solid #ddd;
        }

        .back-button {
            background: none;
            border: none;
            font-size: 20px;
            padding: 8px;
            cursor: pointer;
            color: #333;
        }

        .page-title {
            flex-grow: 1;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            color: #333;
            margin-right: 40px; /* Mengimbangi lebar tombol kembali */
        }
        .container {
            padding: 40px; /* padding-top 60px untuk memberikan ruang untuk navbar */
            min-height: 100vh; /* Minimal tinggi sesuai viewport */
        }
        /* Navbar Styling */
 .navbar {
            width: 100%;
            background-color: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 0px;
            position: fixed;
            bottom: 0;
            /* Make the navbar stick to the bottom */
            left: 0;
            z-index: 1000;
            /* Ensure it's on top */
            box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

        /* Navbar Left (Logo) */
        .navbar-logo {
            width: 55px;
            height: auto;
        }
        .navbar-center {
            display: flex;
            justify-content: space-around;
            /* Menjaga elemen tetap bersebelahan */
        }

        /* Navbar Center (Middle Links) */
        .navbar-center a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
        }

        .navbar-center a:hover {
            /* background-color: #575757; */
            border-radius: 5px;
        }

        /* Navbar Right (Login) */
        .navbar-right a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
        }

        .navbar-right a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        /* Content for Scroll Testing */
        .content {
            height: 2000px;
            /* To create enough scrolling space */
            padding: 20px;
        }
        /* Style untuk link 'RGF Store' */


        .store-link {
            font-family: 'Cursive', Brush Script MT;
            /* Ganti dengan font yang diinginkan */
            font-size: 18px;
            /* Ukuran font */
            color: white;
            right: 20px;
            /* Warna teks */
            text-decoration: none;
            /* Hilangkan underline */
            padding: 0 10px;
            /* Padding di sekeliling teks */

        }

        /* Hover effect */
        .store-link:hover {
            color: #ddd;
            /* Warna saat di-hover */
            text-decoration: underline;
            /* Tambahkan underline saat di-hover */
        }

        /* Responsive styling (opsional) */
        @media (max-width: 768px) {
            .store-link {
                font-size: 16px;
                /* Ukuran font lebih kecil untuk layar kecil */
            }
        }

        @media (max-width: 480px) {
            .store-link {
                font-size: 14px;
                /* Ukuran font lebih kecil lagi untuk layar sangat kecil */
            }
        }
        .nav-item {
            display: inline-flex;
            flex-direction: column;
            /* Agar icon di atas teks */
            align-items: center;
            text-decoration: none;
            color: inherit;
            margin: 0 15px;
            /* Memberi sedikit jarak antara item */
        }

        .nav-item i {
            font-size: 24px;
            /* Ukuran ikon */
        }

        .nav-item span {
            font-size: 12px;
            /* Ukuran teks */
            margin-top: 4px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        .nav-item {
            display: inline-flex;
            flex-direction: column;
            /* Agar icon di atas teks */
            align-items: center;
            text-decoration: none;
            color: inherit;
            margin: 0 15px;
            /* Memberi sedikit jarak antara item */
        }

        .nav-item i {
            font-size: 24px;
            /* Ukuran ikon */
        }

        .nav-item span {
            font-size: 12px;
            /* Ukuran teks */
            margin-top: 4px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

.navbarm {
    background-color: #808284;
    height: 20px;
    width: 100%;
    overflow: hidden;
    position: fixed;
    top: 50px;
    left: 0;
    position: fixed;
    z-index: 9000;
}

.marqueem {
    font-family: 'Poppins', sans-serif;
    color: white;
    font-weight: 600;
    white-space: nowrap;
    animation: marqueem 20s linear infinite;
    font-size: 14px;
    line-height: 20px;
}

@keyframes marqueem {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
.icon-hover {
    font-size: 28px; /* Ukuran ikon */
    color: white;
    /* Warna latar belakang */
    padding: 5px; /* Ruang di sekitar ikon */
    border-radius: 50%; /* Membuat bentuk lingkaran */
    transition: transform 0.3s ease, background-color 0.3s ease;
    display: inline-flex; /* Untuk memastikan ikon berada di tengah */
    justify-content: center;
    align-items: center;
}

.icon-hover:hover {
    transform: translateY(-20px) scale(1.2); /* Naik ke atas dan membesar */
    background-color: #333  ; /* Latar belakang lebih gelap */
}




    </style>
</head>

<body>
    
    <div class="container">
        <nav class="navbar8">
            <a href="/dashboardcustomer">
                <i class="fas fa-arrow-left close-icon" style="color:black"></i> <!-- Icon close dari Font Awesome -->
            </a>
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
       
    </script>
</body>

</html>
