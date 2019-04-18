<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Loanpakage;
use DB;
use Carbon\Carbon;
use Validator;
use Redirect;
class LoanpackageController extends Controller
{
    



    

    public function loan_add_page(){
        $datashow=Loanpakage::all();

        return view ('admin.loan_pakage.createloan_package',[
            'datashow'=>$datashow,
        ]);
    }
    public function loan_add(Request $request){
        $add_loan=new Loanpakage();
        $add_loan->l_pakage_name=$request->l_pakage_name;
        $add_loan->l_currency=$request->l_currency;
        $add_loan->l_amount=$request->l_amount;
        $add_loan->l_Interest=$request->l_Interest;
        $add_loan->l_total_amount=$request->l_total_amount;
        $add_loan->l_number_install=$request->l_number_install;
        $add_loan->l_per_ins_amount=$request->l_per_ins_amount;
        $add_loan->l_ins_type=$request->l_ins_type;
        $add_loan->l_fine_p_ins=$request->l_fine_p_ins;
        $add_loan->l_date=Carbon::today();
        $add_loan->save();
        return redirect()->back();
    }
    public function manage_laon_pakage(){
        $datashow=Loanpakage::all();
        return view ('sumiti.package.manage_loan_package',[
            'datashow'=>$datashow,
        ]);

    }
    // public function edit_laon_pakage($id){
    //     $editdata=Loanpakage::find($id);
    //     return $editdata;
      
    // }
    public function l_edit_laon_pakage(Request $request){
        $id = $request->id;
        $datas = DB::table('loanpakages')->where('id', $id)->get();
        return response($datas);
    }

    public function update_laon_pakage(Request $request){
        // $update_data=Loanpakage::find($request->id);
        // $update_data->l_pakage_name=$request->l_pakage_name;
        // $update_data->l_currency=$request->l_currency;
        // $update_data->l_amount=$request->l_amount;
        // $update_data->l_Interest=$request->l_Interest;
        // $update_data->l_total_amount=$request->l_total_amount;
        // $update_data->l_number_install=$request->l_number_install;
        // $update_data->l_per_ins_amount=$request->l_per_ins_amount;
        // $update_data->l_ins_type=$request->l_ins_type;
        // $update_data->l_fine_p_ins=$request->l_fine_p_ins;
        // //return $updatedata;
        //  $update_data->save();
        //  return redirect()->back();
        DB::table('loanpakages')->where('id',$request->id)->update([
        'l_pakage_name'=>$request->l_pakage_name,
        'l_currency'=>$request->l_currency,
        'l_amount'=>$request->l_amount,
        'l_Interest'=>$request->l_Interest,
        'l_total_amount'=>$request->l_total_amount,
        'l_number_install'=>$request->l_number_install,
        'l_per_ins_amount'=>$request->l_per_ins_amount,
        'l_ins_type'=>$request->l_ins_type,
        'l_fine_p_ins'=>$request->l_fine_p_ins,
           
            
         
        ]);
        return redirect()->back();
    }
    public function delete_laon_pakage($id){
        $deletedata=Loanpakage::find($id);
        $deletedata->delete();
        return redirect()->back();
    }
public function loan_status_update($id){
    $loan_status=Loanpakage::find($id);
    if ($loan_status->active_status==1) {
      $loan_status->active_status=0;
      $loan_status->save();
      return redirect()->back();
  
    }else if($loan_status->active_status==0){
      $loan_status->active_status=1;
      $loan_status->save();
      return redirect()->back();
    
    }
}
    public function view_laon_pakage($id){
        $view_pakage=Loanpakage::where('id',$id)->first();
        return view ('sumiti.package.view_loan_package',[
            'view_pakage'=>$view_pakage,
        ]);

    }
    
}
