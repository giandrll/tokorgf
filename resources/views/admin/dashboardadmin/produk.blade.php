@extends('admin.layouts.mainlayout')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">{{ $title }}</h4>
                                <button type="button" class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#modalCreate">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>Size</th> <!-- Kolom Size -->
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($data_produk as $row)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td><img src="{{ asset('foto/fotoproduk/' . $row->foto) }}" alt="{{ $row->nama_produk }}" width="50"></td>
                                                <td>{{ $row->nama_produk }}</td>
                                                <td>{{ $row->nama_kategori }}</td>
                                                <td>{{ $row->stok }} pcs</td>
                                                <td>{{ $row->size }}</td> <!-- Tampilkan Size -->
                                                <td>Rp. {{ number_format($row->harga) }}</td>
                                                <td>{{ $row->deskripsi }}</td>
                                                <td>
                                                    <a href="#modalEdit{{ $row->id }}" data-toggle="modal" class="btn btn-xs btn-primary">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                    <a href="#modalHapus{{ $row->id }}" data-toggle="modal" class="btn btn-xs btn-danger">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create Produk -->
    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form method="POST" action="/produk/store" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk..." required>
                        </div>
                        <div class="form-group">
                            <label>Kategori Produk</label>
                            <select class="form-control" name="id_kategori" required>
                                <option value="" hidden>Pilih Kategori</option>
                                @foreach ($data_kategori as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Size</label><br>
                            <input type="checkbox" name="size[]" value="S"> S<br>
                            <input type="checkbox" name="size[]" value="M"> M<br>
                            <input type="checkbox" name="size[]" value="L"> L<br>
                            <input type="checkbox" name="size[]" value="XL"> XL<br>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="stok" class="form-control" placeholder="Stok..." required>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Harga..." required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi..." required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto Produk</label>
                            <input type="file" name="foto" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Produk -->
    @foreach ($data_produk as $d)
        <div class="modal fade" id="modalEdit{{ $d->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit {{ $title }}</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form method="POST" action="/produk/update/{{ $d->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" value="{{ $d->nama_produk }}" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select class="form-control" name="id_kategori" required>
                                    <option value="" hidden>Pilih Kategori</option>
                                    @foreach ($data_kategori as $kategori)
                                        <option value="{{ $kategori->id }}" {{ $d->id_kategori == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Size</label><br>
                                @foreach (['S', 'M', 'L', 'XL'] as $size)
                                    <input type="checkbox" name="size[]" value="{{ $size }}" 
                                    {{ in_array($size, explode(',', $d->size)) ? 'checked' : '' }}> {{ $size }}<br>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="number" name="stok" class="form-control" value="{{ $d->stok }}" required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control" value="{{ $d->harga }}" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" required>{{ $d->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto Produk</label>
                                <input type="file" name="foto" class="form-control">
                                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Hapus Produk -->
    @foreach ($data_produk as $d)
        <div class="modal fade" id="modalHapus{{ $d->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Produk</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus produk <strong>{{ $d->nama_produk }}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <form method="POST" action="/produk/hapus/{{ $d->id }}">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
