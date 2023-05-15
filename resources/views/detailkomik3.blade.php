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
              <img class="card-img-top" src="{{ url('Book/komik/buku3.jpg') }}" alt="Komik 3">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Jujutsu Kaisen 09</p>
          <p><strong>Jumlah Halaman:</strong> 192 halaman</p>
          <p><strong>Penulis:</strong> Gege Akutami</p>
          <p><strong>Penerbit:</strong> Elex Media Kompotindo</p>
          <p><strong>Tanggal Terbit:</strong> 6 Apr 2023</p>
          <p><strong>Berat:</strong> 0.115 kg</p>
          <p><strong>ISBN:</strong> 9786230046698</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 12 cm</p>
          <p><strong>Panjang:</strong> 18 cm</p>
          <p><strong>Harga:</strong> 40.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Jujutsu Kaisen adalah serial manga Jepang yang ditulis dan diilustrasikan oleh Gege Akutami.
                Ini telah diserialkan di majalah manga shōnen Shueisha Weekly Shonen Jump sejak Maret 2018,
                dengan bab-babnya dikumpulkan dan diterbitkan dalam 20 volume tankōbon per Agustus 2022.
                Ceritanya mengikuti siswa sekolah menengah Yuji Itadori saat ia bergabung dengan organisasi rahasia Penyihir Jujutsu
                untuk menghilangkan Kutukan yang kuat bernama Ryomen Sukuna, di mana Yuji menjadi inangnya.</p>
            <p>Jujutsu Kaisen adalah sekuel dari Sekolah Teknik Kutukan Metropolitan Tokyo Akutami, yang diserialkan di Jump GIGA Shueisha dari April hingga Juli 2017, kemudian dikumpulkan dalam volume tankōbon, dengan judul retroaktif sebagai Jujutsu Kaisen 0, pada Desember 2018.
                Misi Gojo dan Geto untuk melindungi “wadah plasma bintang” berubah menjadi buruk saat seorang “pembunuh shaman” yang mengaku bernama Fushiguro menyerang mereka secara tiba-tiba.
                Apa hasil akhir dari kejadian di masa lalu tersebut, yang membuat Gojo menjadi yang terkuat dan membuat Geto memberontak!?</p>
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
