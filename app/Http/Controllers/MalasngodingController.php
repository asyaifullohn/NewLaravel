<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi Boss!',
            'min' => ':attribute harus diisi minimal :min karakter Boss!',
            'max' => ':attribute harus diisi maksimal :max karakter Boss!',
            'numeric' => ':attribute harus diisi angka saja Boss!'
        ];
        
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ],$messages);

        return view('proses',['data' => $request]);
    }
}