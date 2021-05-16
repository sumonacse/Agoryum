<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Carbon\Carbon;


class ClientController extends Controller
{
    public function index(Request $request)
    {
      return view('Dashboard.Section.ourclients');
    }

    public function clientPost(Request $request)
    {

      if (!empty($request->clients_photo)) {
        $randomNumber =rand();
        $logo = $request->file('clients_photo');
        $client_photo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$client_photo_rename;
        Image::make($logo)->save($newLocation,100);
      }
      if (!empty($request->company_logo)) {
        $randomNumber =rand();
        $logo = $request->file('company_logo');
        $company_logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$company_logo_rename;
        Image::make($logo)->save($newLocation,100);
      }
      DB::table('clients')->insert([
        'client_name' => $request->client_name,
        'clients_photo' => $client_photo_rename,
        'company_logo' => $company_logo_rename,
        'client_review' => $request->client_review,
      ]);

      return back()->with('success', 'Clients review added!');
    }


    public function clientDelete(Request $request)
    {
      DB::table('clients')->where('id', $request->id)->delete();
      return back()->with('danger', 'Clients review deleted!');
    }
}
