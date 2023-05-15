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
              <img class="card-img-top" src="{{ url('Book/sains/buku-2.jpeg') }}" alt="Buku 2">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Thomas' Calculus</p>
          <p><strong>Jumlah Halaman:</strong> 504 halaman</p>
          <p><strong>Penulis:</strong> B. Thomas, Jr</p>
          <p><strong>Penerbit:</strong> Erlangga</p>
          <p><strong>Berat:</strong> - </p>
          <p><strong>ISBN:</strong> 9786024343903</p>
          <p><strong>Dimensi:</strong> 21 cm x 28 cm</p>
          <p><strong>Harga:</strong> 528.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Kalkulus Thomas Edisi ke tiga belas Jilid 2 ini merupakan buku karya George B. Thomas, Jr yang ditujukan bagi mahasiswa jurusan matematika,
                teknik, dan sains dirancang untuk kuliah kalkulus tiga atau empat semester. Kalkulus Thomas Edisi ke-13 ini mengukuhkan dominasi yang telah
                dirintis edisi-edisi sebelumnya yang terkenal melalui penjelasan yang terperinci, pemilihan contoh soal yang cermat, dan ilustrasi yang bagus,
                serta soal-soal latihan yang ekstensif. Soal-soal dalam buku ini selalu dikembangkan, dimutakhirkan, dan disempurnakan pada setiap pergantian
                edisi demi meningkatkan kompetensi teknis penggunanya. Hass dan Weir sebagai penulis pendamping ikut menyempurnakan buku ini agar tetap sesuai
                dengan kebutuhan mahasiswa saat ini. Jilid 2 : Memberikan pengenalan modern untuk kalkulus yang berfokus pada pemahaman konseptual dalam
                mengembangkan unsur-unsur esensial dari perkuliahan tradisional. Materi ini mendukung tiga semester atau empat kaurtal perkuliahan kalkulus
                yang biasanya diambil dalam bidang matematika, teknik, dan ilmu-ilmu alam. Penjelasan yang terperinci,
                contoh yang pilih secara cermat, angka-angka yang superior, dan materi latihan yang telah teruji waktu adalah dasar dari teks ini.</p>

            <p> Kalkulus memiliki dua cabang utama, kalkulus diferensial dan kalkulus integral yang saling mengadakan komunikasi melewati
                teorema landasan kalkulus. Pelajaran kalkulus yaitu pintu gerbang menuju pelajaran matematika lainnya yang semakin tinggi,
                yang khusus mempelajari fungsi dan limit, yang secara umum dinamakan analisis matematika.</p>
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
