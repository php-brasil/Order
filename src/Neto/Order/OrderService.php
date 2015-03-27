<?php
namespace Neto\Order;

class OrderService
{
    /**
     * @var Neto\Order\OrderRepository
     */
    private $repository;

    /**
     * @param Neto\Order\OrderRepository
     */
    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     *
     * @throws \DomainException
     */
    public function approveOrder($id)
    {
        $order = $this->getOrder($id);
        $order->status = Order::APPROVED;
        $this->repository->save($order);
    }

    /**
     * @param int $id
     *
     * @throws \DomainException
     */
    public function cancelOrder($id)
    {
        $order = $this->getOrder($id);
        $order->status = Order::CANCELLED;
        $this->repository->save($order);
    }

    /**
     * @param int $id
     *
     * @return Neto\Order\Order
     * @throws \DomainException
     */
    private function getOrder($id)
    {
        $order = $this->findOrder($id);

        if ($order->id == null) {
            throw new \DomainException('order not found');
        }

        return $order;
    }

    /**
     * @param int $id
     *
     * @return Neto\Order\Order
     */
    public function findOrder($id)
    {
        return $this->repository->find($id);
    }
}
