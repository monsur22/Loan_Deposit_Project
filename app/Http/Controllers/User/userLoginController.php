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
use App\CompanyUser;
use App\Userinoutrecord;
use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
class userLoginController extends Controller
{
    

   public function user_login(){
       return view('user.singin&singup.singin.login');
   }

   public function user_login_action(Request $request){
      
      if($login_data=CompanyUser::where('email',$request->user_email)
                                ->where('user_status','=',1)
                                ->first()){
         if($login_data->email == $request->user_email && Hash::check($request->user_password,$login_data->user_password)){
             Session::put('email',$login_data->email);
             Session::put('first_name',$login_data->first_name);
             Session::put('last_name',$login_data->last_name);
             Session::put('id',$login_data->id);
             Session::put('user_role',$login_data->user_role);

          
             $data= new Userinoutrecord();
             $data->login_time =Carbon::now();
             $data->user_id =Session::get('id');
             $data->user_rule =Session::get('user_role');
             $data->save();
             return redirect('/user-dashboard');
   
         }
         else{
             return "Login Error";
      
             
         }

     }
     else{
       return "Email problem";
       //return redirect('/user-login');
        

     }


    }
    public function forgetEmailView(){
        return view('user.singin&singup.forget.enter_email');
                
        }
    public function forgetEmail(Request $request){
        $this->Validate($request, [
            'email' => 'required', 
            
       ]);
       if( $id=verify_token::where('email',$request->email)->first()){
        $id->delete();
       }
 
        
         
               $random= new verify_token();
         
        //  $random->name = $request->name;        
      
         $random->email = $request->email;
         $token=rand();
         $random->token = $token;
         $random->save();
 
         Session::put('code',$token);    
        //  Session::put('n',$request->name);    
          
         Session::put('e',$request->email);    
 
 
         $maildata=$request->toArray();
          Mail::send('user.singin&singup.forget.forget_email',$maildata,function($massage) use ($maildata)
          {
          $massage->to($maildata['email']); 
          $massage->subject('Test Email'); 
 
          });
         return redirect('/For-Token')->with('check',' Check Email ');
        
 
 
 

                    
        }
    public function forgetVerifyCodeView(){
        return view('user.singin&singup.forget.verify_code');
                    
        }
    public function forgetVerifyCode(Request $request){
        if($request->token==Session('code')){

            return redirect('/Update-Pass');
        }
        else{
            return "erorr";
        }
       
  
                        
        }
    public function forUpdatePassView(){
        return view('user.singin&singup.forget.update_pass');
        
                        
        }
    public function forUpdatePass(Request $request){
        $this->Validate($request, [
            'email' => 'required', 
              
       ]);
   
        $update_pass=CompanyUser::where('email',Session('e'))->first();
         
        $update_pass->user_password=bcrypt($request->user_password);
        $update_pass->save();
        session()->forget('e');
        
        //return redirect('/doctorLogin')->with('signup','Password Successfully Changed');
        return "sucess";
                            
        }
    public function logout(){
        $data= new Userinoutrecord();
        $data->logout_time =Carbon::now();
        $data->user_id =Session::get('id');
        $data->user_rule =Session::get('user_role');
        $data->save();
       


        session()->forget('email');
        session()->forget('first_name');
        session()->forget('user_role');
        session()->forget('branch_id');
        session()->forget('user_id');

         return redirect('/user-login');
    }

    public function userhome(){
        return view('user.dashboard.home.home_content');
    }

}
