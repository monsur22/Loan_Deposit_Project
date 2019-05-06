<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Sharecollection;
use App\Depositcollection;
use App\Depositor;
use App\Regimember;
use App\Loan;
use App\Shareholder;
use App\company;
use Session;
use DB;



class collectionController extends Controller
{

    /////loan Collection 
    public function loan_collecttion(){
        $loan_details=Collection::orderby('created_at','desc')->get();;
        $acc_number=Regimember::all();
        $loan_number=Loan::all();
        if($lastid=Collection::all()->last()){  
            $vnum=$lastid->id;
        }
        else{
         $vnum=0;
        }
        return view('admin.collection.loan_collection',[
            'last_id'=>$vnum,
            'loan_details'=>$loan_details,
            'loan_number'=>$loan_number,
            'acc_number'=>$acc_number,
        ]);
    }
    public function loan_collecttion_add(Request $request){
    $add_data=new Collection();
    $add_data->l_collection_date=$request->l_collection_date;
    $add_data->l_collectin_number=$request->l_collectin_number;
    $add_data->l_collectin_currency=$request->l_collectin_currency;
    $add_data->laon_number_collection=$request->laon_number_collection;
    $add_data->account_number_collection=$request->account_number_collection;
    $add_data->l_collection_name=$request->l_collection_name;
    $add_data->l_collection_type=$request->l_collection_type;
    $add_data->l_collection_amount=$request->l_collection_amount;
    $add_data->l_collection_note=$request->l_collection_note;
    $add_data->l_c_date=date('Y-m-d');
    $add_data->l_collection_status=0;
    $add_data->save();
    return redirect()->back();

    }
    // public function loan_collecttion_edit($id){
    //     $data_edit=Collection::find($id);
    //     return $data_edit;
    // }
    public function loan_collecttion_edit($id){
        $acc_number=Regimember::all();
        $loan_number=Loan::all();
        $data_edit=Collection::where('id',$id)->first();
        return view('admin.collection.loan_collection_edit',[
            'data_edit'=>$data_edit,
            'loan_number'=>$loan_number,
            'acc_number'=>$acc_number,
          
        ]);
    }
    public function loan_collecttion_update(Request $request){
        $data_update=Collection::find($request->id);
        $data_update->l_collection_date=$request->l_collection_date;
        $data_update->l_collectin_number=$request->l_collectin_number;
        $data_update->l_collectin_currency=$request->l_collectin_currency;
        $data_update->laon_number_collection=$request->laon_number_collection;
        $data_update->account_number_collection=$request->account_number_collection;
        $data_update->l_collection_name=$request->l_collection_name;
        $data_update->l_collection_type=$request->l_collection_type;
        $data_update->l_collection_amount=$request->l_collection_amount;
        $data_update->l_collection_note=$request->l_collection_note;

        $data_update->save();
       // return redirect()->back();
       return redirect('/loan-collection');
    
    }
    public function loan_collecttion_delete($id){
        $data_delete=Collection::find($id);
        $data_delete->delete();
        return redirect()->back();
    }
    public function loan_collection_statas($id){
     $loan_clollection_status=Collection::find($id);
     if($loan_clollection_status->l_collection_status==1){
        $loan_clollection_status->l_collection_status=0;
        $loan_clollection_status->save();
        return redirect()->back();
     }
     else if($loan_clollection_status->l_collection_status==0){
        $loan_clollection_status->l_collection_status=1;
        $loan_clollection_status->save();
        return redirect()->back();
     }

    }

