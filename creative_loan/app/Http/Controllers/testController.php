<?php

namespace App\Http\Controllers;

use App\Carts;
use App\SaleInvoice;
use App\SaleItem;
use App\SalesMan;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Session;
use Response;
use function Sodium\add;
use Cart;
use App\SalesReturnInvoice;


class testController  extends Controller
{

  

    public function index()
    {
       
        $sealsmans = DB::table('sales_men')->get();
        view()->share('sealsmans', $sealsmans);

        $vats = DB::table('companies')->select('company_vat')->get();
        view()->share('vats', $vats);

        // if (!Session::has('carts')) {
        // }
        // $oldCart = Session::get('carts');
        // $carts = new Carts($oldCart);
        $customers = DB::table('custormers')->orderBy('customer_name', 'ASC')->get();
        return view('admin.test.test1', ['customers' => $customers ]);
    }
  

    public function fetch(Request $request)
    {     
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB:: table('stock_report')
                ->where('report_stock_id', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu " style=" display:block;padding: 5px; margin-left: 20px; position: absolute;">';
            foreach ($data as $row) {
                $output .= '<li style=" padding: 0px; margin: 0px; border: none;" class=""><a style="margin: 0px;padding: 0px;" href="#"> ' . $row->report_stock_id . '</a></li> </br>';
            }
            $output .= '</ul>';
            echo $output;
            
        }
    }


//----------get customer mobile and previous due----------------------------------
    public function findCustomer(Request $request)
    {
        $name = $request->get('name');
        $fills = DB::table('custormers')->where('customer_name', $name)->get();
        return response($fills);
    }
    //----------get customer mobile and previous due----------------------------------


//-----------search by description and add to cart----------------------------------------------------
    public function searchProducts(Request $request)
    {
         $id = $request->id;
         $productByDesc = DB::table('stock_report')->where('report_stock_id', $id)->first();

        if ($productByDesc->report_quantity != 0) {
            $oldCart = Session::has('carts') ? Session::get('carts') : null;
            $carts = new Carts($oldCart);
            $carts->add($productByDesc, $productByDesc->report_stock_id);
                dd($carts);
            // $request->session()->put('carts', $carts);
            //  return redirect('/product-sale/');
        
        } else {
            Session::flash('message', "!! This product is not available in stock !!");
            return Redirect::back();
        }
        // $cat = Cart::add([
        //     'id' => $request->report_stock_id,
        //     'name' => $productByDesc->report_description,
        //     'qty' => $productByDesc->report_quantity,
        //     'price' => $productByDesc->report_cost,
         
        //     'options' => [
             
        //         'sale_price' => $productByDesc->report_sales_price,
                
     
        //     ]]);
        //     return $cat;

    }


