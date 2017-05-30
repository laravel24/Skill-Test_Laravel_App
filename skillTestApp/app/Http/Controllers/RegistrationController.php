<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userinfo ;

class RegistrationController extends Controller
{
    public function create(){
    	
    	return view('setting');
    }


    public function store(Request $request){

    	$this->validate(request(),[

          'name'              => 'required',
          'email'             => 'required|email',
          'nationality'       => 'required',
          'phone'             => 'required',
          'institution'        => 'required',
          'password'          => 'required|confirmed'
    	]);
       
       
       
        $user = userinfo::create(request(['name','email','nationality','phone','institution','avatar','password','label'])) ;

       $userAllinfo = userinfo::where('email',$request->email)->first();
       $userid = $userAllinfo->id ;
       $url = "user/".$userid."/profile" ;
       return redirect($url);
    }
}
