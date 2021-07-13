<?php

include __DIR__.'/../../../Vendor/Autoload.php';

use DS\Queue\Classes\QueueArray;

try {
    $agents = new QueueArray(10);
    $agents->enqueue('Fred');
    $agents->enqueue('John');
    $agents->enqueue('Keith');
    $agents->enqueue('Adiyan');
    $agents->enqueue('Mikhael');
    echo $agents->dequeue().PHP_EOL;
    echo $agents->dequeue().PHP_EOL;
    echo $agents->peek().PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}
