<?php
namespace PHPBr\Order;

interface OrderPolicy
{
    /**
     * @param PHPBr\Order\Order $order
     *
     * @throws \Exception
     */
    public function validate(Order $order);
}
