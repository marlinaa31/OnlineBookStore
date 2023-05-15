@extends('layouts.layoutAdmin')

@section('content')
<head>
  <!-- Memasukkan link CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <section>
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Books</h1>
                </div>
            </div>
  <div class="container">
    <div class="text-right mb-3">
      <a href="{{route('addbooks')}}" class="btn btn-primary">Add New Book</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Publisher</th>
          <th>ISBN</th>
          <th>Price</th>
          <th>Photo</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Logika Agama Edisi Baru</td>
          <td>Lentera Hati</td>
          <td>9786235375113</td>
          <td>115.000</td>
          <td><img src="{{ url('Book/agama/buku1.jpg') }}" alt="Book 1" width="50"></td>
          <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Panduan Praktis Belajar Tajwid</td>
          <td>Checklist</td>
          <td>9786238114085</td>
          <td>102.000</td>
          <td><img src="{{ url('Book/agama/buku2.jpg') }}" alt="Book 2" width="50"></td>
          <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Sirah Nabawiyah</td>
            <td>Pustaka Al Kautsar</td>
            <td>200026733</td>
            <td>93.500</td>
            <td><img src="{{ url('Book/agama/buku3.jpg') }}" alt="Book 1" width="50"></td>
            <td><button class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Fisika Dasar Edisi 7 Jilid 1</td>
            <td>Erlangga</td>
            <td>9789790993273</td>
            <td>612.000</td>
            <td><img src="{{ url('Book/sains/buku-1.jpg') }}" alt="Book 2" width="50"></td>
            <td><button class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Thomas' Calculus</td>
            <td>Erlangga</td>
            <td>9786024343903</td>
            <td>528.000</td>
            <td><img src="{{ url('Book/sains/buku-2.jpeg') }}" alt="Book 2" width="50"></td>
            <td><button class="btn btn-danger">Delete</button></td>
          </tr>
        <!-- Tambahkan baris tambahan untuk setiap buku yang ada -->
      </tbody>
    </table>
  </div>
        </main>
    </section>

  <!-- Memasukkan script JS Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  @endsection
