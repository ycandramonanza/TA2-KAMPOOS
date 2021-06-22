<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\invitation;
use App\Models\order;
use App\Models\User;
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
        if(!Auth::user()){
            return redirect('/Digital-Invitation');
        }elseif(Auth::user()->role == 'admin'){
            $invitations = invitation::with('user')->get();
            return view('invitation.index', compact('invitations'));
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
    public function store(InvitationRequest $request)
    {
        $order = order::where('nama', $request->nama)->with('user')->first();
        $user_id  = $order->user->id;
        $order_id = $order->id;
    
        invitation::create([
            'user_id' => $user_id,
            'order_id' => $order_id,
            'nama'    => $request->nama,
        ]);

        $order = order::where('nama',  $request->nama)->first();
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
        $order = order::where('nama',  $Invitation->nama)->first();

        $Invitation->delete();

        $order->update([
            'status' => 0,
        ]);

        return redirect()->route('Invitation.index');
    }
}
