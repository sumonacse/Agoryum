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
        <form action="{!! route('indexBlogPost') !!}" method="post" enctype="multipart/form-data">
          @csrf
          <label for="" class="mt-3">Blog Title:</label>
          <input type="text" class="form-control" name="blog_title">
          <label for="" class="mt-3">Blog Cover image:</label>
          <input type="file" class="form-control-file" name="blog_cover_image">
          <label for="" class="mt-3">Blog Description:</label>
          <textarea id="editor" name="blog_desc"></textarea>
          <button type="submit" class="btn btn-primary mt-4">Save</button>
        </form>
      </div>
      @php
        $blogList = DB::table('blogs')->get();
      @endphp
      <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mt-3">
                  <div class="widget-content widget-content-area br-6">
                      <table id="zero-config" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Blog Title</th>
                                <th>Thumbnal Image</th>
                                <th class="no-content">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($blogList as $value)
                            <tr>
                                <td>{{ $value->blog_title }}</td>
                                <td>
                                  <img src="../uploads/{{ $value->blog_thumbnal }}" width="120px" style="border: 1px; border-radius: 5px" alt="">
                                </td>
                                <td>
                                  <a href="{!! route('blogview', $value->id) !!}" class="btn btn-primary">
                                    View
                                  </a>
                                  <a href="{!! route('blogdelete', $value->id) !!}" class="btn btn-danger">
                                    Delete
                                  </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                              <th>Blog Title</th>
                              <th>Thumbnal Image</th>
                              <th class="no-content">Actions</th>
                          </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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
