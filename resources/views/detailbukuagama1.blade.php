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
              <img class="card-img-top" src="{{ url('Book/agama/buku1.jpg') }}" alt="Buku 1">
            </div>
          </div>
          <div class="col-md-8">
          <p><strong>Judul:</strong> Logika Agama Edisi Baru</p>
          <p><strong>Jumlah Halaman:</strong> 270 halaman</p>
          <p><strong>Penulis:</strong> M. Quraish Shihab</p>
          <p><strong>Penerbit:</strong> Lentera Hati</p>
          <p><strong>Tanggal Terbit:</strong> 8 Apr 2023</p>
          <p><strong>Berat:</strong> 0.315 kg</p>
          <p><strong>ISBN:</strong> 9786235375113</p>
          <p><strong>Bahasa:</strong> Indonesia</p>
          <p><strong>Lebar:</strong> 15 cm</p>
          <p><strong>Panjang:</strong> 23 cm</p>
          <p><strong>Harga:</strong> 115.000</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-2">
            <h4>Deskripsi:</h4>
            <p>Logika Agama menyajikan pemahaman yang seimbang seputar kedudukan wahyu pada satu pihak, dan peranan akal dalam membangun sikap keberagaman yang benar pada pihak lain.
            Kemungkinan apa saja yang bisa dijangkau akal untuk mempertemukan tuntunan agama pada satu pihak dan tuntutan zaman pada pihak lain.
            Buku ini menyajikan pemahaman yang seimbang seputar kedudukan wahyu pada satu pihak, dan peranan akal dalam membangun sikap keberagaman yang benar pada pihak lain.
            Kemungkinan apa saja yang bisa dijangkau akal untuk mempertemukan tuntunan agama pada satu pihak dan tuntutan zaman pada pihak lain.</p>

            <p>Buku ini merekam gejolak pemikiran M. Quraish Shihab muda ketika sedang menuntut ilmu di Universitas al-Azhar, Kairo, Mesir.
            Di dalamnya dibicarakan tentang perubahan dan evolusi, Islam dan akal, serta jalan pencerahan diri.</p>

            <p>Buku yang diterbitkan pertama kali pada tahun 2005 ini berasal dari catatan pribadi penulis ketika sedang belajar di Universitas Fuen al-Azhar, Mesir, yang penulisannya rampung pada tahun 1966.
            Keaslian buku cetakan pertama itu ditampilkan sebagaimana apa adanya, tanpa perubahan, kecuali yang terasa sangat diperlukan untuk pelurusan makna atau dalam rangka penyelarasan.
            Dalam konteks penyelarasan itulah, bab menyangkut "Pencerahan Batin" dihidangkan dalam bentuk tanya jawab, sebagaimana uraian-uraian pada bab lain. Di samping itu, karena pastilah-setelah berlalu puluhan tahun sejak ditulisnya ada hal-hal yang perlu diperjelas atau dipertegas atau dikomentari.
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
