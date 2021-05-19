@extends('layouts.Back.App')
@section('title')
  Our Clients
@endsection
@section('content')
  @include('Dashboard.alerts')
  @php
    $cover = DB::table('footers')->where('id', 1)->first();
  @endphp
  <hr>
  <div class="col-md-12">
    <h4>Footer section's background image:</h4>
    @if (!empty($cover))
      <img src="../uploads/{{ $cover->footer_background }}" width="150px">
    @endif
    <form action="{!! route('footer_background_post') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <label for="">Footer background:</label>
      <input type="file" class="form-control-file" name="footer_background">
      <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
  </div>

@endsection
