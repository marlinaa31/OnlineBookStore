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
              <img class="card-img-top" src="{{ url('Book/bisnisekonomi/buku3.jpg') }}" alt="Buku 3">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Richer, Wiser, Happier: Bagaimana Investor Terhebat Dunia Memenangkan Pasar dan Kehidupan</p>
          <p><strong>Jumlah Halaman:</strong> 352 halaman</p>
          <p><strong>Penulis:</strong> William Green</p>
          <p><strong>Penerbit:</strong> Elex Media Komputindo</p>
          <p><strong>Tanggal Terbit:</strong> 10 Mei 2023</p>
          <p><strong>Berat:</strong> 0.4 kg</p>
          <p><strong>ISBN:</strong> 9786230047503</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 14 cm</p>
          <p><strong>Panjang:</strong> 21 cm</p>
          <p><strong>Harga:</strong> 130.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Masukilah kehidupan lebih dari 40 superinvestor dunia dengan buku ini. Mulai dari Warren Buffett dan Charlie Munger hingga Sir John Templeton dan Howard Marks.
                Rasakan seperti Anda mengunjungi kantor mereka, rumah mereka, bahkan tempat ibadah mereka.
                Temukan kebiasaan berpikir mereka yang membawa pada kesuksesan terbesar mereka.
                Richer, Wiser, Happier menjelajah filosofi hidup dari beberapa investor terbaik dunia, dan menyuguhkan mutiara wawasan yang akan
                memperkaya Anda tidak hanya secara finansial tetapi juga secara kehidupan profesional dan personal.
                “Cara yang sangat mengagumkan untuk menunjukkan bagaimana mendapat keuntungan dengan terus konsisten mengumpulkan peluang,
                baik pada pasar saham maupun pada kehidupan.” —Annie Duke, penulis Thinking in Bets “Sangat memikat hati…
                Menawarkan ide-ide pragmatis untuk direnungkan, direfleksikan, dan dijalani.” —Daniel Goleman, penulis Emotional Intelligence “Mereka yang selesai membaca buku ini akan menemukan kebahagiaan,
                dan fakta bahwa mereka jauh lebih pintar daripada uang." —Peter H. Diamandis, penulis Abundance.</p>
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
