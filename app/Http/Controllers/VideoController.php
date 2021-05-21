<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Carbon\Carbon;

class VideoController extends Controller
{
    public function videoIndex()
    {
      return view('Dashboard.Section.video');
    }

    public function videoPost(Request $request)
    {
      $isEmpty = DB::table('videos')->get();
      $doubleCheck = DB::table('videos')->count();

      if ($doubleCheck == 0 ) {
        // if ($doubleCheck >= 1) {
        //   return back()->with('danger', 'You can not add more then one video');
        // }
        DB::table('videos')->insert([
          'video_title' => $request->video_title,
          'video_short_desc' => $request->video_short_desc,
          'video_link' => $request->video_link,
        ]);
      }else {
        DB::table('videos')->where('id', 1)->update([
          'video_title' => $request->video_title,
          'video_short_desc' => $request->video_short_desc,
          'video_link' => $request->video_link,
        ]);
      }


      return back()->with('success', 'Video section has been updated!');
    }

    public function videoBg(Request $request)
    {
      $isEmpty = DB::table('videobgs')->count();
      if ($isEmpty == 0) {
        if (!empty($request->video_background_image)) {
          $randomNumber =rand();
          $logo = $request->file('video_background_image');
          $rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
          $newLocation = 'uploads/'.$rename;
          Image::make($logo)->resize(1920, 646)->save($newLocation,100);
        }
        DB::table('videobgs')->insert([
          'videos_background' => $rename,
        ]);
      }else {
        if (!empty($request->video_background_image)) {
          $randomNumber =rand();
          $logo = $request->file('video_background_image');
          $company_logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
          $newLocation = 'uploads/'.$company_logo_rename;
          Image::make($logo)->resize(1920, 646)->save($newLocation,100);
        }
        DB::table('videobgs')->where('id', 1)->update([
          'videos_background' => $company_logo_rename,
        ]);
      }

      return back()->with('success', 'Video sections background image has been updated.');

    }
}
