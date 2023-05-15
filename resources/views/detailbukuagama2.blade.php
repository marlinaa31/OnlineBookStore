@extends('layouts.layoutUser')

@section('content')
  <head>
    <style>
      .card-img-top {
        max-height: 450px;
        object-fit: contain;
      }
    </style>
  </head>
<section>
    <div class="container my-5">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="{{ url('Book/agama/buku2.jpg') }}" alt="Buku 2">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Panduan Praktis Belajar Tajwid</p>
          <p><strong>Jumlah Halaman:</strong> 152 halaman</p>
          <p><strong>Penulis:</strong> Zeinelburqy & Riskaninda Maharani</p>
          <p><strong>Penerbit:</strong> Checklist</p>
          <p><strong>Tanggal Terbit:</strong> 9 Apr 2023</p>
          <p><strong>Berat:</strong> 0.219 kg</p>
          <p><strong>ISBN:</strong> 9786238114085</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 18 cm</p>
          <p><strong>Panjang:</strong> 24 cm</p>
          <p><strong>Harga:</strong> 102.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Buku ini disusun untuk membantu kita belajar tajwid dengan asyik dan mudah, terutama untuk pemula.
               Dilengkapi pula dengan adab dan pengetahuan dasar tentang ilmu tajwid guna memperkaya khazanah dan mengafdalkan praktik ilmu tajwid kita.
               Berikut ini beberapa materi yang sangat bermanfaat di buku ini:</p>

            <p>Pengenalan Huruf Hijaiah</p>
            <p> & Shifatul Huruf (Tempat Keluarnya Huruf & Sifat Huruf)</p>
            <p> Hukum Nun Sukun Dan Tanwin</p>
            <p> Hukum Mim Sukun</p>
            <p> Ghunnah</p>
            <p> Hukum Idghom</p>
            <p> Qolqolah</p>
            <p> Lam Ta'rif</p>
            <p> Hukum Bacaan Lam Jalalah</p>
            <p> Hukum Bacaan Ro'</p>
            <p> Mad</p>
            <p> Kaidah-Kaidah Wakaf</p>
            <p> Ayat Ghoribah</p>
            <p> SEJARAH AL-QUR'AN, ILMU TAJWID, BESERTA HUBUNGANNYA DENGAN QIRAAH</p>
            </p>
    </div>
  </div>
  <div class="col-md-8">
    <a href="{{ route('viewcart')}}" class="btn btn-primary">Add To Cart</a>
  </div>
</div>
</div>
</div>
</div>
</div>
        </section>
@endsection
