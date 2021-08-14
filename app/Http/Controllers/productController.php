<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class productController extends Controller
{
    public function ViewProduct(){
	   return view('product');
   }

   public function View_Add_Product(){
    return view('AddProduct');
}
    //Admin add products
    public function store(Request $request) {
            $fname = $request->input('pr_name');
            $Quantity = $request->input('quan');
            $Price = $request->input('price');
            $description = $request->input('des');
            $pic = $request->file('image');
            $picName = $pic->getClientOriginalName();
            $picType = $pic->getClientOriginalExtension();
            $picSize = $pic->getSize();
            $pic->move('uploads',$picName);
            $destination = 'uploads/'.$picName;
            DB::unprepared("insert into product (proName, quantity,price
           , image,Description) values ('$fname','$Quantity'
            ,' $Price','$destination',' $description')");
            return redirect('/AdminProducts');
        }
        //Admin handle
        public function display(){
            $grocery = DB::select("select * from product");
                return view('AdminProducts', ['grocery' => $grocery]);
        }
        public function delete($pro_id) {
            DB::unprepared("delete from product where pro_id = '$pro_id'");
            return redirect('/AdminProducts')->with('success',"Removed");
            }
            

            //show on product page for user
        public function show(){
            $grocery = DB::select("select * from product");
                return view('product', ['grocery' => $grocery]);
        }
        //user adding cart
        public function addCart(Request $req,$pro_id){
            $grocery = DB::select("select * from product where pro_id = ?",[$pro_id]);
            $quan = 1;

            foreach($grocery as $product){
                $proName = $product->proName;
                //$pro_id = $product->pro_id;
                $image = $product->image;
                $price = $product->price;
                $productID = $product->pro_id;
            if(Session::has('userName')){
                $u_name = Session::get('userName');
                
                DB::unprepared("insert into cart (productName,
                 price, image, quan,productID, u_name) values 
                 ('$proName','$price','$image','$quan','$productID', '$u_name')"); 
                 return redirect('product');
            }
            else{
                return redirect('/login');
            }
            }
        }
        //
        
    


}