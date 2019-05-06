<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Loanpakage;
use App\Regimember;

class loanController extends Controller
{
public function add_loan(){
    $loan_pakage=Loanpakage::where('active_status','=',1)->get();
    $acc_number=Regimember::all();
    $loan_details=Loan::orderby('created_at','desc')->get();
    if($lastid=Loan::all()->last()){  
        $vnum=$lastid->id;
    }
    else{
     $vnum=0;
    }
    return view('admin.loan.add_new_loan',[
        'loan_details'=>$loan_details,
        'last_id'=>$vnum,
        'loan_pakage'=>$loan_pakage,
        'acc_number'=>$acc_number,
    ]);
}
public function add_loan_action(Request $request){
    $add_data=new Loan();
   
    $add_data->l_acc=$request->l_acc;
    $add_data->l_number=$request->l_number;
    $add_data->l_date=$request->l_date;
    $add_data->l_name=$request->l_name;
    $add_data->l_father_name=$request->l_father_name;
    $add_data->l_phone_number=$request->l_phone_number;
    $add_data->l_closing_date=$request->l_closing_date;
    $add_data->l_pakage=$request->l_pakage;
    $add_data->l_active_status=0;
    $add_data->save();
    return redirect()->back();
    
}
// public function loan_edit($id){
//     $loan_edit=Loan::find($id);
    
//     return $loan_edit;
// }
public function loan_edit($id){
    $loan_edit=Loan::find($id);
    $loan_pakage=Loanpakage::where('active_status','=',1)->get();
    $acc_number=Regimember::all();
 return view('admin.loan.edit_new_loan',[
        
        'loan_edit'=>$loan_edit,
        'loan_pakage'=>$loan_pakage,
        'acc_number'=>$acc_number,
    ]);
}

public function loan_update(Request $request){
    $update_data=Loan::find($request->id);
  
    $update_data->l_acc=$request->l_acc;
    $update_data->l_number=$request->l_number;
    $update_data->l_date=$request->l_date;
    $update_data->l_name=$request->l_name;
    $update_data->l_father_name=$request->l_father_name;
    $update_data->l_phone_number=$request->l_phone_number;
    $update_data->l_closing_date=$request->l_closing_date;
    $update_data->l_pakage=$request->l_pakage;
    $update_data->save();
    return redirect('/loan-add');


}
public function loan_delete($id){
    $delete_loan=Loan::find($id);
    $delete_loan->delete();
    return redirect()->back();


}
public function loan_active_statas($id){
    $loan_active_status=Loan::find($id);
    if ($loan_active_status->l_active_status==1) {
      $loan_active_status->l_active_status=0;
      $loan_active_status->save();
      return redirect('/loan-add');
    }else if($loan_active_status->l_active_status==0){
      $loan_active_status->l_active_status=1;
      $loan_active_status->save();
      return redirect('/loan-add');
    }
}
public function loan($id){
    $data_edit=Regimember::where('id',$id)->first();
    return $data_edit;
}
}
