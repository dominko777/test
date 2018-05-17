<?php

namespace counter;
require "Counter.php";

$file = 'img.jpg';
$type = 'image/jpeg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);

$counter = new Counter();
$counter->setCount();