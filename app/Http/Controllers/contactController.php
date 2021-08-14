<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class contactController extends Controller
{
    public function ViewContact(){
	   return view('contact');
   }
   public function contact(Request $request) {
    $fname = $request->input('fname');
    $lname = $request->input('lname');

    $company = $request->input('company');
    $phone = $request->input('phone');
    $email = $request->input('email');
    $comments = $request->input('comments');
    
    if(Session::has('userName')){
        $u_name = Session::get('userName');

        DB::unprepared("insert into contactus (fisrtN, lastN, company
        , phone, email, comments, uname) values ('$fname','$lname','$company','$phone','$email','$comments', '$u_name')");
         return redirect('/home');}
    else{
        return redirect('/login');
    }
}

}
