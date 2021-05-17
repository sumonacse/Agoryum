<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
use Image;

class AboutusController extends Controller
{
    public function AbountIndex()
    {
      return view('Dashboard.Section.aboutus');
    }

    public function AboutusPost(Request $request)
    {
      $isExist = DB::table('aboutuses')->count();
      if ($isExist == 0) {
        DB::table('aboutuses')->insert([
        'aboutus_title' => $request->about_us_title,
        'aboutus_desc' => $request->about_us_desc,
        ]);
      }else {
        DB::table('aboutuses')->where('id', 1)->update([
        'aboutus_title' => $request->about_us_title,
        'aboutus_desc' => $request->about_us_desc,
        ]);
      }


      return back()->with('success', 'Your about us section has been updated!');
    }

    public function Worked(Request $request)
    {
      if (!empty($request->work_image)) {
        $randomNumber =rand();
        $logo = $request->file('work_image');
        $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$logo_rename;
        Image::make($logo)->save($newLocation,100);
      }
      DB::table('worked')->insert([
        'worked_title' => $request->work_title,
        'worked_desc' => $request->worked_desc,
        'worked_image' => $logo_rename,
        'worked_name' => $request->work_name,
        'worked_budget' => $request->work_budget,
      ]);

      return back()->with('success', 'Your about us section has been updated!');
    }

    public function workedDelete(Request $request)
    {
      DB::table('worked')->where('id', $request->id)->delete();
      return back()->with('danger', 'You have deleted a work history!');
    }
}
