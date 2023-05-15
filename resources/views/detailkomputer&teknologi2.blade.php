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
              <img class="card-img-top" src="{{ url('Book/komputerteknologi/buku2.jpg') }}" alt="Buku 2">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Process Mining</p>
          <p><strong>Jumlah Halaman:</strong> 264 halaman</p>
          <p><strong>Penulis:</strong> Angelina Prima Kurniati, S.T., M.T., Ph.D., Guntur Prabawa Kusuma, S.T., M.T., Prof. Dr. Suyanto, S.T., M.Sc.</p>
          <p><strong>Penerbit:</strong> Penerbit Informatika</p>
          <p><strong>Tanggal Terbit:</strong> 13 Apr 2023</p>
          <p><strong>Berat:</strong> 0.28 kg</p>
          <p><strong>ISBN:</strong> 9786237131731</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 16 cm</p>
          <p><strong>Panjang:</strong> 24 cm</p>
          <p><strong>Harga:</strong> 90.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Process Mining yang harus diperhatikan, meliputi persiapan data dan penyampaian hasilnya dalam bentuk visualisasi.
                Dalam buku ini juga diuraikan beberapa tools yang dapat digunakan untuk melakukan Process Mining serta contoh-contoh
                penerapannya. Pembaca dapat menggunakan bab-bab terkait sebagai referensi untuk mulai menggunakan tools yang ada dan
                menerapkan Process Mining pada data sampel. Pada bagian penutup disajikan tantangan dan peluang penerapan Process Mining,
                serta masa depan Process Mining di Indonesia. Tantangan utamanya adalah ketersediaan dan kualitas data, yang musti diatasi
                secara hati-hati menggunakan berbagai teknik pengolahan data yang tepat. Sementara itu, peluang dan masa depan Process Mining
                di Indonesia masih terbuka lebar bagi akademisi maupun praktisi untuk mengembangkan dan menerapkan Process Mining di berbagai bidang:
                kesehatan, pendidikan, industri, manufaktur, dan sebagainya.</p>
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
