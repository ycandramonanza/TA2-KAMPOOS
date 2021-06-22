<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use Auth;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $orders = order::where('status', 0)->with('user')->get();
    //    dd($orders);
       return view('orders.index', compact('orders'));
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
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $validated = $request->validate([
            'nama'  => 'required',
            'paket' => 'required',
            'tempat_acara' => 'required',
            'tanggal_acara' => 'required',
            'no_hp'        => 'required'
        ]);

        order::create([
            'user_id'     => $user_id,
            'nama'        => $validated['nama'],
            'paket'       => $validated['paket'],
            'tempat_acara' => $validated['tempat_acara'],
            'tanggal_acara'=> $validated['tanggal_acara'],
            'no_hp'        => $validated['no_hp'],
            'status'       => 0
        ]);

        return redirect('/Digital-Invitation/#content2')->with('order', "Pesanan Anda Sedang di Proses");
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
    public function destroy($id)
    {
        //
    }
}
