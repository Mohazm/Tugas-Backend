<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class DataMahasantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //dapatkan seluruh data datamahasantri dengan query builder
         $ar_datamahasantri = DB::table('datamahasantri')->get();
         //arahkan ke halaman baru dengan menyertakan data datamahasantri(compact)
         //di resources/views/datamahasantri/index.blade.php
         return view('datamahasantri.index',compact('ar_datamahasantri'));
    }

    //kode sebelumnya
    public function jurusan()
    {
        return view('datamahasantri.jurusan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datamahasantri.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            //1. proses validasi data
    $validasi = $request->validate(
        [
            'nim'=>'required|unique:datamahasantri|numeric', 
            'nama'=>'required|max:50', 
            'jurusan'=>'required|max:50', 
            'alamat'=>'required',
            'kota'=>'required|max:50', 
            'provinsi'=>'required|max:50', 
            'email'=>'required|max:50|unique:datamahasantri|regex:/(.+)@(.+)\.(.+)/i',
        ],
        [
            'nim.required'=>'NIM Wajib di Isi', 
            'nim.unique'=>'NIM Tidak Boleh Sama', 
            'nim.numeric'=>'Harus Berupa Angka', 
            'nama.required'=>'Nama Wajib di Isi', 
            'alamat.required'=>'Alamat Wajib di Isi', 
            'email.required'=>'Email Wajib di Isi', 
            'email.unique'=>'Email Tidak Boleh Sama', 
            'email.regex'=>'Harus berformat email',
        ],
    );

    DB::table('datamahasantri')->insert(
        [
        'nim'=>$request->nim, 
        'nama'=>$request->nama, 
        'jurusan'=>$request->jurusan, 
        'alamat'=>$request->alamat, 
        'kota'=>$request->kota, 
        'provinsi'=>$request->provinsi, 
        'email'=>$request->email,
        ]
        );
       
        return redirect('/datamahasantri'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
