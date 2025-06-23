<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\MissionVision;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\Auth;

class MissionVisionController
{

    public function MissionVisionData(){
        $HomePageData = MissionVision::first();
        return ResponseHelper::Out('success',$HomePageData,200);
    }

    public function MissionVisionList()
    {
        try {
            $user_id = Auth::id();
            $MissionVisionData = MissionVision::get();
            return response()->json(['status' => 'success', 'MissionVisionData' => $MissionVisionData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function MissionVisionCreate(Request $request)
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
                $img_url = "uploads/mission_vision_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/mission_vision_img'), $img_name);
            }

            // Create new brand
            $MissionVision = MissionVision::create([
                'misson_title' => $request->input('misson_title'),
                'misson_desc' => $request->input('misson_desc'),
                'visions_title' => $request->input('visions_title'),
                'visions_desc' => $request->input('visions_desc'),
                'status' => $request->input('status'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Mission Vision Created Successfully',
                'newSliderId' => $MissionVision->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function MissionVisionById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = MissionVision::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function MissionVisionUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $MissionVisionData_Update = MissionVision::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
            //                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
            //            }

            // Update the cast information
            $MissionVisionData_Update->misson_title = $request->input('misson_title');
            $MissionVisionData_Update->misson_desc = $request->input('misson_desc');
            $MissionVisionData_Update->visions_title = $request->input('visions_title');
            $MissionVisionData_Update->visions_desc = $request->input('visions_desc');
            $MissionVisionData_Update->status = $request->input('status');



            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/mission_vision_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/mission_vision_img'), $img_name);


                if ($MissionVisionData_Update->img_url && file_exists(public_path($MissionVisionData_Update->img_url))) {
                    unlink(public_path($MissionVisionData_Update->img_url));
                }
                $MissionVisionData_Update->img_url = $img_url;
            }


            $MissionVisionData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Mission Vision Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function MissionVisionDelete(Request $request)
    {
        try {
            // Validation
            $request->validate(['id' => 'required|string|min:1']);

            $missionvision_id = $request->input('id');
            $missionvision_delete = MissionVision::find($missionvision_id);

            if (!$missionvision_delete) {
                return response()->json(['status' => 'fail', 'message' => 'homeabout not found.']);
            }

            // Delete image if it exists
            if ($missionvision_delete->img_url && file_exists(public_path($missionvision_delete->img_url))) {
                unlink(public_path($missionvision_delete->img_url));
            }

            // Delete homeabout
            $missionvision_delete->delete();

            return response()->json(['status' => 'success', 'message' => 'Mission Vision deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