    public function loan_collecttion_report($id){
        $companydetails=company::all();
        $acc_number=Regimember::all();
        $loan_collection_report=Collection::find($id);
        return view('admin.collection.loan_collection_report',[
            'companydetails'=>$companydetails,
            'loan_collection_report'=>$loan_collection_report,
            'acc_number'=>$acc_number,
        ]);
    }
    ///Share Collection
    public function share_collecttion(){
        $share_details=Sharecollection::orderby('created_at','desc')->get();
        $acc_number=Regimember::all();
      

        if($lastid=Sharecollection::all()->last()){  
            $vnum=$lastid->id;
        }
        else{
         $vnum=0;
        }
        return view('admin.collection.share_collection',[
            'last_id'=>$vnum,
            'share_details'=>$share_details,
            'acc_number'=>$acc_number,

        ]);

    }
    public function share_collecttion_add(Request $request){
    $add_data=new Sharecollection();
    $add_data->s_collection_date=$request->s_collection_date;
    $add_data->s_collectin_number=$request->s_collectin_number;
    $add_data->s_collectin_currency=$request->s_collectin_currency;
    $add_data->reg_number_collection=$request->reg_number_collection;
    $add_data->account_number_collection=$request->account_number_collection;
    $add_data->s_collection_name=$request->s_collection_name;
    $add_data->s_collection_type=$request->s_collection_type;
    $add_data->s_collection_amount=$request->s_collection_amount;
    $add_data->s_collection_note=$request->s_collection_note;
    $add_data->s_c_date=date('Y-m-d');
    $add_data->s_collection_status=0;
    $add_data->save();
    return redirect()->back();
    }
    public function share_collecttion_edit($id){

        $acc_number=Regimember::all();
   
        $data_edit=Sharecollection::where('id',$id)->first();
        return view('admin.collection.share_collection_edit',[
            'data_edit'=>$data_edit,
            // 'loan_number'=>$loan_number,
            'acc_number'=>$acc_number,
            // 'deposit_number'=>$deposit_number,
          
        ]);
    }
    public function share_collecttion_update(Request $request){
        $data_update=Sharecollection::find($request->id);
        $data_update->s_collection_date=$request->s_collection_date;
        $data_update->s_collectin_number=$request->s_collectin_number;
        $data_update->s_collectin_currency=$request->s_collectin_currency;
        $data_update->reg_number_collection=$request->reg_number_collection;
        $data_update->account_number_collection=$request->account_number_collection;
        $data_update->s_collection_name=$request->s_collection_name;
        $data_update->s_collection_type=$request->s_collection_type;
        $data_update->s_collection_amount=$request->s_collection_amount;
        $data_update->s_collection_note=$request->s_collection_note;
        $data_update->save();
        return redirect('/share-collection');
    }
    public function share_collecttion_delete($id){
        $data_delete=Sharecollection::find($id);
        $data_delete->delete();
        return redirect()->back();

    }

    public function share_collection_statas($id){
        $share_clollection_status=Sharecollection::find($id);
        if($share_clollection_status->s_collection_status==1){
           $share_clollection_status->s_collection_status=0;
           $share_clollection_status->save();
           return redirect()->back();
        }
        else if($share_clollection_status->s_collection_status==0){
           $share_clollection_status->s_collection_status=1;
           $share_clollection_status->save();
           return redirect()->back();
        }
    }
    public function share_collecttion_report($id){
        $acc_number=Shareholder::all();
        $companydetails=company::all();
        $share_collection_report=Sharecollection::find($id);
        return view('admin.collection.share_collection_report',[
            'companydetails'=>$companydetails,
            'share_collection_report'=>$share_collection_report,
            'acc_number'=>$acc_number,
        ]);
    }


