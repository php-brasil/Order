<?php
namespace Neto\Order;

interface OrderStorage
{
    /**
     * @param int $id
     *
     * @return Neto\Order\Order
     */
    public function find($id);

    /**
     * @param Neto\Order\Order $order
     */
    public function save(Order $order);
}
