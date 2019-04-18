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


class voucherController extends Controller
{
    
    //transection Voucher
         ///ajax api
         public function showdebit_b($id){
            $data=Accounthead::find($id);
            return $data;
        }
        public function tra_edit($id){
            $data=Transvoucher::find($id);
            return $data;
        }


    public function transection_voucher(){
        $acheaddetail=Accounthead::where('accounthead_status',1)->get();
////For count Last Id number form Table 
         if($lastid=Transvoucher::all()->last()){  
             $vnum=$lastid->id;
         }
         else{
          $vnum=0;
         }
        
              
       $tradetails=Transvoucher::orderby('created_at','desc')->get() ;
 
        return view('admin.voucher.transection_voucher',['tradetails'=>$tradetails,'acheaddetail'=>$acheaddetail,'lastid'=>$vnum]);
     }

     public function transection_add(Request $request){
        $this->Validate($request, [
            't_debit_head' => 'required',      
            't_credit_head' => 'required',      
            't_amount' => 'required',      
 
           
    
       ]);

    $transection=new Transvoucher();
    $transection->t_voucher=$request->t_voucher;
    $transection->t_debit_head=$request->t_debit_head;
    $transection->t_debit_belence=$request->t_debit_belence;
    $transection->t_credit_head=$request->t_credit_head;
    $transection->t_credit_belence=$request->t_credit_belence;
    $transection->t_amount=$request->t_amount;
    $transection->t_des=$request->t_des;
    $transection->t_date=$request->t_date;
    $transection->t_time=Carbon::now('+6:00');
    $transection->save();
    return redirect()->back();

     }

     public function transection_update(Request $request){
        $this->Validate($request, [
            't_debit_head' => 'required',      
            't_credit_head' => 'required',      
            't_amount' => 'required',      
 
       ]);
        $update=Transvoucher::find($request->id);
        $update->t_debit_head=$request->t_debit_head;
        $update->t_debit_belence=$request->t_debit_belence;
        $update->t_credit_head=$request->t_credit_head;
        $update->t_credit_belence=$request->t_credit_belence;
        $update->t_amount=$request->t_amount;
        $update->t_date=$request->t_date;
        $update->t_des=$request->t_des;
        $update->t_time=Carbon::now('+6:00');

        $update->save();
    return redirect()->back();
        
     }
     public function transection_delete($id){
        $data = Transvoucher::find($id);
        $data->delete();
        return redirect()->back();
     }
     public function t_confirm_statas($id){
        $tconfirm_status=Transvoucher::find($id);
        if ($tconfirm_status->confirm_id==1) {
          $tconfirm_status->confirm_id=0;
          $tconfirm_status->save();
          return redirect('/transection-voucher');
        }else if($tconfirm_status->confirm_id==0){
          $tconfirm_status->confirm_id=1;
          $tconfirm_status->save();
          return redirect('/transection-voucher');
        }
      }

     public function payment_voucher(){

        $user=User::all();
        $supplierdetails=supplier::all();
        $paydetails=Paymentvoucher::orderby('created_at','desc')->get();
        ////For count Last Id number form Table 
        if($lastid=Paymentvoucher::all()->last()){  
            $vnum=$lastid->id;
        }
        else{
         $vnum=0;
        }
      
        return view('admin.voucher.payment_voucher',[
          'paydetails'=>$paydetails,
          'supplierdetails'=>$supplierdetails,
          'lastid'=>$vnum,
          'user'=>$user,
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
        $payadd->p_time=Carbon::now('+6:00');
        $payadd->pconfirm_status=0;
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
    public function p_confirm_statas($id){
        $pconfirm_status=Paymentvoucher::find($id);
        if ($pconfirm_status->pconfirm_status==1) {
          $pconfirm_status->pconfirm_status=0;
          $pconfirm_status->save();
          return redirect('/payment-voucher');
        }else if($pconfirm_status->pconfirm_status==0){
          $pconfirm_status->pconfirm_status=1;
          $pconfirm_status->save();
          return redirect('/payment-voucher');
        }
      }
     public function collection_voucher(){
        $customerdetails=custormer::all();
        $collectiondetails=Collectionvoucher::orderby('created_at','desc')->get();
              ////For count Last Id number form Table 
            if($lastid=Collectionvoucher::all()->last()){  
                $vnum=$lastid->id;
            }
            else{
             $vnum=0;
            }
         return view('admin.voucher.collection_voucher',['collectiondetails'=>$collectiondetails,'customerdetails'=>$customerdetails,'lastid'=>$vnum]);
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
     public function c_confirm_statas($id){
        $cconfirm_status=Collectionvoucher::find($id);
        if ($cconfirm_status->c_confirm_status==1) {
          $cconfirm_status->c_confirm_status=0;
          $cconfirm_status->save();
          return redirect('/collection-voucher');
        }else if($cconfirm_status->c_confirm_status==0){
          $cconfirm_status->c_confirm_status=1;
          $cconfirm_status->save();
          return redirect('/collection-voucher');
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
        $expvoucher=Expencevoucher::orderby('created_at','desc')->get();
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
        return view('admin.voucher.expence_voucher',[
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
         $add_data->e_time=Carbon::now('+6:00');
         $add_data->confirm_id=0;
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

      public function e_confirm_statas($id){
        $econfirm_status=Expencevoucher::find($id);
        if ($econfirm_status->confirm_id==1) {
          $econfirm_status->confirm_id=0;
          $econfirm_status->save();
          return redirect('/expence-voucher');
        }else if($econfirm_status->confirm_id==0){
          $econfirm_status->confirm_id=1;
          $econfirm_status->save();
          return redirect('/expence-voucher');
        }
      }
////////income Voucher
public function income_voucher(){
  $incvoucher=Incomevoucher::orderby('created_at','desc')->get();
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
   return view('admin.voucher.income_voucher',[
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
   $add_data->confirm_id=0;
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
public function i_confirm_statas($id){
  $iconfirm_status=Incomevoucher::find($id);
  if ($iconfirm_status->confirm_id==1) {
    $iconfirm_status->confirm_id=0;
    $iconfirm_status->save();
    return redirect('/income-voucher');
  }else if($iconfirm_status->confirm_id==0){
    $iconfirm_status->confirm_id=1;
    $iconfirm_status->save();
    return redirect('/income-voucher');
  }
}
    //  ----------------------------------------------Report--------------------------------
    public function transection_report($id){
        $acheaddetail=Accounthead::where('accounthead_status',1)->get();
        $transectionByid=Transvoucher::find($id);
        $companydetails=company::all();
        return view('admin.voucher.transection_report',['acheaddetail'=>$acheaddetail,'tradetails'=>$transectionByid,'companydetails'=>$companydetails]);

    }
    public function payment_report($id){
        $paydetailsByid=Paymentvoucher::find($id);
        $supplierdetails=supplier::all();
        $companydetails=company::all();

        return view('admin.voucher.payment_report',['paydetails'=>$paydetailsByid,'supplierdetails'=>$supplierdetails,'companydetails'=>$companydetails]);

    }

    public function collection_report($id){
        $collectionByid=Collectionvoucher::find($id);
        $customerdetails=custormer::all();
        $companydetails=company::all();


        return view('admin.voucher.collection_report',['colldetails'=>$collectionByid,'customerdetails'=>$customerdetails,'companydetails'=>$companydetails]);

    }
}
