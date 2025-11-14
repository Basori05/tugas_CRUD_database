@extends('layouts.app')

@section('content')
<div class="card p-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="text-light fw-semibold">📖 Daftar Buku</h4>
    <a href="{{ route('menus.create') }}" class="btn btn-primary shadow-sm">
      + Tambah Buku
    </a>
  </div>

  <div class="table-responsive">
    <table class="table table-dark table-hover align-middle rounded-3 overflow-hidden shadow">
      <thead class="table-warning text-dark">
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Nama Menu</th>
          <th scope="col">Foto</th>
          <th scope="col">Harga</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($menus as $menu)
        <tr>
          <td class="text-center fw-bold">{{ $loop->iteration }}</td>
          <td>{{ $menu->nama_menu }}</td>
          <td class="text-center">
            @if($menu->foto)
              <img src="{{ asset('storage/'.$menu->foto) }}" width="80" class="rounded shadow-sm border border-light">
            @else
              <span class="badge bg-secondary">Tidak ada</span>
            @endif
          </td>
          <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
          <td class="text-center">
            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning btn-sm me-1 shadow-sm">
              ✏️ Edit
            </a>
            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Yakin hapus?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm shadow-sm">
                🗑️ Hapus
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
