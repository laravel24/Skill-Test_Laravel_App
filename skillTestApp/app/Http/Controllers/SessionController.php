<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testList ;
use App\userinfo ;
use App\question ;
use App\userSkillTest ;

class SessionController extends Controller
{
    public function create(Request $request){

    	$this->validate(request(),[
           'email' => 'required',
           'password'  => 'required'
    	]);

       $email = $request->email ;
       $password = $request->password ;
       $userinfo = userinfo::where('email',$email)->first() ;

       	if($userinfo){
       		$url = "user/".$userinfo->id."/profile" ;
       		return redirect($url) ;
       	}else{
       		$erorrText = "Email and password does not match !" ;
       		return view('login',compact('erorrText'));
       	}
         
     
    }

    public function destroy(){
    	auth()->logout();

    	return redirect()->home();
    }
}
