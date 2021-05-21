<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
use Image;

class BlogController extends Controller
{
    public function indexBlog()
    {
      return view('Dashboard.Section.blog');
    }

    public function indexBlogPost(Request $request)
    {
      if (!empty($request->blog_cover_image)) {
        $randomNumber =rand();
        $logo = $request->file('blog_cover_image');
        $coverImage = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$coverImage;
        Image::make($logo)->save($newLocation,100);
      }
      if (!empty($request->blog_cover_image)) {
        $randomNumber =rand();
        $logo = $request->file('blog_cover_image');
        $thumbnail = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$thumbnail;
        Image::make($logo)->resize(360, 206)->save($newLocation,100);
      }
      DB::table('blogs')->insert([
        'blog_title' => $request->blog_title,
        'blog_desc' => $request->blog_desc,
        'blog_thumbnal' => $thumbnail,
        'blog_cover_image' => $coverImage,
        'created_at' => Carbon::now(),
      ]);
      return back()->with('success', 'Your blog has been created added successfully!');
    }

    public function blogview(Request $request)
    {
      $blog = DB::table('blogs')->where('id', $request->id)->first();
      return view('Dashboard.Section.singleBlog',compact('blog'));
    }
    public function BlogUpdate(Request $request)
    {
      if (!empty($request->blog_cover_image)) {
        $randomNumber =rand();
        $logo = $request->file('blog_cover_image');
        $coverImage = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$coverImage;
        Image::make($logo)->save($newLocation,100);
      }
      if (!empty($request->blog_cover_image)) {
        $randomNumber =rand();
        $logo = $request->file('blog_cover_image');
        $thumbnail = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$thumbnail;
        Image::make($logo)->resize(360, 206)->save($newLocation,100);
      }

      if (empty($request->blog_cover_image)) {

        DB::table('blogs')->where('id', $request->id)->update([
          'blog_title' => $request->blog_title,
          'blog_desc' => $request->blog_desc,
          // 'blog_thumbnal' => $thumbnail,
          // 'blog_cover_image' => $coverImage,
          'created_at' => Carbon::now(),
        ]);
      }else {
        DB::table('blogs')->where('id', $request->id)->update([
          'blog_title' => $request->blog_title,
          'blog_desc' => $request->blog_desc,
          'blog_thumbnal' => $thumbnail,
          'blog_cover_image' => $coverImage,
          'created_at' => Carbon::now(),
        ]);
      }
      return back()->with('success', 'Your blog has been created added successfully!');
    }

    public function blogdelete(Request $request)
    {
      DB::table('blogs')->where('id', $request->id)->delete();
      return back()->with('danger', 'Blog has been deleted!');
    }
}
