<?php 
$source = __DIR__ . '/../database/tasks.json';

$data = file_get_contents($source);

$tasks = json_decode($data, true);

$newTask = $_POST['task'] ?? '';

$tasks[] = $newTask;

$tasks = json_endcode($tasks);

file_put_contents($source, $tasks);

?>