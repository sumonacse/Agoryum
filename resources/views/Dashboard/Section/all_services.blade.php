@extends('layouts.Back.App')
@section('title')
  Our All Services
@endsection
@section('content')
  @include('Dashboard.alerts')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mt-3">
              <div class="widget-content widget-content-area br-6">
                  <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Service Title</th>
                            <th>Thumbnal Image</th>
                            <th class="no-content">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->service_title }}</td>
                            <td>
                              <img src="../uploads/{{ $service->service_banner }}" width="120px" style="border: 1px; border-radius: 5px" alt="">
                            </td>
                            <td>
                              <a href="{!! route('ServiceView', $service->id) !!}" class="btn btn-primary">
                                View
                              </a>
                              <a href="{!! route('ServiceDelete', $service->id) !!}" class="btn btn-danger">
                                Delete
                              </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                          <th>Service Title</th>
                          <th>Thumbnal Image</th>
                          <th class="no-content">Actions</th>
                      </tr>
                    </tfoot>
                </table>
            </div>
        </div>
@endsection
