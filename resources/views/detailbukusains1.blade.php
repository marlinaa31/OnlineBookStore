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
              <img class="card-img-top" src="{{ url('Book/sains/buku-1.jpg') }}" alt="Buku 1">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Fisika Dasar Edisi 7 Jilid 1</p>
          <p><strong>Jumlah Halaman:</strong> 648 halaman</p>
          <p><strong>Penulis:</strong> Halliday, Resnick, Walker</p>
          <p><strong>Penerbit:</strong> Erlangga</p>
          <p><strong>Berat:</strong> 1,4 kg</p>
          <p><strong>ISBN:</strong> 9789790993273</p>
          <p><strong>Dimensi:</strong> 24 cm x 21 cm</p>
          <p><strong>Harga:</strong> 612.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Buku Fisika Dasar Jilid 1 Edisi 7 karya Halliday, Resnick, dan Walker diterbitkan pertama kali pada tahun 1960.
                Buku ini merupakan salah satu buku Fisika Dasar yang paling banyak dipakai di seluruh dunia.
                Buku ini juga telah diterjemahkan ke 40 bahasa. Di Indonesia sendiri, buku ini telah lama menyandang predikat
                sebagai buku utama untuk mata kuliah Fisika Dasar.</p>

            <p> Selama bertahun-tahun, di Indonesia, buku ini telah mendapatkan pengakuan sebagai "Kitab Suci" bagi para mahasiswa jurusan MIPA dan Teknik
                yang mempelajari Fisika Dasar di tahun pertama kuliah mereka. Dengan membaca buku yang memadukan materi yang berkualitas dan penyajian yang
                menarik ini, mahasiswa bisa mendapatkan pemahaman yang kuat terhadap konsep-konsep Fisika Dasar,
                sehingga bisa mengaplikasikan pemahaman konseptualnya untuk memecahkan soal-soal kuantitatif dengan lancar.</p>
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
