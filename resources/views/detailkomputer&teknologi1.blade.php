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
              <img class="card-img-top" src="{{ url('Book/komputerteknologi/buku1.jpg') }}" alt="Buku 1">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Logika Pemrograman Java (Update Version)</p>
          <p><strong>Jumlah Halaman:</strong> 592 halaman</p>
          <p><strong>Penulis:</strong> Abdul Kadir</p>
          <p><strong>Penerbit:</strong> Elex Media Komputindo</p>
          <p><strong>Tanggal Terbit:</strong> 17 Apr 2023</p>
          <p><strong>Berat:</strong> 0.5 kg</p>
          <p><strong>ISBN:</strong> 9786230047398</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 14 cm</p>
          <p><strong>Panjang:</strong> 21 cm</p>
          <p><strong>Harga:</strong> 190.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Buku ini dirancang sebagai bahan penuntun dalam memprogram komputer menggunakan bahasa Java dan dapat digunakan untuk
                pelajar, mahasiswa, atau siapa saja. Buku ini lebih menekankan pada cara untuk menyelesaikan masalah.
                Oleh karena itu, banyak contoh permasalahan yang diberikan dan cara untuk menyelesaikannya.
                Contoh-contoh yang cukup banyak dan bahasa yang mudah dipahami membuat buku ini sangat mudah digunakan dan
                dapat menjadi penuntun untuk memelajari bahasa Java secara mandiri.</p>
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
