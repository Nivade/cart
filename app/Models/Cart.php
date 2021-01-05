<?php

namespace App\Models;

class Cart
{
    public $items = null;
    public $quantity = 0;
    public $total = 0;
    public $weight = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->items = $cart->items;
            $this->quantity = $cart->quantity;
            $this->total = $cart->total;
            $this->weight = $cart->weight;
        }
    }

    public function add($item, $id) {
        $storedItem = ['quantity' => 0, 'price' => $item->price, 'weight' => $item->weight, 'item' => $item];

        // Are there items in the cart?
        if ($this->items) {
            // Is this item already in the cart?
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['quantity']++;
        $storedItem['price'] = $item->price * $storedItem['quantity'];
        $storedItem['weight'] = $item->weight * $storedItem['quantity'];
        $this->items[$id] = $storedItem;
        $this->quantity++;
        $this->total += $item->price;
        $this->weight += $item->weight;

    }
}
