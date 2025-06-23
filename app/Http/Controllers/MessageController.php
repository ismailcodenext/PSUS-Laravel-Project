<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class MessageController
{
    public function MessageList()
    {
        try {
            $user_id = Auth::id();
            $MessageData = Message::get();
            return response()->json(['status' => 'success', 'MessageData' => $MessageData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function MessageCreate(Request $request)
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
                $img_url = "uploads/message-img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/message-img'), $img_name);
            }

            // Create new brand
            $Message = Message::create([
                'message_name' => $request->input('message_name'),
                'message_desc' => $request->input('message_desc'),
                'company_name' => $request->input('company_name'),
                'message_details' => $request->input('message_details'),
                'status' => $request->input('status'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Message Created Successfully',
                'newSliderId' => $Message->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function MessageById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = Message::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function MessageUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $MessageData_Update = Message::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
            //                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
            //            }

            // Update the cast information
            $MessageData_Update->message_name = $request->input('message_name');
            $MessageData_Update->message_desc = $request->input('message_desc');
            $MessageData_Update->company_name = $request->input('company_name');
            $MessageData_Update->message_details = $request->input('message_details');
            $MessageData_Update->status = $request->input('status');



            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/company_info_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/company_info_img'), $img_name);


                if ($MessageData_Update->img_url && file_exists(public_path($MessageData_Update->img_url))) {
                    unlink(public_path($MessageData_Update->img_url));
                }
                $MessageData_Update->img_url = $img_url;
            }


            $MessageData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Company Info Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function MessageDelete(Request $request)
    {
        try {
            // Validation
            $request->validate(['id' => 'required|string|min:1']);

            $message_id = $request->input('id');
            $message_delete = Message::find($message_id);

            if (!$message_delete) {
                return response()->json(['status' => 'fail', 'message' => 'homeabout not found.']);
            }

            // Delete image if it exists
            if ($message_delete->img_url && file_exists(public_path($message_delete->img_url))) {
                unlink(public_path($message_delete->img_url));
            }

            // Delete homeabout
            $message_delete->delete();

            return response()->json(['status' => 'success', 'message' => 'Message deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
