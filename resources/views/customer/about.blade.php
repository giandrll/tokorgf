<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @foreach ($data_setting as $item)
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}">
    @endforeach
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <!-- Sertakan SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
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


.close-icon {
    font-size: 30px; /* Increase the size of the close icon */
    color: #333;
    cursor: pointer;
    margin-right: 15px; /* Add some space between the icon and the title */
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
    width: 90%; /* Reduced from 100% to create floating effect */
    background-color: #333;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    bottom: 20px; /* Added space from bottom */
    left: 50%;
    transform: translateX(-50%); /* Center horizontally */
    z-index: 1000;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    border-radius: 20px; /* Added rounded corners */
    padding: 12px 20px; /* Increased padding */
    max-width: 480px; /* Maximum width for larger screens */
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin: auto;
}

/* Navbar Left (Logo) */
.navbar-left {
    display: flex;
    align-items: center;
}

.navbar-logo {
    width: 40px; /* Reduced logo size */
    height: auto;
    margin-right: 10px;
}

/* Navbar Center (Middle Links) */
.navbar-center {
    display: flex;
    justify-content: space-around;
    width: 100%; /* Increased to take full width */
}

/* Navbar Center Links */
.navbar-center a {
    text-decoration: none;
    color: white;
    padding: 8px 16px;
    font-size: 16px;
}

.nav-item {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: inherit;
    margin: 0 12px;
    padding: 8px 0;
    transition: all 0.3s ease; /* Smooth hover effect */
}

.nav-item i {
    font-size: 22px;
    margin-bottom: 4px;
}

.nav-item span {
    font-size: 12px;
    margin-top: 4px;
}

.nav-item:hover {
    transform: translateY(-2px); /* Slight lift effect on hover */
    color: #f0f0f0;
}

/* Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

/* Mobile Responsive */
@media (max-width: 768px) {
    .navbar {
        width: 94%; /* Slightly wider on mobile */
        bottom: 15px;
        padding: 10px 15px;
    }
    
    .nav-item {
        margin: 0 8px;
    }
    
    .navbar-logo {
        display: none;
    }
    
    .nav-item i {
        font-size: 20px;
    }
    
    .nav-item span {
        font-size: 11px;
    }
}

@media (min-width: 769px) {
    .navbar {
        display: none;
    }
}
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
