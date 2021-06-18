<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipient;
class TemaController extends Controller
{
    public function silver(recipient $id){
        // dd($id);
        return view('tema.silver',compact('id'));
    }
}
