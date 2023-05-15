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
              <img class="card-img-top" src="{{ url('Book/bisnisekonomi/buku1.jpg') }}" alt="Buku 1">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Investasi Saham ala Fundamentalis Dunia</p>
          <p><strong>Jumlah Halaman:</strong> 226 halaman</p>
          <p><strong>Penulis:</strong> Ryan Filbert Wijaya</p>
          <p><strong>Penerbit:</strong> Elex Media Komputindo</p>
          <p><strong>Tanggal Terbit:</strong> 17 Jan 2017</p>
          <p><strong>Berat:</strong> - </p>
          <p><strong>ISBN:</strong> SCOOPG123170</p>
          <p><strong>Lebar:</strong> - </p>
          <p><strong>Panjang:</strong> - </p>
          <p><strong>Harga:</strong> 88.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Buku ini akan membahas pendekatan-pendekatan analisis laporan keuangan yang berhasil ditangkap para pelaku pasar atau investor dunia, termasuk yang saya lakukan.
                Jadi, tak perlu heran dengan perbedaan antara satu dan yang lainnya.
                Bukan tidak mungkin suatu hari nanti Anda memiliki analisis pendekatan fundamental terhadap laporan keuangan perusahaan dari sudut pandang yang berbeda.</p>

            <p>“This book is simply wonderful, simply explained what your charting needs with real conditions.” —Antonius Tanjong, S.Kom, M.M. KE Trade - PT Kim Eng Securities.</p>
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
