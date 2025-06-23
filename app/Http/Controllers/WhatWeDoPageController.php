<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\WhatWeDoPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhatWeDoPageController
{


    
    public function WeDoPageData()
    {
        try {
            $WhatWeDoPageFrontData = WhatWeDoPage::latest()->get();
            return response()->json(['status' => 'success', 'WhatWeDoPageFrontData' => $WhatWeDoPageFrontData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    public function SingleWhatWeDoPageDataShow($id, Request $request)
    {
        $WhatWeDoPageData = WhatWeDoPage::find($id);

        if (!$WhatWeDoPageData) {
            abort(404, 'What We Do Page not found');
        }

        $recentPosts = WhatWeDoPage::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('components.front-end.single-what-we-do-page', [
            'WhatWeDoPageData' => $WhatWeDoPageData,
            'recentPosts' => $recentPosts
        ]);
    }


    

    public function WeDoPageList()
    {
        try {
            $user_id = Auth::id();
            $WeDoData = WhatWeDoPage::get();
            return response()->json(['status' => 'success', 'WeDoData' => $WeDoData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function WeDoPageCreate(Request $request)
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
            $WeDo = WhatWeDoPage::create([
                'short_title' => $request->input('short_title'),
                'long_title' => $request->input('long_title'),
                'short_description' => $request->input('short_description'),
                'content' => $request->input('content'),
                'status' => $request->input('status'),
                'img_url' => $img_url,
                'user_id' => $user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'WeDo Page Created Successfully',
                'newSliderId' => $WeDo->id,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
            ]);
        }
    }



}
