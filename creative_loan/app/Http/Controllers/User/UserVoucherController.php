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
use App\custormer;
use App\Paymentvoucher;
use App\Expencevoucher;
use App\Collectionvoucher;
use App\Incomevoucher;

use App\Transvoucher;
use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;

class UserVoucherController extends Controller
{
    public function payment_voucher(){
      $user=User::all();
        $supplierdetails=supplier::all();
        $paydetails=Paymentvoucher::orderby('created_at','desc')
                                    ->where('user_id','=',session('id'))
                                    ->where('user_role','=',session('user_role'))
                                    ->get();
        ////For count Last Id number form Table 
        if($lastid=Paymentvoucher::all()->last()){  
            $vnum=$lastid->id;
        }
        else{
         $vnum=0;
        }
      
        return view('user.dashboard.voucher.payment_voucher',[
          'paydetails'=>$paydetails,
          'supplierdetails'=>$supplierdetails,
          'user'=>$user,
          'lastid'=>$vnum,
          ]);
     }
     public function payment_add(Request $request){
        $this->Validate($request, [
            's_name' => 'required',      
            'p_type' => 'required',      
            'p_amount' => 'required',      
 
       ]);
        $payadd=new Paymentvoucher();
        $payadd->pv_number=$request->pv_number;
        $payadd->p_date=$request->p_date;
        $payadd->s_name=$request->s_name;
        $payadd->pre_due=$request->pre_due;
        $payadd->parches_n=$request->parches_n;
        $payadd->p_type=$request->p_type;
        $payadd->p_des=$request->p_des;
        $payadd->p_amount=$request->p_amount;
        $payadd->pconfirm_status=0;
        $payadd->p_time=Carbon::now('+6:00');
        $payadd->user_id=Session::get('id');
        $payadd->user_role=Session::get('user_role');
        $payadd->save();
        return redirect()->back();

     }
     public function pay_edit($id){
        $data=Paymentvoucher::find($id);
        return $data;
    }

    public function payment_update(Request $request){
        $this->Validate($request, [
            's_name' => 'required',      
            'p_type' => 'required',      
            'p_amount' => 'required',      
 
       ]);
        $update_data=Paymentvoucher::find($request->id);
        $update_data->pv_number=$request->pv_number;
        $update_data->p_date=$request->p_date;
        $update_data->s_name=$request->s_name;
        $update_data->pre_due=$request->pre_due;
        $update_data->parches_n=$request->parches_n;
        $update_data->p_type=$request->p_type;
        $update_data->p_des=$request->p_des;
        $update_data->p_amount=$request->p_amount;
        $payadd->p_time=Carbon::now('+6:00');
        $update_data->save();
        return redirect()->back();
    }

     public function payment_delete($id){
        $data = Paymentvoucher::find($id);
        $data->delete();
        return redirect()->back();        
     }

