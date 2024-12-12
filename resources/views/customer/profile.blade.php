<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profile</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logomerah.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 45vh;
            position: relative;
        }
        .profile-header img {
            border-radius: 100%;
            height: 180px;
            width: 180px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .profile-header .edit-text {
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 10px; /* Tambahkan jarak atas untuk memberikan ruang */
            display: flex; /* Menyusun teks dan ikon dalam satu baris */
            align-items: center; /* Memastikan ikon dan teks rata secara vertikal */
        }
        .profile-header .edit-text i {
            margin-right: 5px; /* Menambahkan jarak antara ikon dan teks */
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
            color: #ff5722;
        }
        .menu-item-text {
            display: flex;
            align-items: center;
        }
        .menu-item-text i {
            margin-right: 10px;
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

        .navbar {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 12px 16px;
            position: fixed;
            z-index: 1000;
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
    </style>
</head>
<body>
   
        {{-- --}}

<div class="container">
    <nav class="navbar">
            <i class="fas fa-arrow-left close-icon" onclick="closePage()"></i> <!-- Icon close dari Font Awesome -->
    <div class="page-title">Ubah Profile</div>
</nav>
    <!-- Profil Header -->
    <div class="profile-header mt-4">
        <img src="{{ asset('storage/customer_photos/' . $customer->foto) }}" alt="User Avatar" id="userAvatar">
        <div class="edit-text">
            <i class="fas fa-pen"></i>
Klik Poto Untuk Mengubah        </div>
    </div>
    
    <!-- Hidden file input -->
    <input type="file" id="fileInput" style="display: none;" accept="image/*">

    <!-- Form untuk memperbarui profil -->
    <form id="updateProfileForm" method="POST" action="{{ route('customer.updateProfile') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $customer->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
        </div>
        <div class="mb-3">
            <label for="no_telpon" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="{{ $customer->no_telpon }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Masukan alamat selengkap mungkin</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $customer->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password (Kosongkan jika tidak ingin mengubah)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-dark">Update Profil</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('userAvatar').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('userAvatar').src = e.target.result;
            }
            reader.readAsDataURL(file);

            // Create a FormData object and append the file
            const formData = new FormData();
            formData.append('foto', file);
            formData.append('_token', '{{ csrf_token() }}');

            // Send an AJAX request to update the photo
            fetch('{{ route('customer.updatePhoto') }}', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Photo updated successfully');
                } else {
                    alert('Failed to update photo');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while updating the photo');
            });
        }
    });
    function closePage() {
        window.history.back(); // Kembali ke halaman sebelumnya
    }
</script>
</body>
</html>