    ///Deposit Collection
    public function deposit_collection(){
        $deposit_details=Depositcollection::orderby('created_at','desc')->get();
        $deposit_number=Depositor::all();
        $acc_number=Regimember::all();
        if($lastid=Depositcollection::all()->last()){  
            $vnum=$lastid->id;
        }
        else{
         $vnum=0;
        }
        return view('admin.collection.deposit_collection',[
            'last_id'=>$vnum,
            'deposit_details'=>$deposit_details,
            'deposit_number'=>$deposit_number,
            'acc_number'=>$acc_number,
        ]);

    }
    public function deposit_collection_add(Request $request){
        $add_data=new Depositcollection();
        $add_data->d_collection_date=$request->d_collection_date;
        $add_data->d_collectin_number=$request->d_collectin_number;
        $add_data->d_collectin_currency=$request->d_collectin_currency;
        $add_data->deposit_number_collection=$request->deposit_number_collection;
        $add_data->account_number_collection=$request->account_number_collection;
        $add_data->d_collection_name=$request->d_collection_name;
        $add_data->d_collection_type=$request->d_collection_type;
        $add_data->d_collection_amount=$request->d_collection_amount;
        $add_data->d_collection_note=$request->d_collection_note;
        $add_data->d_c_date=date('Y-m-d');
        $add_data->d_collection_status=0;
        $add_data->save();
        return redirect()->back();
    }
    public function deposit_collecttion_edit($id){
        // $edit_data=Depositcollection::find($id);
        // return $edit_data;
        $acc_number=Regimember::all();
        $deposit_number=Depositor::all();
        $loan_number=Loan::all();
        $data_edit=Depositcollection::where('id',$id)->first();
        return view('admin.collection.deposit_collection_edit',[
            'data_edit'=>$data_edit,
            'loan_number'=>$loan_number,
            'acc_number'=>$acc_number,
            'deposit_number'=>$deposit_number,
          
        ]);

    }
    public function deposit_collecttion_update(Request $request){
        $update_data=Depositcollection::find($request->id);
        $update_data->d_collection_date=$request->d_collection_date;
        $update_data->d_collectin_number=$request->d_collectin_number;
        $update_data->d_collectin_currency=$request->d_collectin_currency;
        $update_data->deposit_number_collection=$request->deposit_number_collection;
        $update_data->account_number_collection=$request->account_number_collection;
        $update_data->d_collection_name=$request->d_collection_name;
        $update_data->d_collection_type=$request->d_collection_type;
        $update_data->d_collection_amount=$request->d_collection_amount;
        $update_data->d_collection_note=$request->d_collection_note;

        $update_data->save();
     //   return redirect()->back();
        return redirect('/deposit-collection');
    }
    public function deposit_collecttion_delete($id){
        $data_delete=Depositcollection::find($id);
        $data_delete->delete();
        return redirect()->back();
    }
    public function deposit_collection_statas($id){
        $deposit_clollection_status=Depositcollection::find($id);
        if($deposit_clollection_status->d_collection_status==1){
           $deposit_clollection_status->d_collection_status=0;
           $deposit_clollection_status->save();
           return redirect()->back();
        }
        else if($deposit_clollection_status->d_collection_status==0){
           $deposit_clollection_status->d_collection_status=1;
           $deposit_clollection_status->save();
           return redirect()->back();
        }
    }
    public function deposit_collecttion_report($id){
        $acc_number=Regimember::all();
        $companydetails=company::all();
        $deposit_collection_report=Depositcollection::find($id);
        return view('admin.collection.deposit_collection_report',[
            'companydetails'=>$companydetails,
            'deposit_collection_report'=>$deposit_collection_report,
            'acc_number'=>$acc_number,
        ]);
    }

