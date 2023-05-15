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
    <h3 class="text-center mt-4 mb-4">Kategori Bisnis & Ekonomi</h3>

    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/bisnisekonomi/buku1.jpg') }}" alt="Bisnis & Ekonomi 1">
            <div class="card-body">
              <h5 class="card-title">Investasi Saham ala Fundamentalis Dunia</h5>
              <p class="card-text">Oleh: Ryan Filbert Wijaya</p>
              <p class="card-text">Buku ini akan membahas pendekatan-pendekatan analisis laporan keuangan yang berhasil ditangkap para pelaku pasar atau investor dunia, termasuk yang saya lakukan.
                Jadi, tak perlu heran dengan perbedaan antara satu dan yang lainnya.
                Bukan tidak mungkin suatu hari nanti Anda memiliki analisis pendekatan fundamental terhadap laporan keuangan perusahaan dari sudut pandang yang berbeda.</p>
              <a href="{{ route('detailbukubisnisekonomi1')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/bisnisekonomi/buku2.jpg') }}" alt="Bisnis & Ekonomi 2">
            <div class="card-body">
              <h5 class="card-title">Rich Dad's The Business School</h5>
              <p class="card-text">Oleh: Robert T.kiyosaki</p>
              <p class="card-text">"Di edisi ketiga buku best seller ini, Robert T. Kiyosaki memperbarui dan memperluas delapan “nilai tersembunyi” bisnis pemasaran jaringan yang disampaikannya (selain menghasilkan uang!).
                Temukan Bonus Spesial—“nilai tersembunyi” tambahan dari Robert, Kim Kiyosaki, dan Tom Wheelwright, CPA serta Rich Dad Advisor.</p>
              <a href="{{ route('detailbukubisnisekonomi2')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/bisnisekonomi/buku3.jpg') }}" alt="Bisnis & Ekonomi 3">
            <div class="card-body">
              <h5 class="card-title">Richer, Wiser, Happier: Bagaimana Investor Terhebat Dunia Memenangkan Pasar dan Kehidupan</h5>
              <p class="card-text">Oleh: William Green</p>
              <p class="card-text">Masukilah kehidupan lebih dari 40 superinvestor dunia dengan buku ini.
                Mulai dari Warren Buffett dan Charlie Munger hingga Sir John Templeton dan Howard Marks.
                Rasakan seperti Anda mengunjungi kantor mereka, rumah mereka, bahkan tempat ibadah mereka.
            </p>
              <a href="{{ route('detailbukubisnisekonomi3')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>

@endsection
