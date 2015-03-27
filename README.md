# Domain driven order service design

```php
<?php
$orderRepository = new Neto\Order\OrderRepository(new Neto\Order\Service\Storage\StaticStorage(),
                                                  new Neto\Order\Service\SimpleOrderPolicy());

$orderService = new Neto\Order\OrderService($orderRepository);

$order = $orderService->findOrder(1);

$orderService->approveOrder(1);
```
