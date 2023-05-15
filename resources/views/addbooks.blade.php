@extends('layouts.layoutAdmin')

@section('content')
<head>
  <title>Add Book</title>
  <!-- Memasukkan link CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <section>
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Add Books</h1>
                </div>
            </div>
  <div class="container mt-4 col-7">
    <form>
      <div class="form-group">
        <label for="bookName">Book Name:</label>
        <input type="text" class="form-control" id="bookName" placeholder="Enter book name" required>
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <select class="form-control" id="category">
          <option value="">Select category</option>
          <option value="fiction">Agama</option>
          <option value="non-fiction">Sains</option>
          <option value="science">Bisnis & Ekonomi </option>
          <option value="history">Komik</option>
          <option value="non-fiction">Komputer & Teknologi</option>
          <option value="science">Pengembangan Diri </option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
        </main>
    </section>

  <!-- Memasukkan script JS Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@endsection
