@extends('layouts.Back.App')
@section('title')
  Video Section
@endsection
@section('content')
  @include('Dashboard.alerts')
  @php
    $isEmpty = DB::table('videos')->where('id', 1)->first();
  @endphp
  @if (empty($isEmpty))
    <div class="col-md-12 mt-4">
      <h4>Video:</h4>
      <hr>
      <form action="{!! route('videoPost') !!}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-group mb-3">
            <label for="">Video Title:</label>
            <input type="text" required class="form-control" name="video_title">
          </div>
          <div class="form-group mb-3">
            <label for="">Video short description:</label>
            <input type="text" required class="form-control" name="video_short_desc">
          </div>
          <div class="form-group mb-3">
            <label for="">Video embed link:</label>
            <input type="link" required class="form-control" name="video_link">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Save</button>
      </form>
    </div>
  @else
    <div class="col-md-12 mt-4">
      <h4>Video:</h4>
      <hr>
      <form action="{!! route('videoPost') !!}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-group mb-3">
            <label for="">Video Title:</label>
            <input type="text" required class="form-control" value="{{ $isEmpty->video_title }}" name="video_title">
          </div>
          <div class="form-group mb-3">
            <label for="">Video short description:</label>
            <input type="text" required class="form-control" value="{{ $isEmpty->video_short_desc }}" name="video_short_desc">
          </div>
          <div class="form-group mb-3">
            <label for="">Video embed link:</label>
            <input type="link" required class="form-control" value="{{ $isEmpty->video_link }}" name="video_link">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Save</button>
      </form>
    </div>
  @endif



@endsection
