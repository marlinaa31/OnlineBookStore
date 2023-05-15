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
              <img class="card-img-top" src="{{ url('Book/komik/buku1.jpg') }}" alt="Komik 1">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Akasha: Ito Junji - Tomie</p>
          <p><strong>Jumlah Halaman:</strong> 376 halaman</p>
          <p><strong>Penulis:</strong> Ito Junji</p>
          <p><strong>Penerbit:</strong> m&c!</p>
          <p><strong>Tanggal Terbit:</strong> 4 Jan 2023</p>
          <p><strong>Berat:</strong> 0.17 kg</p>
          <p><strong>ISBN:</strong> 9786230307515</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 13 cm</p>
          <p><strong>Panjang:</strong> 18 cm</p>
          <p><strong>Harga:</strong> 63.750</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Si cantik penggoda pria, memikat mereka hingga hanyut dalam kegilaan cinta.
                <br> Nama “Tomie”
                <br> Tomie si rupawan yang selalu bangkit meski sudah berulang kali dibunuh.
                <br> Ah, Tomie…
                <br> Apakah dunia ini ikut tergila-gila padamu?</p>
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
