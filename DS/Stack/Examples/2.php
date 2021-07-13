<?php

include __DIR__.'../../../../vendor/autoload.php';

use DS\Stack\Classes\Stack;

try {
    $programmingBooks = new Stack();
    $programmingBooks->push('Introduction to PHP7');
    $programmingBooks->push('Mastering JavaScript');
    $programmingBooks->push('MySQL Workbench tutorial');
    echo $programmingBooks->pop().PHP_EOL;
    echo $programmingBooks->top().PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}
