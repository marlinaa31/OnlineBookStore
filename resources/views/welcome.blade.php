@extends('layouts.layoutUser')

@section('content')

<head>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}" />
  <!-- font awesome style -->
  <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('css/responsive.css') }}" rel="stylesheet" />
</head>

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Cinfas Bookstore
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                      Dapatkan pengalaman belanja buku yang profesional dengan tampilan website book store yang mudah digunakan dan teratur.
                    </p>
                    <a href="{{ route('register')}}">
                      Shop Now
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ url('images/slider-img.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- catagory section -->

  <section class="catagory_section layout_padding">
    <div class="catagory_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Books Categories
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ url('images/cat1.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Agama
                </h5>
                <p>
                  Kategori ini berisi buku-buku mengenai agama. Buku-buku ini membahas tentang sejarah, praktik, dan filsafat agama,
                  serta memberikan pemahaman yang lebih mendalam tentang keyakinan dan praktik keagamaan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ url('images/cat2.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Sains
                </h5>
                <p>
                  Kategori ini berisi buku-buku yang membahas tentang berbagai topik ilmu pengetahuan, seperti fisika, kimia, biologi, astronomi, dan lain-lain.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ url('images/cat3.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Bisnis & Ekonomi
                </h5>
                <p>
                  Kategori ini berisi buku-buku yang membahas tentang berbagai topik ekonomi dan bisnis, seperti manajemen, pemasaran, keuangan, dan lain-lain.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ url('images/cat4.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Komik
                </h5>
                <p>
                  Kategori ini berisi buku-buku komik dan novel grafis dari berbagai genre, seperti aksi, petualangan, fiksi ilmiah, fantasi, dan lain-lain.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ url('images/cat5.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Komputer & Teknologi
                </h5>
                <p>
                  Kategori ini berisi buku-buku yang membahas tentang teknologi informasi, komputer, dan jaringan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ url('images/cat6.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pengembangan Diri
                </h5>
                <p>
                  Kategori ini berisi buku-buku yang membahas tentang pengembangan diri dan motivasi,
                  seperti buku-buku tentang kepemimpinan, keterampilan interpersonal, dan pengembangan pribadi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end catagory section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ url('images/about-img.png') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Our Bookstore
              </h2>
            </div>
            <p>
              Kami adalah toko buku online yang didirikan dengan tujuan untuk membantu masyarakat memperoleh akses mudah ke bacaan <br> berkualitas tinggi.
              Kami percaya bahwa membaca adalah kunci untuk mengembangkan wawasan, meningkatkan kemampuan berpikir, dan membuka jendela ke dunia yang lebih luas.
            </p>
            <a href="{{ route('about')}}">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          What Says Customers
        </h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="client_container ">
            <div class="detail-box">
              <p>
                "Saya sangat senang dengan pengalaman belanja di toko buku online ini.
                Pilihan bukunya sangat lengkap dan variatif, dan saya selalu menemukan
                buku-buku yang menarik untuk dibaca. Layanan pelanggannya juga sangat
                profesional dan responsif. Saya mengalami sedikit masalah saat memesan buku,
                tetapi tim layanan pelanggan dengan cepat mengatasi masalah tersebut dan membantu saya dengan sangat baik." </p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="{{ url('images/c1.jpg') }}" alt="">
              </div>
              <div class="client_name">
                <h5>
                  Muhammad Farhan
                </h5>
                <h6>
                  Student
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="client_container ">
            <div class="detail-box">
              <p>
                "Saya sangat puas dengan pengalaman berbelanja di toko buku online ini.
                Tersedia banyak pilihan buku berkualitas dari berbagai kategori yang membuat
                saya semakin tertarik untuk membaca. Harga bukunya juga terjangkau dan sesuai
                dengan kualitasnya. Layanan pelanggan juga sangat responsif dan membantu dalam
                memberikan saran mengenai pilihan buku yang cocok untuk saya. Saya pasti akan
                merekomendasikan toko buku online ini kepada teman dan keluarga yang sedang mencari bacaan berkualitas."
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="{{ url('images/c2.jpg') }}" alt="">
              </div>
              <div class="client_name">
                <h5>
                  Rahmatul Idami
                </h5>
                <h6>
                  Student
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mx-auto">
          <div class="client_container ">
            <div class="detail-box">
              <p>
                "Saya sangat puas dengan pengalaman berbelanja di toko buku online ini.
                Tersedia banyak pilihan buku berkualitas dari berbagai kategori yang membuat saya semakin tertarik untuk membaca.
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="{{ url('images/c3.jpg') }}" alt="">
              </div>
              <div class="client_name">
                <h5>
                  Nitiya Rihadatul 'Aisyi
                </h5>
                <h6>
                  Student
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- jQery -->

  <script src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ url('js/bootstrap.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <!-- custom js -->
  <script src="{{ url('js/custom.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

@endsection
