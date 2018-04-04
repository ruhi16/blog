<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('user');
    }

    public function users(){

        return view('users');
    }

    public function usersDetils($id){
        
        return $id;
    }

}
