<?php


namespace Mubangizi\Models;


use stdClass;

class Order extends Entity
{
    public $status, $balance, $created_at, $update_at, $shipping_details, $customer;

    public function __construct(...$args)
    {
        if (sizeof($args) === 7) {
            $this->status = $args[1];
            $this->balance = $args[2];
            $this->customer = $args[3];
            $this->update_at = $args[4];
            $this->created_at = $args[5];
            $this->shipping_details = $args[6];
        }
        parent::__construct('Order', isset($args[0]) ? $args[0] : null);
    }

    public static function map(stdClass $order): Order
    {
        return new Order(
            $order->status,
            $order->balance,
            $order->customer,
            $order->update_at,
            $order->created_at,
            $order->shipping_details
        );
    }

    /**
     * @return Order[]
     */
    public function all()
    {
        return parent::all();
    }

}