@extends('layouts.layoutUser')

@section('content')
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      .card-img-top {
        max-height: 250px;
        object-fit: contain;
      }
    </style>
  </head>
  <body>
    <h3 class="text-center mt-4 mb-4">Kategori Buku Agama</h3>

    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/agama/buku1.jpg') }}" alt="Buku Agama 1">
            <div class="card-body">
              <h5 class="card-title">Logika Agama Edisi Baru</h5>
              <p class="card-text">Oleh: M. Quraish Shihab</p>
              <p class="card-text">Buku ini merekam gejolak pemikiran M. Quraish Shihab muda ketika sedang menuntut ilmu di Universitas al-Azhar, Kairo, Mesir.
                                   Di dalamnya dibicarakan tentang perubahan dan evolusi, Islam dan akal, serta jalan pencerahan diri.</p>
              <a href="{{ route('detailbukuagama1') }}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/agama/buku2.jpg') }}" alt="Buku Agama 2">
            <div class="card-body">
              <h5 class="card-title">Panduan Praktis Belajar Tajwid</h5>
              <p class="card-text">Oleh: Zeinelburqy & Riskaninda Maharani</p>
              <p class="card-text">Buku ini disusun untuk membantu kita belajar tajwid dengan asyik dan mudah, terutama untuk pemula.
                Dilengkapi pula dengan adab dan pengetahuan dasar tentang ilmu tajwid guna memperkaya khazanah dan mengafdalkan praktik ilmu tajwid kita.</p>
              <a href="{{ route('detailbukuagama2') }}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/agama/buku3.jpg') }}" alt="Buku Agama 3">
            <div class="card-body">
              <h5 class="card-title">Sirah Nabawiyah</h5>
              <p class="card-text">Oleh: Shafiyyurahman</p>
              <p class="card-text">Buku Sirah Nabawiyah ini mencoba menyajikan pesona-pesona itu.
                Sebagai buku yang berhasil meraih juara satu lomba karya tulis tentang Sirah Rasulullah,
                tidak terlalu mengherankan jika karya ini juga memiliki pesona tersendiri untuk dibaca dan dinikmati.</p>
              <a href="{{ route('detailbukuagama3') }}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

@endsection
