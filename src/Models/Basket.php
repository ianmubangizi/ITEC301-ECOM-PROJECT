<?php


namespace Mubangizi\Models;

use stdClass;

class Basket extends Entity
{
    public $type;
    private $customer;
    protected $products, $count = 0;

    public function __construct(...$args)
    {
        if (sizeof($args) === 4) {
            $this->type = $args[1];
            $this->customer = $args[2];
            $this->products = $args[3];
        }
        $this->type = isset($args[1]) ? $args[1] : CART;
        parent::__construct('Basket', isset($args[0]) ? $args[0] : null);
    }

    public static function create($type, $customer)
    {
        return (new Basket)->insert(array(
            'type' => "$type",
            'customer' => "$customer",
        ));
    }

    public function count()
    {
        return $this->count;
    }

    public function is_empty()
    {
        return $this->count() === 0;
    }

    /**
     *
     * @return Product[]
     */
    public function products()
    {
        return $this->products;
    }

    /**
     * @param Product $product
     */
    public function add_product(Product $product): void
    {
        $this->count += 1;
        $this->products[$product->id] = $product;
    }

    public static function get_customer_wishlist($customer)
    {
        return self::query("SELECT * FROM basket where type = 'WISHLIST' AND customer = $customer")[0];
    }

    public static function get_customer_cart($customer)
    {
        return self::query("SELECT * FROM basket where type = 'CART' AND customer = $customer")[0];
    }

    public function get_product_list($basket)
    {
        return self::query("SELECT * FROM basket B INNER JOIN `product list` L on B.id = L.basket WHERE B.id = $basket");
    }

    public static function map(stdClass $basket): Basket
    {
        return new Basket(
            $basket->type,
            $basket->customer,
            $basket->products
        );
    }

    /**
     * @return Basket[]
     */
    public function all()
    {
        return parent::all();
    }

}