<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inputcontroller extends Controller
{
    public function input(Request $request)
    {
        // Handling GET request to display the form
        if ($request->isMethod('get')) {
            return view('input');
        }

        // Handling POST request to store form data in session
        $NIM = $request->input('NIM');
        $nama_lengkap = $request->input('nama_lengkap');
        $kelas = $request->input('kelas');
        $nomor_telpon = $request->input('nomor_telpon');

        // Retrieve existing input data from session or initialize an empty array
        $inputData = $request->session()->get('inputData', []);

        // Add the new entry to the array
        $inputData[] = [
            'NIM' => $NIM,
            'nama_lengkap' => $nama_lengkap,
            'kelas' => $kelas,
            'nomor_telpon' => $nomor_telpon,
        ];

        // Store the updated array back to session
        $request->session()->put('inputData', $inputData);

        // Redirecting to display route
        return redirect()->route('display');
    }

    public function display(Request $request)
    {
        // Retrieve all input data from session or initialize an empty array
        $inputData = $request->session()->get('inputData', []);

        // Pass data to the view
        return view('display', ['data' => $inputData]);
    }
    public function clearSession(Request $request)
{
    // Clear all session data
    $request->session()->flush();

    // Optionally, redirect to the input form or display a success message
    return redirect()->route('input')->with('success', 'Session data cleared successfully.');
}

}
