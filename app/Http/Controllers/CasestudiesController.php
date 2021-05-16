<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
use Image;

class CasestudiesController extends Controller
{
    public function CasestudiesIndex()
    {
      $Cases = DB::table('casestudies')->get();
      return view('Dashboard.section.casestudies', compact('Cases'));
    }

    public function CasestudiesPost(Request $request)
    {
      $isEmty = DB::table('casestudies')->get();
      if (empty($isEmpty)) {
        if (!empty($request->case_image)) {
          $randomNumber =rand();
          $logo = $request->file('case_image');
          $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
          $newLocation = 'uploads/'.$logo_rename;
          Image::make($logo)->save($newLocation,100);
        }
        $randomNumber =rand();
        $pdf = $request->file('case_pdf');
        $pdf_rename = $randomNumber.'.pdf';
        $newLocation = 'uploads/';
        $pdf->move($newLocation, $pdf_rename);
      DB::table('casestudies')->insert([
        'case_title' => $request->case_title,
        'case_thumbnal' => $logo_rename,
        'case_file' => $pdf_rename,
      ]);
    }else{
      if (!empty($request->case_thumbnal)) {
        $randomNumber =rand();
        $logo = $request->file('case_image');
        $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$logo_rename;
        Image::make($logo)->save($newLocation,100);
      }

      $randomNumber =rand();
      $pdf = $request->file('case_pdf');
      $pdf_rename = $randomNumber.'.pdf';
      $newLocation = 'uploads/';
      $pdf->move($newLocation ,$pdf_rename);

      DB::table('casestudies')->where('id', 1)->update([
        'case_title' => $request->case_title,
        'case_thumbnal' => $logo_rename,
        'case_file' => $pdf_rename,
      ]);
    }

    return back()->with('success', 'A new case study published!');
    }


    public function deleteCase(Request $request)
    {
      DB::table('casestudies')->where('id', $request->id)->delete();
      return back()->with('danger', 'A case study has been deleted!');
    }
}
