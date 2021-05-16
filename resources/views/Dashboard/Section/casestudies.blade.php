@extends('layouts.Back.App')
@section('title')
  Case Studies
@endsection
@section('content')
  @include('Dashboard.alerts')
  <div id="flStackForm" class="col-lg-12">
      <div>
          <div>
              <div class="row layout-top-spacing">
                  <div class="col-xl-6 col-md-6 col-sm-6 mt-2 layout-spacing">
                      <h4>Case Studies</h4>
                  </div>
                  {{-- <div class="col-md-6 mt-2">
                    @if ($Banner->status == 0)
                      <a href="{!! route('enable_banner') !!}" class="btn btn-danger">Disabled</a>
                    @else
                      <a href="{!! route('disable_banner') !!}" class="btn btn-success">Disable</a>
                    @endif
                  </div> --}}
              </div>
          </div>

          <div>
            {{-- @if (empty()) --}}

              <form action="{!! route('CasestudiesPost') !!}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" required name="case_title" placeholder="Case title...">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Chose image for thumbnal:</label>
                      <input type="file" class="form-control-file" required name="case_image" accept="image/*">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Upload case PDF file:</label>
                      <input type="file" class="form-control-file" required name="case_pdf" accept="application/pdf">
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Save</button>
              </form>
              {{-- @endif --}}

          </div>
      </div>
  </div>

<hr>
<hr>
<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                  <thead>
                      <tr>
                          <th>Case Title</th>
                          <th>Thumbnal Image</th>
                          <th>PDF</th>
                          <th class="no-content">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($Cases as $case)
                      <tr>
                          <td>{{ $case->case_title }}</td>
                          <td>
                            <img src="../uploads/{{ $case->case_thumbnal}}" width="120px" style="border: 1px; border-radius: 5px" alt="">
                          </td>
                          <td>
                            <a href="../uploads/{{ $case->case_file}}" target="_blank">{{ $case->case_file}}</a>
                          </td>
                          <td>
                            <a href="{!! route('deleteCase', $case->id) !!}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                            </a>
                          </td>

                      </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Case Title</th>
                        <th>Thumbnal Image</th>
                        <th>PDF</th>
                        <th class="no-content">Actions</th>
                    </tr>
                  </tfoot>
              </table>
          </div>
      </div>

@endsection
