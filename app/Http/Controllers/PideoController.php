<?php

namespace App\Http\Controllers;

use App\Models\Pideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class PideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Pideo::orderBy('id', 'asc')->paginate(10);
        return view('Pideo/index')->with('data', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Pideo/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Session::flash('nama_pideo',$request->nama_pideo);
        Session::flash('deskripsi_pideo',$request->deskripsi_pideo);

        $request->validate([
            'nama_pideo'=>'required',
            'deskripsi_pideo'=>'required',
            'foto_pideo'=>'required|mimes:jpeg,png,jpg',
            'pideo'=>'required|mimes:mp4'

            
        ],[
            'nama_pideo.required' => 'Kasih Judul Pideo Brow',
            'deskripsi_pideo.required' => 'Kasih Deskripsi Pideo Brow',
            'foto_pideo.required' => 'Kasih Foto Pideo Brow',
            'foto_pideo.mimes' => 'Fotonya jpeg,jpg,png Bos',
            'pideo.required' => 'Kasih Pideo Brow',
            'pideo.mimes' => 'pideonya Mp4'
        ]);

        
        
        $foto_file = $request->file('foto_pideo');
        $foto_eks = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_eks;
        $foto_file ->move(public_path('foto'),$foto_nama);

        $pideo_file = $request->file('pideo');
        $pideo_eks = $pideo_file->extension();
        $pideo_nama = date('ymdhis').".".$pideo_eks;
        $pideo_file ->move(public_path('pideos'),$pideo_nama);

        $data = [
            'nama_pideo'=> $request->input('nama_pideo'),
            'deskripsi_pideo'=> $request->input('deskripsi_pideo'),
            'foto_pideo'=> $foto_nama,
            'pideo'=> $pideo_nama 
            
           
        ];
        Pideo::create($data);
        return redirect('/pideo')->with('succes','Berhasil Upload Pideo');
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
        $data = Pideo::where('id',$id)->first();
        return view('pideo/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_pideo'=>'required',
            
            'deskripsi_pideo'=>'required',
        ],[
            'nama_pideo.required' => 'Kasih Judul Pideo Brow',
           
            'deskripsi_pideo.required' => 'Kasih Deskripsi Pideo Brow'
        ]);
        $data = [
            'nama_pideo'=> $request->input('nama_pideo'),
            
            'deskripsi_pideo'=> $request->input('deskripsi_pideo'),
           
        ];

        if($request->hasFile('pideo')){
            $request-> validate([
                'pideo' => 'required|mimes:Mp4'
            ],[
                'pideo.mimes' => 'salah ekstensi brow'
            ]);
            $pideo_file = $request->file('pideo');
            $pideo_eks = $pideo_file->extension();
            $pideo_nama = date('ymdhis').".".$pideo_eks;
            $pideo_file ->move(public_path('pideo'),$pideo_nama);
            $data_pideo = Pideo::where('id',$id)->first();
            File::delete(public_path('pideo').'/'.$data_pideo->pideo);
            $data['pideo'] = $pideo_nama;
        }

        if($request->hasFile('foto_pideo')){
            $request-> validate([
                'foto_pideo' => 'required|mimes:jpg,jpeg,png'
            ],[
                'foto_pideo.mimes' => 'salah ekstensi brow'
            ]);
            $foto_file = $request->file('foto_pideo');
            $foto_eks = $foto_file->extension();
            $foto_nama = date('ymdhis').".".$foto_eks;
            $foto_file ->move(public_path('foto'),$foto_nama);
            $data_foto = Pideo::where('id',$id)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto_pideo);
            $data['foto_pideo'] = $foto_nama;
        }


        
        $foto_file = $request->file('foto_pideo');
        $pideo_file = $request->file('pideo');
        Pideo::where('id',$id)->update($data);
        return redirect ('/pideo')->with('succes','Sukses Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pideo::where('id',$id)->first();
        File::delete(public_path('foto').'/'.$data->foto_pideo); 
        File::delete(public_path('pideo').'/'.$data->pideo); 
        Pideo::where('id',$id)->delete();
        return redirect('/pideo')->with('succes','Berhasil hapus pideo');
    }
}




