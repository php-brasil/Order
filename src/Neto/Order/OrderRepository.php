<?php
namespace Neto\Order;

class OrderRepository
{
    /**
     * @var Neto\Order\OrderStorage
     */
    private $storage;

    /**
     * @var Neto\Order\OrderPolicy
     */
    private $policy;

    /**
     * @param Neto\Order\OrderStorage $storage
     * @param Neto\Order\OrderPolicy $orderPolicy
     */
    public function __construct(OrderStorage $storage, OrderPolicy $orderPolicy)
    {
        $this->policy = $orderPolicy;
        $this->storage = $storage;
    }

    /**
     * @param int $id
     *
     * @return Neto\Order\Order
     */
    public function find($id)
    {
        return $this->storage->find($id);
    }

    /**
     * @param Neto\Order\Order $order
     */
    public function save(Order $order)
    {
        $this->policy->validate($order);
        $this->storage->save($order);
    }
}
