@extends('layouts.layoutUser')

@section('content')
  <head>
    <style>
      .card-img-top {
        max-height: 250px;
        object-fit: contain;
      }
    </style>
  </head>
  <body>
    <h3 class="text-center mt-4 mb-4">Kategori Komik</h3>

    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/komik/buku1.jpg') }}" alt="Komik 1">
            <div class="card-body">
              <h5 class="card-title">Akasha: Ito Junji - Tomie</h5>
              <p class="card-text">Oleh: Ito Junji</p>
              <p class="card-text">Si cantik penggoda pria, memikat mereka hingga hanyut dalam kegilaan cinta.
                Nama “Tomie”
                Tomie si rupawan yang selalu bangkit meski sudah berulang kali dibunuh.
                Ah, Tomie…
                Apakah dunia ini ikut tergila-gila padamu?</p>
              <a href="{{ route('detailkomik1')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/komik/buku2.jpg') }}" alt="Komik 2">
            <div class="card-body">
              <h5 class="card-title">Dr. Stone 04</h5>
              <p class="card-text">Oleh: Riichiro Inagaki</p>
              <p class="card-text">Demi membuat sulfa, obat mujarab, Senku dkk. terus maju menapaki peta jalan sains.
                Bahkan di antaranya dia harus pergi ke area super berbahaya dengan tekad siap mati untuk mengambil material tersulit, asam sulfat!
                Sementara itu, di desa, turnamen bela diri yang mempertaruhkan kursi kepala desa, “Duel Agung”, semakin dekat!?</p>
              <a href="{{ route('detailkomik2')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ url('Book/komik/buku3.jpg') }}" alt="Komik 3">
            <div class="card-body">
              <h5 class="card-title">Jujutsu Kaisen 09</h5>
              <p class="card-text">Oleh: Gege Akutami</p>
              <p class="card-text">Misi Gojo dan Geto untuk melindungi “wadah plasma bintang” berubah menjadi buruk saat seorang “pembunuh shaman” yang mengaku bernama Fushiguro menyerang mereka secara tiba-tiba.
                Apa hasil akhir dari kejadian di masa lalu tersebut, yang membuat Gojo menjadi yang terkuat dan membuat Geto memberontak!?
            </p>
              <a href="{{ route('detailkomik3')}}" class="btn btn-primary">More Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>

@endsection