    //-----------End search by description and add to cart----------------------------------------------------


//---------------------------Delete Item from sell cart-------------------------------
    public function getRemoveItem($description)
    {
        $oldCart = Session::has('carts') ? Session::get('carts') : null;
        $carts = new Carts($oldCart);
        $carts->removeItem($description);

        Session::put('carts', $carts);
        return redirect('/product-sale/');
    }
    //---------------------------End Delete Item from sell cart-------------------------------


//---------------------For clean the sell cart-----------------------------------------
    public function cleanCart()
    {
        $distroy = Session::has('carts') ? Session::forget('carts') : null;
        return response($distroy);
    }


//---------------------End For clean the sell cart-----------------------------------------
    public function addSaleInvoice(Request $request)
    {

//................................For saving sale invoice Info----------------------------------------------
        $saleInvoice = new SaleInvoice();

        $saleInvoice->saleInvoice_customerName = $request->input('saleInvoice_customerName');
        $saleInvoice->saleInvoice_customerMobile = $request->input('saleInvoice_customerMobile');
        $saleInvoice->saleInvoice_previousDue = $request->input('saleInvoice_previousDue');
        $saleInvoice->saleInvoice_date = $request->input('saleInvoice_date');
        $saleInvoice->saleInvoice_subTotal = $request->input('saleInvoice_subTotal');
        $saleInvoice->saleInvoice_totalCost = $request->input('saleInvoice_totalCost');
        $saleInvoice->saleInvoice_discountType = $request->input('saleInvoice_discountType');
        $saleInvoice->saleInvoice_discountAmount = $request->input('saleInvoice_discountAmount');
        $saleInvoice->saleInvoice_vatAmount = $request->input('saleInvoice_vatAmount');
        $saleInvoice->saleInvoice_totalPayable = $request->input('saleInvoice_totalPayable');
        $saleInvoice->saleInvoice_paidAmount = $request->input('saleInvoice_paidAmount');
        $saleInvoice->saleInvoice_returnAmount = $request->input('saleInvoice_returnAmount');
        $saleInvoice->saleInvoice_dueAmount = $request->input('saleInvoice_dueAmount');
        $saleInvoice->saleInvoice_transactionStatus = $request->input('saleInvoice_transactionStatus');
        $saleInvoice->saleInvoice_collectionType = $request->input('saleInvoice_collectionType');
        $saleInvoice->saleInvoice_salesMan = $request->input('saleInvoice_salesMan');
        $saleInvoice->saleInvoice_no = $request->input('saleInvoice_no');

        $saleInvoice->save();
//................................End For saving invoice Info----------------------------------------------


//------------------------For saving sell cart items-----------------------------------------
        $oldCart = Session::has('carts') ? Session::get('carts') : null;
        $carts = new Carts($oldCart);
        $products = $carts->items;

        foreach ($products as $product) {
        $mdata = array(
            'report_stock_id'=>$product['item']->report_stock_id,
            'saleItem_description' => $product['item']->report_description,
            'saleItem_quantity' => $product['qty'],
//            'report_cost' => $product['cost'],
            'saleItem_unite_price' => $product['item']->report_sales_price,
            'saleItem_total' => $product['price'],
            'saleInvoice_no' => $request->input('saleInvoice_no'),
//            'saleInvoice_date' => $request->input('saleInvoice_date')

        );
        $insert = DB::table('sale_items')->insert($mdata);
        DB::table('stock_report')->where('report_stock_id',$product['item']->report_stock_id)
            ->decrement('report_quantity',$product['qty']);

    }
//------------------------End For sell saving cart items-----------------------------------------


//------------------------For forget sell cart -----------------------------------------
        Session::has('carts') ? Session::forget('carts') : null;
        Session::flash('message', "!! All the sale info is added successfully !!");
        //------------------------End For forget sell  cart-----------------------------------------


//--------------------For sell Invoice Print-----------------------------------------------------
        $commanyinfos = DB::table('company')->get();
        view()->share('commanyinfos', $commanyinfos);

        $items = DB::table('sale_items')->where('saleInvoice_no', $request->input('saleInvoice_no'))->get();
        view()->share('items', $items);

        $invoices = DB::table('sale_invoices')->where('saleInvoice_no', $request->input('saleInvoice_no'))->get();
        view()->share('invoices', $invoices);
//--------------------End For sell Invoice Print-----------------------------------------------------


        return view('admin.productsales.invoice_print');//redirect to sell invoice print ......
    }


    public function dateWiseReport(Request $request)
    {
        $fromdate = $request->fromDate;
        view()->share('fromdate',$fromdate);

        $todate = $request->toDate;
        view()->share('todate',$todate);

        $invoiceByDates = DB::table('sale_invoices')
            ->whereBetween(' saleInvoice_date', [$fromdate, $todate])
            ->select('sale_invoices.*')
            ->orderBy('saleInvoice_date', 'ASC')
            ->get();
        view()->share('invoiceByDates', $invoiceByDates);

        $subtotalSum = $invoiceByDates->sum('saleInvoice_subTotal');
        view()->share('subtotalSum', $subtotalSum);

        $discountSum = $invoiceByDates->sum('saleInvoice_discountAmount');
        view()->share('discountSum', $discountSum);

        $totalPayableSum = $invoiceByDates->sum('saleInvoice_totalPayable');
        view()->share('totalPayableSum', $totalPayableSum);


        return view('admin.report.saleReports.saleReportByDate');
    }

