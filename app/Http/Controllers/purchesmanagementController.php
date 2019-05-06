<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pro_man_categoy;
use App\Productcolor;
use App\Localpurches;
use App\PurchaseReturnInvoice;
use App\supplier;
use App\Productbrand;
use App\local_parches_item;
use Session;
use App\company;
use App\PurchaseReturnItem;

use App\custormer;
use App\Stock_report;
use Cart;
use DB;
class purchesmanagementController extends Controller
{
    public function Local_purchaselist()
    {

        $carts = Cart::content();
        view()->share('carts', $carts);
        $counts =0;
        foreach ($carts as $cart){
            $counts++;
        }
        view()->share('counts',$counts);

        $cartcount = Cart::count();
        view()->share('cartcount', $cartcount);

        $cartTotal = Cart::subtotal();
        view()->share('cartTotal', $cartTotal);

        $sizes = Pro_man_categoy::all();
        view()->share('sizes',$sizes);

        $colors = Productcolor::all();
        view()->share('colors',$colors);

        $suppliers=supplier::all();
        $brands=Productbrand::all();
        
  

        return view('admin.purches_management.local_purches',[
            'suppliers'=>$suppliers,
            'brands'=>$brands,
        ]);
    }
    public function savePurchaseInvoice(Request $request)
    {

        $cat = Cart::add([
            'id' => $request->purchaseNo,
            'name' => $request->description,
            'qty' => $request->quantity,
            'price' => $request->cost,
         
            'options' => [
                'stock_id' => $request->model,
                'sale_price' => $request->salesPrice,
                'sid'=>$request->sid,
                'pbrand'=>$request->pbrand,
                'size'=>$request->size,
                'purchase_date'=>$request->purchase_date,
                'supplyCode'=>$request->supplyCode,
                'unit_type'=>$request->unit_type,
                'supplier_code'=>$request->supplier_code,
                'color_name'=>$request->color_name,
                'margin'=>$request->margin,
                'unitType'=>$request->unitType,
                'invoiceNo'=>$request->invoiceNo,
                'supplyCode'=>$request->supplyCode,
     
            ]]);
        /*   dd($cat);*/
               
       // return redirect()->back();
    }

    public function confirmPurchase(Request $request)
    {

       
        foreach (Cart::content() as $row) {
            $mdata = array(
                'stock_id' => $row->options->stock_id,
                'purchase_no' => $row->id,
                'description' => $row->name,
                'sid' => $row->options->sid,
                'quantity' => $row->qty,
                'cost' => $row->price,
                'total_cost' => $row->subtotal
            );
             $insert = DB::table('local_parches_items')->insert($mdata);
         //   return $mdata;

        }

        foreach (Cart::content() as $row) {
            $mdata = array(
                'report_stock_id' => $row->options->stock_id,
                'report_purchaseno' => $row->id,
                'report_description' => $row->name,
                'report_supplier_id' => $row->options->sid,
                'report_quantity' => $row->qty,
                'report_cost' => $row->price,
                'report_sales_price' => $row->options->sale_price,
                'report_brand' => $row->options->pbrand,
                'report_category' => $row->options->size,
                'report_margin'=>$row->options->margin,
                'report_category'=>$row->options->color_name,
                'report_group'=>$row->options->unitType,
            
                'stockreport_date' => $request->input('purchase_date'),
              

              
            );
            //return $mdata;
        
             $insert = DB::table('stock_reports')->insert($mdata);
        }

        foreach (Cart::content() as $row) {
            $mdata = array(
                'sid' => $row->options->sid,
                'purchase_no' => $row->id,
                'supplier_invoiceno' => $row->options->invoiceNo,
                'supplier_code' => $row->options->supplyCode,
                'stock_id' => $row->options->stock_id,
                'quantity' => $row->qty,
                'margin' => $row->options->margin,
                'sale_price' => $row->options->sale_price,
               
            
                'purchase_date' => $request->input('purchase_date'),
              
                'unit_type' => $request->input('unit_type'),

              
            );
            //return $mdata;
        
             $insert = DB::table('localpurches')->insert($mdata);
        }

      

        Cart::destroy();
        return redirect('/local-purchase');
    }
    /////Purches Return from here
    public function Return_purchaselist(Request $request)
    {
        $suppliers = DB::table('suppliers')
                    ->orderBy('supplier_name')
                    ->get();
        view()->share('suppliers', $suppliers);

        $carts = Cart::content();
        view()->share('carts',$carts);

        $cartCount = Cart::count();
        view()->share('cartCount',$cartCount);

        $cartItemTotal = Cart::subtotal();
        view()->share('cartItemTotal',$cartItemTotal);



        // $purchaseNo = $request->input('returnSupplierInvoice');
        // view()->share('purchaseNo',$purchaseNo);
        $purchaseNo = $request->returnSupplierInvoice;
        // view()->share('purchaseNo',$purchaseNo);

        $purchaseItems = DB::table('local_parches_items')
            ->where('purchase_no',$purchaseNo)
            ->get();
        view()->share('purchaseItems',$purchaseItems);
        return view('admin.purches_management.return_purchaselist',['purchaseNo'=>$purchaseNo]);
    }
   // Purchase_returnsearch Function
   public function customerInvoice(Request $request)
   {
       $id = $request->id;
       $results = DB::table("stock_reports")
           ->where("report_supplier_id",[ $id])
           ->pluck("report_purchaseno");
       return response()->json($results);


   }
   public function supplierInvoice(Request $request)
   {
       $id = $request->id;
       $results = DB::table("localpurches")
           ->where("sid", $id)
           ->pluck("purchase_no","purchase_no");
       return json_encode($results);
   }

