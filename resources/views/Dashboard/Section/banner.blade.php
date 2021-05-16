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
                  <div class="col-xl-6 col-md-6 col-sm-6 mt-2">
                      <h4>Banner Section</h4>
                  </div>
                  <div class="col-md-6 mt-2">
                    @if ($Banner->status == 0)
                      <a href="{!! route('enable_banner') !!}" class="btn btn-danger">Disabled</a>
                    @else
                      <a href="{!! route('disable_banner') !!}" class="btn btn-success">Disable</a>
                    @endif
                  </div>
              </div>
          </div>
          <div class="widget-content widget-content-area">
            @if (empty($Banner))

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
                  <hr>
                  <h4>Mobile Banner:</h4>
                  <hr>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMOne" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMTwo" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMThree" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMFour" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMFive" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="file" class="form-control-file" required name="banner_image" placeholder="Banner image">
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Save</button>
              </form>
              @endif
              @if (!empty($Banner))
              <form action="{!! route('BannerSectionPost') !!}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="bannerTitleOne" value="{{ $Banner->bannerSectionOne }}" placeholder="Banner Title 1">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="bannerTitleTwo" value="{{ $Banner->bannerSectionTwo }}" placeholder="Banner Title 2">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="bannerTitleThree" value="{{ $Banner->bannerSectionThree }}" placeholder="Banner Title 3">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="bannerDesc" value="{{ $Banner->shortDesc }}" placeholder="Banner short description">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="facebook_link" value="{{ $Banner->facebook_link }}" placeholder="facebook link">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="linkedin_link" value="{{ $Banner->linkedin_link }}" placeholder="linkedin link">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="twitter_link" value="{{ $Banner->twitter_link }}" placeholder="twitter link">
                  </div>
                  <hr>
                  <h4>Mobile Banner:</h4>
                  <hr>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMOne" value="{{ $Banner->titleMOne }}" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMTwo" value="{{ $Banner->titleMTwo }}" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMThree" value="{{ $Banner->titleMThree }}" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMFour" value="{{ $Banner->titleMFour}}" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="titleMFive" value="{{ $Banner->titleMFive}}" placeholder="Title in mobile...">
                  </div>
                  <div class="form-group mb-3">
                      <input type="file" class="form-control-file" required name="banner_image" value="{!! asset('uploads') !!}/{{ $Banner->image }}" placeholder="Banner image">
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Save</button>
              </form>
              @endif
          </div>
      </div>
  </div>

@endsection
