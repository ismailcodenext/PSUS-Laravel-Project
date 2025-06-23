<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ProgramController
{
    public function ProgramList()
    {
        try {
            $programData = Program::all();
            return response()->json(['status' => 'success', 'programData' => $programData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function ProgramCreate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $featured_img = null;
            $uploadedPhotos = [];

            // Handle Featured Image
            if ($request->hasFile('featured_img')) {
                $img = $request->file('featured_img');
                $img_name = $user_id . '-' . time() . '-' . $img->getClientOriginalName();
                $featured_img = "uploads/program_img/{$img_name}";
                $img->move(public_path('uploads/program_img'), $img_name);
            }

            // Handle Photos (Multiple Images)
            if ($request->hasFile('photos_files')) {
                foreach ($request->file('photos_files') as $photo) {
                    $photoName = time() . '-' . $photo->getClientOriginalName();
                    $photo->move(public_path('uploads/program_photos'), $photoName);
                    $uploadedPhotos[] = "uploads/program_photos/{$photoName}";
                }
            }

            // Save Data to Database
            $program = Program::create([
                'title' => $request->title,
                'description' => $request->description,
                'program_category_id' => $request->program_category_id,
                'user_id' => $user_id,
                'featured_img' => $featured_img,
                'photos' => json_encode($uploadedPhotos), // Store as JSON
            ]);

            return response()->json(['status' => 'success', 'message' => 'Program Created Successfully', 'programId' => $program->id]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    public function ProgramById($id)
    {
        try {
            $program = Program::findOrFail($id);
            return response()->json(['status' => 'success', 'program' => $program]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function ProgramUpdate(Request $request, $id)
    {
        try {
            // Find Program
            $program = Program::findOrFail($id);

            // Validate Request
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'photos' => 'nullable|string',
                'program_category_id' => 'required|integer',
                'status' => 'nullable|string',
                'featured_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Handle Image Upload
            $featured_img = $program->featured_img;
            if ($request->hasFile('featured_img')) {
                $img = $request->file('featured_img');
                $img_name = Auth::id() . '-' . time() . '-' . $img->getClientOriginalName();
                $new_featured_img = "uploads/program_img/{$img_name}";
                $img->move(public_path('uploads/program_img'), $img_name);

                // Delete Old Image
                if ($featured_img && file_exists(public_path($featured_img))) {
                    unlink(public_path($featured_img));
                }
                $featured_img = $new_featured_img;
            }

            // Update Program
            $program->update([
                'title' => $request->title,
                'description' => $request->description,
                'photos' => $request->photos,
                'program_category_id' => $request->program_category_id,
                'status' => $request->status,
                'featured_img' => $featured_img,
            ]);

            return response()->json(['status' => 'success', 'message' => 'Program Updated Successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function ProgramDelete($id)
    {
        try {
            $program = Program::findOrFail($id);

            // Delete Image
            if ($program->featured_img && file_exists(public_path($program->featured_img))) {
                unlink(public_path($program->featured_img));
            }

            $program->delete();

            return response()->json(['status' => 'success', 'message' => 'Program deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
}
