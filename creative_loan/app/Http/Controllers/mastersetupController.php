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
use App\CompanyUser;

use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;

class mastersetupController extends Controller
{
    
public function company_details(){
    $companydetails=company::all();
      return view('admin.mastersetup.company',['companydetails'=>$companydetails]);
      
  }
  
  
  public function companyAdd(Request $request){
  
   
  
  
  
    $company_image=$request->file('company_image');
    $name=$company_image->getClientOriginalName();
    $uploadPath='public/image/';
    $company_image->move($uploadPath,$name);
    $imageUrl=$uploadPath.$name;
    $this->imginfo($request,$imageUrl);
  
    return redirect()->back();
  
  
  
  }
  
  
  protected  function imginfo( $request,$imageUrl){
  
          
    $company=new company();
    $company->company_name=$request->company_name;
    $company->company_mobile=$request->company_mobile;
    $company->company_email=$request->company_email;
    $company->company_website=$request->company_website;
    $company->company_address=$request->company_address;
    $company->country=$request->country;
    $company->currency_code=$request->currency_code;
    $company->company_vat=$request->company_vat;
    $company->company_image=$imageUrl;
  
    $company->save();
  
  
  }
  
  public function compviewbyid($id){
  
    $data = company::find($id);
    return $data;
  
  }
  
  ///update company info
  public function companyupdate(Request $request) {
  
          
        
    $companyById = company::find( $request->id);
    $company_image=$request->file('company_image');
  
    if ($company_image) {
        //unlink($companyById->company_image);
        $name=$company_image->getClientOriginalName();
        $uploadPath='public/image/';
        $company_image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;
      
    } else {
        $imageUrl = $companyById->company_image;
    }
     $this->imageExistStatus($request,$imageUrl);
     return redirect()->back();
  
   
    /*  echo $imageUrl;
    exit();*/
  
  }
  
  private function imageExistStatus($request,$imageUrl) {
  
    $company=company::find( $request->id);
    $company->company_name=$request->company_name;
    $company->company_mobile=$request->company_mobile;
    $company->company_email=$request->company_email;
    $company->company_website=$request->company_website;
    $company->company_address=$request->company_address;
   
    $company->company_vat=$request->company_vat;
    $company->company_image=$imageUrl;
  
    $company->save();
  
  
  
    
  }
  
  
  ///update compay info
  
  
  
  
  public function companydelete($id){
    $userdelete=company::find($id);
          $userdelete->delete();
      return redirect()->back();
  
  
  }
  
  ///branches
  
  public function branch_details(){
    $branchdetails=branch::all();
    return view('admin.mastersetup.branch',['branchdetails'=>$branchdetails]);
  }
  
  public function branch_add(Request $request){
    $branch=new branch();
    $branch->branch_name=$request->branch_name;
    $branch->branch_mobile=$request->branch_mobile;
    $branch->branch_email=$request->branch_email;
   
    $branch->branch_address=$request->branch_address;
    $branch->opening_date=$request->opening_date;
    $branch->opening_balance=$request->opening_balance;
    $branch->save();
  
    return redirect()->back();
  }
  
  
  
  public function branch_delete($id){
    $userdelete=branch::find($id);
    $userdelete->delete();
    return redirect()->back();
  }
  
  public function branch_edit($id){
    $data = branch::find($id);
    return $data;
  }
  
  
  
  
  
  public function branch_update(Request $request){
  
  
    $updateinfo= branch::find($request->id);
  
    $updateinfo->branch_name=$request->branch_name;
    $updateinfo->branch_mobile=$request->branch_mobile;
    $updateinfo->branch_email=$request->branch_email;
    $updateinfo->branch_address=$request->branch_address;
    $updateinfo->opening_date=$request->opening_date;
    $updateinfo->opening_balance=$request->opening_balance;
    $updateinfo->save();
    return redirect()->back();
  
  
      
  }
  public function branch_status_update($id){
    $branch_status=branch::find($id);
    if ($branch_status->branch_status==1) {
      $branch_status->branch_status=0;
      $branch_status->save();
      return redirect('/branch');
    }else if($branch_status->branch_status==0){
      $branch_status->branch_status=1;
      $branch_status->save();
      return redirect('/branch');
    }
  }
  
  ///user
  public function user_details(){
   // $userdetails=CompanyUser::all();
    $userdetails=CompanyUser::orderby('created_at','desc')->get();
    $branchdetails=branch::all();
   // print_r($branchdetails);
      //return view('admin.mastersetup.branch',['branchdetails'=>$branchdetails]);
      return view('admin.mastersetup.user',['branchdetails'=>$branchdetails],['userdetails'=>$userdetails]);
  }
  public function user_add(Request $request){
    $company_user=new CompanyUser();
    $company_user->first_name=$request->first_name;
    $company_user->last_name=$request->last_name;
    $company_user->email=$request->email;
    $company_user->user_mobile=$request->user_mobile;
    $company_user->user_password=bcrypt($request->user_password);
    $company_user->user_role=$request->user_role;
    $company_user->branch_id=$request->branch_id;
    $company_user->user_status=1;
   
    
  
  
    $company_user->save();
  
    
  
    return redirect()->back();
  }
  public function user_edit($id){
    $data = CompanyUser::find($id);
    return $data;
  }
  public function user_delete($id){
    $userdelete=CompanyUser::find($id);
    $userdelete->delete();
    return redirect()->back();
  }
  public function user_update(Request $request){
    $company_user= CompanyUser::find($request->id);
  
    $company_user->first_name=$request->first_name;
    $company_user->last_name=$request->last_name;
    $company_user->email=$request->email;
    $company_user->user_mobile=$request->user_mobile;
  
    $company_user->user_role=$request->user_role;
    $company_user->branch_id=$request->branch_id;
    $company_user->save();
    return redirect()->back();
  
  
  
  }
  public function user_status_update($id){
    $user_status=CompanyUser::find($id);
    if ($user_status->user_status==1) {
      $user_status->user_status=0;
      $user_status->save();
      return redirect('/user');
    }else if($user_status->user_status==0){
      $user_status->user_status=1;
      $user_status->save();
      return redirect('/user');
    }
  }
  
  
  
  //customer
  public function customer_list(){
    $customerdetails=custormer::all();
    return view('admin.customer_management.custormer_list',['customerdetails'=>$customerdetails]);
  }
  public function customer_add(Request $request){
    $custormer=new custormer();
    $custormer->customer_cat=$request->customer_cat;
    $custormer->customer_name=$request->customer_name;
    $custormer->customer_mobile=$request->customer_mobile;
   
    $custormer->customer_email=$request->customer_email;
    $custormer->customer_address=$request->customer_address;
    $custormer->copaning_balance=$request->copaning_balance;
   
    
  
  
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
    return redirect('/customerlist');
  
      
  }
  public function customer_delete($id){
    $userdelete=custormer::find($id);
    $userdelete->delete();
    return redirect()->back();
  }
  
  
  //////////supplierlist
  public function supplier_list(){
    $supplierdetails=supplier::all();
    return view('admin.supplier_management.supplier_list',['supplierdetails'=>$supplierdetails]);
  }
  public function supplier_add(Request $request){
    $supplier=new supplier();
    $supplier->supplier_cat=$request->supplier_cat;
    $supplier->supplier_name=$request->supplier_name;
    $supplier->supplier_mobile=$request->supplier_mobile;
   
    $supplier->supplier_email=$request->supplier_email;
    $supplier->supplier_address=$request->supplier_address;
    $supplier->sopaning_balance=$request->sopaning_balance;
    
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
