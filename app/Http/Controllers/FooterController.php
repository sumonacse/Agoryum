<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Carbon\Carbon;

class FooterController extends Controller
{
    public function footer_section()
    {
      return view('Dashboard.Section.footer');
    }

    public function footer_background_post(Request $request)
    {
      $isEmpty = DB::table('footers')->where('id', 1)->first();
      if (empty($isEmpty)) {
        if (!empty($request->footer_background)) {
          $randomNumber =rand();
          $logo = $request->file('footer_background');
          $company_logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
          $newLocation = 'uploads/'.$company_logo_rename;
          Image::make($logo)->resize(1920, 817)->save($newLocation,100);
        }
        DB::table('footers')->insert([
          'footer_background' => $company_logo_rename,
        ]);
      }else {
        if (!empty($request->footer_background)) {
          $randomNumber =rand();
          $logo = $request->file('footer_background');
          $company_logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
          $newLocation = 'uploads/'.$company_logo_rename;
          Image::make($logo)->resize(1920, 817)->save($newLocation,100);
        }
        DB::table('footers')
        ->where('id', 1)
        ->update([
          'footer_background' => $company_logo_rename,
        ]);

        return back()->with('success', 'Your footer section has been updated');
      }

    }
}