    public function updatePurchaseReturn(Request $request)
    {
        $cart = Cart::add([
            'id'=> $request->id,
            'name'=>$request->description,
            'qty'=>$request->quantity,
            'price'=>$request->price,
            'options'=>[
                'invoice' =>$request->invoice,
                'StockId' =>$request->StockId,
            ]
        ]);
    }

    public function confirmPurchaseReturn(Request $request){
    
        $purchaseReturnInvoice = new PurchaseReturnInvoice;
        $purchaseReturnInvoice->PurchaseReturnDate = $request->input('PurchaseReturnDate');
        $purchaseReturnInvoice->PurchaseReturnNo = $request->input('PurchaseReturnNo');
        $purchaseReturnInvoice->StockId = $request->input('StockId');
        $purchaseReturnInvoice->purchaseReturn_qty = $request->input('totalQty');
        $purchaseReturnInvoice->purchaseReturn_total = $request->input('itemTotal');
        $purchaseReturnInvoice->save();

        foreach (Cart::content() as $row){
            $mdata = array(
                
                'purchaseReturnItem_description'=> $row->name,
                'purchaseReturn_qty' => $row->qty,
                'purchaseReturnItem_unitPrice'=>$row->price,
                'purchaseReturn_total'=>$row->subtotal,
                'StockId'=>$row->options->StockId,

                'PurchaseReturnNo'=> $request->input('PurchaseReturnNo'),
                'PurchaseReturnDate'=> $request->input('PurchaseReturnDate'),
            );
           // return $mdata;
            DB::table('purchase_return_items')->insert($mdata);
            DB::table('stock_reports')->where('report_stock_id',$row->options->StockId)->decrement('report_quantity',$row->qty);
        }
        // foreach (Cart::content() as $row){
        //     $mdata = array(
                
        //         'purchaseReturnItem_description'=> $row->name,
        //         'purchaseReturn_qty' => $row->qty,
        //         'purchaseReturnItem_unitPrice'=>$row->price,
        //         'purchaseReturn_total'=>$row->subtotal,
        //         'StockId'=>$row->options->StockId,

        //         'PurchaseReturnNo'=> $request->input('PurchaseReturnNo'),
        //         'PurchaseReturnDate'=> $request->input('PurchaseReturnDate'),
        //     );
        //    // return $mdata;
        //     DB::table('purchase_return_items')->insert($mdata);
        //     //DB::table('stock_reports')->where('report_stock_id',$row->options->StockId)->decrement('report_quantity',$row->qty);
        // }
        Cart::destroy();
        return redirect('/return-purchases');
    }


    public function getEditPurchaseData(Request $request)
    {
        $id = $request->id;
        $getEditData = DB::table('local_parches_items')->where('id',$id)->get();
        return response()->json($getEditData);
    }

