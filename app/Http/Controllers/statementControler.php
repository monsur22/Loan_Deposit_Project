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

class statementControler extends Controller
{
   public function expence_statement(Request $request){
    $companydetails=company::all();

    $fromdate = $request->fromDate;
    view()->share('fromdate',$fromdate);

    $todate = $request->toDate;
    view()->share('todate',$todate);

    $expstatement = DB::table('expencevouchers')
        ->whereBetween('e_date', [$fromdate, $todate])
        ->select('expencevouchers.*')
        ->orderBy('e_date', 'ASC')
        ->get();
        
    
       return view('admin.statement.expense_statement',[
           'companydetails'=>$companydetails,
           'expstatement'=>$expstatement
           ]);
   }

   public function expence_statement_report($id){
    $companydetails=company::all();
    $acheaddetail=Accounthead::where('accounthead_status',1)->get();

    $expense_details=Expencevoucher::find($id);
    return view('admin.statement.expense_statement_report',[
        'companydetails'=>$companydetails,
        'expense_details'=>$expense_details,
        'acheaddetail'=>$acheaddetail,
    ]);
   }


   public function income_statement(Request $request){
    $companydetails=company::all();

    $fromdate = $request->fromDate;
    view()->share('fromdate',$fromdate);

    $todate = $request->toDate;
    view()->share('todate',$todate);

    $incstatement = DB::table('incomevouchers')
        ->whereBetween('i_date', [$fromdate, $todate])
        ->select('incomevouchers.*')
        ->orderBy('i_date', 'ASC')
        ->get();
    return view('admin.statement.income_statement',[
        'companydetails'=>$companydetails,
        'incstatement'=>$incstatement,
        ]);
   }

   public function income_statement_report($id){
    $companydetails=company::all();
    $income_details=Incomevoucher::find($id);
    $acheaddetail=Accounthead::where('accounthead_status',1)->get();

    return view('admin.statement.income_statement_report',[
        'companydetails'=>$companydetails,
        'income_details'=>$income_details,
        'acheaddetail'=>$acheaddetail,
    ]);

   }


   
   public function expense_income_report(Request $request){
    $companydetails=company::all();
    $acheaddetail=Accounthead::where('accounthead_status',1)->get();
    // $income_details=Incomevoucher::all();
    // $expense_details=Expencevoucher::all();

    $fromdate = $request->fromDate;
    view()->share('fromdate',$fromdate);

    $todate = $request->toDate;
    view()->share('todate',$todate);

    $income_details = DB::table('incomevouchers')
        ->whereBetween('i_date', [$fromdate, $todate])
        ->select('incomevouchers.*')
        ->orderBy('i_date', 'ASC')
        ->get();

    $expense_details = DB::table('expencevouchers')
        ->whereBetween('e_date', [$fromdate, $todate])
        ->select('expencevouchers.*')
        ->orderBy('e_date', 'ASC')
        ->get();


        $totalSumExpense = $expense_details->sum('e_amount');
        $totalSumIncome = $income_details->sum('i_amount');
        $profit=$totalSumIncome-$totalSumExpense;

return view('admin.statement.expense_income_report',[
        'companydetails'=>$companydetails,
        'acheaddetail'=>$acheaddetail,
        'income_details'=>$income_details,
        'expense_details'=>$expense_details,
        'totalSumExpense'=>$totalSumExpense,
        'totalSumIncome'=>$totalSumIncome,
        'profit'=>$profit,


    ]);





   }


}
