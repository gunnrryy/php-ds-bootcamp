<?php


/*
 * 
 * 
 */

include __DIR__ . '/../../../Vendor/Autoload.php';

use \DS\Queue\Classes\Queue;

try {
    $agents = new Queue(10);
    $agents->enqueue("Fred");
    $agents->enqueue("John");
    $agents->enqueue("Keith");
    $agents->enqueue("Adiyan");
    $agents->enqueue("Mikhael");
    echo $agents->dequeue().PHP_EOL;
    echo $agents->dequeue().PHP_EOL;
    echo $agents->peek().PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}