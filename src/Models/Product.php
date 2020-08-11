<?php

namespace Mubangizi\Models;

use Exception;
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
        return url_for('shop') . "?{$this->inventory->category}&product=$this->id";
    }

    public static function create($name, $sale, $image, $price, $details, $inventory)
    {
        try {
            $result = (new Inventory)->get_by_id(empty($inventory) ? '-1' : $inventory);
            if ($result) {
                $result = (new Product)->insert(array(
                    'name' => "'$name'",
                    'sale' => empty($sale) ? 0 : $sale,
                    'price' => $price,
                    'image' => "'$image'",
                    'details' => "'$details'",
                    'inventory' => $result->id
                ));
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
        return $result;
    }

    public static function map(stdClass $product): Product
    {
        return new Product(
            $product->id,
            $product->name,
            $product->sale,
            $product->price,
            $product->image,
            $product->details,
            (new Inventory)->get_by_id($product->inventory)
        );
    }


    /**
     * @return Product[]
     */
    public
    function all()
    {
        return parent::all();
    }

}
