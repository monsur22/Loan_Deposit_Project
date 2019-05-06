<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Group;
use App\Category;
use App\Accounthead;
use App\company;
use Carbon\Carbon;
use App\verify_token;
use App\Userinoutrecord;
use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;

class adminloginController extends Controller
{
    public function login_form(){
        return view('singin&singup.singin.login');
    }
 
    //admin login here
    public function login_form_action(Request $request){
 
     {
         if($login_data=User::where('email',$request->email)->first()){
             if($login_data->email == $request->email && Hash::check($request->password,$login_data->password)){
                 Session::put('email',$login_data->email);
                 Session::put('name',$login_data->name);
                 Session::put('id',$login_data->id);
                 Session::put('user_role',$login_data->user_role);


                //  $data= new Userinoutrecord();
                //  $data->login_time =Carbon::now();
                //  $data->user_id =Session::get('id');
                //  $data->user_rule =Session::get('user_role');
                //  $data->save();

 
                 return redirect('/admin-dashboard');
 
 
                 
             }
             else{
                 return "Login Error";
 
                 
             }
 
         }
         else{
             return "Login Error 1st";
 
 
         }
     
         }
 
    }
 
 
 ///Forget password reset Page
   public function admin_password_reset_page(){
     return view('singin&singup.forget.enter_email');
 
   }
 ///Forget password reset Code
   
   public function admin_password_reset(Request $request){
 
     $this->Validate($request, [
         'email' => 'required', 
           
    ]);
    if( $id=verify_token::where('email',$request->email)->first()){
     $id->delete();
    }
 
     
      
      $random= new verify_token();
      
   
      $random->email = $request->email;
      $token=rand(111111,999999);
      $random->token = $token;
      $random->save();
 
      Session::put('code',$token);    
       
      Session::put('e',$request->email);    
 
 
      $maildata=$request->toArray();
       Mail::send('singin&singup.forget.forget_email',$maildata,function($massage) use ($maildata)
       {
       $massage->to($maildata['email']); 
       $massage->subject('Test Email'); 
 
       });
      return redirect('/admin-reset-code')->with('check',' Check Email ');
     //return 'email success';
 
 
 
   }
 
 
   public function admin_reset_code(){
     return view('singin&singup.forget.verify_code');
 
   }
   public function admin_reset_verify_code(Request $request){
       
     if($request->token==Session('code')){
 
         return redirect('/admin-update-password');
     }
     else{
         return "erorr";
     }
   }
   public function admin_update_password_page(){
 
     return view('singin&singup.forget.update_pass');
 
   }
   public function admin_update_password(Request $request){
     $this->Validate($request, [
         'email' => 'required', 
           
    ]);
 
     $update_pass=User::where('email',Session('e'))->first();
      
     $update_pass->password=bcrypt($request->password);
     $update_pass->save();
     session()->forget('e');
     
     return  redirect('/admin-login')->with('successmessage','Password Successfully Update');
     //return "sucess";
     
 
   }
 

 
   public function logout(){


    // $data= new Userinoutrecord();
    // $data->logout_time =Carbon::now();
    // $data->user_id =Session::get('id');
    // $data->user_rule =Session::get('user_role');
    // $data->save();     
 
     session()->forget('email');
    session()->forget('name');
    session()->forget('user_role');

    session()->forget('id');
    // session()->forget('lastname');

   
     return redirect('/admin-login');
 
 }



}