    public  function invoiceInfo($invoice){
        $invoiceInfos = DB::table('sale_invoices')
            ->where('saleInvoice_no',$invoice)
            ->get();
        $invoiceItems =  DB::table('sale_items')
            ->where('saleInvoice_no',$invoice)
            ->get();

        $customers = DB::table('customer')
            ->where('saleInvoice_no',$invoice)
            ->join('sale_invoices','customer.customer_name','=','sale_invoices.saleInvoice_customerName')
            ->select('customer.*')
            ->get();
        view()->share('customers',$customers);

        $companys = DB::table('company')->get();
        view()->share('companys',$companys);

        return view('admin.report.saleReports.invoiceInformation')
            ->with('invoiceInfos',$invoiceInfos)
            ->with('invoiceItems',$invoiceItems);
    }
    public function dateWiseReports(Request $request)
    {
        $fromdate = $request->fDate;
        view()->share('fromdate',$fromdate);

        $todate = $request->tDate;
        view()->share('todate',$todate);

        $companys = DB::table('company')->get();
        view()->share('companys',$companys);

        $invoiceByDates = DB::table('sale_invoices')
            ->whereBetween('saleInvoice_date', [$fromdate, $todate])
            ->select('sale_invoices.*')
            ->orderBy('saleInvoice_date', 'ASC')
            ->get();
        view()->share('invoiceByDates', $invoiceByDates);

        $subtotalSum = $invoiceByDates->sum('saleInvoice_subTotal');
        view()->share('subtotalSum', $subtotalSum);

        $discountSum = $invoiceByDates->sum('saleInvoice_discountAmount');
        view()->share('discountSum', $discountSum);

        $totalPayableSum = $invoiceByDates->sum('saleInvoice_totalPayable');
        view()->share('totalPayableSum', $totalPayableSum);

        return view('admin.report.saleReports.date_wise_reports');
    }

    public function printSalesInvoice($invoice)
    {
        $invoiceInfos = DB::table('sale_invoices')
            ->where('saleInvoice_no',$invoice)
            ->get();
        view()->share('invoiceInfos',$invoiceInfos);

        $invoiceItems =  DB::table('sale_items')
            ->where('saleInvoice_no',$invoice)
            ->get();
        view()->share('invoiceItems',$invoiceItems);

        /*$subtotalSum = $invoiceItems->sum('saleItem_quantity');
        view()->share('subtotalSum',$subtotalSum);

        $totalSum = $invoiceItems->sum('saleItem_total');
        view()->share('totalSum',$totalSum);*/

        $customers = DB::table('customer')
            ->where('saleInvoice_no',$invoice)
            ->join('sale_invoices','customer.customer_name','=','sale_invoices.saleInvoice_customerName')
            ->select('customer.*')
            ->get();
        view()->share('customers',$customers);

        $companys = DB::table('company')->get();
        view()->share('companys',$companys);

        return view('admin.report.saleReports.printSmallSalesReport');
    }



//------------------------- Sales Return Start----------------------

    public function productSaleReturn(Request $request){
        $cartItems = Cart::content();
        view()->share('cartItems',$cartItems);

        $cartCount = Cart::count();
        view()->share('cartCount',$cartCount);

        $cartItemTotal = Cart::subtotal();
        view()->share('cartItemTotal',$cartItemTotal);

        $invoice = $request->input('returnInvoiceNumber');
        view()->share('invoice',$invoice);

        $invoiceInfos =  DB::table('sale_invoices')->where('saleInvoice_no',$invoice)->get();
        view()->share('invoiceInfos',$invoiceInfos);

        $invoiceItems = DB::table('sale_items')->where('saleInvoice_no',$invoice)->get();
        view()->share('invoiceItems',$invoiceItems);

        $customers = DB::table('customer')->get();
        view()->share('customers',$customers);

       return view('admin.productsales.returnProduct_sales');
    }

