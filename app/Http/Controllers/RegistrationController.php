<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regimember;
use Carbon\Carbon;
use Validator;
use Redirect;

class RegistrationController extends Controller
{
   public function member_form(){
      if($lastid=Regimember::all()->last()){  
         $vnum=$lastid->id;
     }
     else{
      $vnum=0;
     }
     return view('admin.member_registration.registration',['lastid'=>$vnum]);
   }
   public function add_member(Request $request){

      $user_photo=$request->file('user_nid');
      $user_photo=$request->file('user_photo');
     
      $name=$user_photo->getClientOriginalName();
      $uploadPath='public/image/';
      $user_photo->move($uploadPath,$name);
      $imageUrl=$uploadPath.$name;



      $this->imginfo($request,$imageUrl);
    
      return redirect()->back();
     

 
   }


   public function imginfo($request,$imageUrl){
   
      $adddata=new Regimember();
      $adddata->reg_number=$request->reg_number;
      $adddata->ac_number=$request->ac_number;
      $adddata->reg_name=$request->reg_name;
      $adddata->reg_father_name=$request->reg_father_name;
      $adddata->reg_mother_name=$request->reg_mother_name;
      $adddata->reg_birth_date=$request->reg_birth_date;
      $adddata->reg_profession=$request->reg_profession;
      $adddata->reg_phone=$request->reg_phone;
      $adddata->reg_pre_adress=$request->reg_pre_adress;
      $adddata->reg_per_adress=$request->reg_per_adress;
      $adddata->em_name=$request->em_name;
      $adddata->em_relation=$request->em_relation;
      $adddata->em_phone=$request->em_phone;
      $adddata->em_adress=$request->em_adress;
      $adddata->no_name=$request->no_name;
      $adddata->no_relation=$request->no_relation;
      $adddata->no_phone=$request->no_phone;
      $adddata->no_adress=$request->no_adress;
      $adddata->user_photo=$imageUrl;
      $adddata->user_nid=$imageUrl;
      $adddata->reg_date=Carbon::today();
      $adddata->save();
      // return redirect()->back();

   }
}
