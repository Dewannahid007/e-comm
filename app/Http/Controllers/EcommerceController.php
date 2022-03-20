<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class EcommerceController extends Controller
{
    //
    function index(){
        return view('master');
    }
    function loginF(Request $req){
        $result= User::where(['email'=>$req->email])->first();
        if(!$result || !hash::check($req->password,$result->password)){
            return redirect('/login');

        }
        else{
            $req->session()->put('user',$result);
            return redirect('product');
        }



    }
    function regi(Request $req){
            $req->validate([
                'name'=>'Required',
                'email'=>'Required',
                'pnumber'=>'Required',
                'password'=>'Required'

            ]);
            $data= new User();
            $data->name=$req->input('name');
            $data->email=$req->input('email');
            $data->pnumber=$req->input('pnumber');
            $data->password=hash::make('password');
            $data->save();
            return redirect('login');

    }
    
    
}
