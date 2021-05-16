<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Carbon\Carbon;

class TechnologiesController extends Controller
{
    public function techIndex()
    {
      return view('Dashboard.Section.tech');
    }

    public function techPost(Request $request)
    {
      if (!empty($request->tech_logo)) {
        $randomNumber =rand();
        $logo = $request->file('tech_logo');
        $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$logo_rename;
        Image::make($logo)->save($newLocation,100);
      }
      DB::table('technologies')
      ->insert([
        'tech_name' => $request->tech_name,
        'tech_logo' => $logo_rename,
      ]);

      return back()->with('success', 'A new technologies has been updated!');
    }

    public function techDelete(Request $request)
    {
      DB::table('technologies')->where('id', $request->id)->delete();
      return back()->with('danger', 'Technologies deleted!');
    }
}
