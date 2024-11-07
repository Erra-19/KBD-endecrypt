<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Menu_Category;
use App\Models\Menu;

class MenuController extends Controller
{
    public function MenuMakanan($id)
    {
        // Check if customer_name exists in the session
        if (!session()->has('customer_name')) {
            return redirect()->route('show-table', ['id' => $id])
                            ->with('error', 'Please log in to access the menu.');
        }

        // Retrieve customer name and menu items if the user is authenticated
        $customerName = session('customer_name');
        $menu = Menu::where('menu_category_id', 1)->get();

        return view('customer.customer_menu', [
            'menu' => $menu,
            'customer_name' => $customerName,
            'table_id' => $id
        ]);
    }

    public function MenuMinuman($id)
    {
        // Check if customer_name exists in the session
        if (!session()->has('customer_name')) {
            return redirect()->route('show-table', ['id' => $id])
                            ->with('error', 'Please log in to access the menu.');
        }

        // Retrieve customer name and menu items if the user is authenticated
        $customerName = session('customer_name');
        $menu = Menu::where('menu_category_id', 2)->get();

        return view('customer.customer_menu', [
            'menu' => $menu,
            'customer_name' => $customerName,
            'table_id' => $id
        ]);
    }
}
