<?php

namespace App\Http\Controllers;

use App\Models\Eventinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class EventinfoController
{

    public function EventInfoData()
    {
        try {
            $EventInfoData = EventInfo::latest()->get();
            return response()->json(['status' => 'success', 'EventInfoData' => $EventInfoData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function EventInfoList()
    {
        try {
            $user_id = Auth::id();
            $EventInfoData = EventInfo::get();
            return response()->json(['status' => 'success', 'EventInfoData' => $EventInfoData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function EventInfoCreate(Request $request)
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
                $img_url = "uploads/event_info_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/event_info_img'), $img_name);
            }

            // Create new brand
            $EventInfo = EventInfo::create([
                'title' => $request->input('title'),
                'discription' => $request->input('discription'),
                'status' => $request->input('status'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'EventInfo Created Successfully',
                'newSliderId' => $EventInfo->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function EventInfoById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = EventInfo::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function EventInfoUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $EventInfoData_Update = EventInfo::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
            //                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
            //            }

            // Update the cast information
            $EventInfoData_Update->title = $request->input('title');
            $EventInfoData_Update->discription = $request->input('discription');
            $EventInfoData_Update->status = $request->input('status');



            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/event_info_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/event_info_img'), $img_name);


                if ($EventInfoData_Update->img_url && file_exists(public_path($EventInfoData_Update->img_url))) {
                    unlink(public_path($EventInfoData_Update->img_url));
                }
                $EventInfoData_Update->img_url = $img_url;
            }


            $EventInfoData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Event Info Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function EventInfoDelete(Request $request)
    {
        try {
            // Validation
            $request->validate(['id' => 'required|string|min:1']);

            $EventInfo_id = $request->input('id');
            $eventinfo_delete = EventInfo::find($EventInfo_id);

            if (!$eventinfo_delete) {
                return response()->json(['status' => 'fail', 'message' => 'homeabout not found.']);
            }

            // Delete image if it exists
            if ($eventinfo_delete->img_url && file_exists(public_path($eventinfo_delete->img_url))) {
                unlink(public_path($eventinfo_delete->img_url));
            }

            // Delete homeabout
            $eventinfo_delete->delete();

            return response()->json(['status' => 'success', 'message' => 'Event Info deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
