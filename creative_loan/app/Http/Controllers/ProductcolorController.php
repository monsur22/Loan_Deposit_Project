<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productcolor;
class ProductcolorController extends Controller
{
    public function index(){
    	$allgroups=Productcolor::orderBy('id', 'DESC')->get();
    	return view('admin.prduct_management.group.addgroup',['allgroups'=>$allgroups]);
    }

    public function addgroup(Request $request){
        // $this->validate($request,[
        //     'group_name'=>'required|unique:groups,group_name'
        // ]);
    	$group=new Productcolor();
    	$group->group_name 	= $request->group_name;
    	$group->status 		= $request->status;

    	$group->save();
    	return redirect('/group-setup')->with('message','Color New Add Successfully');

    }

    public function status($id){
        $status=Productcolor::find($id);
        if ($status->status==1) {
           $status->status=0;
            $status->save();
            return redirect('/group-setup')->with('message','Color Status Inactive Successfully');
        }elseif($status->status==0)
        {
            $status->status=1;
            $status->save();
            return redirect('/group-setup')->with('message','Color Status Active Successfully');
        }
    }

    public function groupeditform($id){

        $editgroup=Productcolor::find($id);
        return view('admin.prduct_management.group.editgroup',['editgroup'=>$editgroup]);
    }

    public function updategroupthis(Request $request){
        // $this->validate($request,[
        //     'group_name'=>'required|unique:groups,group_name'
        // ]);

        $updategroup=Productcolor::find($request->updategroupId);
        $updategroup->group_name = $request->group_name;
        $updategroup->status = $request->status;
        $updategroup->save();
        return redirect('/group-setup')->with('message','Color Update Successfully');

    }

    public function deletegroup($id){
        $deletegroup=Productcolor::find($id);
        $deletegroup->delete();
        return redirect('/group-setup')->with('message','Color Deleted Successfully');
    }

}
