<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Http\Requests\FiturRequest;
use App\Models\fitur;
class FiturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiturs = fitur::all();
       return view('admin.fitur.index', compact('fiturs'));
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
    public function store(FiturRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image');
        $filename = time() . '.' . $data['image']->getClientOriginalExtension();
        $request->file('image')->storeAs('public/fitur/'. $filename,  ''); 
    
        // dd($filename);
        // $request->hasfile('image'))
        //     $image = $request->image->file('image');
        //     dd($image);
          
           
        

        fitur::create([
            'image'      => $filename,
            'nama_fitur' => $request->nama_fitur,
            'desc'       => $request->desc
        ]);
        $request->session()->flash('pesan', "Fitur $request->nama_fitur Berhasil di Tambahkan");
        return redirect()->route('Fitur.index');
       
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
    public function edit()
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
    public function update(FiturRequest $request, fitur $Fitur)
    {
        if($request->image){
            if(\File::exists('storage/fitur/'.$Fitur->image)){
                \File::delete('storage/fitur/'.$Fitur->image);
            }
            $data = $request->all();
            $data['image'] = $request->file('image');
            $filename = time() . '.' . $data['image']->getClientOriginalExtension();
            $request->file('image')->storeAs('public/fitur/'. $filename,  ''); 

         
           
            $Fitur->update([
                'image'      => $filename,
                'nama_fitur' => $request->nama_fitur,
                'desc'       => $request->desc
            ]);

            return redirect()->route('Fitur.index', ['Fitur' => $Fitur->id])->with('pesan', "Fitur Berhasil Di Ubah");
        }else{
            $Fitur->update([
                'nama_fitur' => $request->nama_fitur,
                'desc'       => $request->desc

            ]);

            return redirect()->route('Fitur.index', ['Fitur' => $Fitur->id])->with('pesan', "Fitur Berhasil Di Ubah");
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(fitur $Fitur)
    {
        $Fitur->delete();

        return redirect()->route('Fitur.index')->with('delete', "Fitur $Fitur->nama_fitur Berhasil di Hapus");
    }
}
