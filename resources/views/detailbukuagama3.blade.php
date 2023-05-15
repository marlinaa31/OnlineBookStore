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
              <img class="card-img-top" src="{{ url('Book/agama/buku3.jpg') }}" alt="Buku 3">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Sirah Nabawiyah</p>
          <p><strong>Jumlah Halaman:</strong> 600 halaman</p>
          <p><strong>Penulis:</strong> Shafiyyurahman</p>
          <p><strong>Penerbit:</strong> Pustaka Al Kautsar</p>
          <p><strong>Tanggal Terbit:</strong> 1 Januari 2006</p>
          <p><strong>Format Buku:</strong> Soft Cover</p>
          <p><strong>Berat:</strong> 600 gram</p>
          <p><strong>ISBN:</strong> 200026733</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Dimensi Buku:</strong> 16 x 21 cm</p>
          <p><strong>SKU:</strong> 9795920953</p>
          <p><strong>Harga:</strong> Rp93.500</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Sejarah (siroh) bukan hanya sekedar mengenang peristiwa masa tertentu tanpa makna.
                Jika ada orang berpandangan bahwa sejarah hanyalah peristiwa masa silam yang tidak perlu diingat-ingat,
                ini tentu sangat disayangkan, karena jelas bertentangan dengan Alquran dan hadis yang mengajarkan kepada
                kaum Muslimin untuk mengambil pelajaran dari peristiwa yang telah lewat. Orang berpandangan seperti ini jelas akan merugi,
                karena betapa banyak faedah yang bisa dipetik oleh orang yang mempelajari sejarah.</p>

            <p>Begitu banyaknya kaum muslimin yang hafal kisah-kisah fiksi yang ditayangkan di televisi atau yang sejenisnya
                yang justru mengandung unsur unsur tidak baik, akan tetapi mereka tidak mengetahui kisah-kisah Rasulullah shallallahu ‘alaihi wa sallam.
                Padahal mereka berucap Rasulullah adalah suri tauladan mereka.
                Inilah salah satu buku Sirah Nabawiyah terbaik yang pernah ada.
                Perjalanan hidup Rasulullah adalah lautan yang membentang dengan kebeningan airnya yang kebiruan.
                Di sana tersimpan pesona alami nan abadi tiada mata yang bosan memandang. Tiada hati yang jemu berhenti orang menyelami.
                Karena sosok beliau, adalah pesona sepanjang masa. Buku Sirah Nabawiyah ini mencoba menyajikan pesona-pesona itu.
                Sebagai buku yang berhasil meraih juara satu lomba karya tulis tentang Sirah Rasulullah, tidak terlalu mengherankan
                jika karya ini juga memiliki pesona tersendiri untuk dibaca dan dinikmati.
            </p>
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
