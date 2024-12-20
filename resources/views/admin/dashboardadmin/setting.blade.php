@extends('admin.layouts.mainlayout')

@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="container">
                            <h2>Pengaturan Toko</h2>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Nama Toko -->
                                <div class="form-group">
                                    <label for="nama_toko">Nama Toko</label>
                                    <input type="text" name="nama_toko" class="form-control"
                                        value="{{ $setting->nama_toko ?? '' }}" required>
                                </div>

                                <!-- Logo Toko -->
                                <div class="form-group">
                                    <label for="logo_toko">Logo Toko</label>
                                    <input type="file" name="logo_toko" class="form-control">
                                    @if ($setting && $setting->logo_toko)
                                        <img src="{{ asset('foto/fotoSetting/' . $setting->logo_toko) }}" alt="Logo Toko"
                                            width="100" class="mt-2">
                                    @endif
                                </div>

                                <!-- Email Toko -->
                                <div class="form-group">
                                    <label for="email_toko">Email Toko</label>
                                    <input type="email" name="email_toko" class="form-control"
                                        value="{{ $setting->email_toko ?? '' }}" required>
                                </div>

                                <!-- Telepon Toko -->
                                <div class="form-group">
                                    <label for="telefon_toko">Telepon Toko</label>
                                    <input type="number" name="telefon_toko" class="form-control"
                                        value="{{ $setting->telefon_toko ?? '' }}">
                                </div>

                                <!-- Instagram -->
                                <div class="form-group">
                                    <label for="instagram_toko">Instagram</label>
                                    <input type="text" name="instagram_toko" class="form-control"
                                        value="{{ $setting->instagram_toko ?? '' }}">
                                </div>

                                <!-- Facebook -->
                                <div class="form-group">
                                    <label for="facebook_toko">Facebook</label>
                                    <input type="text" name="facebook_toko" class="form-control"
                                        value="{{ $setting->facebook_toko ?? '' }}">
                                </div>

                                <!-- Twitter -->
                                <div class="form-group">
                                    <label for="twitter_toko">Twitter</label>
                                    <input type="text" name="twitter_toko" class="form-control"
                                        value="{{ $setting->twitter_toko ?? '' }}">
                                </div>

                                <!-- Text Branding -->
                                <div class="form-group">
                                    <label for="textbranding_toko">Text Branding</label>
                                    <textarea name="textbranding_toko" id="textbranding_toko" class="form-control" rows="5">{{ $setting->textbranding_toko ?? '' }}</textarea>
                                </div>

                                <div class="container-fluid">
                                    <!-- Video Store Section -->
                                    <div class="card mb-4">
                                        <div class="card-header bg-primary text-white">
                                            <h5 class="mb-0">Video Toko</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="video_toko" class="form-label">Upload Video</label>
                                                <input type="file" name="video_toko" class="form-control" accept="video/mp4,video/x-m4v,video/*">
                                                @if ($setting && $setting->video_toko)
                                                    <div class="mt-3">
                                                        <label class="form-label">Preview Video:</label>
                                                        <video width="100%" style="max-width: 400px;" controls class="mt-2 rounded">
                                                            <source src="{{ asset('video_setting/' . $setting->video_toko) }}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                @endif
                                                <small class="text-muted mt-2 d-block">
                                                    <i class="fas fa-info-circle"></i> Video harus memiliki rasio aspek 16:9
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <!-- Featured Photos Section -->
                                    <div class="card mb-4">
                                        <div class="card-header bg-primary text-white">
                                            <h5 class="mb-0">Produk Andalan</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @for ($i = 1; $i <= 3; $i++)
                                                <div class="col-md-4 mb-3">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Slide {{ $i }}</h6>
                                                            <div class="form-group">
                                                                <input type="file" name="fotoandalan_slide{{ $i }}" class="form-control" accept="image/*">
                                                                @if ($setting && $setting->{'fotoandalan_slide' . $i})
                                                                    <div class="mt-3 text-center">
                                                                        <img src="{{ asset('foto/fotoSetting/' . $setting->{'fotoandalan_slide' . $i}) }}" 
                                                             alt="Foto Andalan Slide {{ $i }}" 
                                                             class="img-thumbnail" 
                                                             style="max-height: 150px; object-fit: cover;">
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                
                                    <!-- Collaboration Photos Section -->
                                    <div class="card mb-4">
                                        <div class="card-header bg-primary text-white">
                                            <h5 class="mb-0">Produk Kolaborasi</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @for ($i = 1; $i <= 3; $i++)
                                                <div class="col-md-4 mb-3">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Slide {{ $i }}</h6>
                                                            <div class="form-group">
                                                                <input type="file" name="fotokolaburasi_slide{{ $i }}" class="form-control" accept="image/*">
                                                                @if ($setting && $setting->{'fotokolaburasi_slide' . $i})
                                                                    <div class="mt-3 text-center">
                                                                        <img src="{{ asset('foto/fotoSetting/' . $setting->{'fotokolaburasi_slide' . $i}) }}" 
                                                             alt="Foto Kolaborasi Slide {{ $i }}" 
                                                             class="img-thumbnail" 
                                                             style="max-height: 150px; object-fit: cover;">
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                
                                    <!-- Trending Photos Section -->
                                    <div class="card mb-4">
                                        <div class="card-header bg-primary text-white">
                                            <h5 class="mb-0">Produk Sedang Trend</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @for ($i = 1; $i <= 2; $i++)
                                                <div class="col-md-6 mb-3">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Slide {{ $i }}</h6>
                                                            <div class="form-group">
                                                                <input type="file" name="fotosedangtrend_slide{{ $i }}" class="form-control" accept="image/*">
                                                                @if ($setting && $setting->{'fotosedangtrend_slide' . $i})
                                                                    <div class="mt-3 text-center">
                                                                        <img src="{{ asset('foto/fotoSetting/' . $setting->{'fotosedangtrend_slide' . $i}) }}" 
                                                             alt="Foto Sedang Trend Slide {{ $i }}" 
                                                             class="img-thumbnail" 
                                                             style="max-height: 150px; object-fit: cover;">
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
