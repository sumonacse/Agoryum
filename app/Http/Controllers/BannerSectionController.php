<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class BannerSectionController extends Controller
{
    public function index()
    {
      return view('Dashboard.Section.banner');
    }

    public function BannerSection(Request $request)
    {
      DB::table('banner_sections')->insert([
        'bannerSectionOne' => $request->bannerTitleOne,
        'bannerSectionTwo' => $request->bannerTitleTwo,
        'bannerSectionThree' => $request->bannerTitleThree,
        'image' => "55",
        'shortDesc' => $request->bannerDesc,
        'facebook_link' => $request->facebook_link,
        'linkedin_link' => $request->linkedin_link,
        'twitter_link' => $request->twitter_link,
      ]);
    }
}
