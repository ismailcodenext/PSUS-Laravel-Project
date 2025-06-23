<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\SuccessStories;
use Illuminate\Support\Facades\Auth;

class SuccessStoriesController
{
  public function SuccessStoriesFrontEndData()
{
    try {
        $SuccessStoriesFrontData = SuccessStories::where('status', 'Active')->latest()->get();
        return response()->json([
            'status' => 'success',
            'SuccessStoriesFrontData' => $SuccessStoriesFrontData
        ]);
    } catch (Exception $e) {
        return response()->json([
            'status' => 'fail',
            'message' => $e->getMessage()
        ]);
    }
}


  public function SingleNewsEventDataShow($id, Request $request)
{
    $SuccessStoriesData = SuccessStories::find($id);

    if (!$SuccessStoriesData) {
        abort(404, 'News Event not found');
    }

    $recentPosts = SuccessStories::where('id', '!=', $id)
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

    return view('components.front-end.success-stories-single-page', [
        'SuccessStoriesData' => $SuccessStoriesData,
        'recentPosts' => $recentPosts
    ]);
}


    public function SuccessStoriesList()
    {
        try {
            $user_id = Auth::id();
            $SuccessStoriesData = SuccessStories::get();
            return response()->json(['status' => 'success', 'SuccessStoriesData' => $SuccessStoriesData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function SuccessStoriesCreate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $banner_image = null;
            $img_urls = []; // Store multiple image URLs

            // Handle single banner image
            if ($request->hasFile('banner_image')) {
                $img = $request->file('banner_image');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $banner_image = "uploads/success-stories-banner/{$img_name}";
                $img->move(public_path('uploads/success-stories-banner'), $img_name);
            }

            // Handle multiple img_url uploads
            if ($request->hasFile('img_url')) {
                foreach ($request->file('img_url') as $img) {
                    $t = time();
                    $file_name = $img->getClientOriginalName();
                    $img_name = "{$user_id}-{$t}-{$file_name}";
                    $path = "uploads/success-stories-image/{$img_name}";
                    $img->move(public_path('uploads/success-stories-image'), $img_name);
                    $img_urls[] = $path;
                }
            }

            $SuccessStories = SuccessStories::create([
                'event_heading' => $request->input('title'),
                'event_description' => $request->input('discription'),
                'status' => $request->input('status'),
                'banner_image' => $banner_image,
                'img_url' => json_encode($img_urls), // Save as JSON
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Success Stories Created Successfully',
                'newSliderId' => $SuccessStories->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function SuccessStoriesById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = SuccessStories::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    function SuccessStoriesUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $SuccessStoriesData_Update = SuccessStories::find($request->input('id'));

            $SuccessStoriesData_Update->event_heading = $request->input('event_heading');
        $SuccessStoriesData_Update->event_description = $request->input('event_description');
        $SuccessStoriesData_Update->status = $request->input('status');

        // Banner Image Upload
        if ($request->hasFile('banner_image')) {
            $img = $request->file('banner_image');
            $filename = "{$user_id}-" . time() . '-' . $img->getClientOriginalName();
            $path = "uploads/success-stories-banner/{$filename}";
            $img->move(public_path('uploads/success-stories-banner'), $filename);

            // Delete old banner image
            if ($SuccessStoriesData_Update->banner_image && file_exists(public_path($SuccessStoriesData_Update->banner_image))) {
                unlink(public_path($SuccessStoriesData_Update->banner_image));
            }
            $SuccessStoriesData_Update->banner_image = $path;
        }

        // Multiple SuccessStoriesData_Update Event Images
        if ($request->hasFile('img')) {
            $imgFiles = $request->file('img');
            $paths = [];

            // Delete old images (if any)
            if ($SuccessStoriesData_Update->img_url) {
                $oldImages = json_decode($SuccessStoriesData_Update->img_url, true);
                if (is_array($oldImages)) {
                    foreach ($oldImages as $oldImg) {
                        if (file_exists(public_path($oldImg))) {
                            unlink(public_path($oldImg));
                        }
                    }
                }
            }

            // Upload new images
            foreach ($imgFiles as $imgFile) {
                $filename = "{$user_id}-" . time() . '-' . $imgFile->getClientOriginalName();
                $path = "uploads/success-stories-image/{$filename}";
                $imgFile->move(public_path('uploads/success-stories-image'), $filename);
                $paths[] = $path;
            }

            // Save as JSON array string
            $SuccessStoriesData_Update->img_url = json_encode($paths);
        }

        $SuccessStoriesData_Update->save();


            $SuccessStoriesData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Success Stories Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    public function SuccessStoriesDelete(Request $request)
    {
         try {
        // Validation (assuming id is integer)
        $request->validate([
            'id' => 'required|integer'
        ]);

        $SuccessStories = SuccessStories::find($request->input('id'));

        if (!$SuccessStories) {
            return response()->json(['status' => 'fail', 'message' => 'News Event not found.']);
        }

        // Delete banner image file if exists
        if ($SuccessStories->banner_image && file_exists(public_path($SuccessStories->banner_image))) {
            unlink(public_path($SuccessStories->banner_image));
        }

        // Delete multiple images in img_url (stored as JSON array or string)
        if ($SuccessStories->img_url) {
            // Try to decode JSON first
            $images = json_decode($SuccessStories->img_url, true);

            // If json_decode failed (null), fallback to string handling
            if (!$images) {
                // Try splitting by comma (in case it's a CSV string)
                $images = explode(',', $SuccessStories->img_url);
            }

            if (is_array($images)) {
                foreach ($images as $imagePath) {
                    $imagePath = trim($imagePath);
                    if ($imagePath && file_exists(public_path($imagePath))) {
                        unlink(public_path($imagePath));
                    }
                }
            }
        }

        // Delete the SuccessStories record
        $SuccessStories->delete();

        return response()->json(['status' => 'success', 'message' => 'News Event deleted successfully']);
    } catch (Exception $e) {
        return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
    }
    }
}
