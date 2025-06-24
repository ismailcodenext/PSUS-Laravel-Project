<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Contact;
use App\Mail\ContactUsUser;
use App\Mail\ContactUsAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController
{


public function ContactPageData(Request $request)
{
    $data = [
        'first_name'=> $request->first_name,
        'last_name'=> $request->last_name,
        'email'=> $request->email,
        'mobile'=> $request->mobile,
        'city'=> $request->city,
        'region'=> $request->region,
        'description'=> $request->description,
    ];

    // Send email to admin (always)
    Mail::to('robi.cnits@gmail.com')->send(new ContactUsAdmin($data));

    // Send confirmation email to user only if email is provided
    if (!empty($request->email)) {
        Mail::to($request->email)->send(new ContactUsUser($data));
    }

    // Save in database
    Contact::create($data);

    return redirect()->back()->with('success', 'Message sent successfully!');
}


    public function ContactInfoList()
    {
        try {
            $user_id = Auth::id();
            $ContactInfoData = Contact::get();
            return response()->json(['status' => 'success', 'ContactInfoData' => $ContactInfoData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


}
