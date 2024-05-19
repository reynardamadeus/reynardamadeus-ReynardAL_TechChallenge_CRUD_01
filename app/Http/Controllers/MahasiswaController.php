<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function show()
    {
        $mahasiswas = Mahasiswa::all();
        return view('welcome', compact('mahasiswas'));
    }

    public function create()
    {
        return view('createMahasiswa');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' => ['required', 'min:3'],
            'NIM' => ['required', 'min:9', 'max:11'],
            'dateOfBirth' => ['required'],
            'region' => ['required']
        ]);

        Mahasiswa::create([
            'name' => $request -> name,
            'NIM' => $request -> NIM,
            'dateOfBirth' => $request -> dateOfBirth,
            'region'=> $request -> region
        ]);

        return redirect(route('show'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findorFail($id);
        return view('editMahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa -> update([
            'name' => $request -> name,
            'NIM' => $request -> NIM,
            'dateOfBirth' => $request -> dateOfBirth,
            'region' => $request -> region
        ]);

        return redirect(route('show'));
    }

    public function delete($id)
    {
        Mahasiswa::destroy($id);
        return redirect(route('show'));
    }
}