     public function showpay($id){
        $data=supplier::find($id);
        return $data;
    }
    public function user_p_confirm_statas($id){
        $pconfirm_status=Paymentvoucher::find($id);
        if ($pconfirm_status->pconfirm_status==1) {
          $pconfirm_status->pconfirm_status=0;
          $pconfirm_status->save();
          return redirect('/user/payment-voucher');
        }else if($pconfirm_status->pconfirm_status==0){
          $pconfirm_status->pconfirm_status=1;
          $pconfirm_status->save();
          return redirect('/user/payment-voucher');
        }
      }
     public function collection_voucher(){
        $customerdetails=custormer::all();
        $collectiondetails=Collectionvoucher::orderby('created_at','desc')
                                              ->where('user_id','=',session('id'))
                                              ->where('user_role','=',session('user_role'))
                                              ->get();
              ////For count Last Id number form Table 
            if($lastid=Collectionvoucher::all()->last()){  
                $vnum=$lastid->id;
            }
            else{
             $vnum=0;
            }
         return view('user.dashboard.voucher.collection_voucher',['collectiondetails'=>$collectiondetails,'customerdetails'=>$customerdetails,'lastid'=>$vnum]);
     }
     public function collection_add(Request $request){
        $this->Validate($request, [
            'c_name' => 'required',      
            'c_ptype' => 'required',      
            'c_amount' => 'required',      
 
       ]);
         $add_data=new Collectionvoucher();
         $add_data->c_voucher=$request->c_voucher;
         $add_data->c_date=$request->c_date;
         $add_data->c_name=$request->c_name;
         $add_data->c_pre_due=$request->c_pre_due;
         $add_data->c_purnum=$request->c_purnum;
         $add_data->c_des=$request->c_des;
         $add_data->c_ptype=$request->c_ptype;
         $add_data->c_amount=$request->c_amount;
         $add_data->c_confirm_status=0;
         $add_data->c_time=Carbon::now('+6:00');

         $add_data->user_id=Session::get('id');
         $add_data->user_role=Session::get('user_role');
         $add_data->save();
        return redirect()->back();        

     }
     public function coll_edit($id){
        $data=Collectionvoucher::find($id);
        return $data;
    }
    public function show_coll($id){
        $data=custormer::find($id);
        return $data;
    }
    public function collection_update(Request $request){
        $update_data= Collectionvoucher::find($request->id);
        $update_data->c_voucher=$request->c_voucher;
        $update_data->c_date=$request->c_date;
        $update_data->c_name=$request->c_name;
        $update_data->c_pre_due=$request->c_pre_due;
        $update_data->c_purnum=$request->c_purnum;
        $update_data->c_des=$request->c_des;
        $update_data->c_ptype=$request->c_ptype;
        $update_data->c_amount=$request->c_amount;
        $update_data->save();
       return redirect()->back();        

    }
     public function collection_deleter($id){
        $data = Collectionvoucher::find($id);
        $data->delete();
        return redirect()->back();        
     }
     public function user_c_confirm_statas($id){
        $cconfirm_status=Collectionvoucher::find($id);
        if ($cconfirm_status->c_confirm_status==1) {
          $cconfirm_status->c_confirm_status=0;
          $cconfirm_status->save();
          return redirect('/user/collection-voucher');
        }else if($cconfirm_status->c_confirm_status==0){
          $cconfirm_status->c_confirm_status=1;
          $cconfirm_status->save();
          return redirect('/user/collection-voucher');
        }
      }



//////////expence Voucher
         ///ajax api
         public function eshowdebit_b($id){
          $data=Accounthead::find($id);
          return $data;
      }
      public function exp_edit($id){
          $data=Expencevoucher::find($id);
          return $data;
      }
      public function expence_voucher(){
        $expvoucher=Expencevoucher::orderby('created_at','desc')
                                  ->where('user_id','=',session('id'))
                                  ->where('user_role','=',session('user_role'))
                                  ->get();
       // $acheaddetail=Accounthead::where('accounthead_status',1)->get();
       $acheadshow=Accounthead::all();
        $acheaddetail=Accounthead::where([
                                        ['accounthead_status', '=', '1'],
                                        ['tra_type', '=', 'Expense'],
                                        
                                    ])
                                     ->get();
        $acheacredit=Accounthead::where([
                                      ['accounthead_status', '=', '1'],
                                      ['tra_type', '=', 'Cash'],
                                      
                                  ])
                                   ->get();

        if($lastid=Expencevoucher::all()->last()){  
          $vnum=$lastid->id;
      }
      else{
       $vnum=0;
      }
        return view('user.dashboard.voucher.expence_voucher',[
          'expvoucher'=>$expvoucher,
          'lastid'=>$vnum,
          'acheaddetail'=>$acheaddetail,
          'acheacredit'=>$acheacredit,
          'acheadshow'=>$acheadshow
          ]);

      }
      public function expence_voucher_add(Request $request){

        $this->Validate($request, [
            'e_debit_head' => 'required',      
            'e_credit_head' => 'required',      
            'e_amount' => 'required',      
 
       ]);
         $add_data=new Expencevoucher();
         $add_data->e_voucher=$request->e_voucher;
         $add_data->e_date=$request->e_date;
         $add_data->e_debit_head=$request->e_debit_head;
         $add_data->e_debit_belence=$request->e_debit_belence;
         $add_data->e_credit_head=$request->e_credit_head;
         $add_data->e_credit_belence=$request->e_credit_belence;
         $add_data->e_des=$request->e_des;
         $add_data->e_amount=$request->e_amount;
         $add_data->confirm_id=0;
         $add_data->e_time=Carbon::now('+6:00');
         $add_data->user_id=Session::get('id');
         $add_data->user_role=Session::get('user_role');
         $add_data->save();
        return redirect()->back(); 
      }

      public function expence_voucher_delete($id){
        $data = Expencevoucher::find($id);
        $data->delete();
        return redirect()->back();  
      }

      public function expence_voucher_update(Request $request){

        $this->Validate($request, [
          'e_debit_head' => 'required',      
          'e_credit_head' => 'required',      
          'e_amount' => 'required',      

     ]);
       $update_data=Expencevoucher::find($request->id);
       $update_data->e_voucher=$request->e_voucher;
       $update_data->e_date=$request->e_date;
       $update_data->e_debit_head=$request->e_debit_head;
       $update_data->e_debit_belence=$request->e_debit_belence;
       $update_data->e_credit_head=$request->e_credit_head;
       $update_data->e_credit_belence=$request->e_credit_belence;
       $update_data->e_des=$request->e_des;
       $update_data->e_amount=$request->e_amount;
      
       $update_data->save();
      return redirect()->back(); 
      }

