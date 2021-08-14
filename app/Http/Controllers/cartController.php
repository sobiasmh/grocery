<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
use Session;
class cartController extends Controller
{
    public function ViewCart(){
       return view('cart');
   }
 
   public function show(){
    if(Session::has('userName')){
    $u_name = Session::get('userName');
    $grocery = DB::select("select * from cart where u_name = '$u_name'");
        return view('cart', ['grocery' => $grocery]);}
        else{
            return redirect('/login');
        }
}
 
public function destroy($cart_id) {
    DB::unprepared("delete from cart where cart_id = '$id'");
    return redirect('/cart')->with('success',"Removed");
    }
    public function updateCart(Request $request){
        
        $cart = Cart::content()->where('cart_id', $request->cart_id);
        //update quantity
        //dd($cart);
        return view('/cart')->with('cart-success', 'Cart updated');
    }
 
}