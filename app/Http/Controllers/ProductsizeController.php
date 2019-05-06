<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productsize;
class ProductsizeController extends Controller
{
    public function index()
    {
        $sizes=Productsize::orderBy('id','DESC')->get();
        return view('admin.prduct_management.size.addsize')->with('sizes',$sizes);
    }

    public function saveSize(Request $request)
    {
        $size = new Productsize();
        $size->size = $request->size;
        $size->status = $request->status;

        $size->save();
        return redirect('/size-setup')->with('message','Size Add Successfully');
    }
    public function statusUpdate($id){
        $sizestatus=Productsize::find($id);
        if ($sizestatus->status==1) {
            $sizestatus->status=0;
            $sizestatus->save();
            return redirect('/size-setup')->with('message','Size Status Incative Successfully');
        }elseif($sizestatus->status==0){
            $sizestatus->status=1;
            $sizestatus->save();
            return redirect('/size-setup')->with('message','Size Status Active Successfully');
        }
    }
    public function sizeEdit($id)
    {
        $updateSize=Productsize::find($id);
        return view('admin.prduct_management.size.editSize',['updateSize'=>$updateSize]);
    }
    public function sizeUpdate(Request $request)
    {
        $size=Productsize::find($request->sizeid);
        $size->size = $request->size;
        $size->status = $request->status;
        $size->save();
        return redirect('/size-setup')->with('message','Size Update Successfully');
    }
    public function deletesize($id)
    {
        $size=Productsize::find($id);
        $size->delete();
        return redirect('/size-setup')->with('message','Size Deleted Successfully');
    }
}
