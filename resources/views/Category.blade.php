@extends('layouts.layoutAdmin')

@section('content')
<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Category</title>
</head>
<section>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Category</h1>
            </div>
        </div>
        <div class="container mt-4 col-7">
    <!-- Add Category -->
    <div class="card mt-4">
      <div class="card-header bg-primary text-white">
        Add Category
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" class="form-control" id="categoryName" placeholder="Enter category name">
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>

    <!-- Category List -->
    <div class="card mt-4">
      <div class="card-header bg-success text-white">
        Category List
      </div>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Agama
            <button class="btn btn-danger btn-sm">Delete</button>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Sains
            <button class="btn btn-danger btn-sm">Delete</button>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Bisnis & Ekonomi
            <button class="btn btn-danger btn-sm">Delete</button>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Komik
            <button class="btn btn-danger btn-sm">Delete</button>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Komputer & Teknologi
            <button class="btn btn-danger btn-sm">Delete</button>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Pengembangan Diri
            <button class="btn btn-danger btn-sm">Delete</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
    </main>
</section>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
