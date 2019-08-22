<?php
declare(strict_types = 1);
include 'autoload.php';
use Step\Core\php;

$obj = new php('123.php');

$obj->add([55]);
// $obj->edit(1, [55]);
