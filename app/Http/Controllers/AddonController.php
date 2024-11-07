<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu_Addon;
use App\Models\Menu;

class AddonController extends Controller
{
    public function getPrice(Request $request)
    {
        // Validate that menu_id was provided
        $request->validate([
            'menu_id' => 'required|integer',
        ]);

        // Fetch add-ons where menu_id matches the chosen menu ID
        $menuId = $request->input('menu_id');
        $menuO = Menu::where('menu_id', $menuId)->get(['menu_name as menuname', 'menu_price as menuprice', 'menu_image as menuimage']);

        // Return the add-ons as a JSON response
        return response()->json($menuO);
    }
    public function getAddons(Request $request)
    {
        // Validate that menu_id was provided
        $request->validate([
            'menu_id' => 'required|integer',
        ]);

        // Fetch add-ons where menu_id matches the chosen menu ID
        $menuId = $request->input('menu_id');
        $addons = Menu_Addon::where('menu_id', $menuId)->get(['addon_name as name', 'addon_price as price']);

        // Return the add-ons as a JSON response
        return response()->json($addons);
    }

}
