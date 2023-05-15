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
              <img class="card-img-top" src="{{ url('Book/komputerteknologi/buku-3.jpeg') }}" alt="Buku 3">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Rekayasa Perangkat Lunak - Buku 1, Pendekatan Praktisi Edisi 7</p>
          <p><strong>Jumlah Halaman:</strong> 804 halaman</p>
          <p><strong>Penulis:</strong> Roger S. Pressman, Ph.D.</p>
          <p><strong>Penerbit:</strong> Penerbit Andi</p>
          <p><strong>Tanggal Terbit:</strong> 19 Feb 2023</p>
          <p><strong>Berat:</strong> 1.1 kg</p>
          <p><strong>ISBN:</strong> 9789792931044</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 19 cm</p>
          <p><strong>Panjang:</strong> 23 cm</p>
          <p><strong>Harga:</strong> 250.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Hampir tiga dekade lamanya sejak edisi pertama buku ini ditulis.
                Selama tiga dekade tersebut, rekayasa perangkat lunak meluas dari sebuah gagasan kabur yang dipraktikkan
                oleh sejumlah kecil pengikut setia sampai pada ilmu rekayasa yang sah. Buku edisi 7 ini mengalami pembaruan
                yang cukup signifikan. Buku ini direvisi dan distruktur ulang untuk meningkatkan bobot akademisnya.
                Juga menekankan proses-proses dan praktik-praktik rekayasa perangkat lunak yang baru serta penting.
                Tiga puluh dua bab dari edisi tujuh ini telah diatur ulang menjadi lima bagian (dalam Buku 1 dan Buku 2).
                Pengaturan ini, yang berlainan dengan edisi enam, dilakukan untuk menggolongkan dengan lebih baik topik-topik
                serta membantu para dosen yang barangkali tidak memiliki cukup waktu untuk menyelesaikan seluruh isi buku dalam
                satu semester.</p>
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
