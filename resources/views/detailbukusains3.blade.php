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
              <img class="card-img-top" src="{{ url('Book/sains/buku-3.jpg') }}" alt="Buku 3">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Kosmos: Aneka Ragam Dunia</p>
          <p><strong>Jumlah Halaman:</strong> 420 halaman</p>
          <p><strong>Penulis:</strong> Ann Druyan</p>
          <p><strong>Penerbit:</strong> Gramedia Pustaka Utama</p>
          <p><strong>Tanggal Terbit:</strong> 23 Desember 2020 </p>
          <p><strong>Rating:</strong> Semua Umur </p>
          <p><strong>Berat:</strong> 700 gr </p>
          <p><strong>ISBN:</strong> 9786020639222</p>
          <p><strong>Dimensi:</strong> 23 cm x 15 cm</p>
          <p><strong>Harga:</strong> 205.500</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Cosmos: Possible Worlds adalah saga lanjutan petualangan besar yang diawali bersama oleh Carl Sagan dan Ann Druyan.
                Cosmos: A SpaceTime Odyssey Druyan yang meraih Emmy Award dan Peabody Award merupakan fenomena global,
                ditayangkan di 181 negara di seantero planet ini. Kini, dengan Possible Worlds,
                Druyan melanjutkan perjalanan menarik yang akan membawa Anda melintas 14 miliar evolusi kosmik dan berbagai rahasia alam.
                Inilah kisah-kisah penanya tanpa takut yang belum pernah disampaikan, yang pencariannya—bahkan kadang dengan biaya setinggi-tingginya—memberi
                kita gambaran alam semesta luas yang baru kita mulai kenali. Dalam buku memukau ini, Druyan membayangkan masa depan penuh inspirasi yang
                kita masih dapatkan di dunia ini—jika kita sadar pada waktunya untuk menggunakan sains dan teknologi canggih dengan kebijaksanaan.
                Siap-siap berlayar ke bintang-bintang!</p>
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
