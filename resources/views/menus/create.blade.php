@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; background: rgba(255, 255, 255, 0.95); border-radius: 15px;">
        <div class="card-body">
            <h3 class="text-center mb-4 fw-bold text-primary">📚 Tambah Buku</h3>

            <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama_Buku" class="form-label fw-semibold">Judul Buku</label>
                    <input type="text" name="nama_Buku" id="nama_Buku" class="form-control border-primary shadow-sm" 
                           value="{{ old('nama_Buku') }}" placeholder="Masukkan judul buku...">
                    @error('nama_Buku')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label fw-semibold">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control border-primary shadow-sm"
                           value="{{ old('harga') }}" placeholder="Masukkan harga buku...">
                    @error('harga')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label fw-semibold">Foto Sampul Buku</label>
                    <input type="file" name="foto" id="foto" class="form-control border-primary shadow-sm">
                    @error('foto')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('menus.index') }}" class="btn btn-outline-secondary px-4">
                        ← Kembali
                    </a>
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">
                        Simpan Buku
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
