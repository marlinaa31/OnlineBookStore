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
    <h3 class="text-center mt-4 mb-4">Kategori Komputer & Teknologi</h3>

    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/komputerteknologi/buku1.jpg') }}" alt="Komputer & Teknologi 1">
            <div class="card-body">
              <h5 class="card-title">Logika Pemrograman Java (Update Version)</h5>
              <p class="card-text">Oleh: Abdul Kadir</p>
              <p class="card-text">Buku ini dirancang sebagai bahan penuntun dalam memprogram komputer menggunakan bahasa Java dan dapat digunakan untuk pelajar, mahasiswa, atau siapa saja.
                Buku ini lebih menekankan pada cara untuk menyelesaikan masalah.
                Oleh karena itu, banyak contoh permasalahan yang diberikan dan cara untuk menyelesaikannya.</p>
              <a href="{{ route('detailkomputer_teknologi1')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/komputerteknologi/buku2.jpg') }}" alt="Komputer & Teknologi 2">
            <div class="card-body">
              <h5 class="card-title">Process Mining</h5>
              <p class="card-text">Oleh: Angelina Prima Kurniati, S.T., M.T., Ph.D., Guntur Prabawa Kusuma, S.T., M.T., Prof. Dr. Suyanto, S.T., M.Sc.</p>
              <p class="card-text">Process Mining yang harus diperhatikan, meliputi persiapan data dan penyampaian hasilnya dalam bentuk visualisasi.
                Dalam buku ini juga diuraikan beberapa tools yang dapat digunakan untuk melakukan Process Mining serta contoh-contoh penerapannya.
                Pembaca dapat menggunakan bab-bab terkait sebagai referensi untuk mulai menggunakan tools yang ada dan menerapkan Process Mining pada data sampel.</p>
              <a href="{{ route('detailkomputer_teknologi2')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/komputerteknologi/buku-3.jpeg') }}" alt="Komputer & Teknologi 3">
            <div class="card-body">
              <h5 class="card-title">Rekayasa Perangkat Lunak - Buku 1, Pendekatan Praktisi Edisi 7</h5>
              <p class="card-text">Oleh: Roger S. Pressman, Ph.D.</p>
              <p class="card-text">Buku edisi 7 ini mengalami pembaruan yang cukup signifikan.
                Buku ini direvisi dan distruktur ulang untuk meningkatkan bobot akademisnya.
                Juga menekankan proses-proses dan praktik-praktik rekayasa perangkat lunak yang baru serta penting.
            </p>
              <a href="{{ route('detailkomputer_teknologi3')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>

@endsection
