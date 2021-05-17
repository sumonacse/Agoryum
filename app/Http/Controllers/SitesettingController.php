<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
use Image;

class SitesettingController extends Controller
{
    public function index(Request $request)
    {
      $info = DB::table('sitesettings')->where('id', 1)->first();
      return view('Dashboard.Settings.sitesettings',compact('info'));
    }

    public function siteSettingsSubmit(Request $request)
    {
      $Check = DB::table('sitesettings')->where('id', $request->id)->first();
      if (empty($Check)) {
      if (!empty($request->logo)) {
        $randomNumber =rand();
        $logo = $request->file('logo');
        $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$logo_rename;
        Image::make($logo)->save($newLocation,100);
      }
      DB::table('sitesettings')->insert([
        'siteName' => $request->siteName,
        'metadescription' => $request->metadescription,
        'logo' => $logo_rename,
      ]);
    }else {
      $info = DB::table('sitesettings')->where('id', 1)->first();
      @unlink('uploads/'.$info->logo);

      if (!empty($request->logo)) {
        $randomNumber =rand();
        $logo = $request->file('logo');
        $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$logo_rename;
        Image::make($logo)->save($newLocation,100);
      }
      DB::table('sitesettings')->where('id', 1)->update([
        'siteName' => $request->siteName,
        'metadescription' => $request->metadescription,
        'logo' => $logo_rename,
      ]);
    }
      return back()->with('success', 'Site settings updated!');
    }
}
