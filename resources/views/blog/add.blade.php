@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="col-md-12">
      <div class="card-header">Add New Blog</div>
      <div class="card-body">

        <br/><br/>
        <form action="{{ url('/admin/blog') }}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Judul">Judul :</label>
              <input type="text" name="judul" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Artikel">Artikel :</label>
              <textarea name="artikel" class="form-control" required></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Gambar">Gambar :</label>
              <input type="file" name="filename">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success"> Submit </button>
            </div>
          </div>

        </form>

      </div>
    </div>

  </div>

</div>
@endsection
