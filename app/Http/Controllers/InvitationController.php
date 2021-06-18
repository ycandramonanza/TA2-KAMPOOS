<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invitation;
use App\Models\order;
use App\Http\Requests\InvitationRequest;
class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitations = invitation::all();
        return view('invitation.index', compact('invitations'));
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
    public function store(InvitationRequest $request)
    {
       

        invitation::create([
            'nama' => $request->nama,
        ]);

        $order = order::where('nama',  'Khaerul Fahmi')->first();
        $order->update([
            'status' => 1,
        ]);


        return redirect()->route('Invitation.index');
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
    public function destroy(invitation $Invitation)
    {
        $Invitation->delete();

        $order = order::where('nama',  'Khaerul Fahmi')->first();
        $order->update([
            'status' => 0,
        ]);

        return redirect()->route('Invitation.index');
    }
}
