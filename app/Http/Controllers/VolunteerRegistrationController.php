<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VolunteerRegistration;

class VolunteerRegistrationController
{
    //  public function VolunteerRegistration(Request $request)
    // {
    //     try {
    //         $nid_birth_certificate = null;
    //         $img_urls = null; // Store multiple image URLs

    //         // Handle single banner image
    //         if ($request->hasFile('nid_birth_certificate')) {
    //             $img = $request->file('nid_birth_certificate');
    //             $t = time();
    //             $file_name = $img->getClientOriginalName();
    //             $img_name = "{$t}-{$file_name}";
    //             $nid_birth_certificate = "uploads/nid-birth-certifificate/{$img_name}";
    //             $img->move(public_path('uploads/nid-birth-certifificate'), $img_name);
    //         }

    //         // Handle multiple img_url uploads
    //         if ($request->hasFile('photo')) {
    //             foreach ($request->file('photo') as $img) {
    //                 $t = time();
    //                 $file_name = $img->getClientOriginalName();
    //                 $img_name = "{$t}-{$file_name}";
    //                 $path = "uploads/volunter-photo/{$img_name}";
    //                 $img->move(public_path('uploads/volunter-photo'), $img_name);
    //                 $photos = $path;
    //             }
    //         }

    //         $VolunteerRegistration = VolunteerRegistration::create([
    //             'first_name' => $request->input('first_name'),
    //             'email' => $request->input('email'),
    //             'phone' => $request->input('phone'),
    //             'date_of_birth' => $request->input('date_of_birth'),
    //             'password' => $request->input('password'),
    //             'confirm_password' => $request->input('confirm_password'),
    //             'gender' => $request->input('gender'),
    //             'village' => $request->input('village'),
    //             'union' => $request->input('union'),
    //             'upazilla' => $request->input('upazilla'),
    //             'district' => $request->input('district'),
    //             'present_address' => $request->input('present_address'),
    //             'educational_qualification' => $request->input('educational_qualification'),
    //             'job_description' => $request->input('job_description'),
    //             'past_volunteering_experience' => $request->input('past_volunteering_experience'),
    //             'curricular_activities' => $request->input('curricular_activities'),
    //             'humanitarian_activities' => $request->input('humanitarian_activities'),
    //             'banner_image' => $banner_image,
    //         ]);

    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'News Event Created Successfully',
    //             'newSliderId' => $VolunteerRegistration->id,
    //         ]);
    //     } catch (Exception $e) {
    //         return response()->json([
    //             'status' => 'fail',
    //             'message' => $e->getMessage(),
    //         ]);
    //     }
    // }

public function VolunteerRegistration(Request $request)
{
    try {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|same:password',
            'gender' => 'required|string',
        ]);

        // Handle NID/Birth Certificate
        $nidPath = null;
        if ($request->hasFile('nid_birth_certificate')) {
            $nidFile = $request->file('nid_birth_certificate');
            $nidName = time() . '-' . $nidFile->getClientOriginalName();
            $nidPath = 'uploads/nid-birth-certifificate/' . $nidName;
            $nidFile->move(public_path('uploads/nid-birth-certifificate'), $nidName);
        }

        // Handle Photo
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoName = time() . '-' . $photoFile->getClientOriginalName();
            $photoPath = 'uploads/volunter-photo/' . $photoName;
            $photoFile->move(public_path('uploads/volunter-photo'), $photoName);
        }

        VolunteerRegistration::create([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_of_birth' => $request->date_of_birth,
            'password' => bcrypt($request->password),
            'confirm_password' => bcrypt($request->confirm_password), // optional, consider removing this
            'gender' => $request->gender,
            'village' => $request->village,
            'union' => $request->union,
            'upazilla' => $request->upazilla,
            'district' => $request->district,
            'present_address' => $request->present_address,
            'educational_qualification' => $request->educational_qualification,
            'job_description' => $request->job_description,
            'past_volunteering_experience' => $request->past_volunteering_experience,
            'curricular_activities' => $request->curricular_activities,
            'nid_birth_certificate' => $nidPath,
            'photo' => $photoPath,
            'humanitarian_activities' => $request->humanitarian_activities,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Volunteer Registration successful']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => 'Failed to register. Try again.']);
    }
}



 public function VolunteerRegistrationList()
    {
        try {
            $user_id = Auth::id();
            $VolunteerRegistrationData = VolunteerRegistration::get();
            return response()->json(['status' => 'success', 'VolunteerRegistrationData' => $VolunteerRegistrationData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }



}
