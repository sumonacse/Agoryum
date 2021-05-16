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

      if (empty($isEmpty)) {
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
}
