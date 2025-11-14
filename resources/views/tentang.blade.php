@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="mb-3 text-center text-warning">Tentang Bara Buku Store</h4>
    
    <p style="color: #fff; text-align: justify; font-size: 1rem; line-height: 1.7;">
      <strong>Bara Buku Store</strong> adalah sebuah platform toko buku digital yang dirancang untuk menghadirkan 
      pengalaman membaca modern dan inspiratif bagi semua kalangan. Website ini dibangun dengan konsep sederhana 
      namun elegan, agar pengunjung dapat dengan mudah menjelajahi berbagai koleksi buku yang tersedia.
    </p>

    <p style="color: #fff; text-align: justify; font-size: 1rem; line-height: 1.7;">
      Fokus utama Bara Buku Store adalah pada bidang <em>bisnis digital, teknologi, kewirausahaan, 
      dan pengembangan diri</em> — bidang-bidang yang sangat relevan di era digital saat ini. 
      Setiap buku yang disediakan diharapkan mampu menumbuhkan semangat literasi, kreativitas, 
      serta kemampuan berpikir kritis di kalangan mahasiswa dan masyarakat luas.
    </p>

    <p style="color: #fff; text-align: justify; font-size: 1rem; line-height: 1.7;">
      Bara Buku Store juga hadir sebagai bentuk dukungan terhadap digitalisasi pendidikan 
      dengan menyediakan sarana pembelajaran berbasis web yang mudah diakses dan menarik secara visual.
    </p>

    <hr style="border-color: rgba(255,255,255,0.2);">
    <p class="text-center mt-3" style="color: #f7e9b3; font-size: 0.95rem;">
      Website ini dibuat oleh <strong>Muh. Basori A.</strong> sebagai bentuk inovasi dan pengembangan 
      literasi digital di dunia pendidikan.
    </p>

    <div class="text-center mt-4">
      <a href="{{ route('menus.index') }}" class="btn btn-outline-light px-4 fw-semibold shadow-sm">
        ← Kembali ke Halaman Utama
      </a>
    </div>
  </div>
</div>
@endsection
