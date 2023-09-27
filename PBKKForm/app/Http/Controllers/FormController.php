<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $datas = User::all();

        return view('formFinish', ["datas" => $datas]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'tenor' => 'required',
            'nominal' => 'required|decimal:2',
            'gambar' => 'required|max:2048000|mimes:jpg,png,jpeg'
        ]);

        $extension = $request->file('gambar')->extension();
        $filename = date('Y-m-d-H-i-s') . "." . $extension;

        $request->file('gambar')->storeAs('public/images', $filename);

        $request['gambar'] = $filename;
        $user = User::create([
            "nama" => $request->nama,
            "phone" => $request->phone,
            "alamat" => $request->alamat,
            "nominal" => $request->nominal,
            "tenor" => $request->tenor,
            "gambar" => $filename,
        ]);

        
        return redirect('/allForm');
    }
}
