<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Db;
use App\User;

class UserController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    //     $this->middleware('user');
    // }

    public function users(){

        return view('users');
    }

    public function usersDetils($id){
        $user = User::find($id);
        // if(auth()->user()->id == $id){
        //     echo "User: ".$user->name;
        // }else{
        //     echo "User not found";
        // }
        return $user->name;
    }

}
