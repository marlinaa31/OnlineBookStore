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
        <form action="{{ route('admin.category.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Enter category name">
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
        </div><!-- Category List -->
        <div class="card mt-4">
          <div class="card-header bg-success text-white">
            Category List
          </div>
          <div class="card-body">
            <ul class="list-group">
              @foreach($categories as $category)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $category->name }}
                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
    </div>
</main>
</section>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
