@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="right">
      <a href="{{ url('admin/add_blog') }}" class="btn btn-primary" style="margin-bottom:20px; float:right;"> Add New Blog </a>
    </div>

    <div class="col-md-12">
      <div class="card-header">Blog</div>
      <div class="card-body">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Created</th>
              <th scope="col">Image</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($DataBlogs))
            @foreach($DataBlogs as $key => $Blog)
            <tr>
              <td> {{ $key += 1 }} </td>
              <td> {{ $Blog->judul }} </td>
              <td> {{ $Blog->created_at }} </td>
              <td>
                    @if($Blog->gambar != '')
                      <img src="{{ url('images/'.$Blog->gambar) }}" alt="Gambar" width="100" />
                    @else
                    -
                    @endif
              </td>
              <td> <a href="{{ url('admin/edit_blog', $Blog->id) }}" class="btn btn-success"> Edit </a> </td>
              <td>
                <form action="{{ url('admin/blog', $Blog->id) }}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger"> Delete </button>
                </form>
              </td>
            </tr>
            @endforeach
            @else
              <tr></tr>
            @endif
          </tbody>

        </table>

      </div>
    </div>

  </div>

</div>
@endsection
