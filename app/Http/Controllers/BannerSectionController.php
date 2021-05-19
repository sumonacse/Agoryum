<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
use Image;

class BannerSectionController extends Controller
{
    public function index()
    {
      $Banner = DB::table('banner_sections')->where('id', 1)->first();
      return view('Dashboard.Section.banner',compact('Banner'));
    }

    public function BannerSection(Request $request)
    {
      $logo_rename = "";
      $isEmpty = DB::table('banner_sections')->where('id', 1)->first();
      if (empty($isEmpty)) {
        if (!empty($request->banner_image)) {
          $randomNumber =rand();
          $logo = $request->file('banner_image');
          $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
          $newLocation = 'uploads/'.$logo_rename;
          Image::make($logo)->save($newLocation,100);
        }
        DB::table('banner_sections')->insert([
          'bannerSectionOne' => $request->bannerTitleOne,
          'bannerSectionTwo' => $request->bannerTitleTwo,
          'bannerSectionThree' => $request->bannerTitleThree,
          'image' => $logo_rename,
          'shortDesc' => $request->bannerDesc,
          'facebook_link' => $request->facebook_link,
          'linkedin_link' => $request->linkedin_link,
          'twitter_link' => $request->twitter_link,
        ]);
      }else {
        if (!empty($request->banner_image)) {
          $randomNumber =rand();
          $logo = $request->file('banner_image');
          $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
          $newLocation = 'uploads/'.$logo_rename;
          Image::make($logo)->save($newLocation,100);
        }
        DB::table('banner_sections')->where('id', 1)->update([
          'bannerSectionOne' => $request->bannerTitleOne,
          'bannerSectionTwo' => $request->bannerTitleTwo,
          'bannerSectionThree' => $request->bannerTitleThree,
          'image' => $logo_rename,
          'shortDesc' => $request->bannerDesc,
          'facebook_link' => $request->facebook_link,
          'linkedin_link' => $request->linkedin_link,
          'twitter_link' => $request->twitter_link,
        ]);
      }



      return back()->with('success', 'Banner Updated successfully!');
    }

    public function disable_banner()
    {
      DB::table('banner_sections')->where('id', 1)->update([
        'status' => 0,
      ]);

      return back()->with('danger', 'You have disabled the banner section!');
    }

    public function enable_banner()
    {
      DB::table('banner_sections')->where('id', 1)->update([
        'status' => 1,
      ]);

      return back()->with('success', 'You have enable the banner section!');
    }
}
