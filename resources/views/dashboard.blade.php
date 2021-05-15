@extends('layouts.Back.App')
@section('title')
  Dashboard
@endsection
@section('content')
  <div class="layout-px-spacing">

    @include('Dashboard.alerts')
      <div class="row layout-top-spacing">

          <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
              <div class="widget widget-content-area br-4">
                  <div class="widget-one">

                    <h3>Welcome to dashbaord</h3>

                  </div>
              </div>
          </div>
      </div>

  </div>
@endsection
