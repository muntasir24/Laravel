<?php

// Trait
trait SendNotification
{
    public function notify(string $message): void
    {
        echo "Notification: " . $message . "\n";
    }
}


// User class
class User
{
    // Use the trait
    use SendNotification;

    public function register(): void
    {
        echo "User registered.\n";

        // Method comes from the trait
        $this->notify("Welcome to our website!");
    }
}


// Order class
class Order
{
    // Use the same trait
    use SendNotification;

    public function placed(): void
    {
        echo "Order placed.\n";

        // Method comes from the trait
        $this->notify("Your order has been placed!");
    }
}


// Example usage

$user = new User();
$user->register();

echo "\n";

$order = new Order();
$order->placed();