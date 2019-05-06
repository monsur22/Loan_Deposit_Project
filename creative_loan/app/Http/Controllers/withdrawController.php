<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sharecollection;
use App\Depositcollection;
use App\Depositor;
use App\Regimember;
use App\Loan;
use App\Sharewithdraw;
use App\Dipositwithdraw;
use App\company;
use Session;
use DB;
class withdrawController extends Controller
{
    public function share_withdraw(){
        $share_details=Sharewithdraw::orderby('created_at','desc')->get();
        $acc_number=Regimember::all();

        if($lastid=Sharewithdraw::all()->last()){  
            $vnum=$lastid->id;
        }
        else{
         $vnum=0;
        }
        return view('admin.withdraw.share_withdraw',[
            'last_id'=>$vnum,
            'share_details'=>$share_details,
            'acc_number'=>$acc_number,

        ]);

    }
    public function share_withdraw_add(Request $request){
    $add_data=new Sharewithdraw();
    $add_data->s_withdraw_date=$request->s_withdraw_date;
    $add_data->s_withdraw_number=$request->s_withdraw_number;
    $add_data->s_withdraw_currency=$request->s_withdraw_currency;
    $add_data->reg_number_withdraw=$request->reg_number_withdraw;
    $add_data->account_number_withdraw=$request->account_number_withdraw;
    $add_data->s_withdraw_name=$request->s_withdraw_name;
    $add_data->s_withdraw_type=$request->s_withdraw_type;
    $add_data->s_withdraw_amount=$request->s_withdraw_amount;
    $add_data->s_withdraw_note=$request->s_withdraw_note;
    $add_data->s_w_date=date('Y-m-d');
    $add_data->s_withdraw_status=0;
    $add_data->save();
    return redirect()->back();
    }
    public function share_withdraw_edit($id){
        // $data_edit=Sharecollection::find($id);
        // return $data_edit;
        $acc_number=Regimember::all();
        // $deposit_number=Depositor::all();
        // $loan_number=Loan::all();
        $data_edit=Sharewithdraw::where('id',$id)->first();
        return view('admin.withdraw.share_withdraw_edit',[
            'data_edit'=>$data_edit,
            // 'loan_number'=>$loan_number,
            'acc_number'=>$acc_number,
            // 'deposit_number'=>$deposit_number,
          
        ]);
    }
    public function share_withdraw_update(Request $request){
        $data_update=Sharewithdraw::find($request->id);
        $data_update->s_withdraw_date=$request->s_withdraw_date;
        $data_update->s_withdraw_number=$request->s_withdraw_number;
        $data_update->s_withdraw_currency=$request->s_withdraw_currency;
        $data_update->reg_number_withdraw=$request->reg_number_withdraw;
        $data_update->account_number_withdraw=$request->account_number_withdraw;
        $data_update->s_withdraw_name=$request->s_withdraw_name;
        $data_update->s_withdraw_type=$request->s_withdraw_type;
        $data_update->s_withdraw_amount=$request->s_withdraw_amount;
        $data_update->s_withdraw_note=$request->s_withdraw_note;
        $data_update->save();
        return redirect('/share-withdraw');
    }
    public function share_withdraw_delete($id){
        $data_delete=Sharewithdraw::find($id);
        $data_delete->delete();
        return redirect()->back();

    }

