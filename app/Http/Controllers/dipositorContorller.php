<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depositor;
use App\Depositpakage;
use DB;

use App\Regimember;
use App\Loan;
class dipositorContorller extends Controller
{
    public function add_dipositor(){
        $deposit_pakage=Depositpakage::where('active_status','=',1)->get();
        $depositor_details=Depositor::orderby('created_at','desc')->get();
        $acc_number=Regimember::all();
        if($lastid=Depositor::all()->last()){  
            $vnum=$lastid->id;
        }
        else{
         $vnum=0;
        }
        
       return view('admin.deposit.add_new_diposit',[
           'depositor_details'=>$depositor_details,
           'last_id'=>$vnum,
           'deposit_pakage'=>$deposit_pakage,
           'acc_number'=>$acc_number,
       ]);
    }
    public function add_dipositor_action(Request $request){
        $add_data=new Depositor();

        $add_data->d_acc=$request->d_acc;
        $add_data->d_number=$request->d_number;
        $add_data->d_date=$request->d_date;
        $add_data->d_name=$request->d_name;
        $add_data->d_father_name=$request->d_father_name;
        $add_data->d_phone_number=$request->d_phone_number;
        $add_data->d_closing_date=$request->d_closing_date;
        $add_data->d_pakage=$request->d_pakage;
        $add_data->d_active_status=0;
        $add_data->save();
        
return redirect()->back();
    }
    // public function depositor_edit($id){
    //     $depositor_edit=Depositor::find($id);
    //     return $depositor_edit;
    // }
    public function depositor_edit($id){
        $depositor_edit=Depositor::find($id);
        $deposit_pakage=Depositpakage::where('active_status','=',1)->get();
        $acc_number=Regimember::all();
        return view('admin.deposit.new_diposit_edit',[
            'depositor_edit'=>$depositor_edit,
            'deposit_pakage'=>$deposit_pakage,
            'acc_number'=>$acc_number,
        ]);
    }
    public function depositor_update(Request $request){
  
        // $update_data=Depositor::find($request->id);

        // $update_data->d_acc=$request->d_acc;
        // $update_data->d_number=$request->d_number;
        // $update_data->d_date=$request->d_date;
        // $update_data->d_name=$request->d_name;
        // $update_data->d_father_name=$request->d_father_name;
        // $update_data->d_phone_number=$request->d_phone_number;
        // $update_data->d_closing_date=$request->d_closing_date;
        // $update_data->d_pakage=$request->d_pakage;
        // $update_data->save();

        DB::table('depositors')->where('id',$request->id)->update([
         
           
            'd_acc'=>$request->d_acc,
            'd_number'=>$request->d_number,
            'd_date'=>$request->d_date,
            'd_name'=>$request->d_name,
            'd_father_name'=>$request->d_father_name,
            'd_phone_number'=>$request->d_phone_number,
            'd_closing_date'=>$request->d_closing_date,
            'd_pakage'=>$request->d_pakage,
           
            
         
        ]);

       return redirect('/depositor-add');

    }

    public function depositor_delete($id){
        $delete_deposit=Depositor::find($id);
        
        $delete_deposit->delete();
        return redirect()->back();
    }
    public function deposit_active_statas($id){
        $deposite_active_status=Depositor::find($id);
        if ($deposite_active_status->d_active_status==1) {
          $deposite_active_status->d_active_status=0;
          $deposite_active_status->save();
          return redirect('/depositor-add');
        }else if($deposite_active_status->d_active_status==0){
          $deposite_active_status->d_active_status=1;
          $deposite_active_status->save();
          return redirect('/depositor-add');
        }
    }
 
    public function depositor($id){
        $data_edit=Regimember::where('id',$id)->first();
        return $data_edit;
    }


}
