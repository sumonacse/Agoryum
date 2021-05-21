@extends('layouts.Back.App')
@section('title')
  Dashboard
@endsection
@section('content')
    @include('Dashboard.alerts')
    @php
      $contacts = DB::table('contacts')->count();
      $casestudies = DB::table('casestudies')->count();
      $totalServices = DB::table('services')->count();
      $totalClients = DB::table('clients')->count();
      $totalTech = DB::table('technologies')->count();
    @endphp
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Contacts:</h5>
            <h4 class="card-text"> <b> {{ $contacts }} </b> </h4>
            <a href="{!! route('all_contact') !!}" class="btn btn-primary">Go Contacts</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Case:</h5>
            <h4 class="card-text"> <b> {{ $casestudies }} </b> </h4>
            <a href="{!! route('CasestudiesIndex') !!}" class="btn btn-primary">Go Case</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Services:</h5>
            <h4 class="card-text"> <b> {{ $totalServices }} </b> </h4>
            <a href="{!! route('ServiceIndex') !!}" class="btn btn-primary">Go Services</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Clients:</h5>
            <h4 class="card-text"> <b> {{ $totalServices }} </b> </h4>
            <a href="{!! route('ServiceIndex') !!}" class="btn btn-primary">Go Clients</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Technologies:</h5>
            <h4 class="card-text"> <b> {{ $totalTech }} </b> </h4>
            <a href="{!! route('techIndex') !!}" class="btn btn-primary">Go Technologies</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Technologies:</h5>
            <h4 class="card-text"> <b> {{ $totalTech }} </b> </h4>
            <a href="{!! route('ServiceIndex') !!}" class="btn btn-primary">Go Technologies</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
