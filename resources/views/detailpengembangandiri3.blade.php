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
              <img class="card-img-top" src="{{ url('Book/pengembangandiri/buku3.jpg') }}" alt="Buku 3">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Pemimpin Vs Bos</p>
          <p><strong>Jumlah Halaman:</strong> 158 halaman</p>
          <p><strong>Penulis:</strong> Arisatya Yogaswara</p>
          <p><strong>Penerbit:</strong> Checklist</p>
          <p><strong>Tanggal Terbit:</strong> 8 Apr 2023</p>
          <p><strong>Berat:</strong> 0.145 kg</p>
          <p><strong>ISBN:</strong> 9786238114115</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 14 cm</p>
          <p><strong>Panjang:</strong> 20 cm</p>
          <p><strong>Harga:</strong> 54.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Buku ini menyajikan rahasia menjadi pemimpin yang dicintai generasi milenial dan generasi Z.
                Isinya bukan sekadar teori, tetapi terbukti telah berhasil diaplikasikan di lapangan.
                Temukan cara paling pas untuk mendapatkan kepercayaan dari kedua generasi tersebut,
                dan mulailah mengeluarkan kemampuan terbaik dari tim yang didominasi generasi milenial dan generasi Z untuk mencapai cita-cita bersama.</p>
            <p>Berhentilah menjadi bos dan mulailah berperan sebagai pemimpin bagi generasi milenial dan generasi Z!</p>
            <p>Pemimpin adalah
            <br>generasi Milenial: Menguasai Dunia Saat Ini
            <br>Memahami > Gagal Memimpin
            <br>Jangan Jadi Korek Api yang Basah
            <br>Don't be a Boss, be a Leader!
            <br>dan masih banyak lagi.</p>
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
