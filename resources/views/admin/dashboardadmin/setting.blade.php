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

                                    <div class="form-group">
                                        <label for="nama_toko">Nama Toko</label>
                                        <input type="text" name="nama_toko" class="form-control"
                                            value="{{ $setting->nama_toko ?? '' }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="logo_toko">Logo Toko</label>
                                        <input type="file" name="logo_toko" class="form-control">
                                        @if ($setting && $setting->logo_toko)
                                            <img src="{{ asset('foto/fotoSetting/' . $setting->logo_toko) }}" alt="Logo Toko"
                                                width="100" class="mt-2">
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="email_toko">Email Toko</label>
                                        <input type="email" name="email_toko" class="form-control"
                                            value="{{ $setting->email_toko ?? '' }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="telefon_toko">Telepon Toko</label>
                                        <input type="text" name="telefon_toko" class="form-control"
                                            value="{{ $setting->telefon_toko ?? '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram_toko">Instagram</label>
                                        <input type="text" name="instagram_toko" class="form-control"
                                            value="{{ $setting->instagram_toko ?? '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook_toko">Facebook</label>
                                        <input type="text" name="facebook_toko" class="form-control"
                                            value="{{ $setting->facebook_toko ?? '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="twitter_toko">Twitter</label>
                                        <input type="text" name="twitter_toko" class="form-control"
                                            value="{{ $setting->twitter_toko ?? '' }}">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
