<?php
namespace PHPBr\Order;

class OrderRepository
{
    /**
     * @var PHPBr\Order\OrderStorage
     */
    private $storage;

    /**
     * @var PHPBr\Order\OrderPolicy
     */
    private $policy;

    /**
     * @param PHPBr\Order\OrderStorage $storage
     * @param PHPBr\Order\OrderPolicy $orderPolicy
     */
    public function __construct(OrderStorage $storage, OrderPolicy $orderPolicy)
    {
        $this->policy = $orderPolicy;
        $this->storage = $storage;
    }

    /**
     * @param int $id
     *
     * @return PHPBr\Order\Order
     */
    public function find($id)
    {
        return $this->storage->find($id);
    }

    /**
     * @param PHPBr\Order\Order $order
     */
    public function save(Order $order)
    {
        $this->policy->validate($order);
        $this->storage->save($order);
    }
}
