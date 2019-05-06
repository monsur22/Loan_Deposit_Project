<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Group;
use App\Category;
use App\Accounthead;
use App\company;
use Carbon\Carbon;
use App\verify_token;
use App\custormer;

use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;
class UserCustomerController extends Controller
{
 
    //customer
public function customer_list(){
    $customerdetails=custormer::orderby('created_at','desc')
                    ->where('user_id','=',session('id'))
                    ->where('user_role','=',session('user_role'))
                    ->get();
    return view('user.dashboard.customer_management.custormer_list',['customerdetails'=>$customerdetails]);
  }
  public function customer_add(Request $request){
   
    $custormer=new custormer();
    $custormer->customer_cat=$request->customer_cat;
    $custormer->customer_name=$request->customer_name;
    $custormer->customer_mobile=$request->customer_mobile;
   
    $custormer->customer_email=$request->customer_email;
    $custormer->customer_address=$request->customer_address;
    $custormer->copaning_balance=$request->copaning_balance;

    $custormer->user_id=Session::get('id');
    $custormer->user_role=Session::get('user_role');

   
    $custormer->save();
  
    
  
    return redirect()->back();
  
  }
  
  public function customer_edit($id){
    $data = custormer::find($id);
    return $data;
    
  }
  
  public function customer_update(Request $request){
  
  
    $updateinfo= custormer::find($request->id);
  
    $updateinfo->customer_cat=$request->customer_cat;
    $updateinfo->customer_name=$request->customer_name;
    $updateinfo->customer_mobile=$request->customer_mobile;
   
    $updateinfo->customer_email=$request->customer_email;
    $updateinfo->customer_address=$request->customer_address;
    $updateinfo->copaning_balance=$request->copaning_balance;
    
  
      $updateinfo->save();
    return redirect('/user/customerlist');
  
      
  }
  public function customer_delete($id){
    $userdelete=custormer::find($id);
    $userdelete->delete();
    return redirect()->back();
  }
    

}