    //////////some api data collect
public function loan_details($id){
    $data_edit=Loan::where('id',$id)->first();
    return $data_edit;
}
public function deposit_details($id){
    $data_edit=Depositor::where('id',$id)->first();
    return $data_edit;
}
public function share_details($id){
    $data_edit=Regimember::where('id',$id)->first();
    return $data_edit;
}

///////deposit collection Report by deposit ID
public function deposit_report_by_collection(Request $request){

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

// if (Session::put('fromdate',$fromdate) && Session::put('todate',$todate) && Session::put('depositors',$depositors)) {
if ( $request->toDate && $request->fromDate && $request->depositors) {

    $deposit_collection = DB::table('depositcollections')
        ->whereBetween('d_c_date', [$fromdate, $todate])
        ->where('deposit_number_collection',[$depositors])
        ->select('depositcollections.*')
        ->orderBy('d_c_date', 'ASC')
        ->get();
    $deposit_sum = $deposit_collection->sum('d_collection_amount');
    return view('admin.collection.deposit_reportBy_collection',[
        'companydetails'=>$companydetails,
        'depositordetail'=>$depositordetail,
        'deposit_collection'=>$deposit_collection,
        'deposit_sum'=>$deposit_sum,
        
        

    ]);


    } 

    $deposit_collection = DB::table('depositcollections')
    
        ->where('deposit_number_collection',[$depositors])
        ->select('depositcollections.*')
        ->orderBy('d_c_date', 'ASC')
        ->get();
     
     


    $deposit_sum = $deposit_collection->sum('d_collection_amount');



    return view('admin.collection.deposit_reportBy_collection',[
        'companydetails'=>$companydetails,
        'depositordetail'=>$depositordetail,
        'deposit_collection'=>$deposit_collection,
        'deposit_sum'=>$deposit_sum,
        
        

    ]);
    
}

public function loan_report_by_collection(Request $request){

    $companydetails=company::all();
    $lonerdetail=Loan::where('l_active_status',1)->get();

    $loners = $request->loners;
    view()->share('loners',$loners);

    $fromdate = $request->fromDate;
    view()->share('fromdate',$fromdate);

    $todate = $request->toDate;
    view()->share('todate',$todate);

    Session::put('loners',$loners);    
    Session::put('fromdate',$fromdate);    
    Session::put('todate',$todate);    
    if ( $request->toDate && $request->fromDate && $request->loners) {

        $loan_collection = DB::table('collections')
        ->whereBetween('l_c_date', [$fromdate, $todate])
        ->where('laon_number_collection',[$loners])
        ->select('collections.*')
        ->orderBy('l_c_date', 'ASC')
        ->get();
        
        


        $loan_sum = $loan_collection->sum('l_collection_amount');



        return view('admin.collection.loan_reportBy_collection',[
            'companydetails'=>$companydetails,
            'lonerdetail'=>$lonerdetail,
            'loan_collection'=>$loan_collection,
            'loan_sum'=>$loan_sum,
            
            

        ]);
    
    
        }

    $loan_collection = DB::table('collections')
  
        ->where('laon_number_collection',[$loners])
        ->select('collections.*')
        ->orderBy('l_c_date', 'ASC')
        ->get();
        
        


        $loan_sum = $loan_collection->sum('l_collection_amount');



        return view('admin.collection.loan_reportBy_collection',[
            'companydetails'=>$companydetails,
            'lonerdetail'=>$lonerdetail,
            'loan_collection'=>$loan_collection,
            'loan_sum'=>$loan_sum,
            
            

        ]);
    }

    public function share_report_by_collection(Request $request){

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

            $sharecollection = DB::table('sharecollections')
            ->whereBetween('s_c_date', [$fromdate, $todate])
            ->where('account_number_collection',[$accounts])
            ->select('sharecollections.*')
            ->orderBy('s_c_date', 'ASC')
            ->get();
            
          
    
    
            $share_sum = $sharecollection->sum('s_collection_amount');
    
    
    
            return view('admin.collection.share_reportBy_collection',[
                'companydetails'=>$companydetails,
                'regimember'=>$regimember,
                'sharecollection'=>$sharecollection,
                
                'share_sum'=>$share_sum,
                
                
    
            ]);
                
           
            }
    
        $sharecollection = DB::table('sharecollections')
     
            ->where('account_number_collection',[$accounts])
            ->select('sharecollections.*')
            ->orderBy('s_c_date', 'ASC')
            ->get();
            
            
    
    
            $share_sum = $sharecollection->sum('s_collection_amount');
    
    
    
            return view('admin.collection.share_reportBy_collection',[
                'companydetails'=>$companydetails,
                'regimember'=>$regimember,
                'sharecollection'=>$sharecollection,
                
                'share_sum'=>$share_sum,
                
                
    
            ]);
        }
}
