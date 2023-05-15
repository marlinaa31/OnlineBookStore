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
              <img class="card-img-top" src="{{ url('Book/bisnisekonomi/buku2.jpg') }}" alt="Buku 2">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Rich Dad's The Business School</p>
          <p><strong>Jumlah Halaman:</strong> 204 halaman</p>
          <p><strong>Penulis:</strong> Robert T.kiyosaki</p>
          <p><strong>Penerbit:</strong> Gramedia Pustaka Utama</p>
          <p><strong>Tanggal Terbit:</strong> 21 Mei 2017</p>
          <p><strong>Berat:</strong> 0.219 kg</p>
          <p><strong>ISBN:</strong> 9786020355399</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 15 cm</p>
          <p><strong>Panjang:</strong> 23 cm</p>
          <p><strong>Harga:</strong> 68.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>"Di edisi ketiga buku best seller ini, Robert T. Kiyosaki memperbarui dan memperluas delapan “nilai tersembunyi” bisnis pemasaran jaringan yang disampaikannya (selain menghasilkan uang!).
                Temukan Bonus Spesial—“nilai tersembunyi” tambahan dari Robert, Kim Kiyosaki, dan Tom Wheelwright, CPA serta Rich Dad Advisor. Robert menjelaskan bahwa membangun bisnis pemasaran jaringan:
                adalah cara yang revolusioner untuk mencapai kemakmuran, memungkinkan siapa pun memperoleh kekayaan dalam jumlah besar, dan terbuka bagi siapa pun yang memiliki motivasi kuat, keteguhan hati, dan kegigihan".</p>
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
