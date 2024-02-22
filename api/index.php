<?php 
header('Content-Type: application/json'); 

$path = __DIR__ . '/../data/tasks.json';

$data_json = file_get_contents($path);

$tasks = $data_json;


$new_task = $_POST['task'] ?? '';

if($new_task) {
    $new_task = json_decode($new_task);

    $tasks = json_decode($tasks , true);
    
    $tasks[] = $new_task;
    
    $tasks = json_encode($tasks);

    file_put_contents($path, $tasks);
    
} 

echo $tasks; 
