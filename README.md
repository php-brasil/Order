# Domain driven order service design

```php
<?php
use PHPBr\Order\OrderRepository;
use PHPBr\Order\OrderService;
use PHPBr\Order\Service\SimpleOrderPolicy;
use PHPBr\Order\Service\Storage\StaticStorage;

$orderRepository = new OrderRepository(new StaticStorage(),
                                       new SimpleOrderPolicy());

$orderService = new OrderService($orderRepository);

$order = $orderService->findOrder(1);

$orderService->approveOrder(1);
```
