<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function contact_us_post(Request $request)
    {
      DB::table('contacts')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'telephone' => $request->telephone,
        'company' => $request->company,
        'services' => $request->services,
        'message' => $request->message,
      ]);

      return back()->with('success', 'We will contact you soon!');
    }

    public function all_contact()
    {
      $all_contact = DB::table('contacts')->get();
      return view('Dashboard.Section.contacts',compact('all_contact'));
    }

    public function contactsDelete(Request $request)
    {
      DB::table('contacts')->where('id', $request->id)->delete();
      return back()->with('danger', 'Contact deleted!');
    }
}
