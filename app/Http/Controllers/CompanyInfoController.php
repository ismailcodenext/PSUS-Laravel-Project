<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\Auth;

class CompanyInfoController
{

    public function CompanyInfoData(){
        $CompanyData = CompanyInfo::first();
        return ResponseHelper::Out('success',$CompanyData,200);
    }


    public function CompanyInfoList()
    {
        try {
            $user_id = Auth::id();
            $CompanyInfoData = CompanyInfo::get();
            return response()->json(['status' => 'success', 'CompanyInfoData' => $CompanyInfoData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function CompanyInfoCreate(Request $request)
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
                $img_url = "uploads/company-info-img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/company-info-img'), $img_name);
            }

            // Create new brand
            $CompanyInfo = CompanyInfo::create([
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'mobile' => $request->input('mobile'),
                'description' => $request->input('description'),
                'fb_link' => $request->input('fb_link'),
                'insta_link' => $request->input('insta_link'),
                'twitter_link' => $request->input('twitter_link'),
                'linkedin_link' => $request->input('linkedin_link'),
                'youtube_link' => $request->input('youtube_link'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Company Info Created Successfully',
                'newSliderId' => $CompanyInfo->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function CompanyInfoById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = CompanyInfo::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CompanyInfoUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $CompanyInfoData_Update = CompanyInfo::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
            //                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
            //            }

            // Update the cast information
            $CompanyInfoData_Update->email = $request->input('email');
            $CompanyInfoData_Update->address = $request->input('address');
            $CompanyInfoData_Update->mobile = $request->input('mobile');
            $CompanyInfoData_Update->description = $request->input('description');
            $CompanyInfoData_Update->fb_link = $request->input('fb_link');
            $CompanyInfoData_Update->insta_link = $request->input('insta_link');
            $CompanyInfoData_Update->twitter_link = $request->input('twitter_link');
            $CompanyInfoData_Update->linkedin_link = $request->input('linkedin_link');
            $CompanyInfoData_Update->youtube_link = $request->input('youtube_link');



            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/company_info_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/company_info_img'), $img_name);


                if ($CompanyInfoData_Update->img_url && file_exists(public_path($CompanyInfoData_Update->img_url))) {
                    unlink(public_path($CompanyInfoData_Update->img_url));
                }
                $CompanyInfoData_Update->img_url = $img_url;
            }


            $CompanyInfoData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Company Info Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function CompanyInfoDelete(Request $request)
    {
        try {
            // Validation
            $request->validate(['id' => 'required|string|min:1']);

            $companyinfo_id = $request->input('id');
            $companyinfo_delete = CompanyInfo::find($companyinfo_id);

            if (!$companyinfo_delete) {
                return response()->json(['status' => 'fail', 'message' => 'homeabout not found.']);
            }

            // Delete image if it exists
            if ($companyinfo_delete->img_url && file_exists(public_path($companyinfo_delete->img_url))) {
                unlink(public_path($companyinfo_delete->img_url));
            }

            // Delete homeabout
            $companyinfo_delete->delete();

            return response()->json(['status' => 'success', 'message' => 'companyinfo deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
