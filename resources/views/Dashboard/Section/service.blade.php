@extends('layouts.Back.App')
@section('title')
  Our Services
@endsection
@section('content')
  @include('Dashboard.alerts')
      <div class="col-lg-12 col-md-12">
        <form action="{!! route('ServicePost') !!}" method="post" enctype="multipart/form-data">
          @csrf
        <hr>
          <div class="box box-shadow">
              <div class="widget-header">
                  <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                          <h4> Serviec Description:</h4>
                      </div>
                  </div>
              </div>
              <div class="">
                  <textarea id="demo2" required name="service_desc">

                  </textarea>
                  <label for="">Service Title:</label>
                  <input type="text" class="form-control" required name="service_title">
                </div>
              </div>
              <label for="">Service Cover: </label>
              <input type="file" class="form-control-file" required name="service_banner">
              <button type="submit" class="btn btn-success mt-4 mb-5">Save</button>
            </form>
            <a href="{!! route('allServices') !!}">View All Services</a>
          </div>

@endsection
