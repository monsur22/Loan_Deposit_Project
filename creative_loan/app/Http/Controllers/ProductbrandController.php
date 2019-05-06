<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productbrand;

class ProductbrandController extends Controller
{
    public function index(){
    	$allbrand = Productbrand::orderBy('id', 'DESC')->get();
    	return view('admin.prduct_management.brand.addbrand',['allbrand'=>$allbrand]);
    }

    public function addbrand(Request $request){
    		// $this->validate($request,[
    		// 	'brand_name' => 'required'
    		// ]);

    		$addbrand = new Productbrand();
    		$addbrand->brand_name 	= $request->brand_name;
    		$addbrand->status 		= $request->status;
    	
    		$addbrand->save();
    		return redirect('/barnd-setup')->with('message','Brand Add Successfully');
    }

    public function updatestatus($id){
    	$brandstatus =Productbrand::find($id);

    	if ($brandstatus->status==1) {
    		$brandstatus->status=0;
    		$brandstatus->save();
    		return redirect('/barnd-setup')->with('message','Brand Status Inactive Successfully');
    	}elseif($brandstatus->status==0){
    		$brandstatus->status=1;
    		$brandstatus->save();
    		return redirect('/barnd-setup')->with('message','Brand Status Active Successfully');
    	}
    }

    public function editbrand($id){
    	$brand=Productbrand::find($id);
    	return view('admin.prduct_management.brand.editbrand',['brand'=>$brand]);
    }

    public function updatebrand(Request $request){
    	// $this->validate($request,[
    	// 	'brand_name' =>'required|unique:brands,brand_name'
    	// ]);
    	$brand = Productbrand::find($request->brandid);
    	$brand->brand_name=$request->brand_name;
    	$brand->status=$request->status;
    	$brand->save();
    	return redirect('/barnd-setup')->with('message','Brand Update Successfully');

    }

    public function deletebrand($id){
    	$deletebrand=Productbrand::find($id);
    	$deletebrand->delete();
    	return redirect('/barnd-setup')->with('message','Brand Deleted Successfully');
    }


}
