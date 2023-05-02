<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */ public $customer;
    // membuat instance dari model kategori
    public function __construct()
    {
        $this->customer = new Customer();
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi inputan user
        $rules = [
            'nama_customer' => 'required|min:3|max:50',
            'alamat' => 'required',
            'kota' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'perusahaan' => "required"
        ];

        $messages = [
            'required' => ":attribute gak boleh kosong",
            'min' => ":attribute kurang banyak",
            'max' => ":attribute kebanyakan / ukuran file terlalu besar",

        ];

        $this->validate($request, $rules, $messages);

        //meniyimpan inputan user ke db
        $this->customer->nama_customer = $request->nama_customer;
        $this->customer->alamat = $request->alamat;
        $this->customer->kota = $request->kota;
        $this->customer->email = $request->email;
        $this->customer->no_hp = $request->no_hp;
        $this->customer->perusahaan = $request->perusahaan;



        //simpan file gambar ke direktori upload yang ada didalam public

        // simpan data menggunakan method save()
        $this->customer->save();

        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('dash')->with('status', 'Data customer berhasil ditambahkan');
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
        $destroy = Customer::findOrFail($id);
        $destroy->delete();
        return redirect()->route('dash')->with('status', 'Data cutomer berhasil dihapus');
    }
}
