<?php

namespace PHPBr\Test\Order\Service;

use PHPBr\Order\Order;
use PHPBr\Order\Service\SimpleOrderPolicy;

class SimpleOrderPolicyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException        \DomainException
     * @expectedExceptionMessage invalid order status
     */
    public function testCheckIfStatusIsInvalid()
    {
        $order = new Order(1);
        $policy = new SimpleOrderPolicy();

        $order->status = rand(5, PHP_INT_MAX);
        $policy->validate($order);
    }
}