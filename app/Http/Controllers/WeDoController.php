<?php

namespace App\Http\Controllers;

use App\Models\WeDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class WeDoController
{

    public function WeDoData()
    {
        try {
            $WeDoFrontData = WeDo::latest()->get();
            return response()->json(['status' => 'success', 'WeDoFrontData' => $WeDoFrontData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    public function SingleWeDoDataShow($id, Request $request)
    {
        $WeDoData = WeDo::find($id);

        if (!$WeDoData) {
            abort(404, 'We Do not found');
        }

        $recentPosts = WeDo::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('components.front-end.single-we-do', [
            'WeDoData' => $WeDoData,
            'recentPosts' => $recentPosts
        ]);
    }



    public function WeDoList()
    {
        try {
            $user_id = Auth::id();
            $WeDoData = WeDo::get();
            return response()->json(['status' => 'success', 'WeDoData' => $WeDoData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function WeDoCreate(Request $request)
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
                $img_url = "uploads/we_do_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/we_do_img'), $img_name);
            }

            // Create new brand
            $WeDo = WeDo::create([
                'title' => $request->input('title'),
                'discription' => $request->input('discription'),
                'status' => $request->input('status'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'WeDo Created Successfully',
                'newSliderId' => $WeDo->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }


    public function WeDoById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = WeDo::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function WeDoUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $WeDoData_Update = WeDo::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
            //                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
            //            }

            // Update the cast information
            $WeDoData_Update->title = $request->input('title');
            $WeDoData_Update->discription = $request->input('discription');
            $WeDoData_Update->status = $request->input('status');



            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/we-do_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/we-do_img'), $img_name);


                if ($WeDoData_Update->img_url && file_exists(public_path($WeDoData_Update->img_url))) {
                    unlink(public_path($WeDoData_Update->img_url));
                }
                $WeDoData_Update->img_url = $img_url;
            }


            $WeDoData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'We Do Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function WeDoDelete(Request $request)
    {
        try {
            // Validation
            $request->validate(['id' => 'required|string|min:1']);

            $wedo_id = $request->input('id');
            $wedo_delete = WeDo::find($wedo_id);

            if (!$wedo_delete) {
                return response()->json(['status' => 'fail', 'message' => 'homeabout not found.']);
            }

            // Delete image if it exists
            if ($wedo_delete->img_url && file_exists(public_path($wedo_delete->img_url))) {
                unlink(public_path($wedo_delete->img_url));
            }

            // Delete homeabout
            $wedo_delete->delete();

            return response()->json(['status' => 'success', 'message' => 'We Do deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
