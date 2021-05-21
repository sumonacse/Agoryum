<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
      return view('Dashboard.Section.service');
    }
    public function ServicePost(Request $request)
    {

      if (!empty($request->service_banner)) {
        $randomNumber =rand();
        $logo = $request->file('service_banner');
        $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$logo_rename;
        Image::make($logo)->save($newLocation,100);
      }
      if (!empty($request->service_thumbnal)) {
        $randomNumber =rand();
        $logo = $request->file('service_thumbnal');
        $thumbnal_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$thumbnal_rename;
        Image::make($logo)->resize(445, 676)->save($newLocation,100);
      }
      $slug = Str::slug($request->service_title, '-');
      DB::table('services')->insert([
        'service_title' => $request->service_title,
        'slug' => $slug,
        'service_desc' => $request->service_desc,
        'service_banner' => $logo_rename,
        'service_thumbnal' => $thumbnal_rename,
      ]);

      return back()->with('success', 'Service has been added successfuly!');
    }

    public function allServices(Request $request)
    {
      $services = DB::table('services')->get();
      return view('Dashboard.Section.all_services',compact('services'));
    }

    public function ServiceDelete(Request $request)
    {
      DB::table('services')->where('id', $request->id)->delete();
      return back()->with('danger', 'Services has been deleted!');
    }

    public function ServiceView(Request $request)
    {
      $Service = DB::table('services')->where('slug', $request->slug)->first();
      $AllService = DB::table('services')->get();
      return view('Home.service',compact('Service','AllService'));
    }

}
