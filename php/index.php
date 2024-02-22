<?php 
$source = __DIR__ . '/../database/tasks.json';

$data = file_get_contents($source);

$tasks = json_decode($data, true);

var_dump($tasks);
?>