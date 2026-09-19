<?php

//trait
trait Logger {
    public function log(string $message): void {
        echo "[LOG]: " . $message . "\n";
    }
}

//trait used to log messages in the User class for example
class Product {
    use Logger;
    public function create(){
        $this->log("Product created.");
    }
}


class Order extends Product {
    use Logger;
    public function createOrder() {
        $this->log("Order created.");
    }
}


//example usage
$product = new Product();
$product->create(); // Output: [LOG]: Product created.  

$order = new Order();
$order->createOrder(); // Output: [LOG]: Order created.  