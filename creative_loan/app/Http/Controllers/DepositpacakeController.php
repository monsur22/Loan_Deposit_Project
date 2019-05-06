<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Loanpakage;
use App\Depositpakage;

use Carbon\Carbon;
use Validator;
use Redirect;
class DepositpacakeController extends Controller
{
    
    public function index()
    {   
       
        $datashow=Depositpakage::all();
        return view ('admin.deposit_pakage.create_deposite_package',[
            'datashow'=>$datashow,
        ]);
    }
    public function add_deposit_pakage(Request $request){
        $add_deposite_pakage= new Depositpakage();
        $add_deposite_pakage->d_pakage_name=$request->d_pakage_name;
   
        $add_deposite_pakage->d_amount=$request->d_amount;
        $add_deposite_pakage->d_Interest=$request->d_Interest;
        $add_deposite_pakage->d_total_amount=$request->d_total_amount;
        $add_deposite_pakage->d_number_install=$request->d_number_install;
        $add_deposite_pakage->d_per_ins_amount=$request->d_per_ins_amount;
        $add_deposite_pakage->d_ins_type=$request->d_ins_type;
        $add_deposite_pakage->d_fine_p_ins=$request->d_fine_p_ins;
        $add_deposite_pakage->d_date=Carbon::today();
        $add_deposite_pakage->save();
        return redirect()->back();
       // return $add_deposite_pakage;
    }

    // public function edit_deposit_pakage($id){
    //     $datashow=Depositpakage::find($id);
    //     return $datashow;
    // }
    public function d_edit_deposit_pakage(Request $request){
        $id = $request->id;
        $datas = DB::table('depositpakages')->where('id', $id)->get();
        return response($datas);
    }
    public function update_deposit_pakage(Request $request){
    //     $update_data=Depositpakage::find($request->id);
    //    // $update_data=Depositpakage::find($id);
    //     $update_deposite_pakage->d_pakage_name=$request->d_pakage_name;
    //     $update_deposite_pakage->d_currency=$request->d_currency;
    //     $update_deposite_pakage->d_amount=$request->d_amount;
    //     $update_deposite_pakage->d_Interest=$request->d_Interest;
    //     $update_deposite_pakage->d_total_amount=$request->d_total_amount;
    //     $update_deposite_pakage->d_number_install=$request->d_number_install;
    //     $update_deposite_pakage->d_per_ins_amount=$request->d_per_ins_amount;
    //     $update_deposite_pakage->d_ins_type=$request->d_ins_type;
    //     $update_deposite_pakage->d_fine_p_ins=$request->d_fine_p_ins;
   
    //    // $update_deposite_pakage->save();
    //     //return redirect()->back();
    //     return $update_deposite_pakage;
    DB::table('depositpakages')->where('id',$request->id)->update([
        'd_pakage_name'=>$request->d_pakage_name,
       
        'd_amount'=>$request->d_amount,
        'd_Interest'=>$request->d_Interest,
        'd_total_amount'=>$request->d_total_amount,
        'd_number_install'=>$request->d_number_install,
        'd_per_ins_amount'=>$request->d_per_ins_amount,
        'd_ins_type'=>$request->d_ins_type,
        'd_fine_p_ins'=>$request->d_fine_p_ins,
       
        
     
    ]);
    return redirect()->back();
    }

    public function delete_deposit_pakage($id){
        $deletedata=Depositpakage::find($id);
        $deletedata->delete();
        return redirect()->back();

    }

    public function deposit_status_update($id){
        $deposit_status=Depositpakage::find($id);
        if ($deposit_status->active_status==1) {
          $deposit_status->active_status=0;
          $deposit_status->save();
          return redirect()->back();
      
        }else if($deposit_status->active_status==0){
          $deposit_status->active_status=1;
          $deposit_status->save();
          return redirect()->back();
        
        }
    }
    
}
