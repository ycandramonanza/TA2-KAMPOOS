<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimoni;
use Auth;
class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // if(){

        // }
        $user_id = Auth::user()->id;
        $testimoni = testimoni::where('user_id', $user_id)->with('testimoni')->count();

        if($testimoni > 0){
            return redirect('/Digital-Invitation/#testimonies')->with('danger', "Anda Sudah Pernah Memasukan Testimoni.");
        }

        testimoni::create([
            'user_id'   => $user_id,
            'testimoni' => $request->testimoni
        ]);

        return redirect('/Digital-Invitation/#testimonies')->with('pesan', "Testimoni Anda Berhasil Di Kirim.");
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
