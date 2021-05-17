@extends('layouts.Back.App')
@section('title')
  About us
@endsection
@section('content')
  @include('Dashboard.alerts')
  <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
  @php
    $isExist = DB::table('aboutuses')->count();
    $data = DB::table('aboutuses')->where('id', 1)->first();
  @endphp

  <div class="col-md-12">
    <br>
    <br>
    <h4>About Us:</h4>
    <hr>
    @if ($isExist == 0)

    <form action="{!! route('AboutusPost') !!}" method="post" enctype="multipart/form-data">
      @csrf
    <input type="text" class="form-control" name="about_us_title" required placeholder="About us title..." value="">
    <br>
    <textarea id="editor" name="about_us_desc"></textarea>
    <button type="submit" class="btn btn-success mt-4">Save</button>
  </form>
  @else
    <form action="{!! route('AboutusPost') !!}" method="post" enctype="multipart/form-data">
      @csrf

    <input type="text" class="form-control" name="about_us_title" required placeholder="About us title..." value="{{ $data->aboutus_title }}">
    <br>
    <div id="editor" name="about_us_desc" rows="80" cols="80">{!! $data->aboutus_desc !!}</textarea>
    <button type="submit" class="btn btn-success mt-4">Save</button>
  </form>
  @endif
  </div>
  <hr>
  <div class="col-md-12">
    <h4>Last worked</h4>
    <hr>
    <form action="{!! route('Worked') !!}" method="post" enctype="multipart/form-data">
      @csrf
    <input type="text" class="form-control" name="work_title" placeholder="Worked title...">
    <br>
    <input type="text" class="form-control" name="work_name" placeholder="Worker name...">
    <br>
    <input type="text" class="form-control" name="work_budget" placeholder="Budget amount...">
    <br>
    <label for="">Display Image:</label>
    <input type="file" class="form-control-file" name="work_image">
    <br>
    <div class="statbox widget box box-shadow">
        <div>
            <textarea id="demo1" name="worked_desc">
            </textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-2">Save</button>
  </div>
  </form>
  <hr>

@php
  $work = DB::table('worked')->get();
@endphp
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mt-3">
      <div class="widget-content widget-content-area br-6">
          <table id="zero-config" class="table dt-table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Work Title</th>
                    <th>Thumbnal Image</th>
                    <th class="no-content">Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($work as $works)
                <tr>
                    <td>{{ $works->worked_title }}</td>
                    <td>
                      <img src="../uploads/{{ $works->worked_image }}" width="120px" style="border: 1px; border-radius: 5px" alt="">
                    </td>
                    <td>
                      <a href="{!! route('workedDelete', $works->id) !!}" class="btn btn-danger">
                        Delete
                      </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
            <tfoot>
              <tr>
                  <th>Work Title</th>
                  <th>Thumbnal Image</th>
                  <th class="no-content">Actions</th>
              </tr>
            </tfoot>
        </table>
    </div>
</div>

  <script>
      ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
@endsection
