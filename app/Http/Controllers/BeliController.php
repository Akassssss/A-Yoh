<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BeliController extends Controller
{
    public function index()
    {
        //
        $data = Order::orderBy('created_at', 'asc')->paginate(10);
        return view('beli/index')->with('data', $data); 
    }
    public function edit(string $id)
    {
        //
        $data = Order::where('id',$id)->first();
        return view('beli/edit')->with('data',$data);
    }
    public function update(Request $request, string $id)
    {
        //
        
        $data = [
            'delivery_status'=> $request->input('delivery_status'),
            'resi'=> $request->input('resi'),
           
        ];

        Order::where('id',$id)->update($data);
        return redirect ('/beli')->with('succes','Sukses Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
}
