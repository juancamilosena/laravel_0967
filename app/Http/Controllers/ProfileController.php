<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
        //
         //Create    
    public function create(){
       
        $users = User::all();
        $profiles = Profile::all();
       
       return view('profiles.create',compact('users','profiles'));

    }
//Store
    public function store(Request $request){
       
        $profile= new Profile();   

        $profile->user_id=$request->user_id;//llave foranea
        $profile->title=$request->title;
        $profile->biografia=$request->biografia;
        $profile->website=$request->website;
        $profile->save();
       
        return $profile;
     

    }
    }

   

