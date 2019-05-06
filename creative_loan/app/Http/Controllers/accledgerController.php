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

class accledgerController extends Controller
{
    public function account_ledger(Request $request){
    $companydetails=company::all();
    $acheaddetail=Accounthead::where('accounthead_status',1)->get();

    $ahhead = $request->ah;
    view()->share('ahhead',$ahhead);

    $fromdate = $request->fromDate;
    view()->share('fromdate',$fromdate);

    $todate = $request->toDate;
    view()->share('todate',$todate);

    Session::put('ahhead',$ahhead);    
    Session::put('fromdate',$fromdate);    
    Session::put('todate',$todate);    


    $incstatement = DB::table('incomevouchers')
        ->whereBetween('i_date', [$fromdate, $todate])
        ->where('i_credit_head',[$ahhead])
        ->select('incomevouchers.*')
        ->orderBy('i_date', 'ASC')
        ->get();
     
        

    $expense_details = DB::table('expencevouchers')
        ->whereBetween('e_date', [$fromdate, $todate])
        ->where('e_debit_head',[$ahhead])
        ->select('expencevouchers.*')
        ->orderBy('e_date', 'ASC')
        ->get();


        $expense_sum = $expense_details->sum('e_amount');
        $income_sum = $incstatement->sum('i_amount');


        return view('admin.acc_ldger.account_ledger',[
            'companydetails'=>$companydetails,
            'acheaddetail'=>$acheaddetail,
            'incstatement'=>$incstatement,
            'expense_details'=>$expense_details,
            'expense_sum'=>$expense_sum,
            'income_sum'=>$income_sum,
           

        ]);
    }


}
