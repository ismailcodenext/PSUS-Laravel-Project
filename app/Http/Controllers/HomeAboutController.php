<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\HomeAbout;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\Auth;

class HomeAboutController
{

    // public function HomeAboutData(){
    //     $HomePageData = HomeAbout::first();
    //     return ResponseHelper::Out('success',$HomePageData,200);
    // }

    public function HomeAboutData()
    {
        try {
            $AboutSectionFrontData = HomeAbout::latest()->get();
            return response()->json(['status' => 'success', 'AboutSectionFrontData' => $AboutSectionFrontData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

       public function SingleAboutPageDataShow($id, Request $request)
    {
        $HomeAboutData = HomeAbout::find($id);

        if (!$HomeAboutData) {
            abort(404, 'Home About Page not found');
        }

        $recentPosts = HomeAbout::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('components.front-end.about-page', [
            'HomeAboutData' => $HomeAboutData,
            'recentPosts' => $recentPosts
        ]);
    }



    public function HomeAboutList()
    {
        try {
            $user_id = Auth::id();
            $HomeAboutData = HomeAbout::get();
            return response()->json(['status' => 'success', 'HomeAboutData' => $HomeAboutData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function HomeAboutCreate(Request $request)
    {
        try {
            $user_id = Auth::id();


            // Check if an image file is provided
            if ($request->hasFile('img_url')) {
                $img = $request->file('img_url');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/home_about_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/home_about_img'), $img_name);
            }

            // Create new homeabout
            $HomeAbout = HomeAbout::create([
                'title_1' => $request->input('title_1'),
                'title_1_desc' => $request->input('title_1_desc'),
                'short_content' => $request->input('short_content'),
                'long_content' => $request->input('long_content'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Home About Created Successfully',
                'newSliderId' => $HomeAbout->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function HomeAboutById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = HomeAbout::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public  function HomeAboutUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $HomeAboutData_Update = HomeAbout::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
            //                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
            //            }

            // Update the cast information
            $HomeAboutData_Update->title_1 = $request->input('title_1');
            $HomeAboutData_Update->title_1_desc = $request->input('title_1_desc');
            $HomeAboutData_Update->short_content = $request->input('short_content');
            $HomeAboutData_Update->long_content = $request->input('long_content');



            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/home_about_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/home_about_img'), $img_name);


                if ($HomeAboutData_Update->img_url && file_exists(public_path($HomeAboutData_Update->img_url))) {
                    unlink(public_path($HomeAboutData_Update->img_url));
                }
                $HomeAboutData_Update->img_url = $img_url;
            }


            $HomeAboutData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Home About Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function homeaboutDelete(Request $request)
    {
        try {
            // Validation
            $request->validate(['id' => 'required|string|min:1']);

            $homeabout_id = $request->input('id');
            $homeabout_delete = HomeAbout::find($homeabout_id);

            if (!$homeabout_delete) {
                return response()->json(['status' => 'fail', 'message' => 'homeabout not found.']);
            }

            // Delete image if it exists
            if ($homeabout_delete->img_url && file_exists(public_path($homeabout_delete->img_url))) {
                unlink(public_path($homeabout_delete->img_url));
            }

            // Delete homeabout
            $homeabout_delete->delete();

            return response()->json(['status' => 'success', 'message' => 'homeabout deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
