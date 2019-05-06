<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pro_man_categoy;

class ProductMnangeCategoryController extends Controller
{
    public function index(){
    	$categorys=Pro_man_categoy::orderBy('id','DESC')->get();
    	return view('admin.prduct_management.category.addcategory',['categorys'=>$categorys]);
    }

    public function postcategory(Request $request){
    	// $this->validate($request,[
    	// 		'category_name'=>'required|unique:categories,category_name'
    	// ]);
    		$category = new Pro_man_categoy();
    		$category->category_name = $request->category_name;
    		$category->status = $request->status;


        /**************** Category Image Upload *****************/
        if ($request->hasFile('category_image')) {
            $files = $request->file('category_image');
            $extension = $files->getClientOriginalExtension();
            $fileName = str_random(5) . "-" . date('his') . "-" . str_random(3) . "." . $extension;
            $folderpath = 'public/Category/' . date('Y') . '/';
            $image_url = $folderpath . $fileName;
            $files->move($folderpath, $fileName);
            $category['category_image'] = $image_url;
        }
             $category->save();
        	return redirect('/category-setup')->with('message','Category Add Successfully');
        //return $category;
    }

    public function statusupdate($id){
    	$categorystatus=Pro_man_categoy::find($id);
    	if ($categorystatus->status==1) {
    		$categorystatus->status=0;
    		$categorystatus->save();
    		return redirect('/category-setup')->with('message','Category Status Incative Successfully');
    	}elseif($categorystatus->status==0){
    		$categorystatus->status=1;
    		$categorystatus->save();
    		return redirect('/category-setup')->with('message','Category Status Active Successfully');
    	}
    }

    public function categoryupdateform($id){
    	$updatecategory=Pro_man_categoy::find($id);
    	return view('admin.prduct_management.category.editcategory',['updatecategory'=>$updatecategory]);
    }

    public function updatecategory(Request $request){
//    	$this->validate($request,[
//    			'category_name'=>'required|unique:categories,category_name'
//    	]);
    	$category=Pro_man_categoy::find($request->categoryid);
    	$category->category_name = $request->category_name;
    	$category->status = $request->status;
        /**************** Category Image Upload *****************/
        if ($request->hasFile('category_image')) {
            $files = $request->file('category_image');
            $extension = $files->getClientOriginalExtension();
            $fileName = str_random(5) . "-" . date('his') . "-" . str_random(3) . "." . $extension;
            $folderpath = 'public/Category/' . date('Y') . '/';
            $image_url = $folderpath . $fileName;
            $files->move($folderpath, $fileName);
            $category['category_image'] = $image_url;
        }
    	$category->save();
    	return redirect('/category-setup')->with('message','Category Update Successfully');
    }

    public function deletecategory($id){
    	$category=Pro_man_categoy::find($id);
    	$category->delete();
    	return redirect('/category-setup')->with('message','Category Deleted Successfully');
    }

}
