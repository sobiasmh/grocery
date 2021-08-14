<?php
 
namespace App\Http\Controllers;
 
use Request;
use DB;
use Session;
class loginController extends Controller
{
    public function ViewLogin(){
       return view('login');
   }
 
   public function ViewForgotPassword(){
    return view('Forgotpassword');
}
 
   public function match() {
    $uname = Request::input('username');
    $pass = Request::input('password');
 
    $loginData = DB::select('select password from user where name = ?', [$uname]); 
    
    if (count($loginData) > 0){
        
        foreach ($loginData as $tablepass) {
            if(($tablepass->password) == 'admin1234567'){
                Session::put('userName',$uname);
                return redirect('Admin');
            }
            else{
            if (($tablepass->password) == $pass){
                
                Session::put('userName',$uname);
                return redirect('home');
            }
            else{
                $error='Password does not match';
                return view('login')->with('error',$error);
            }
        }
        }
    }
    //return redirect('login');
}
 
function updatepassword() {
    $uname = Request::input('name');
    $pass = Request::input('password');
 
    $loginData = DB::select('select name from user where name = ?', [$uname]); 
    if (count($loginData) > 0){
        
        foreach ($loginData as $tablepass) {
 
            if (($tablepass->name) == $uname){
                DB::update('update user set password=? where name= ?', [$pass,$uname]);
                return view('login');
            }
            else{
                $error='username does not exits';
                return view('Forgotpassword');
            }
        }
    }
  
}
 
}