<?php
namespace App;
class Carts
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $totalCost = 0;

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalCost = $oldCart->totalCost;

        }
    }

    public function add($item,$storid){
        $storedItem = [
            'qty'=>0,
            'price'=>$item->report_sales_price,
            'cost'=>$item->report_cost,
            'item'=>$item,
            // 'id'=>$item->report_stock_id,

        ];
        if ($this->items){
            if (array_key_exists($storid,$this->items)){
                $storedItem = $this->items[$storid];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->report_sales_price * $storedItem['qty'];
        $storedItem['cost'] = $item->report_cost * $storedItem['qty'];
        $this->items[$storid] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->report_sales_price;
        $this->totalCost += $item->report_cost;
    }

    public function removeItem($storid){
        $this->totalQty -= $this->items[$storid]['qty'];
        $this->totalPrice -= $this->items[$storid]['price'];
        unset($this->items[$storid]);

    }

}
