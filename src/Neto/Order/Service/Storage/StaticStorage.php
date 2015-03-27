<?php
namespace Neto\Order\Service\Storage;

use \Neto\Order\Order;
use \Neto\Order\OrderItem;
use \Neto\Order\OrderStorage;

class StaticStorage implements OrderStorage
{
    private $data = [];
    private $id = 0;

    public function __construct()
    {
        $this->data = [
            ++$this->id => new Order($this->id),
            ++$this->id => new Order($this->id),
            ++$this->id => new Order($this->id)
        ];

        $this->data[1]->addItem(new OrderItem('Produto de teste', 1, 100));
        $this->data[2]->addItem(new OrderItem('Outro produto', 3, 100));
        $this->data[3]->addItem(new OrderItem('Mais um produto', 2, 100));
    }

    /**
     * @param int $id
     *
     * @return Neto\Order\Order
     */
    public function find($id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return new Order(null);
    }

    /**
     * @param Neto\Order\Order $order
     */
    public function save(Order $order)
    {
        if ($order->id == null) {
            $order->id = ++$this->id;
        }

        $this->data[$order->id] = $order;   
    }
}
