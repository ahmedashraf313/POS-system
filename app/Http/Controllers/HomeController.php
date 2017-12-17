<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function user()
    {

   $user=Auth::user();

   if($user->type=='admin'){
     Session::put('admin', $user);
     return view('admin_blank');

   }

  else if($user->type=='manager'){
        Session::put('manager', $user);
        return view('manager_temp');

   }
    else if($user->type=='seller'){
        Session::put('seller', $user);
        return view('seller_temp');

   }

   else{
     
      return view('/shop_now');
   }

        
    }

    public function add_category(Request $request){
      
      $name = $request->input('name');
      DB::insert('insert into categories (name) values(?)',[$name]);

             return redirect('/add_category');


   }

    public function add_product(Request $request){
      
      $name          = $request->input('name');
      $category_name = $request->input('category');
      $seller_id = $request->input('seller_id');

            $cat_id= DB::select('select * from categories where name = ?', array($category_name));
                                                   

      //DB::insert('insert into categories (name,cat_id) values(?,?)',[$name,$cat_id]);

  $id=$cat_id[0];
  $cat_id=$id->id;
      DB::insert('insert into products (name,cat_id,seller_id) values (?, ?,?)', array($name, $cat_id,$seller_id));

             return redirect('/add_product');


   }


 public function settings(Request $request){
      
      $tax_rate          = $request->input('tax_rate');
      $discount          = $request->input('discount');
      $language          = $request->input('language');
      $format_name       = $request->input('date_format');
      $display           = $request->input('display');
     
$format_id= DB::select('select * from date_formats where name = ?', array($format_name)); 

$format=$format_id[0];
$format_id=$format->id;
    
    DB::update("UPDATE settings SET tax_rate = ".$tax_rate." , discount = ".$discount." , language = '".$language."' , date_format = ".$format_id." , display = '".$display."'  where id = ? ", [1]);
                                                   

      //DB::insert('insert into categories (name,cat_id) values(?,?)',[$name,$cat_id]);

  

             return redirect('/settings');


}

    public function edit_category(Request $request,$id){
      
      $name          = $request->input('name');
      

             DB::update("update  categories set name = '".$name."' where id = ?", array($id));
                                                   

      

  

             return redirect('/all_categories');


   }

    public function delete_category($id){
      
     
      

             DB::delete("delete from  categories  where id = ?", array($id));
                                                   

      

  

             return redirect('/all_categories');


   }

 public function edit_product(Request $request,$id){
      
      $name          = $request->input('name');
      $category_name = $request->input('category');

       $category= DB::select('select * from categories where name = ?', array($category_name)); 

       $category=$category[0];
       $cat_id=$category->id;
      

             DB::update("update  products set name = '".$name."' ,cat_id = ".$cat_id." where id = ?", array($id));
                                                   

      

  

             return redirect('/all_products');


   }

    public function delete_product($id){

             DB::delete("delete from  products  where id = ?", array($id));  

             return redirect('/all_products');


   }











}