    public function FilterCustomerInvoice(Request $request){
        $name = $request->name;
        $results = DB::table("sale_invoices")
            ->where("saleInvoice_customerName",$name)
            ->pluck('saleInvoice_no','saleInvoice_no');
        return json_encode($results);
    }

//    public function getInvoiceInfo(Request $request){
//        $invoice = $request->invoiceNo;
//
//        $items = DB::table('sale_items')
//            ->where('saleInvoice_no',$invoice)
//            ->get();
//
//
//        $invoiceInfos = DB::table('sale_invoices')
//            ->where('saleInvoice_no',$invoice)
//            ->get();
//        $invoiceItems='';
//        $i=1;
//        foreach ($items as $item) {
//            $invoiceItems .= '<tr>
//                          <td>'. $i++ .'</td>
//                          <td>' . $item->saleItem_description . '</td>
//                          <td>' . $item->saleItem_quantity . '</td>
//                          <td>' . $item->saleItem_total . '</td>
//                          <td><button  data-toggle="modal" data-target="#exampleModal" class=" editItem btn btn-info"><i class="fa fa-plus-circle "></i> </button></td>
//                          </tr>';
//        }
//
//        return response()->json(['invoice'=>$invoiceInfos,'item'=>$invoiceItems]);
//    }

    public function getEditData(Request $request)
    {
        $id = $request->id;
        $geteditdata = DB::table('sale_items')
            ->where('saleItem_id',$id)
            ->get();
        return response()->json($geteditdata);

    }

    public function updateReturn(Request $request){
        $quantitys = $request->input('quantity');
         Cart::add(['id' => $request->input('id'),
            'name' => $request->input('description'),
            'qty' =>  $quantitys,
            'price' => $request->input('price'),
            'options' => [
                'invoice' => $request->input('invoice'),
                'StockId' =>$request->input('StockId')
            ]

            ]);

    }

    public function confirmSalesReturn(Request $request){

        $salesReturnInvoice = new SalesReturnInvoice();
        $salesReturnInvoice->salesReturnInvoice_date = $request->input('SalesReturnDate');
        $salesReturnInvoice->salesReturnInvoice_no = $request->input('SalesReturnNo');
        $salesReturnInvoice->salesReturnInvoice_stockId = $request->input('StockId');
        $salesReturnInvoice->salesReturnInvoice_qty = $request->input('totalQty');
        $salesReturnInvoice->salesReturnInvoice_total = $request->input('itemTotal');
        $salesReturnInvoice->save();

        foreach(Cart::content() as $row) {
            $mdata = array(
                'salesReturnItem_no' => $request->input('SalesReturnNo'),
                'salesReturnItem_description' => $row->name,
                'salesReturnItem_qty' => $row->qty,
                'salesReturnItem_unitPrice' => $row->price,
                'salesReturnItem_itemTotal'=>$row->subtotal,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')

            );
            $insert = DB::table('sales_return_items')->insert($mdata);
            DB::table('stock_report')
                ->where('report_stock_id',$row->options->StockId)
                ->increment('report_quantity',$row->qty);
        }
        Cart::destroy();
       return redirect('/Product/SaleReturn');
    }

    public function destroyCart()
    {
        Cart::destroy();
    }

    public function removeItem(Request $request)
    {
        $rowId = $request->id;
        Cart::remove($rowId);
    }

    // ------------------------Sales return End---------------

    //--------- Sales return report--------------

