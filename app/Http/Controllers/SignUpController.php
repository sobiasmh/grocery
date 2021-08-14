<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SignUpController extends Controller
{
    public function ViewSIgnUp(){
	   return view('SignUP');
   }

   public function store(Request $request) { 
      // $fname = $request->input('first_name'); 
       //$lname = $request->input('last_name'); 
       $name = $request->input('name');; 
       $email = $request->input('email'); 
       $pass= $request->input('password'); 
       $city = $request->input('city'); 
       
        DB::unprepared("insert into user (name,
         email, password, city) values 
         ('$name','$email','$pass','$city')"); return redirect('SignUP');
}
}