    public function share_withdraw_statas($id){
        $share_withdraw_status=Sharewithdraw::find($id);
        if($share_withdraw_status->s_withdraw_status==1){
           $share_withdraw_status->s_withdraw_status=0;
           $share_withdraw_status->save();
           return redirect()->back();
        }
        else if($share_withdraw_status->s_withdraw_status==0){
           $share_withdraw_status->s_withdraw_status=1;
           $share_withdraw_status->save();
           return redirect()->back();
        }
    }
    public function share_withdraw_report($id){
        $companydetails=company::all();
        $share_withdraw_report=Sharewithdraw::find($id);
        return view('admin.withdraw.share_withdraw_report',[
            'companydetails'=>$companydetails,
            'share_withdraw_report'=>$share_withdraw_report,
        ]);
    }

//*******************Diposit Withdraw*******************/
public function deposit_withdraw(){
    $deposit_details=Dipositwithdraw::orderby('created_at','desc')->get();
    $deposit_number=Depositor::all();
    $acc_number=Regimember::all();
    if($lastid=Dipositwithdraw::all()->last()){  
        $vnum=$lastid->id;
    }
    else{
     $vnum=0;
    }
    return view('admin.withdraw.deposit_withdraw',[
        'last_id'=>$vnum,
        'deposit_details'=>$deposit_details,
        'deposit_number'=>$deposit_number,
        'acc_number'=>$acc_number,
    ]);

}
public function deposit_withdraw_add(Request $request){
    $add_data=new Dipositwithdraw();
    $add_data->d_withdraw_date=$request->d_withdraw_date;
    $add_data->d_withdraw_number=$request->d_withdraw_number;
    $add_data->d_withdraw_currency=$request->d_withdraw_currency;
    $add_data->deposit_number_withdraw=$request->deposit_number_withdraw;
    $add_data->account_number_withdraw=$request->account_number_withdraw;
    $add_data->d_withdraw_name=$request->d_withdraw_name;
    $add_data->d_withdraw_type=$request->d_withdraw_type;
    $add_data->d_withdraw_amount=$request->d_withdraw_amount;
    $add_data->d_withdraw_note=$request->d_withdraw_note;
    $add_data->d_w_date=date('Y-m-d');
    $add_data->d_withdraw_status=0;
    $add_data->save();
    return redirect()->back();
}
public function deposit_withdraw_edit($id){
    // $edit_data=Depositcollection::find($id);
    // return $edit_data;
    $acc_number=Regimember::all();
    $deposit_number=Depositor::all();
    $loan_number=Loan::all();
    $data_edit=Dipositwithdraw::where('id',$id)->first();
    return view('admin.withdraw.deposit_withdraw_edit',[
        'data_edit'=>$data_edit,
        'loan_number'=>$loan_number,
        'acc_number'=>$acc_number,
        'deposit_number'=>$deposit_number,
      
    ]);

}
public function deposit_withdraw_update(Request $request){
    $update_data=Dipositwithdraw::find($request->id);
    $update_data->d_withdraw_date=$request->d_withdraw_date;
    $update_data->d_withdraw_number=$request->d_withdraw_number;
    $update_data->d_withdraw_currency=$request->d_withdraw_currency;
    $update_data->deposit_number_withdraw=$request->deposit_number_withdraw;
    $update_data->account_number_withdraw=$request->account_number_withdraw;
    $update_data->d_withdraw_name=$request->d_withdraw_name;
    $update_data->d_withdraw_type=$request->d_withdraw_type;
    $update_data->d_withdraw_amount=$request->d_withdraw_amount;
    $update_data->d_withdraw_note=$request->d_withdraw_note;

    $update_data->save();
 //   return redirect()->back();
    return redirect('/diposit-withdraw');
}
public function deposit_withdraw_delete($id){
    $data_delete=Dipositwithdraw::find($id);
    $data_delete->delete();
    return redirect()->back();
}
public function deposit_withdraw_statas($id){
    $deposit_withdraw_status=Dipositwithdraw::find($id);
    if($deposit_withdraw_status->d_withdraw_status==1){
       $deposit_withdraw_status->d_withdraw_status=0;
       $deposit_withdraw_status->save();
       return redirect()->back();
    }
    else if($deposit_withdraw_status->d_withdraw_status==0){
       $deposit_withdraw_status->d_withdraw_status=1;
       $deposit_withdraw_status->save();
       return redirect()->back();
    }
}

public function diposit_withdraw_report($id){
    $companydetails=company::all();
    $diposit_withdraw_report=Dipositwithdraw::find($id);
    return view('admin.withdraw.deposit_withdraw_report',[
        'companydetails'=>$companydetails,
        'diposit_withdraw_report'=>$diposit_withdraw_report,
    ]);
}
public function deposit_withdraw_details($id){
    $data_edit=Depositor::where('id',$id)->first();
    return $data_edit;
}
public function share_withdraw_details($id){
    $data_edit=Regimember::where('id',$id)->first();
    return $data_edit;
}

public function deposit_report_by_withdraw(Request $request){

    $companydetails=company::all();
    $depositordetail=Depositor::where('d_active_status',1)->get();

    $depositors = $request->depositors;
    view()->share('depositors',$depositors);

    $fromdate = $request->fromDate;
    view()->share('fromdate',$fromdate);

    $todate = $request->toDate;
    view()->share('todate',$todate);

    Session::put('depositors',$depositors);    
    Session::put('fromdate',$fromdate);    
    Session::put('todate',$todate);    
    if ( $request->toDate && $request->fromDate && $request->depositors) {
        $deposit_withdraw = DB::table('dipositwithdraws')
        ->whereBetween('d_w_date', [$fromdate, $todate])
        ->where('deposit_number_withdraw',[$depositors])
        ->select('dipositwithdraws.*')
        ->orderBy('d_w_date', 'ASC')
        ->get();
     
     


        $deposit_sum = $deposit_withdraw->sum('d_withdraw_amount');



        return view('admin.withdraw.deposit_reportBy_withdraw',[
            'companydetails'=>$companydetails,
            'depositordetail'=>$depositordetail,
            'deposit_withdraw'=>$deposit_withdraw,
            'deposit_sum'=>$deposit_sum,
         
           

        ]);
            
       
        }

    $deposit_withdraw = DB::table('dipositwithdraws')
        // ->whereBetween('d_w_date', [$fromdate, $todate])
        ->where('deposit_number_withdraw',[$depositors])
        ->select('dipositwithdraws.*')
        ->orderBy('d_w_date', 'ASC')
        ->get();
     
     


        $deposit_sum = $deposit_withdraw->sum('d_withdraw_amount');



        return view('admin.withdraw.deposit_reportBy_withdraw',[
            'companydetails'=>$companydetails,
            'depositordetail'=>$depositordetail,
            'deposit_withdraw'=>$deposit_withdraw,
            'deposit_sum'=>$deposit_sum,
         
           

        ]);
    }

