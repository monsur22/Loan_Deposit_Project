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
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;
class UserAccountReportController extends Controller
{
    public function achead_report(){
        //$acheaddetail=Accounthead::all();
        $acheaddetail=Accounthead::where('accounthead_status',1)->get();
 
      //  Session::put('companyname',$token);  
        $cdata=company::all();
       return view('user.dashboard.account.reports',['acheaddetail'=>$acheaddetail],['cdata'=>$cdata]);
       }

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
    
    
            return view('user.dashboard.acc_ldger.account_ledger',[
                'companydetails'=>$companydetails,
                'acheaddetail'=>$acheaddetail,
                'incstatement'=>$incstatement,
                'expense_details'=>$expense_details,
                'expense_sum'=>$expense_sum,
                'income_sum'=>$income_sum,
               
    
            ]);
        }


///expense
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
                
            
               return view('user.dashboard.statement.expense_statement',[
                   'companydetails'=>$companydetails,
                   'expstatement'=>$expstatement
                   ]);
           }
        
           public function expence_statement_report($id){
            $companydetails=company::all();
            $acheaddetail=Accounthead::where('accounthead_status',1)->get();
        
            $expense_details=Expencevoucher::find($id);
            return view('user.dashboard.statement.expense_statement_report',[
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
            return view('user.dashboard.statement.income_statement',[
                'companydetails'=>$companydetails,
                'incstatement'=>$incstatement,
                ]);
           }
        
           public function income_statement_report($id){
            $companydetails=company::all();
            $income_details=Incomevoucher::find($id);
            $acheaddetail=Accounthead::where('accounthead_status',1)->get();
        
            return view('user.dashboard.statement.income_statement_report',[
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
        
        return view('user.dashboard.statement.expense_income_report',[
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
