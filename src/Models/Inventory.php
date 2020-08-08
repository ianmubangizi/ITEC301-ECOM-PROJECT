<?php


namespace Mubangizi\Models;


use stdClass;

class Inventory extends Entity
{
    public $title, $stock, $image, $category;

    public function __construct(...$args)
    {
        if (sizeof($args) === 5) {
            $this->title = $args[1];
            $this->stock = $args[2];
            $this->image = $args[3];
            $this->category = $args[4];
        }

        parent::__construct('Inventory', isset($args[0]) ? $args[0] : null);
    }

    public static function map(stdClass $inventory): Inventory
    {
        return new Inventory(
            $inventory->id,
            $inventory->title,
            $inventory->stock,
            $inventory->image,
            $inventory->category
        );
    }

    /**
     * @return Inventory[]
     */
    public function all()
    {
        return parent::all();
    }

}