    public function removePurchaseReturnCartItem(Request $request){
        $rowId = $request->id;
        Cart::remove($rowId);
    }


    public function destroyPurchaseReturnCart()
    {
        Cart::destroy();
    } 

    public function purches_reoprt(Request $request){
     
            $companydetails=company::all();
            $supplier_data=supplier::all();
            $fromdate = $request->fromDate;
            view()->share('fromdate',$fromdate);
        
            $todate = $request->toDate;
            view()->share('todate',$todate);
        
            $purches_report = DB::table('localpurches')
                ->whereBetween('purchase_date', [$fromdate, $todate])
                ->select('localpurches.*')
                ->orderBy('purchase_date', 'ASC')
                ->get();
                
            
               return view('admin.purches_management.purches_report',[
                   'companydetails'=>$companydetails,
                   'purches_report'=>$purches_report,
                   'supplier_data'=>$supplier_data,
                   ]);
           }
    public function purches_reoprt_by_id($invoice){
    $companydetails=company::all();
     $supplier_data=supplier::all();
    // $purches_report=Localpurches::find($id);

    $invoice_report =  DB::table('localpurches')
    ->where('purchase_no',$invoice)
    ->get();
    // $purches_report=PurchaseReturnItem::find($id);
    $purches_report =  DB::table('local_parches_items')
    ->where('purchase_no',$invoice)
    ->get();
    $subtotalSum = $purches_report->sum('quantity');
    view()->share('subtotalSum', $subtotalSum);

    $totalSum = $purches_report->sum('total_cost');
    view()->share('totalSum', $totalSum);
    return view('admin.purches_management.purches_report_by_id',[
        'companydetails'=>$companydetails,
        'supplier_data'=>$supplier_data,
        'purches_report'=>$purches_report,
        'invoice_report'=>$invoice_report,
        
    ]);
  
    }

    public function purches_return_reoprt(Request $request){
     
        $companydetails=company::all();
        $supplier_data=supplier::all();
        $fromdate = $request->fromDate;
        view()->share('fromdate',$fromdate);
    
        $todate = $request->toDate;
        view()->share('todate',$todate);
    
        $purches_report = DB::table('purchase_return_items')
            ->whereBetween('PurchaseReturnDate', [$fromdate, $todate])
            ->select('purchase_return_items.*')
            ->orderBy('PurchaseReturnDate', 'ASC')
            ->get();
            
        
           return view('admin.purches_management.purches_return_report',[
               'companydetails'=>$companydetails,
               'purches_report'=>$purches_report,
               'supplier_data'=>$supplier_data,
               ]);
       }
    public function purches_return_reoprt_by_id($invoice){
        $companydetails=company::all();

        $invoice_report =  DB::table('purchase_return_invoices')
        ->where('PurchaseReturnNo',$invoice)
        ->get();
        // $purches_report=PurchaseReturnItem::find($id);
        $purches_report =  DB::table('purchase_return_items')
        ->where('PurchaseReturnNo',$invoice)
        ->get();
        $subtotalSum = $purches_report->sum('purchaseReturn_qty');
        view()->share('subtotalSum', $subtotalSum);
    
        $totalSum = $purches_report->sum('purchaseReturn_total');
        view()->share('totalSum', $totalSum);

        return view('admin.purches_management.purches_return_report_by_id',[
            'companydetails'=>$companydetails,

            'purches_report'=>$purches_report,
            'subtotalSum'=>$subtotalSum,
            'totalSum'=>$totalSum,
            'invoice_report'=>$invoice_report,

        ]);

        // return $purches_report;

    }   

    public function stock_report(){
        $companydetails=company::all();
        $supplier_data=supplier::all();
        $stock_report=Stock_report::all();
        $subtotalSum = $stock_report->sum('report_quantity');
        view()->share('subtotalSum', $subtotalSum);
    
        $totalSum = $stock_report->sum('report_cost');
        view()->share('totalSum', $totalSum);
 
           return view('admin.stock.stock_report',[
               'companydetails'=>$companydetails,
               'stock_report'=>$stock_report,
               'supplier_data'=>$supplier_data,
               ]);
    }
    

}
