<?php

namespace App\Http\Controllers;

use App\Models\HeroSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class HeroSliderController
{


    public function HeroSliderData()
    {
        try {
            $HeroSliderFrontData = HeroSlider::latest()->get();
            return response()->json(['status' => 'success', 'HeroSliderFrontData' => $HeroSliderFrontData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function HeroSliderList()
    {
        try {
            $user_id = Auth::id();
            $HeroSliderData = HeroSlider::get();
            return response()->json(['status' => 'success', 'HeroSliderData' => $HeroSliderData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function HeroSliderCreate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $img_url = null;

            // Check if an image file is provided
            if ($request->hasFile('img_url')) {
                $img = $request->file('img_url');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/hero_slider_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/hero_slider_img'), $img_name);
            }

            // Create new brand
            $HeroSlider = Heroslider::create([
                'title' => $request->input('title'),
                'discription' => $request->input('discription'),
                'status' => $request->input('status'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Hero Slider Created Successfully',
                'newSliderId' => $HeroSlider->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function HeroSliderById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = HeroSlider::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function HeroSliderUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $HeroSliderData_Update = HeroSlider::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
            //                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
            //            }

            // Update the cast information
            $HeroSliderData_Update->title = $request->input('title');
            $HeroSliderData_Update->discription = $request->input('discription');
            $HeroSliderData_Update->status = $request->input('status');


            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/hero_slider_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/hero_slider_img'), $img_name);


                if ($HeroSliderData_Update->img_url && file_exists(public_path($HeroSliderData_Update->img_url))) {
                    unlink(public_path($HeroSliderData_Update->img_url));
                }
                $HeroSliderData_Update->img_url = $img_url;
            }


            $HeroSliderData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Slider Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function HeroSliderDelete(Request $request)
    {
        try {
            // Validation
            $request->validate(['id' => 'required|string|min:1']);

            $HeroSlider_id = $request->input('id');
            $HeroSlider_delete = HeroSlider::find($HeroSlider_id);

            if (!$HeroSlider_delete) {
                return response()->json(['status' => 'fail', 'message' => 'homeabout not found.']);
            }

            // Delete image if it exists
            if ($HeroSlider_delete->img_url && file_exists(public_path($HeroSlider_delete->img_url))) {
                unlink(public_path($HeroSlider_delete->img_url));
            }

            // Delete homeabout
            $HeroSlider_delete->delete();

            return response()->json(['status' => 'success', 'message' => 'Hero Slider deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
