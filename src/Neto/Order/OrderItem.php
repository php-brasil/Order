<?php
namespace Neto\Order;

class OrderItem
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $quantity;

    /**
     * @var float
     */
    public $price;

    /**
     * @param string $name
     * @param float $quantity
     * @param float $price
     */
    public function __construct($name, $quantity, $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }
}
