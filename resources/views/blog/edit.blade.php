@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="col-md-12">

      @if($errors->any())
          <div class="alert alert-danger">
              <p><strong>Opps Something went wrong</strong></p>
              <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
              </ul>
          </div>
      @endif


      <div class="card-header">Edit Blog</div>
      <div class="card-body">

        <br/><br/>
        <form action="{{ url('/admin/blog', $id) }}" method="post" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="_method" value="PUT">

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Judul">Judul :</label>
              <input type="text" name="judul" class="form-control" value="{{ $blog->judul }}" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Artikel">Artikel :</label>
              <textarea name="artikel" class="form-control" required> {{ $blog->artikel }} </textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Gambar">Gambar :</label><br/>
              @if($blog->gambar != '')
                <img src="{{ url('/images/'.$blog->gambar) }}" alt="{{ $blog->judul }}" width="100" style="margin-bottom:20px;">
              @endif
              <input type="file" name="filename">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success"> Update </button>
            </div>
          </div>

        </form>

      </div>
    </div>

  </div>

</div>
@endsection
