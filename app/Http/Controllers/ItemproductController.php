<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productbrand;
use App\Pro_man_categoy;
use App\Productsize;
use App\Productcolor;
use App\supplier;
use App\Itemproduct;

use DB;
use App\Item;
use Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Excel;
use File;
class ItemproductController extends Controller
{
    public function index()
    {
        $items = Itemproduct::orderBy('id','DESC')->get();
        view()->share('items', $items);
//        $categorys = DB::table('categories')->where('status','=','1');
        $categorys = Pro_man_categoy::all();
        $suppliers = supplier::all();
        $allbrands = Productbrand::all();
        $allgroups = Productcolor::all();
        $allsizes = Productsize::all();
        return view('admin.prduct_management.itemProduct.itemProduct')
            ->with('categorys', $categorys)
            ->with('suppliers', $suppliers)
            ->with('allbrands', $allbrands)
            ->with('allgroups', $allgroups)
            ->with('allsizes',$allsizes);
    }


    public function storeItem(Request $request)
    {

        $item = new Itemproduct();
        $item->item_code = $request->input('item_code');
        $item->barcode_code = $request->input('barcode_code');
        $item->category_name =$request->input('category_name');
        $item->product_name = $request->input('product_name');
        $item->brand_name = $request->input('brand_name');
        $item->color = $request->input('color');
        $item->size = $request->input('size');
        $item->unit_type = $request->input('unit_type');
        $item->sales_price = $request->input('sales_price');
        $item->cost_price = $request->input('cost_price');
        $item->vat = $request->input('vat');
        $item->profit = $request->input('profit');
        $item->supplier_name = $request->input('supplier_name');
        $item->stock = $request->input('stock');
        $item->rack = $request->input('rack');
        $item->floor = $request->input('floor');
        /**************** Item Image Upload *****************/


        if ($request->hasFile('product_image')) {
            $files = $request->file('product_image');
            $extension = $files->getClientOriginalExtension();
            $fileName = str_random(5) . "-" . date('his') . "-" . str_random(3) . "." . $extension;
            $folderpath = 'public/Item/' . date('Y') . '/';
            $image_url = $folderpath . $fileName;
            $files->move($folderpath, $fileName);
            $item['product_image'] = $image_url;
        }
        $item->save();
        return redirect()->back();
    }


    public function edit_item($id){
        $edit_item =Itemproduct::find($id);
        $categorys = Pro_man_categoy::all();
        $suppliers = supplier::all();
        $allbrands = Productbrand::all();
        $allgroups = Productcolor::all();
        $allsizes = Productsize::all();

        return view('admin.prduct_management.itemProduct.edit_ItemProduct')->with('edit_item',$edit_item)
            ->with('categorys', $categorys)
            ->with('suppliers', $suppliers)
            ->with('allbrands', $allbrands)
            ->with('allgroups', $allgroups)
            ->with('allsizes',$allsizes);
    }

    public function update_item(Request $request){

        $item = Itemproduct::find($request->itemid);
        $item->item_code = $request->item_code;
        $item->barcode_code = $request->barcode_code;
        $item->category_name = $request->category_name;
        $item->color = $request->color;
        $item->floor = $request->floor;
        $item->cost_price = $request->cost_price;
        $item->brand_name = $request->brand_name;
        $item->supplier_name = $request->supplier_name;
        $item->sales_price = $request->sales_price;
        $item->profit = $request->profit;
        $item->stock = $request->stock;
        $item->product_name = $request->product_name;
        $item->size = $request->size;
        $item->unit_type = $request->unit_type;
        $item->vat = $request->vat;
        $item->rack = $request->rack;

        /**************** Item Image Upload *****************/
        if ($request->hasFile('product_image')) {
            $files = $request->file('product_image');
            $extension = $files->getClientOriginalExtension();
            $fileName = str_random(5) . "-" . date('his') . "-" . str_random(3) . "." . $extension;
            $folderpath = 'public/Item/' . date('Y') . '/';
            $image_url = $folderpath . $fileName;
            $files->move($folderpath, $fileName);
            $item['product_image'] = $image_url;
        }
        $item->save();
        return redirect('/productItem')->with('message','Item Update Successfully');
    }


