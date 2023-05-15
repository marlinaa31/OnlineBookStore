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
                    <h1>Contact</h1>
                </div>
            </div>
  <div class="container mt-4 col-10">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Message</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>john@example.com</td>
          <td>1234567890</td>
          <td>Hello, how are you?</td>
          <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>jane@example.com</td>
          <td>0987654321</td>
          <td>Thank you for your message!</td>
          <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Jane Smith</td>
            <td>jane@example.com</td>
            <td>0987654321</td>
            <td>Thank you for your message!</td>
            <td><button class="btn btn-danger">Delete</button></td>
          </tr>
        <!-- Tambahkan baris tambahan untuk setiap pesan kontak yang ada -->
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
