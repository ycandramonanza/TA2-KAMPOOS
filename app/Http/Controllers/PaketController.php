<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaketRequest;
use App\Models\paket;
use Auth;
class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $pakets = paket::all();
            return view('admin.paket.index', compact('pakets'));
        }else{
            return redirect('/Digital-Invitation');
        }
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaketRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image');
        $filename = time() . '.' . $data['image']->getClientOriginalExtension();
        $request->file('image')->storeAs('public/paket/'. $filename,  ''); 

        paket::create([
            'nama_paket'    => $request->nama_paket,
            'image'         => $filename,
            'harga'         => $request->harga,
            'harga_diskon'  => $request->harga_diskon,
            'fitur1'        => $request->fitur1,
            'fitur2'        => $request->fitur2,
            'fitur3'        => $request->fitur3,
            'fitur4'        => $request->fitur4,
            'fitur5'        => $request->fitur5,
            'fitur6'        => $request->fitur6,
            'fitur7'        => $request->fitur7,
            'fitur8'        => $request->fitur8,
            'fitur9'        => $request->fitur9,
            'fitur10'        => $request->fitur10
        ]);

        return redirect()->route('Paket.index')->with('pesan', "Paket $request->nama_paket Berhasil di Tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(paket $Paket)
    {
        $Paket->delete();

        return redirect()->route('Paket.index')->with('delete', "Paket $Paket->nama_paket Sudah Terhapus");
    }
}
