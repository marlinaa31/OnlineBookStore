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
              <img class="card-img-top" src="{{ url('Book/pengembangandiri/buku1.jpg') }}" alt="Buku 1">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Tidak Perlu Crazy Untuk Jadi Rich</p>
          <p><strong>Jumlah Halaman:</strong> 268 halaman</p>
          <p><strong>Penulis:</strong> BEN SWEETLAND</p>
          <p><strong>Penerbit:</strong> Qantara</p>
          <p><strong>Tanggal Terbit:</strong> 10 Mei 2023</p>
          <p><strong>Berat:</strong> 0.28 kg</p>
          <p><strong>ISBN:</strong> 9786239043698</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 15 cm</p>
          <p><strong>Panjang:</strong> 23 cm</p>
          <p><strong>Harga:</strong> 98.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Buku ini menunjukkan cara menggunakan bagian terdalam pikiran Anda saat tidur untuk memperoleh apa pun keinginan Anda dalam kehidupan ini: uang, pengaruh, cinta, kehormatan, dan martabat.
                Dalam buku ini, Anda akan menemukan:
                <br> Enam latihan yang mengembangkan kekuatan kreatif Anda yang terpendam jadi pembangkit kekuatan mental.
                <br> Lima cara membuat akal kreatif bekerja untuk Anda.
                <br> Formula untuk membangun kesadaran tentang kesuksesan yang akan mengarahkan pada kesuksesan dalam segala hal dan melipatgandakan penghasilan Anda.
                <br>  mengembangkan kekuatan konsentrasi Anda.
                <br> Cara berfokus pada hal-hal positif dan memiliki kekuatan pribadi yang menarik.
                <br> Cara melakukan diet mental untuk memiliki jiwa bercahaya dan raga yang sehat serta merasa lebih muda.
                <br>Dengan membuka hambatan pikiran, metode ini secara otomatis mening katkan daya ingat, menambah kekuatan mental, juga mengenyahkan keraguan dan rasa minder. Kemudian, membangun optimisme, kepercayaan diri, keberanian, membangkitkan bakat terpendam, menunjukkan bahwa Anda bisa semakin kaya dalam segala hal, baik material maupun spiritual, saat tidur.
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
