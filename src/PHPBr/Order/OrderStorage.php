<?php
namespace PHPBr\Order;

interface OrderStorage
{
    /**
     * @param int $id
     *
     * @return PHPBr\Order\Order
     */
    public function find($id);

    /**
     * @param PHPBr\Order\Order $order
     */
    public function save(Order $order);
}