    public function editItem(Request $request)
    {
        $id = $request->id;
        $datas = DB::table('itemproducts')->where('id', $id)->get();
        return response($datas);
    }

    public function updateItem(Request $request)
    {
//        if ($file = $request->file('product_image')){
//            $filename = $file->getClientOriginalName();
//            $path = 'public/images';
//            $file->move($path, $filename);
//            $id = Auth::user()->id;
//        }

// Get current image of user, then delete it
//        $user = User::find(Auth::user()->id);
//        File::delete($user->pic);
//
//        if ($file = $request->file('product_image')){
//            $filename = $file->getClientOriginalName();
//            $path = 'public/images';
//            $file->move($path, $filename);
//            $id = Auth::user()->id;
//        }

// Then update profile picture column in database
        DB::table('itemproducts')->where('id',$request->id)->update([
            'item_code'=>$request->icode,
            'barcode_code'=>$request->Scode,
            'category_name'=>$request->categy,
            'product_name' => $request->Pname,
            'brand_name' => $request->Bname,
            'size'=>$request->Szgrpnm,
            'color' => $request->Cname,
            'unit_type' => $request->Utyp,
            'sales_price' => $request->sPrice,
            'cost_price' => $request->Cprice,
            'vat' => $request->Vt,
            'profit' => $request->Proft,
            'supplier_name' => $request->Sname,
            'stock' => $request->Mstock,
            'rack' => $request->Rck,
            'floor' => $request->Flor,
        ]);
        return redirect('/productItem')->withSuccess('Your image was successful.');
        /*DB::table('items')->where('id', $request->id)->update([
            'short_code'=>$request->Scode,
            'product_name' => $request->Pname,
            'brand_name' => $request->Bname,
            'size'=>$request->Szgrpnm,
            'color' => $request->Cname,
            'unit_type' => $request->Utyp,
            'sales_price' => $request->sPrice,
            'cost_price' => $request->Cprice,
            'vat' => $request->Vt,
            'profit' => $request->Proft,
            'supplier_name' => $request->Sname,
            'stock' => $request->Mstock,
            'rack' => $request->Rck,
            'floor' => $request->Flor,

        ]);

        return response()->json([
            'success' => 'Record Updated successfully!'
        ]);*/
    }

    public function destroy(Request $request)
    {
        $item = Itemproduct::find($request->item_id);
        $item->delete();
        return redirect('/productItem');
    }

    public function saveExcelData(Request $request){


        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){

                    foreach ($data as $key => $value) {

                        /*echo '<pre>';
                        print_r($value);
                        exit();*/
                        $insert[] = [
                            'item_code' => $value->item_code,
                            'short_code'=>$value->short_code,
                            'category_name'=>$value->category_name,
                            'product_name' => $value->product_name,
                            'brand_name' => $value->brand_name,
                            'color' => $value->color,
                            'size' => $value->size,
                            'unit_type' => $value->unit_type,
                            'sales_price' => $value->sales_price,
                            'vat' => $value->vat,
                            'profit' => $value->profit,
                            'supplier_name' => $value->supplier_name,
                            'stock' => $value->stock,
                            'cost_price' => $value->cost_price,
                            'rack' => $value->rack,
                            'floor' => $value->floor
                        ];
                    }

                    if(!empty($insert)){

                        $insertData = DB::table('itemproducts')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }

                return back();

            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

    public  function downloadExcel(){
        $users = Itemproduct::select('item_code', 'short_code','category_name','product_name',
            'brand_name','color','size','unit_type','sales_price','vat','profit','supplier_name',
            'stock','cost_price','rack','floor')->get();
        Excel::create('itemproducts', function($excel) use($users) {
            $excel->sheet('Sheet 1', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');
    }

}
