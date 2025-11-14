@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; background: rgba(255, 255, 255, 0.95); border-radius: 15px;">
        <div class="card-body">
            <h3 class="text-center mb-4 fw-bold text-primary">📖 Edit Data Buku</h3>

            <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Buku</label>
                    <input type="text" name="nama_menu" class="form-control border-primary shadow-sm" 
                           value="{{ old('nama_menu', $menu->nama_menu) }}" placeholder="Masukkan judul buku...">
                    @error('nama_menu')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Harga</label>
                    <input type="number" name="harga" class="form-control border-primary shadow-sm" 
                           value="{{ old('harga', $menu->harga) }}" placeholder="Masukkan harga buku...">
                    @error('harga')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Foto Sampul Buku</label><br>
                    @if($menu->foto)
                        <div class="text-center mb-3">
                            <img src="{{ asset('storage/'.$menu->foto) }}" width="100" class="rounded shadow-sm border">
                        </div>
                    @endif
                    <input type="file" name="foto" class="form-control border-primary shadow-sm">
                    @error('foto')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('menus.index') }}" class="btn btn-outline-secondary px-4">← Kembali</a>
                    <button class="btn btn-primary px-4 shadow-sm">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
