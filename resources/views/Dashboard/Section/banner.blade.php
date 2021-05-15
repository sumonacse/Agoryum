@extends('layouts.Back.App')
@section('title')
  Banner Settings
@endsection
@section('content')
  @include('Dashboard.alerts')
  <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
      <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-2 ml-2">
                      <h4>Banner Section</h4>
                  </div>
              </div>
          </div>
          <div class="widget-content widget-content-area">
              <form action="{!! route('BannerSectionPost') !!}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="bannerTitleOne" placeholder="Banner Title 1">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="bannerTitleTwo" placeholder="Banner Title 2">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="bannerTitleThree" placeholder="Banner Title 3">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="bannerDesc" placeholder="Banner short description">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="facebook_link" placeholder="facebook link">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="linkedin_link" placeholder="linkedin link">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="twitter_link" placeholder="twitter link">
                  </div>
                  <div class="form-group mb-3">
                      <input type="file" class="form-control-file" required name="banner_image" placeholder="Banner image">
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Save</button>
              </form>
          </div>
      </div>
  </div>

@endsection
