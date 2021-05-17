@extends('layouts.Back.App')
@section('title')
  All contacts
@endsection
@section('content')
  @include('Dashboard.alerts')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
       <div class="widget-content widget-content-area br-6">
           <table id="zero-config" class="table dt-table-hover" style="width:100%">
               <thead>
                   <tr>
                       <th>Name</th>
                       <th>Telephone</th>
                       <th>Email</th>
                       <th>Company</th>
                       <th>Service</th>
                       <th>Message</th>
                       <th class="no-content">Actions</th>
                   </tr>
               </thead>
               <tbody>
                 @foreach ($all_contact as $value)

                   <tr>
                       <td>{{ $value->name }}</td>
                       <td>{{ $value->telephone }}</td>
                       <td>{{ $value->email }}</td>
                       <td>{{ $value->company }}</td>
                       <td>{{ $value->services }}</td>
                       <td>{{ $value->message }}</td>
                       <td>
                           <a href="{!! route('contactsDelete',$value->id) !!}">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                         </a>
                       </td>
                   </tr>
                 @endforeach
               </tbody>
               <tfoot>
                 <tr>
                     <th>Name</th>
                     <th>Telephone</th>
                     <th>Email</th>
                     <th>Company</th>
                     <th>Service</th>
                     <th>Message</th>
                     <th class="no-content">Actions</th>
                 </tr>
               </tfoot>
           </table>
       </div>
   </div>
@endsection
