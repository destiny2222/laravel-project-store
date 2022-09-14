<?php

namespace App\Services;

class Cart

{
    public int $totalQuantity = 0;
    public float $totalPrice = 0;
    public array $items = [];

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->totalPrice  = $oldCart->totalPrice;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->items = $oldCart->items;
        }
    }

    public function add($items, $id){
        $itemTostore = ['price'=>$items->price, 'quantity'=>0, 'items'=>$items];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $itemTostore = $this->items[$id];
            }
        }
        $itemTostore['quantity']++;
        $itemTostore['price'] = $itemTostore['quantity'] * $items->price;
        $itemTostore[$id] = $itemTostore;

        // increment the total price and total quantity
        // $this->totalQuantity;
        $this->totalQuantity ++;
        $this->totalPrice += $items->price;
    }

 
}