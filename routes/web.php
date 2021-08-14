<?php
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
//use Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'App\Http\Controllers\homeController@ViewHome');

Route::get('/About', 'App\Http\Controllers\AboutController@ViewAbout');
Route::get('/cart', 'App\Http\Controllers\cartController@ViewCart');
Route::get('/checkout', 'App\Http\Controllers\checkoutController@ViewCheckout');
Route::get('/contact', 'App\Http\Controllers\contactController@ViewContact');
Route::get('/home', 'App\Http\Controllers\homeController@ViewHome');
Route::get('/login', 'App\Http\Controllers\loginController@ViewLogin');
Route::get('/product', 'App\Http\Controllers\productController@ViewProduct');
Route::get('/SignUP', 'App\Http\Controllers\SignUpController@ViewSIgnUp');
Route::post('/submit', 'App\Http\Controllers\SignUpController@store');
Route::post('/login', 'App\Http\Controllers\loginController@match');

Route::get('/Forgotpassword', 'App\Http\Controllers\loginController@ViewForgotPassword');
Route::post('/updatepassword', 'App\Http\Controllers\loginController@updatepassword');

//admins
Route::get('/Admin', 'App\Http\Controllers\productController@View_Add_Product');

Route::get('/AdminProducts','App\Http\Controllers\productController@display');
route::get('/AdminProducts{id}','App\Http\Controllers\productController@delete')->name('delete');

//display store and shwoing cart products
Route::get('/product','App\Http\Controllers\productController@show');
Route::post('/addproduct', 'App\Http\Controllers\productController@store');
Route::get('/cart','App\Http\Controllers\cartController@show');


//logout
Route::get('/logout', function(){
    if(Session::has('userName')){
        Session::pull('userName');
    }
    return redirect('/login');
});
    
//delete from cart
route::get('/cart{id}','App\Http\Controllers\cartController@destroy')->name('destroy');
//addtocart
Route::get('/product{product}','App\Http\Controllers\productController@addCart')->name('addCart');

//checkout
Route::post('/checkout', 'App\Http\Controllers\checkoutController@orderPlaced');
Route::get('/Orders','App\Http\Controllers\checkoutController@show');
route::get('/Orders{id}','App\Http\Controllers\checkoutController@cancel')->name('cancel');
//Route::post('/contact', 'App\Http\Controllers\contactController@contact');

//
Route::post('/contact/send', function(Request $request){
//     $data=new Contact;
//     $data->fname= $request->post('fname');
//     $data->lname= $request->post('lname');
//     $data->company= $request->post('company');
//     $data->email= $request->post('email');
//     $data->contact= $request->post('contact');
//     $data->comments= $request->post('comments');
//     $data->save();  
    //dd($request->all());
    
    return response()->json(['result'=> $request->all()]);

   // return response()->json(['result', $request->fname]);
        //return response()->json(['result', $request->post('fname')]);
//     return response()->json((['nof'=> 'Hurraah!', 'msg' => 'Thank you for Contacting Us!']));
});
