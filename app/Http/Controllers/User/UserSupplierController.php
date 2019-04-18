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
use App\supplier;

use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;
class UserSupplierController extends Controller
{
    public function supplier_list(){
        $supplierdetails=supplier::orderby('created_at','desc')
                        ->where('user_id','=',session('id'))
                        ->where('user_role','=',session('user_role'))
                        ->get();
        return view('user.dashboard.supplier_management.supplier_list',['supplierdetails'=>$supplierdetails]);
      }
      public function supplier_add(Request $request){
        $supplier=new supplier();
        $supplier->supplier_cat=$request->supplier_cat;
        $supplier->supplier_name=$request->supplier_name;
        $supplier->supplier_mobile=$request->supplier_mobile;
       
        $supplier->supplier_email=$request->supplier_email;
        $supplier->supplier_address=$request->supplier_address;
        $supplier->sopaning_balance=$request->sopaning_balance;
        $supplier->supplier_date=Carbon::today();
        $supplier->user_id=Session::get('id');
        $supplier->user_role=Session::get('user_role');
        $supplier->save();
      
        return redirect()->back();
      
      }
      public function supplier_delete($id){
        $userdelete=supplier::find($id);
        $userdelete->delete();
        return redirect()->back();
      }
      
      
      public function supplier_edit($id){
        $data = supplier::find($id);
        return $data;
      }
      
      public function supplier_update(Request $request){
      
      
        $updateinfo= supplier::find($request->id);
      
        $updateinfo->supplier_cat=$request->supplier_cat;
        $updateinfo->supplier_name=$request->supplier_name;
        $updateinfo->supplier_mobile=$request->supplier_mobile;
        $updateinfo->supplier_address=$request->supplier_address;
       
        $updateinfo->supplier_email=$request->supplier_email;
        $updateinfo->sopaning_balance=$request->sopaning_balance;
        
      
          $updateinfo->save();
          return redirect()->back();
      
      
          
      }  


}
