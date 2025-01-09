<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profile</title>
    @foreach ($data_setting as $item)
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}">
    @endforeach
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.3/sweetalert2.min.css" rel="stylesheet">
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
            object-fit: cover;
        }
        .profile-header .edit-text {
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 10px;
            display: flex;
            align-items: center;
        }
        .profile-header .edit-text i {
            margin-right: 5px;
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
        #closeButtonContainer {
            position: fixed;
            top: -10px;
            left: -5px;
            z-index: 9999;
        }
        #closeButtonContainer button {
            background: transparent;
            border: none;
            font-size: 30px;
            cursor: pointer;
            color: #333;
        }
        @media (max-width: 600px) {
            #closeButtonContainer button {
                font-size: 29px;
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
        .close-icon {
            font-size: 30px;
            color: #333;
            cursor: pointer;
            margin-right: 15px;
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
            margin-right: 40px;
        }
        .container {
            padding: 40px;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <i class="fas fa-arrow-left close-icon" onclick="closePage()"></i>
            <div class="page-title">Ubah Profile</div>
        </nav>
        
        <div class="profile-header mt-4">
            <img src="{{ asset('storage/customer_photos/' . $customer->foto) }}" alt="User Avatar" id="userAvatar">
            <div class="edit-text">
                <i class="fas fa-pen"></i>
                Klik Poto Untuk Mengubah
            </div>
        </div>
        
        <input type="file" id="fileInput" style="display: none;" accept="image/*">

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
            <button type="submit" class="btn btn-dark w-100">Update Profil</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.3/sweetalert2.all.min.js"></script>
    <script>
        document.getElementById('userAvatar').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                // Validate file size (max 2MB)
                if (file.size > 2 * 1024 * 1024) {
                    Swal.fire({
                        icon: 'error',
                        title: 'File terlalu besar',
                        text: 'Ukuran foto maksimal 2MB',
                        confirmButtonColor: '#dc3545'
                    });
                    return;
                }

                // Validate file type
                if (!file.type.match('image.*')) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Format file tidak sesuai',
                        text: 'Silakan pilih file gambar (JPG, PNG, atau GIF)',
                        confirmButtonColor: '#dc3545'
                    });
                    return;
                }

                Swal.fire({
                    title: 'Mengupload Foto...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('userAvatar').src = e.target.result;
                }
                reader.readAsDataURL(file);

                const formData = new FormData();
                formData.append('foto', file);
                formData.append('_token', '{{ csrf_token() }}');

                fetch('{{ route('customer.updatePhoto') }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Foto profil berhasil diperbarui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else {
                        throw new Error(data.message || 'Gagal memperbarui foto profil');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: error.message || 'Terjadi kesalahan saat memperbarui foto',
                        confirmButtonText: 'Tutup',
                        confirmButtonColor: '#dc3545'
                    });
                });
            }
        });
        function closePage() {
            window.history.back();
        }
    </script>
</body>
</html>