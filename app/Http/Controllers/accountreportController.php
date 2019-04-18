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
use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;


class accountreportController extends Controller
{
    public function achead_report(){
        //$acheaddetail=Accounthead::all();
        $acheaddetail=Accounthead::where('accounthead_status',1)->get();
 
      //  Session::put('companyname',$token);  
        $cdata=company::all();
       return view('admin.account.reports',['acheaddetail'=>$acheaddetail],['cdata'=>$cdata]);
       }
}
