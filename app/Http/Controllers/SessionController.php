<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

use function GuzzleHttp\Promise\all;

class SessionController extends Controller
{
    function login()
    {
        return view("/login");


    }
    function signin(Request $request )
    {
        Session::flash('email',$request->email);
        $request-> validate([
            'email'=> 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)){
           if(Auth::user()->role == 'user'){
            return redirect('/home'); 
           } elseif(Auth::user()->role == 'admin'){
            return redirect('/dashboard'); 
           } ;
        } else {
            return redirect('login')->with('alert', 'Username atau Password Salah!');
        }
    }
    function logout()
    {
        Auth::logout();
        
        return redirect('/')->with('alert', 'Berhasil logout');
    }
    function register()
    {
        return view('/signup1');
    }
    function register2()
    {
        
        return view('/signup2');
    }
    function register3()
    {
        
        $data = [
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'password' => Hash::make(Auth::user()->password)
        ];
        User::create($data);

        return redirect('home');
    }
    function create(Request $request)
    {
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));

        

        // Validate input
        $validatornama = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);
        $validatoremail = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users'
        ]);
        $validatorpassword = Validator::make($request->all(), [
            'password' => 'required|min:2|confirmed'
        ]);

        // Check if validation fails
        if ($validatornama->fails()) {
            return redirect('register')->with('alert', 'Mohon isi nama dengan benar');
        }
        if ($validatoremail->fails()) {
            return redirect('register')->with('alert', 'Mohon isi email dengan benar');
        }
        if ($validatorpassword->fails()) {
            return redirect('register')->with('alert', 'Mohon isi password dengan benar');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($infologin)){
            return redirect('register-payment')->with('alert', 'Silahkan bayar');
        } else {
            return redirect('login')->with('alert', 'Username atau Password Salah!');
        }
    }
    function profile()
    {
        $id = Auth::user()->id;
        $data = User::where('id','=',$id)->get();
        return view('/profile')->with('data', $data);
    }

    function add_address(Request $request, string $id){
        $data = [
            'alamat'=> $request->input('alamat'),           
        ];
        User::where('id',$id)->update($data);
        return redirect()->back()->with('succes','Berhasil Tambah Alamat');

    }
}
