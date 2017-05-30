<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\testList ;
use App\userinfo ;
use App\question ;
use App\userSkillTest ;

class skillTestController extends Controller
{


    public function index(){
    	return view('login') ;
    }

    public function register(Request $request){
       
    }


    public function profile($id){

    	$profile = userinfo::where('id',$id)->first() ;
    	$tests =  DB::table('user_skill_tests')->where('Userid',$id)->join('test_lists','user_skill_tests.SkillId','=','test_lists.id')->get();

    	return view('profile',compact('profile','tests','id'));
    }

    public function exam(Request $request, $userid){

         $allnames = $request->skilltestno ;
         $id = $request->skillIdNo ;
         $feildnames =  explode("|", $allnames) ;
         $questions = question::where('questionid',$id)->get();
         $testname = testlist::where('id',$id)->first();
        $i =0 ;
        $counter =0 ;
         foreach($questions as $question){
            if($feildnames[$i] == $question->solution){
            	$counter++ ;
            }
            $i++;
         }
          
          $skillId = $id ;
          $getMarks = $counter*4 ;
          if($getMarks <15){
          	$stutus = "FAILED" ;
          }else{
          	$stutus = "PASSED";
          }
          
          $storeTest = new userSkillTest() ;
          $storeTest->Userid = $userid;
          $storeTest->SkillId = $skillId;
          $storeTest->GetMarks = $getMarks;
          $storeTest->Stutus = $stutus;

          $storeTest->save();

          $profile = userinfo::where('id',$userid)->first() ;
    	  $tests =  DB::table('user_skill_tests')->where('Userid',$userid)->join('test_lists','user_skill_tests.SkillId','=','test_lists.id')->get();

         return view('profile',compact('profile','tests'));
    }

    public function testList($id){

    	$allSkillTests = testList::all() ;
    	return view('testlist',compact('allSkillTests','id'));
    }

    public function question($userid,$id){
         $questions = question::where('questionid',$id)->get();
         return view('test',compact('questions','id','userid'));
    }

      public function setting($id){
    	$userinfo = userinfo::where('id',$id)->first();
    	return view('setting',compact('userinfo','id'));
    }

    public function updatehistory(Request $request,$userid){

        $profile = userinfo::where('id',$userid)->first();
        $tests =  DB::table('user_skill_tests')->where('Userid',$userid)->join('test_lists','user_skill_tests.SkillId','=','test_lists.id')->get();
        

        $this->validate(request(), [
           'name'             => 'required',
           'email'            => 'required',
           'phone'            => 'required',
           'password'         => 'required',
           'Avatar'           => 'required',
           'confirm-password' => 'required'
        ]);


        $image = $request->file('Avatar');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $image->move($destinationPath,  $imagename);

        $profile->name         = $request->name ;
        $profile->email        = $request->email ;
        $profile->nationality  = $request->nationality ;
        $profile->phone        = $request->phone ;
        $profile->institution  = $request->institution ;
        $profile->avatar       = $imagename ;
        $profile->password     = $request->password ;

        $profile->save() ;

       return view('profile',compact('profile','tests'));
    }
}
