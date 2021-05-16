@extends('layouts.Back.App')
@section('title')
  Our Clients
@endsection
@section('content')
  @include('Dashboard.alerts')

  <div class="col-md-12 mt-4">
    <h4>Our clients:</h4>
    <hr>
    <form action="{!! route('clientPost') !!}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group mb-3">
          <label for="">Clients review:</label>
            <textarea type="text" class="form-control" required name="client_review" placeholder="Clients review..."></textarea>
        </div>
        <div class="form-group mb-3">
          <label for="">Client name:</label>
          <input type="text" class="form-control" required name="client_name">
        </div>
        <div class="form-group mb-3">
          <label for="">Company logo:</label>
          <input type="file" class="form-control-file" required name="company_logo">
        </div>
        <div class="form-group mb-3">
          <label for="">Clients photo:</label>
          <input type="file" class="form-control-file" required name="clients_photo">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
  </div>


<hr>


@php
  $client = DB::table('clients')->get();
@endphp

  <div class="layout-px-spacing">

      <div class="row layout-top-spacing">

          <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
              <div class="widget-content widget-content-area br-6">
                  <table id="zero-config" class="table dt-table-hover" style="width:100%">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Display Picture</th>
                              <th>Company Logo</th>
                              <th>Review</th>
                              <th class="no-content">Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($client as $value)
                          <tr>
                              <td>{{ $value->client_name }}</td>
                              <td>
                                <img src="../uploads/{{ $value->clients_photo }}" alt="">
                              </td>
                              <td>
                                <img src="../uploads/{{ $value->company_logo }}" alt="">
                              </td>
                              <td>{{ \Illuminate\Support\Str::limit($value->client_review, 50, $end='...') }}</td>
                              <td>
                                <a href="{!! route('clientDelete',$value->id) !!}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                </a>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Display Picture</th>
                            <th>Company Logo</th>
                            <th>Review</th>
                            <th class="no-content">Actions</th>
                        </tr>
                      </tfoot>
                  </table>
              </div>
          </div>

      </div>

  </div>


@endsection
