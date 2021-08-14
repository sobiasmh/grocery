<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use DB;
class checkoutController extends Controller
{
    //
public function ViewCheckout(){
	   return view('checkout');
   }

   public function orderPlaced(Request $request) {
    $fname = $request->input('fname');
    $lname = $request->input('lname');

    $address = $request->input('address');
    $phone = $request->input('phone');
    $city = $request->input('city');
    
    if(Session::has('userName')){
        $u_name = Session::get('userName');

        DB::unprepared("insert into order2 (first, last, uName
        , address, city, phone) values ('$fname','$lname','$u_name','$address','$city','$phone')");
         return redirect('/home');}
    else{
        return redirect('/login');
    }
}

    public function show(){
    
    
    $grocery = DB::select("select * from order2");
        return view('Orders', ['grocery' => $grocery]);
    }
    public function cancel($order_id) {
        DB::unprepared("delete from order2 where order_id = '$order_id'");
        return redirect('/Orders')->with('success',"Removed");
        }

        
}
