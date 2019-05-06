<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\company;
use App\branch;
use App\Group;
use App\Category;
use App\Accounthead;

use Carbon\Carbon;
use App\verify_token;
use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;

class accountsetupController extends Controller
{
     ///group
     public function groupdetails(){
        $groupdetails=Group::all();
        return view('admin.account.group',['groupdetails'=>$groupdetails]);
          
    
      }
    public function groupadd(Request $request){
        $group=new Group();
        $group->group_code=$request->group_code;
        $group->group_name=$request->group_name;
        $group->group_status=1;
        $group->save();
      
        return redirect()->back();

      }
      public function groupviewbyid($id){
        $data = Group::find($id);
        return $data;
      }

      public function groupupdate(Request $request){
        $updateinfo= Group::find($request->id);
        $updateinfo->group_code=$request->group_code;
        $updateinfo->group_name=$request->group_name;
        $updateinfo->save();
        return redirect()->back();


      }

      public function groupdelete($id){
        $groupdelete=Group::find($id);
        $groupdelete->delete();
        return redirect()->back();


      }
      public function group_status_update($id){
        $group_status = Group::find($id);
        if ($group_status->group_status==1) {
          $group_status->group_status=0;
          $group_status->save();
          return redirect('/group');
        }else if($group_status->group_status==0){
          $group_status->group_status=1;
          $group_status->save();
          return redirect('/group');
        }
        
      }
//////////category//////////
      public function categorydetails(){
        $groupdetails=Group::all();
        $catdetails=Category::all();
        return view('admin.account.category',['catdetails'=>$catdetails],['groupdetails'=>$groupdetails]);
          
    
      }
      public function categoryadd(Request $request){
      

        $category=new Category();
        $category->cat_code=$request->cat_code;
        $category->cat_name=$request->cat_name;
        $category->cat_group_name=$request->cat_group_name;
        $category->cat_status=1;
        $category->save();
        return redirect()->back();
          
    
      }
      public function cat_update(Request $request){
        $updateinfo= Category::find($request->id);
        $updateinfo->cat_code=$request->cat_code;
        $updateinfo->cat_name=$request->cat_name;
        $updateinfo->cat_group_name=$request->cat_group_name;
        $updateinfo->save();
        return redirect()->back();


      }
      public function catviewbyid($id){
        $data = Category::find($id);
        return $data;
      } 
      public function cat_delete($id){
        $cat_delete = Category::find($id);
        $cat_delete->delete();
        return redirect()->back();
      }
      public function cat_status_update($id){
        $cat_status = Category::find($id);
        if ($cat_status->cat_status==1) {
          $cat_status->cat_status=0;
          $cat_status->save();
          return redirect('/category');
        }else if($cat_status->cat_status==0){
          $cat_status->cat_status=1;
          $cat_status->save();
          return redirect('/category');
        }
        
      }
      



      ///accont head
      public function acheaddetails(){
    
       $acheaddetail=Accounthead::orderby('created_at','desc')->get();

         $groupdetails=Group::where('group_status',1)->get();
         $catdetails=Category::where('cat_status',1)->get();
       // return view('admin.account.accounthead',['catdetails'=>$catdetails],['groupdetails'=>$groupdetails]);
        return view('admin.account.accounthead',['acheaddetail'=>$acheaddetail,'catdetails'=>$catdetails,'groupdetails'=>$groupdetails]);
      }
      public function achead_add(Request $request){


        $ah_data=new Accounthead();
        $ah_data->ah_group_name=$request->ah_group_name;
        $ah_data->ah_cat_name=$request->subcategory;
        $ah_data->ac_head_code=$request->ac_head_code;
        $ah_data->ac_head_name=$request->ac_head_name;
        $ah_data->acc_type_name=$request->acc_type_name;
        $ah_data->tra_type=$request->acc_tr_type_name;
        $ah_data->ah_balance=$request->ah_balance;
        $ah_data->accounthead_status=1;
        $ah_data->user_id=Session::get('id');
        $ah_data->user_role=Session::get('user_role');
        $ah_data->ah_date=Carbon::now();
        $ah_data->time=Carbon::now('+6:00');
       
        $ah_data->save();
        return redirect()->back();
        
        // print_r($ah_data);
        // echo('$ah_data');

      }
      public function achead_info($id){
        $data = Accounthead::find($id);
        return $data;
      }
      public function achead_update(Request $request) {
        $updateinfo= Accounthead::find($request->id);
        $updateinfo->ah_group_name=$request->ah_group_name;
        $updateinfo->ah_cat_name=$request->editsubcategory;
        $updateinfo->ac_head_code=$request->ac_head_code;
        $updateinfo->ac_head_name=$request->ac_head_name;
        $updateinfo->acc_type_name=$request->acc_type_name;
        $updateinfo->tra_type=$request->acc_tr_type_name;
        $updateinfo->ah_balance=$request->ah_balance;
        $updateinfo->save();
        return redirect()->back();
      }
      public function achead_delete($id){
        $data = Accounthead::find($id);
        $data->delete();
        return redirect()->back();
      }
      public function account_head_status_update($id){
        $accounthead_status=Accounthead::find($id);
        if ($accounthead_status->accounthead_status==1) {
          $accounthead_status->accounthead_status=0;
          $accounthead_status->save();
          return redirect('/accounthead');
        }else if($accounthead_status->accounthead_status==0){
          $accounthead_status->accounthead_status=1;
          $accounthead_status->save();
          return redirect('/accounthead');
        }
      }
}
