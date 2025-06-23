<?php

namespace App\Http\Controllers;

use App\Models\ProgramCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ProgramCategoryController
{

    public function ProgramCategoryList()
    {
        try {
            $user_id = Auth::id();
            $ProgramCategoryData = ProgramCategory::get();
            return response()->json(['status' => 'success', 'ProgramCategoryData' => $ProgramCategoryData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function ProgramCategoryCreate(Request $request)
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
                $img_url = "uploads/program_category_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/program_category_img'), $img_name);
            }

            // Create new brand
            $ProgramCategory = ProgramCategory::create([
                'name' => $request->input('name'),
                'status' => $request->input('status'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Program Category Created Successfully',
                'newSliderId' => $ProgramCategory->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function ProgramCategoryById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = ProgramCategory::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function ProgramCategoryUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $ProgramCategoryData_Update = ProgramCategory::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
            //                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
            //            }

            // Update the cast information
            $ProgramCategoryData_Update->name = $request->input('name');
            $ProgramCategoryData_Update->status = $request->input('status');



            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/program_category_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/program_category_img'), $img_name);


                if ($ProgramCategoryData_Update->img_url && file_exists(public_path($ProgramCategoryData_Update->img_url))) {
                    unlink(public_path($ProgramCategoryData_Update->img_url));
                }
                $ProgramCategoryData_Update->img_url = $img_url;
            }


            $ProgramCategoryData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Program Category Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function ProgramCategoryDelete(Request $request)
    {
        try {
            // Validation
            $request->validate(['id' => 'required|string|min:1']);

            $programcategory_id = $request->input('id');
            $programcategory_delete = ProgramCategory::find($programcategory_id);

            if (!$programcategory_delete) {
                return response()->json(['status' => 'fail', 'message' => 'homeabout not found.']);
            }

            // Delete image if it exists
            if ($programcategory_delete->img_url && file_exists(public_path($programcategory_delete->img_url))) {
                unlink(public_path($programcategory_delete->img_url));
            }

            // Delete homeabout
            $programcategory_delete->delete();

            return response()->json(['status' => 'success', 'message' => 'Program Category deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
