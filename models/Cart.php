<?php

class Cart
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addItem($product)
    {
        // Add a product to the cart
        $this->items[] = $product;
    }

    public function removeItem($productId)
    {
        // Remove a product from the cart based on the product ID
        foreach ($this->items as $key => $item) {
            if ($item->getId() === $productId) {
                unset($this->items[$key]);
                break;
            }
        }
    }

    public function getItems()
    {
        // Get all items in the cart
        return $this->items;
    }

    public function getTotal()
    {
        // Calculate the total price of all items in the cart
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }

        return $total;
    }

    public function clear()
    {
        // Clear all items from the cart
        $this->items = [];
    }
}
