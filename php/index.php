<?php 

header('Content-Type: application/json');

$source = __DIR__ . '/../database/tasks.json';

$data = file_get_contents($source);

$tasks = json_decode($data, true);

$newTask_text = $_POST['task'] ?? '';

$new_task = [
    'done' => false,
    'text' => $newTask_text,
    'id' => uniqid()
];

$tasks[] = $newTask;

$tasks = json_endcode($tasks);

file_put_contents($source, $tasks);

?>