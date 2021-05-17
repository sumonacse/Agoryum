@extends('layouts.Back.App')
@section('title')
  Site Settings
@endsection
@section('content')
  <style media="screen">
  .multi-search-filter{
  border:1px solid #DDD;
  border-radius: 3px;
  padding:3px;
  min-height: 26px;
}
.multi-search-filter > input {
  border: 0px;
  outline: none;
  font-size: 20px;
}
.multi-search-item {
  margin: 2px;
  padding: 2px 24px 2px 8px;
  float: left;
  display: flex;
  background-color: rgb(204, 204, 204);
  color: rgb(51, 51, 51);
  border-radius: 3px;
  position: relative;
}
.multi-search-item > span {
  font-family: 'Muli';
  line-height: 18px;
}
.multi-search-item > .fa {
  font-size: 12px;
  line-height: 18px;
  margin-left: 8px;
  position: absolute;
  right: 8px;
  top: 2px;
}
  </style>
  <script type="text/javascript">
  function multiSearchKeyup(inputElement) {
  if(event.keyCode === 13) {
      inputElement.parentNode
          .insertBefore(createFilterItem(inputElement.value), inputElement)
          ;
      inputElement.value = "";
  }
  function createFilterItem(text) {
      const item = document.createElement("div");
      item.setAttribute("class", "multi-search-item");
      const span = `<span>${text}</span>`;
      const close = `<div class="fa fa-close" onclick="this.parentNode.remove()"></div>`;
      item.innerHTML = span+close;
      return item;
  }
}
  </script>
  <div class="layout-px-spacing">

    @include('Dashboard.alerts')
    @if (empty($info))
        <div class="mt-4">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Site Settings</h4>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="needs-validation" action="{!! route('siteSettingsSubmit') !!}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">Site Name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Site name" name="siteName" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">Email</label>
                                <input type="email" class="form-control" id="validationCustom01" placeholder="Your email..." name="email" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">Phone Number</label>
                                <input type="telephone" class="form-control" id="validationCustom01" placeholder="Your number..." name="telephone" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                          <div class="col-md-12 mb-12">
                              <label for="validationCustom02">Meta description</label>
                              <textarea type="text" name="metadescription" class="form-control" id="validationCustom02" placeholder="Meta description"required></textarea>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom03">Logo</label>
                                <input type="file" name="logo" class="form-control-file" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary mt-3" type="submit">Save</button>
                    </form>
                </div>
            </div>
    @endif
    @if (!empty($info))
        <div class="mt-4">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Site Settings</h4>
                        </div>
                    </div>
                </div>
                <div class="">
                    <form class="needs-validation" action="{!! route('siteSettingsSubmit') !!}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">Site Name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Site name" value="{{ $info->siteName }}" name="siteName" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                          </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-12">
                                    <label for="validationCustom01">Email</label>
                                    <input type="email" class="form-control" id="validationCustom01" placeholder="Your email..." value="{{ $info->email }}" name="email" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">Phone Number</label>
                                <input type="telephone" class="form-control" id="validationCustom01" placeholder="Your number..." value="{{ $info->telephone }}" name="telephone" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                          <div class="col-md-12 mb-12">
                              <label for="validationCustom02">Meta description</label>
                              <textarea type="text" name="metadescription" class="form-control" id="validationCustom02" placeholder="Meta description"required>{{ $info->metadescription }}</textarea>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom03">Logo</label>
                                <input type="file" name="logo" class="form-control-file" id="validationCustom03" value="{{ $info->logo }}" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary mt-3" type="submit">Save</button>
                    </form>
                </div>
            </div>
    @endif
  </div>
@endsection
