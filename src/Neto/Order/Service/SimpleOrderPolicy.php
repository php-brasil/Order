<?php
namespace Neto\Order\Service;

use Neto\Order\Order;
use Neto\Order\OrderPolicy;

class SimpleOrderPolicy implements OrderPolicy
{
    /**
     * @param Neto\Order\Order $order
     *
     * @throws \Exception
     */
    public function validate(Order $order)
    {
        $this->checkIfIdIsValid($order);
        $this->checkIfStatusIsValid($order);
    }

    private function checkIfIdIsValid(Order $order)
    {
        if ($order->id == null) {
            return true;
        }

        if (!is_int($order->id) || $order->id <= 0) {
            throw new \UnexpectedValueException('invalid order id');
        }
    }

    private function checkIfStatusIsValid(Order $order)
    {
        switch ($order->status) {
            case Order::CREATED;
            case Order::APPROVED;
            case Order::DENIED;
            case Order::CANCELLED;
                return true;
            default:
                throw new \DomainException('invalid order status');
        }
    }
}
