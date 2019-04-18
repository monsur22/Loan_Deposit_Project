<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class DepositorController extends Controller
{
    
    public function index()
    {   
       $staffname = DB::table('staff')
                ->orderBy('staid', 'DESC')
                 ->get();
    	return view('sumiti.depositor.adddepositor')->with('staffname', $staffname);
    }


    // public function Storestaff(Request $request)
    // {
    // 		$validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:100|unique:staff',
    //         'username' => 'required|string|max:255',
    //         'phone' => 'required|string|min:11|max:20',
    //         'password' => 'required|string|min:6|confirmed',
    //         'status' => 'required',
    //     ]);

    // 	$staff = new Staff();
    // 	$staff->name = $request->name;
    // 	$staff->email = $request->email;
    // 	$staff->username = $request->username;
    // 	$staff->phone = $request->phone;
    // 	$staff->password = Hash::make($request->password);
    // 	$staff->status = $request->status;
    // 	$staff->save();
    // 	return redirect('create/staff')->with('message', 'New Staff Created Successfully');

    // }


    // public function ShowStaff()
    // {   
    //     $staffs = new Staff();
    //     $staffs = Staff::all();
    //     return view('sumiti.staff.staff_list')->with('staffs', $staffs);
    // }

    // public function Deactivestaff($staid)
    // {
    //     DB::table('staff')
    //      ->where('staid', $staid)
    //       ->update(['status' => 2]);
    //     return redirect('staff/list')->with('message', 'Staff Deactive successfully');
    // }

    // public function Staffactive($staid)
    // {
    //     DB::table('staff')
    //      ->where('staid', $staid)
    //       ->update(['status' => 1]);
    //     return redirect('staff/list')->with('message', 'Staff Active successfully');
    // }

    // public function Staffedit($staid)
    // {
        
    //     $staffbyid =Staff::where('staid', $staid)->first();
    //     return view('sumiti.staff.staff_edit')->with('staffbyid', $staffbyid);
    // }


    // public function UpdateStaff(Request $request)
    // {
    //   $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:100',
    //         'username' => 'required|string|max:255',
    //         'phone' => 'required|string|min:11|max:20',
    //         'status' => 'required',
    //     ]);
    //     $staid = $request->staid;
    //         $data = array(
    //                 'name' => $request->name,
    //                 'email' => $request->email,
    //                 'username' => $request->username,
    //                 'phone' => $request->phone,
    //                 'status' => $request->status,
    //             );
    //     DB::table('staff')
    //         ->where('staid', $staid)
    //         ->update($data);
    //     return redirect('staff/list')->with('message', 'Staff Updated Successfully');  
    // }

    

    
}
