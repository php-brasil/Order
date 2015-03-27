<?php
namespace Neto\Order;

class Order implements \IteratorAggregate
{
    const CREATED = 0;
    const APPROVED = 1;
    const DENIED = 2;
    const CANCELLED = 4;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $status = Order::CREATED;

    /**
     * @var array[Neto\Order\OrderItem]
     */
    private $items = [];

    /**
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @param Neto\Order\OrderItem $item
     */
    public function addItem(OrderItem $item)
    {
        $this->items[] = $item;
    }

    /**
     * @see \IteratorAggregate::getIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }
}