    public function salesReturnReport(Request $request)
    {
        $fromdate = $request->fromDate;
        view()->share('fromdate',$fromdate);

        $todate = $request->toDate;
        view()->share('todate',$todate);

        $salesReturnInvoices = DB::table('sales_return_invoices')
            ->whereBetween('salesReturnInvoice_date', [$fromdate, $todate])
            ->select('sales_return_invoices.*')
            ->orderBy('salesReturnInvoice_date', 'ASC')
            ->get();
        view()->share('salesReturnInvoices', $salesReturnInvoices);

        $suppliers = DB::table('supplier')
            ->join('local_purchase_invoices','supplier.supplier_id','=','local_purchase_invoices.supplier_id')
            ->select('supplier.*')
            ->get();
        view()->share('suppliers',$suppliers);

        return view('admin.report.salesReturnReport.salesReturnReport');
    }

    public function printSalesReturnReport($invoice)
    {
        $invoiceInfos = DB::table('sales_return_invoices')
            ->where('salesReturnInvoice_no',$invoice)
            ->get();
        view()->share('invoiceInfos',$invoiceInfos);

        $salesInvoiceItems =  DB::table('sales_return_items')
            ->where('salesReturnItem_no',$invoice)
            ->get();
        view()->share('salesInvoiceItems',$salesInvoiceItems);

        $subtotalSum = $salesInvoiceItems->sum('salesReturnItem_qty');
        view()->share('subtotalSum', $subtotalSum);

        $totalSum = $salesInvoiceItems->sum('salesReturnItem_itemTotal');
        view()->share('totalSum', $totalSum);

        $suppliers = DB::table('supplier')
            ->join('local_purchase_invoices','supplier.supplier_id','=','local_purchase_invoices.supplier_id')
            ->select('supplier.*')
            ->get();

        view()->share('suppliers',$suppliers);

        $companys = DB::table('company')
            ->get();
        view()->share('companys',$companys);


        return view('admin.report.salesReturnReport.printSalesReturnReport');
    }

    public function grossProfit(Request $request)
    {
        $fromdate = $request->fromDate;
        view()->share('fromdate',$fromdate);

        $todate = $request->toDate;
        view()->share('todate',$todate);

        $saleInvoices = DB::table('sale_invoices')
            ->whereBetween('saleInvoice_date', [$fromdate, $todate])
            ->select('sale_invoices.*')
            ->orderBy('saleInvoice_date', 'ASC')
            ->get();
        view()->share('saleInvoices', $saleInvoices);
        $subtotalSum = $saleInvoices->sum('saleInvoice_totalCost');
        view()->share('subtotalSum', $subtotalSum);

        $discountSum = $saleInvoices->sum('saleInvoice_discountAmount');
        view()->share('discountSum', $discountSum);

        $totalPayableSum = $saleInvoices->sum('saleInvoice_totalPayable');
        view()->share('totalPayableSum', $totalPayableSum);

        $companys = DB::table('company')
            ->get();
        view()->share('companys',$companys);

        $suppliers = DB::table('supplier')
            ->join('local_purchase_invoices','supplier.supplier_id','=','local_purchase_invoices.supplier_id')
            ->select('supplier.*')
            ->get();
        view()->share('suppliers',$suppliers);


        return view('admin.report.grossReport.grossReportShow');
    }

    public function grossProfitPrint($invoice)
    {
        $invoiceInfos = DB::table('sale_invoices')
            ->where('saleInvoice_no',$invoice)
            ->get();
        view()->share('invoiceInfos',$invoiceInfos);

        $salesInvoiceItems =  DB::table('sale_items')
            ->where('saleInvoice_no',$invoice)
            ->get();
        view()->share('salesInvoiceItems',$salesInvoiceItems);

        $subtotalSum = $salesInvoiceItems->sum('saleItem_quantity');
        view()->share('subtotalSum', $subtotalSum);

        $totalSum = $salesInvoiceItems->sum('saleItem_total');
        view()->share('totalSum', $totalSum);

        $suppliers = DB::table('supplier')
            ->join('local_purchase_invoices','supplier.supplier_id','=','local_purchase_invoices.supplier_id')
            ->select('supplier.*')
            ->get();

        view()->share('suppliers',$suppliers);

        $companys = DB::table('company')
            ->get();
        view()->share('companys',$companys);


        return view('admin.report.grossReport.printGrossProfitReport');
    }

}