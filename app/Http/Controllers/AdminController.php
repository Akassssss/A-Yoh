<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pideo;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view("/home");

    }
    function user(){
        return view("/home");

    }
    function admin(){
        $data = Order::all();
        $highestIdSum = Order::max('id');
        $totalSum = Order::sum('price');
        $totalView = Pideo::sum('count');
        $totalid =User::where('role', 'user')->count();
        $totalprofit = $totalid * 15000;
        $total = $totalSum + $totalprofit;
        return view("admin/index")->with('totalbelanja',$highestIdSum)->with('totalview',$totalView)->with('totaluser',$totalid)->with('totalharga',$total);

    }
}
