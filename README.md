# Domain driven order service design

```php
<?php
require 'vendor/autoload.php';

use Neto\Order\OrderRepository;
use Neto\Order\OrderService;
use Neto\Order\Service\SimpleOrderPolicy;
use Neto\Order\Service\Storage\StaticStorage;

$orderRepository = new OrderRepository(new StaticStorage(),
                                       new SimpleOrderPolicy());

$orderService = new OrderService($orderRepository);

$order = $orderService->findOrder(1);

$orderService->approveOrder(1);
```
