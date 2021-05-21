@extends('layouts.Back.App')
@section('title')
  Banner Settings
@endsection
@section('content')
  @include('Dashboard.alerts')
  <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
  {{-- <div class="container"> --}}
    <div class="row p-4">
      <div class="col-md-12">
        <form action="{!! route('BlogUpdate') !!}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="{{ $blog->id }}">
          @csrf
          <label for="" class="mt-3">Blog Title:</label>
          <input type="text" class="form-control" name="blog_title" value="{{ $blog->blog_title }}">
          <label for="" class="mt-3">Blog Cover image:</label><br>
          <img src="../uploads/{{ $blog->blog_cover_image }}" width="150px" alt="">
          <hr>
          <input type="file" class="form-control-file" name="blog_cover_image" value="../uploads/{{ $blog->blog_cover_image }}">
          <label for="" class="mt-3">Blog Description:</label>
          <textarea id="editor" name="blog_desc">{{ $blog->blog_desc }}</textarea>
          <button type="submit" class="btn btn-primary mt-4">Update</button>
        </form>
      </div>
  {{-- </div> --}}
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>

@endsection