      public function user_e_confirm_statas($id){
        $econfirm_status=Expencevoucher::find($id);
        if ($econfirm_status->confirm_id==1) {
          $econfirm_status->confirm_id=0;
          $econfirm_status->save();
          return redirect('/user/expence-voucher');
        }else if($econfirm_status->confirm_id==0){
          $econfirm_status->confirm_id=1;
          $econfirm_status->save();
          return redirect('/user/expence-voucher');
        }
      }
////////income Voucher
public function income_voucher(){
  $incvoucher=Incomevoucher::orderby('created_at','desc')
                            ->where('user_id','=',session('id'))
                            ->where('user_role','=',session('user_role'))
                            ->get();
  // $acheaddetail=Accounthead::where('accounthead_status',1)->get();
   $iacheadshow=Accounthead::all();
   $acheaddetail=Accounthead::where([
                                   ['accounthead_status', '=', '1'],
                                   ['tra_type', '=', 'Income'],
                                   
                               ])
                                ->get();
$acheadebit=Accounthead::where([
                                  ['accounthead_status', '=', '1'],
                                  ['tra_type', '=', 'Cash'],
                                  
                              ])
                               ->get();

   if($lastid=Incomevoucher::all()->last()){  
     $vnum=$lastid->id;
 }
 else{
  $vnum=0;
 }
   return view('user.dashboard.voucher.income_voucher',[
     'incvoucher'=>$incvoucher,
     'lastid'=>$vnum,
     'acheaddetail'=>$acheaddetail,
     'acheadebit'=>$acheadebit,
     'iacheadshow'=>$iacheadshow
     ]);

}


public function ishowdebit_b($id){
  $data=Accounthead::find($id);
  return $data;
}
public function ixp_edit($id){
  $data=Incomevoucher::find($id);
  return $data;
}
public function income_add(Request $request){
  $this->Validate($request, [
      'i_debit_head' => 'required',      
      'i_credit_head' => 'required',      
      'i_amount' => 'required',      

 ]);
   $add_data=new Incomevoucher();
   $add_data->i_voucher=$request->i_voucher;
   $add_data->i_date=$request->i_date;
   $add_data->i_debit_head=$request->i_debit_head;
   $add_data->i_debit_belence=$request->i_debit_belence;
   $add_data->i_credit_head=$request->i_credit_head;
   $add_data->i_credit_belence=$request->i_credit_belence;
   $add_data->i_des=$request->i_des;
   $add_data->i_amount=$request->i_amount;
   $add_data->confirm_id=0;
   $add_data->i_time=Carbon::now('+6:00');
   $add_data->user_id=Session::get('id');
   $add_data->user_role=Session::get('user_role');
   $add_data->save();
  return redirect()->back();        

}
public function income_update(Request $request){
  $this->Validate($request, [
    'i_debit_head' => 'required',      
    'i_credit_head' => 'required',      
    'i_amount' => 'required',      

]);
  $update_data=Incomevoucher::find($request->id);
  $update_data->i_voucher=$request->i_voucher;
  $update_data->i_date=$request->i_date;
  $update_data->i_debit_head=$request->i_debit_head;
  $update_data->i_debit_belence=$request->i_debit_belence;
  $update_data->i_credit_head=$request->i_credit_head;
  $update_data->i_credit_belence=$request->i_credit_belence;
  $update_data->i_des=$request->i_des;
  $update_data->i_amount=$request->i_amount;
  $update_data->save();
 return redirect()->back();     
}


public function income_delete($id){
  $data = Incomevoucher::find($id);
  $data->delete();
  return redirect()->back();  
}
public function user_i_confirm_statas($id){
  $iconfirm_status=Incomevoucher::find($id);
  if ($iconfirm_status->confirm_id==1) {
    $iconfirm_status->confirm_id=0;
    $iconfirm_status->save();
    return redirect('/user/income-voucher');
  }else if($iconfirm_status->confirm_id==0){
    $iconfirm_status->confirm_id=1;
    $iconfirm_status->save();
    return redirect('/user/income-voucher');
  }
}
    //  ----------------------------------------------Report--------------------------------

    public function payment_report($id){
        $paydetailsByid=Paymentvoucher::find($id);
        $supplierdetails=supplier::all();
        $companydetails=company::all();

        return view('user.dashboard.voucher.payment_report',['paydetails'=>$paydetailsByid,'supplierdetails'=>$supplierdetails,'companydetails'=>$companydetails]);

    }

    public function collection_report($id){
        $collectionByid=Collectionvoucher::find($id);
        $customerdetails=custormer::all();
        $companydetails=company::all();


        return view('user.dashboard.voucher.collection_report',['colldetails'=>$collectionByid,'customerdetails'=>$customerdetails,'companydetails'=>$companydetails]);

    }
}
