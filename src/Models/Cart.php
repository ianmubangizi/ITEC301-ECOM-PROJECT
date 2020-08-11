<?php


namespace Mubangizi\Models;


class Cart extends Basket
{

    public $meta;

    public function count($id = false)
    {
        return $id ? $this->meta[$id]['count'] : $this->count;
    }

    public function total()
    {
        return $this->meta['total'];
    }

    public function add_item(Product $product)
    {
        if (isset($this->meta[$product->id])) {
            $this->meta[$product->id]['count'] += 1;
        } else {
            $this->meta[$product->id]['count'] = 1;
        }
        $this->add_product($product);
        $this->meta['total'] = isset($this->meta['total'])
            ? $this->meta['total'] + $product->price
            : $product->price;
    }
}