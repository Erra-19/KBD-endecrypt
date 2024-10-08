<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inputcontroller extends Controller
{
    public function input(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('input');
        }

        $NIM = $request->input('NIM');
        $nama_lengkap = $request->input('nama_lengkap');
        $kelas = $request->input('kelas');
        $nomor_telpon = $request->input('nomor_telpon');
        $inputData = $request->session()->get('inputData', []);

        $inputData[] = [
            'NIM' => $NIM,
            'nama_lengkap' => $nama_lengkap,
            'kelas' => $kelas,
            'nomor_telpon' => $nomor_telpon,
        ];

        $request->session()->put('inputData', $inputData);

        return redirect()->route('display');
    }


    public function display(Request $request)
    {
        $inputData = $request->session()->get('inputData', []);

        return view('display', ['data' => $inputData]);
    }


    public function clearSession(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('input')->with('success', 'Session data cleared successfully.');
    }
}
