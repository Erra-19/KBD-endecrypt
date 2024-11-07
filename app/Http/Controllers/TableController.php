<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Customer;

class TableController extends Controller
{
    public function showTable(Request $request)
    {
        // Retrieve the 'id' query parameter from the request
        $id = $request->query('id');

        // Fetch the table data based on the ID
        $table = Table::find($id);

        // Check if the table exists
        if (!$table) {
            return redirect()->back()->with('error', 'Table not found');
        }

        // Pass the table data to the view
        return view('customer.customer_login', [
            'table_number' => $table->table_number,
            'table_code' => $table->table_code,
        ]);
    }

    public function confirmLogin(Request $request)
    {
        // Validate the input
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'table_number' => 'required|integer',
            'table_code' => 'required|string',
        ]);

        // Create a new customer entry
        $customer=Customer::create([
            'customer_name' => $request->input('customer_name'),
            'table_code' => $request->input('table_code'),
        ]);

        // Store customer name in the session
        session()->put('customer_name', $request->input('customer_name'));
        session()->put('table_id', $request->input('table_number'));

        // Redirect to the menu page with the table ID
        return redirect()->route('menu.makanan', [
            'id' => $request->input('table_number'),
            'customer'=>$customer,
        ]);
    }
    public function logout(Request $request)
    {
        $tableId = session()->get('table_id');
        $request->session()->flush();
        return redirect()->route('show-table', ['id' => $tableId]);
    }
}
