<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController
{
    public function MenuList()
{
    try {
        // Fetch all categories
        $MenuData = Menu::all();
        return response()->json(['status' => 'success', 'MenuData' => $MenuData]);
    } catch (Exception $e) {
        return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
    }
}


public function MenuCreate(Request $request)
{
    try {
        $user_id = Auth::id();

        // Create the Menu
        $Menu = Menu::create([
            'menu_name' => $request->input('menu_name'),
            'menu_url' => $request->input('menu_url'),
            'status' => $request->input('status'),
            'user_id' => $user_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => "Menu Created Successfully",
            'newMenuId' => $Menu->id,
        ]);

    } catch (Exception $e) {
        return response()->json([
            'status' => 'fail',
            'message' => $e->getMessage(),
        ]);
    }
}


}
