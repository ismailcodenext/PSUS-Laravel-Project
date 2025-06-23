<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsEventController
{
  public function NewsEventFrontEndData()
{
    try {
        $NewsEventFrontData = NewsEvent::where('status', 'Active')->latest()->get();
        return response()->json([
            'status' => 'success',
            'NewsEventFrontData' => $NewsEventFrontData
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
    $NewsEventData = NewsEvent::find($id);

    if (!$NewsEventData) {
        abort(404, 'News Event not found');
    }

    $recentPosts = NewsEvent::where('id', '!=', $id)
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

    return view('components.front-end.news-event-single-page', [
        'NewsEventData' => $NewsEventData,
        'recentPosts' => $recentPosts
    ]);
}


    public function NewsEventList()
    {
        try {
            $user_id = Auth::id();
            $NewsEventData = NewsEvent::get();
            return response()->json(['status' => 'success', 'NewsEventData' => $NewsEventData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function NewsEventCreate(Request $request)
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
                $banner_image = "uploads/news-event-banner/{$img_name}";
                $img->move(public_path('uploads/news-event-banner'), $img_name);
            }

            // Handle multiple img_url uploads
            if ($request->hasFile('img_url')) {
                foreach ($request->file('img_url') as $img) {
                    $t = time();
                    $file_name = $img->getClientOriginalName();
                    $img_name = "{$user_id}-{$t}-{$file_name}";
                    $path = "uploads/news-event-image/{$img_name}";
                    $img->move(public_path('uploads/news-event-image'), $img_name);
                    $img_urls[] = $path;
                }
            }

            $newsEvent = NewsEvent::create([
                'event_heading' => $request->input('title'),
                'event_description' => $request->input('discription'),
                'status' => $request->input('status'),
                'banner_image' => $banner_image,
                'img_url' => json_encode($img_urls), // Save as JSON
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'News Event Created Successfully',
                'newSliderId' => $newsEvent->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function NewsEventById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = NewsEvent::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

public function NewsEventUpdate(Request $request)
{
    try {
        $user_id = Auth::id();
        $news = NewsEvent::findOrFail($request->input('id'));

        $news->event_heading = $request->input('event_heading');
        $news->event_description = $request->input('event_description');
        $news->status = $request->input('status');

        // Banner Image Upload
        if ($request->hasFile('banner_image')) {
            $img = $request->file('banner_image');
            $filename = "{$user_id}-" . time() . '-' . $img->getClientOriginalName();
            $path = "uploads/news-event-banner/{$filename}";
            $img->move(public_path('uploads/news-event-banner'), $filename);

            // Delete old banner image
            if ($news->banner_image && file_exists(public_path($news->banner_image))) {
                unlink(public_path($news->banner_image));
            }
            $news->banner_image = $path;
        }

        // Multiple News Event Images
        if ($request->hasFile('img')) {
            $imgFiles = $request->file('img');
            $paths = [];

            // Delete old images (if any)
            if ($news->img_url) {
                $oldImages = json_decode($news->img_url, true);
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
                $path = "uploads/news-event-image/{$filename}";
                $imgFile->move(public_path('uploads/news-event-image'), $filename);
                $paths[] = $path;
            }

            // Save as JSON array string
            $news->img_url = json_encode($paths);
        }

        $news->save();

        return response()->json(['status' => 'success', 'message' => 'News Event Update Successful']);
    } catch (Exception $e) {
        return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
    }
}


public function NewsEventDelete(Request $request)
{
    try {
        // Validation (assuming id is integer)
        $request->validate([
            'id' => 'required|integer'
        ]);

        $newsEvent = NewsEvent::find($request->input('id'));

        if (!$newsEvent) {
            return response()->json(['status' => 'fail', 'message' => 'News Event not found.']);
        }

        // Delete banner image file if exists
        if ($newsEvent->banner_image && file_exists(public_path($newsEvent->banner_image))) {
            unlink(public_path($newsEvent->banner_image));
        }

        // Delete multiple images in img_url (stored as JSON array or string)
        if ($newsEvent->img_url) {
            // Try to decode JSON first
            $images = json_decode($newsEvent->img_url, true);

            // If json_decode failed (null), fallback to string handling
            if (!$images) {
                // Try splitting by comma (in case it's a CSV string)
                $images = explode(',', $newsEvent->img_url);
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

        // Delete the NewsEvent record
        $newsEvent->delete();

        return response()->json(['status' => 'success', 'message' => 'News Event deleted successfully']);
    } catch (Exception $e) {
        return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
    }
}
  
}
