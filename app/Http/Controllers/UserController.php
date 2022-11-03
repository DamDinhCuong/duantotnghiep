<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $request;
    public function __contruct(Request $request){
        $this->request = $request;
    }
    public function Login(){
        return view('user/login');
    }
}
