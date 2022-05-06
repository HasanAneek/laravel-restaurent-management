<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $data = Food::all();
        $data2 = Chef::all();

        return view('layout',compact('data','data2'));
    }

    function redirects(){
        $data = Food::all();

        $user = Auth::user()->usertype;
        if($user == 1){
            return view('admin.user-admin');
        }else{
            return  view('layout',compact('data'));
        }
    }
}
