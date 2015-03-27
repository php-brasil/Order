<?php
namespace Neto\Order;

interface OrderPolicy
{
    /**
     * @param Neto\Order\Order $order
     *
     * @throws \Exception
     */
    public function validate(Order $order);
}
