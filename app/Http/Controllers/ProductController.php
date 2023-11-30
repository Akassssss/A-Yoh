<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Product::orderBy('id', 'asc')->paginate(10);
        return view('Produk/index')->with('data', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Produk/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Session::flash('nama_product',$request->nama_product);
        Session::flash('harga_product',$request->harga_product);
        Session::flash('deskripsi_product',$request->deskripsi_product);

        $request->validate([
            'nama_product'=>'required',
            'harga_product'=>'required|numeric',
            'deskripsi_product'=>'required',
            'foto_product'=>'required|mimes:jpeg,png,jpg'
            
        ],[
            'nama_product.required' => 'Kasih Judul Produk Brow',
            'harga_product.required' => 'Kasih Harga Produk Brow',
            'deskripsi_product.required' => 'Kasih Deskripsi Produk Brow',
            'foto_product.required' => 'Kasih Foto Produk Brow',
            'foto_product.mimes' => 'Fotonya jpeg,jpg,png Bos'
        ]);
        
        $foto_file = $request->file('foto_product');
        $foto_eks = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_eks;
        $foto_file ->move(public_path('foto'),$foto_nama);

        $data = [
            'nama_product'=> $request->input('nama_product'),
            'harga_product'=> $request->input('harga_product'),
            'deskripsi_product'=> $request->input('deskripsi_product'),
            'foto_product'=> $foto_nama 
            
           
        ];
        Product::create($data);
        return redirect('produk')->with('succes','Berhasil Upload Produk');
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
        $data = Product::where('id',$id)->first();
        return view('produk/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'harga_product'=>'required|numeric',
            'deskripsi_product'=>'required',
        ],[
            'harga_product.required' => 'Kasih Harga Produk Brow',
            'deskripsi_product.required' => 'Kasih Deskripsi Produk Brow'
        ]);
        $data = [
            'harga_product'=> $request->input('harga_product'),
            'deskripsi_product'=> $request->input('deskripsi_product'),
           
        ];

        if($request->hasFile('foto_product')){
            $request-> validate([
                'foto_product' => 'required|mimes:jpg,jpeg,png'
            ],[
                'foto_product.mimes' => 'salah ekstensi brow'
            ]);
            $foto_file = $request->file('foto_product');
            $foto_eks = $foto_file->extension();
            $foto_nama = date('ymdhis').".".$foto_eks;
            $foto_file ->move(public_path('foto'),$foto_nama);

            $data_foto = Product::where('id',$id)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto_product);

            $data['foto_product'] = $foto_nama;
        }

        

        
        $foto_file = $request->file('foto_product');
        Product::where('id',$id)->update($data);
        return redirect ('/produk')->with('succes','Sukses Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product::where('id',$id)->first();
        File::delete(public_path('foto').'/'.$data->foto_product); 
        Product::where('id',$id)->delete();
        return redirect('/produk')->with('succes','Berhasil hapus produk');
    }
}
