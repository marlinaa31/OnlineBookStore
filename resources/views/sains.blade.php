@extends('layouts.layoutUser')

@section('content')
  <head>
    <style>
      .card-img-top {
        max-height: 250px;
        object-fit: contain;
      }
    </style>
  </head>
  <body>
    <h3 class="text-center mt-4 mb-4">Kategori Buku Sains</h3>

    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/sains/buku-1.jpg') }}" alt="Buku Sains 1">
            <div class="card-body">
              <h5 class="card-title">Fisika Dasar Edisi 7 Jilid 1</h5>
              <p class="card-text">Halliday, Resnick, Walker</p>
              <p class="card-text">Buku ini merupakan salah satu buku Fisika Dasar yang paling banyak dipakai di seluruh dunia. Buku ini juga telah diterjemahkan ke 40 bahasa.
                Di Indonesia sendiri, buku ini telah lama menyandang predikat sebagai buku utama untuk mata kuliah Fisika Dasar.</p>
              <a href="{{ route('detailbukusains1')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/sains/buku-2.jpeg') }}" alt="Buku Sains 2">
            <div class="card-body">
              <h5 class="card-title">Thomas' Calculus</h5>
              <p class="card-text">Oleh: B. Thomas, Jr</p>
              <p class="card-text">Kalkulus Thomas Edisi ke tiga belas Jilid 2 ini merupakan buku karya George B. Thomas, Jr
                yang ditujukan bagi mahasiswa jurusan matematika, teknik, dan sains dirancang untuk kuliah kalkulus tiga atau empat semester.</p>
              <a href="{{ route('detailbukusains2')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/sains/buku-3.jpg') }}" alt="Buku Sains 3">
            <div class="card-body">
              <h5 class="card-title">Kosmos: Aneka Ragam Dunia</h5>
              <p class="card-text">Oleh: Ann Druyan</p>
              <p class="card-text">Dalam buku memukau ini, Druyan membayangkan masa depan penuh inspirasi yang kita masih dapatkan di dunia ini—jika kita sadar pada waktunya
                untuk menggunakan sains dan teknologi canggih dengan kebijaksanaan. Siap-siap berlayar ke bintang-bintang!
            </p>
              <a href="{{ route('detailbukusains3')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>

@endsection
