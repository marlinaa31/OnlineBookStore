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
              <img class="card-img-top" src="{{ url('Book/pengembangandiri/buku2.jpg') }}" alt="Buku 2">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Kau Sedang Terbentuk</p>
          <p><strong>Jumlah Halaman:</strong> 220 halaman</p>
          <p><strong>Penulis:</strong> Syahid Muhammad</p>
          <p><strong>Penerbit:</strong> Gradien Mediatama</p>
          <p><strong>Tanggal Terbit:</strong> 10 Apr 2017</p>
          <p><strong>Berat:</strong> 0.17 kg</p>
          <p><strong>ISBN:</strong> 9786022082460</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 13 cm</p>
          <p><strong>Panjang:</strong> 19 cm</p>
          <p><strong>Harga:</strong> 89.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Terberkatilah mereka yang menderita, yang jatuh, karena ia belajar terbangun.
            <br>Darinya, terbentuk dasar-dasar berjalan. Dipahatnya pondasi berdiri, di atas kakinya sendiri.
            <br>Terberkatilah mereka yang berhasil melepas, karena telah menghormati semua yang pernah terjadi.
            <br>Darinya, tumbuhlah keleluasaan dan keterbukaan untuk tumbuh sesuai tuju.
            <br>Untuk diri dan seisinya; yang dalamnya ialah kehidupan itu sendiri, tak pernah selesai dijelajahi.</p>
            <p>Sebetulnya, aku tidak tahu apa yang perlu aku katakan di sini. Tapi, aku tahu kau punya penderitaan yang tidak kau perlihatkan. Aku mengerti, pada masa-masa tertentu itu kau ingin menyembunyikan dirimu sendiri dari sekitar. Kau tidak perlu malu. Kau tidak aneh. Kadang, itulah yang diperlukan ketika kau sedang terbentuk, dinding kepalamu seperti dipukuli rangkaian kejadian yang membuatmu mempertanyakan banyak hal, untuk menciptakan susunan aksi yang akan kau jalani selanjutnya.
                Aku harap, kau punya kesabaran membentuk hidup yang kau kehendaki, membangun diri yang akan kau hidupi.</p>
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
