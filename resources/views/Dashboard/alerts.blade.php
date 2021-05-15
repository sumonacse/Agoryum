
@if (Session::has('success'))
  <div class="alert alert-success mt-4">
    {{ session('success') }}
  </div>
@endif
@if (Session::has('danger'))
  <div class="alert alert-danger mt-4">
    {{ session('danger') }}
  </div>
@endif
