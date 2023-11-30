<?php

namespace App\Http\Controllers;

use App\Models\Pideo;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        //
        
        $data = Pideo::all();
        return view('Video/index')->with('data', $data);
    }
    
    public function watch(String $id)
    {   
        $datas = Pideo::where('id',$id)->first();
        $update = [
            'count'=> $datas->count+1,
            
           
        ];
        Pideo::where('id',$id)->update($update);
        $data = Pideo::where('id',$id)->first();
        return view('Video/detail')->with('data', $data);
    }
    
}
