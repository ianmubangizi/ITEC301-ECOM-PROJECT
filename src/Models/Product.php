<?php

namespace Mubangizi\Models;

use stdClass;

class Product extends Entity
{
    public $name, $sale, $price, $image, $details, $inventory;

    public function __construct(...$args)
    {
        if (sizeof($args) === 7) {
            $this->name = $args[1];
            $this->sale = $args[2];
            $this->price = $args[3];
            $this->image = $args[4];
            $this->details = $args[5];
            $this->inventory = $args[6];
        }
        parent::__construct('Product', isset($args[0]) ? $args[0] : null);
    }

    public function get_url()
    {
        return url_for('shop') . "?$this->inventory&product=$this->id";
    }

    public static function map(stdClass $product): Product
    {
        return new Product(
            $product->name,
            $product->sale,
            $product->price,
            $product->image,
            $product->details,
            $product->inventory
        );
    }

    /**
     * @return Product[]
     */
    public function all()
    {
        return parent::all();
    }

}
