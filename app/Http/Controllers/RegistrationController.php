<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regimember;
use Carbon\Carbon;
use App\company;
use Validator;
use Redirect;

class RegistrationController extends Controller
{
   public function member_form(){
     // $member_details=Regimember::all();
      if($lastid=Regimember::all()->last()){  
         $vnum=$lastid->id;
     }
     else{
      $vnum=0;
     }
     return view('admin.member_registration.registration',[
        'lastid'=>$vnum,
       //  'member_details'->$member_details,
     ]);
   }
   public function add_member(Request $request){

      $user_photo1=$request->file('user_nid');
      $user_photo2=$request->file('user_photo');
     
      $name=$user_photo1->getClientOriginalName();
      $uploadPath='public/image/';
      $user_photo1->move($uploadPath,$name);
      $imageUrl1=$uploadPath.$name;

      $name=$user_photo2->getClientOriginalName();
      $uploadPath='public/image/';
      $user_photo2->move($uploadPath,$name);
      $imageUrl2=$uploadPath.$name;


      $this->imginfo($request,$imageUrl1,$imageUrl2);
    
      return redirect()->back();
     

 
   }


   public function imginfo($request,$imageUrl1,$imageUrl2){
   
      $adddata=new Regimember();
      $adddata->reg_number=$request->reg_number;
      $adddata->ac_number=$request->ac_number;
      $adddata->reg_name=$request->reg_name;
      $adddata->reg_nid=$request->reg_nid;
      $adddata->reg_father_name=$request->reg_father_name;
      $adddata->reg_mother_name=$request->reg_mother_name;
      $adddata->reg_father_oco=$request->reg_father_oco;
      $adddata->reg_mother_occo=$request->reg_mother_occo;
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
      $adddata->user_photo=$imageUrl1;
      $adddata->user_nid=$imageUrl2;
      $adddata->reg_date=date('Y-m-d');
//      $adddata->reg_date=Carbon::today();
      $adddata->save();
      return redirect()->back();

   }
   public function manage_member(){
          $member_details=Regimember::orderby('created_at','desc')->get();
       
        return view('admin.member_registration.manage_reg_member',[
          
            'member_details'=>$member_details,
        ]);
   }
public function member_edit($id){
//$edit_member=Regimember::find($id);
$edit_member=Regimember::where('id',$id)->first();
return view('admin.member_registration.edit_regi_member',[
   'edit_member'=>$edit_member,
]);
}

// public function member_details_update(Request $request){
//    $memberbyID=Regimember::where('id', $request->id)->first();


//    $user_photo1=$request->file('user_nid');
//    $user_photo2=$request->file('user_photo');

//    if ($user_photo1) {
//       unlink($memberbyID->user_nid);
//       $name=$user_photo1->getClientOriginalName();
//       $uploadPath='public/image/';
//       $user_photo1->move($uploadPath,$name);
//       $imageUrl1=$uploadPath.$name;
//   } else {
//       $imageUrl1 = $memberbyID->user_nid;
//   }

//   if ($user_photo2) {
//    unlink($memberbyID->user_photo);
//    $name=$user_photo2->getClientOriginalName();
//    $uploadPath='public/image/';
//    $user_photo2->move($uploadPath,$name);
//    $imageUrl2=$uploadPath.$name;

// } else {
//    $imageUrl2 = $memberbyID->user_photo;
// }

// $this->update_imageinfo($request,$imageUrl1,$imageUrl2);
 
//    return redirect('/manage-member');
  


// }
public function member_details_update(Request $request){
$update_data=Regimember::where('id', $request->id)->first();
$update_data->reg_name=$request->reg_name;
$update_data->reg_father_name=$request->reg_father_name;
$update_data->reg_mother_name=$request->reg_mother_name;
$update_data->reg_birth_date=$request->reg_birth_date;
$update_data->reg_profession=$request->reg_profession;
$update_data->reg_phone=$request->reg_phone;
$update_data->reg_pre_adress=$request->reg_pre_adress;
$update_data->reg_per_adress=$request->reg_per_adress;
$update_data->em_name=$request->em_name;
$update_data->em_relation=$request->em_relation;
$update_data->em_phone=$request->em_phone;
$update_data->em_adress=$request->em_adress;
$update_data->no_name=$request->no_name;
$update_data->no_relation=$request->no_relation;
$update_data->no_phone=$request->no_phone;
$update_data->no_adress=$request->no_adress;
// $update_data->user_photo=$imageUrl1;
// $update_data->user_nid=$imageUrl2;
$update_data->save();
return redirect('/manage-member');
}
   public function regi_member_delet($id){
      $delete_member=Regimember::find($id);
      $delete_member->delete();
      return redirect()->back();
   }
   public function member_status_update($id){
      $member_active_status=Regimember::find($id);
      if ($member_active_status->member_activation==1) {
        $member_active_status->member_activation=0;
        $member_active_status->save();
        return redirect('/manage-member');
      }else if($member_active_status->member_activation==0){
        $member_active_status->member_activation=1;
        $member_active_status->save();
        return redirect('/manage-member');
      }
   }
public function regi_member_delet_view($id){
   $cdata=company::all();
   $view_member=Regimember::find($id);
      return view('admin.member_registration.view_regi_member',[
         'view_member'=>$view_member,
         'cdata'=>$cdata,
      ]);
}

}
