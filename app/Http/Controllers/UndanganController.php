<?php

namespace App\Http\Controllers;
use App\Models\invitation;
use App\Models\undangan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function undangan(invitation $id){
    
        $undangan = undangan::where('invitation_id', $id->id)->first();
            return view('kartuUndangan.index', compact('undangan'));
    }

    public function index(){
        $undangans = undangan::with('invitation')->get();
        return view('undangan.index', compact('undangans'));
    }

    public function create(invitation $id){
        return view('undangan.create', compact('id'));
    }

    public function store(Request $request){
       
        
        $validated = $request->validate([
            'invitation_id'     => '',
            'image'             => 'required',
            'nama_pengantin1'   => 'required',
            'nama_pengantin2'   => 'required',
            'tanggal_acara'     => 'required',
            'tempat_acara'      => 'required',
            'salam'             => 'required',
            'mukadimah'         => 'required',
            'keterangan_1'      => 'required',
            'keterangan_2'      => 'required',
            'gambar_1'          => 'required',
            'gambar_2'          => 'required',
            'countdown'         => 'required'
        ]);

      

            $request->hasfile('image');
            $image = $request->file('image');
            $filename = time()+1 . '.' . $image->getClientOriginalExtension();
            $request->file('image')->storeAs('public/background/'. $filename,  '');

            $request->hasfile('gambar_1');
            $gambar_1 = $request->file('gambar_1');
            $filename1 = time()+3 . '.' . $gambar_1->getClientOriginalExtension();
            $request->file('gambar_1')->storeAs('public/pengantin/'. $filename1,  '');  

            $request->hasfile('gambar_2');
            $gambar_2 = $request->file('gambar_2');
            $filename2 = time()+5 . '.' . $gambar_2->getClientOriginalExtension();
            $request->file('gambar_2')->storeAs('public/pengantin/'. $filename2,  '');  

          

            
            undangan::create([
                'invitation_id'     => $validated['invitation_id'],
                'image'             => $filename,
                'nama_pengantin1'   => $validated['nama_pengantin1'],
                'nama_pengantin2'   => $validated['nama_pengantin2'],
                'tanggal_acara'     => $validated['tanggal_acara'],
                'tempat_acara'      => $validated['tempat_acara'],
                'salam'             => $validated['salam'],
                'mukadimah'         => $validated['mukadimah'],
                'keterangan_1'      => $validated['keterangan_1'],
                'keterangan_2'      => $validated['keterangan_2'],
                'gambar_1'          => $filename1,
                'gambar_2'          => $filename2,
                'countdown'         => $validated['countdown']
            ]);

            return redirect()->route('undangan.index')->with('pesan', "Undangan Berhasil di Tambahkan");
    }
}
