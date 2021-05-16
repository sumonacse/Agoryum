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
      $client = DB::table('clients')->inRandomOrder()->limit(8)->get();
      $technologies = DB::table('technologies')->get();
      return view('welcome', compact('banner','cases','Serve','client','technologies'));
    }
}
