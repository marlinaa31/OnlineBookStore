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
              <img class="card-img-top" src="{{ url('Book/komik/buku2.jpg') }}" alt="Komik 2">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Dr. Stone 04</p>
          <p><strong>Jumlah Halaman:</strong> 192 halaman</p>
          <p><strong>Penulis:</strong> Riichiro Inagaki</p>
          <p><strong>Penerbit:</strong> Elex Media Kompotindo</p>
          <p><strong>Tanggal Terbit:</strong> 22 Mar 2023</p>
          <p><strong>Berat:</strong> 0.12 kg</p>
          <p><strong>ISBN:</strong> 9786230046179</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 12 cm</p>
          <p><strong>Panjang:</strong> 18 cm</p>
          <p><strong>Harga:</strong> 33.750</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Demi membuat sulfa, obat mujarab, Senku dkk. terus maju menapaki peta jalan sains.
                Bahkan di antaranya dia harus pergi ke area super berbahaya dengan tekad siap mati untuk mengambil material tersulit,
                asam sulfat! Sementara itu, di desa, turnamen bela diri yang mempertaruhkan kursi kepala desa, “Duel Agung”, semakin dekat!?</p>
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
