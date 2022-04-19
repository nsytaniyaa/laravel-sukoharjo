<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Data Produk</title>
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <a href="{{ url('/create') }}" class="btn btn-success">Tambah Produk</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Slug</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga Produk</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $p )
            <tr>
              <th scope="row">{{ $p->id }}</th>
              <td>{{ $p->name }}</td>
              <td>{{ $p->slug }}</td>
              <td>{{ $p->description }}</td>
              <td>{{ $p->price }}</td>
              <td><a href="{{ url($p->id.'/edit') }}" class="btn btn-warning">Edit</a></td>
              <td><a href="{{ url($p->id.'/delete') }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>