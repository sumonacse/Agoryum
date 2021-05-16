<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
      $banner = DB::table('banner_sections')->where('id', 1)->first();
      $cases = DB::table('casestudies')->get();
      $Serve = DB::table('services')->get();
      return view('welcome', compact('banner','cases','Serve'));
    }
}
