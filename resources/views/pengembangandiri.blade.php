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
    <h3 class="text-center mt-4 mb-4">Kategori Pengembangan Diri</h3>

    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/pengembangandiri/buku1.jpg') }}" alt="Pengembangan Diri 1">
            <div class="card-body">
              <h5 class="card-title">Tidak Perlu Crazy Untuk Jadi Rich</h5>
              <p class="card-text">Oleh: BEN SWEETLAND</p>
              <p class="card-text">Buku ini menunjukkan cara menggunakan bagian terdalam pikiran Anda saat tidur
                untuk memperoleh apa pun keinginan Anda dalam kehidupan ini: uang, pengaruh, cinta, kehormatan, dan martabat.</p>
              <a href="{{ route('detailpengembangan_diri1')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/pengembangandiri/buku2.jpg') }}" alt="Pengembangan Diri 2">
            <div class="card-body">
              <h5 class="card-title">Kau Sedang Terbentuk</h5>
              <p class="card-text">Oleh: Syahid Muhammad</p>
              <p class="card-text">Terberkatilah mereka yang menderita, yang jatuh, karena ia belajar terbangun.
                Darinya, terbentuk dasar-dasar berjalan. Dipahatnya pondasi berdiri, di atas kakinya sendiri.
                Terberkatilah mereka yang berhasil melepas, karena telah menghormati semua yang pernah terjadi.
                Darinya, tumbuhlah keleluasaan dan keterbukaan untuk tumbuh sesuai tuju.
                Untuk diri dan seisinya; yang dalamnya ialah kehidupan itu sendiri, tak pernah selesai dijelajahi.</p>
              <a href="{{ route('detailpengembangan_diri2')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/pengembangandiri/buku3.jpg') }}" alt="Pengembangan Diri 3">
            <div class="card-body">
              <h5 class="card-title">Pemimpin Vs Bos</h5>
              <p class="card-text">Oleh: Arisatya Yogaswara</p>
              <p class="card-text">Buku ini menyajikan rahasia menjadi pemimpin yang dicintai generasi milenial dan generasi Z.
                Isinya bukan sekadar teori, tetapi terbukti telah berhasil diaplikasikan di lapangan.
                Temukan cara paling pas untuk mendapatkan kepercayaan dari kedua generasi tersebut,
                dan mulailah mengeluarkan kemampuan terbaik dari tim yang didominasi generasi milenial dan generasi Z untuk mencapai cita-cita bersama.
            </p>
              <a href="{{ route('detailpengembangan_diri3')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>

@endsection