    public function share_report_by_withdraw(Request $request){

        $companydetails=company::all();
        $regimember=Regimember::where('member_activation',1)->get();
    
        $accounts = $request->accounts;
        view()->share('accounts',$accounts);
    
        $fromdate = $request->fromDate;
        view()->share('fromdate',$fromdate);
    
        $todate = $request->toDate;
        view()->share('todate',$todate);
    
        Session::put('accounts',$accounts);    
        Session::put('fromdate',$fromdate);    
        Session::put('todate',$todate);    
        if ( $request->toDate && $request->fromDate && $request->accounts) {
            $share_withdraw = DB::table('sharewithdraws')
            ->whereBetween('s_w_date', [$fromdate, $todate])
            ->where('account_number_withdraw',[$accounts])
            ->select('sharewithdraws.*')
            ->orderBy('s_w_date', 'ASC')
            ->get();
         
         
    
    
            $share_sum = $share_withdraw->sum('s_withdraw_amount');
    
    
    
            return view('admin.withdraw.share_reportBy_withdraw',[
                'companydetails'=>$companydetails,
                'regimember'=>$regimember,
                'share_withdraw'=>$share_withdraw,
              
                'share_sum'=>$share_sum,
             
               
    
            ]);
                
           
            }
    
        $share_withdraw = DB::table('sharewithdraws')
            //->whereBetween('s_w_date', [$fromdate, $todate])
            ->where('account_number_withdraw',[$accounts])
            ->select('sharewithdraws.*')
            ->orderBy('s_w_date', 'ASC')
            ->get();
         
         
    
    
            $share_sum = $share_withdraw->sum('s_withdraw_amount');
    
    
    
            return view('admin.withdraw.share_reportBy_withdraw',[
                'companydetails'=>$companydetails,
                'regimember'=>$regimember,
                'share_withdraw'=>$share_withdraw,
              
                'share_sum'=>$share_sum,
             
               
    
            ]);
        }

        ////deposit-loan-share/ledger-report

        public function collection_withdraw_report(Request $request){
        $companydetails=company::all();
        $regimember=Regimember::where('member_activation',1)->get();

        $accounts = $request->accounts;
        view()->share('accounts',$accounts);
        Session::put('accounts',$accounts);    

//diposite withdraw 
        $deposit_withdraw = DB::table('dipositwithdraws')
        // ->whereBetween('d_w_date', [$fromdate, $todate])
        ->where('account_number_withdraw',[$accounts])
        ->select('dipositwithdraws.*')
        ->orderBy('d_w_date', 'ASC')
        ->get();

////diposit collection
$deposit_collection = DB::table('depositcollections')
    
->where('account_number_collection',[$accounts])
->select('depositcollections.*')
->orderBy('d_c_date', 'ASC')
->get();





     
//share witdraw    
        $share_withdraw = DB::table('sharewithdraws')
            
        ->where('account_number_withdraw',[$accounts])
        ->select('sharewithdraws.*')
        ->orderBy('s_w_date', 'ASC')
        ->get();
    
 //loan collection
        $loan_collection = DB::table('collections')
        
        ->where('account_number_collection',[$accounts])
        ->select('collections.*')
        ->orderBy('l_c_date', 'ASC')
        ->get();
 
 


        $loan_sum = $loan_collection->sum('l_collection_amount');        
        $deposit_coll_sum = $deposit_collection->sum('d_collection_amount');
        $deposit_sum = $deposit_withdraw->sum('d_withdraw_amount');
    
        $share_sum = $share_withdraw->sum('s_withdraw_amount');

        
        
        return view('admin.ledger_report.collection_withdraw_ledger_report',[
                'companydetails'=>$companydetails,
                'regimember'=>$regimember,
                'share_withdraw'=>$share_withdraw,
                'deposit_withdraw'=>$deposit_withdraw,
                'loan_collection'=>$loan_collection,
                'deposit_collection'=>$deposit_collection,


                'deposit_coll_sum'=>$deposit_coll_sum,
                'deposit_sum'=>$deposit_sum,
                'share_sum'=>$share_sum,
                'loan_sum'=>$loan_sum,
      
        
        
            ]);
        
        }
}
