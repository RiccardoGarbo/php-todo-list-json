<?php 
header('Content-Type: application/json'); 

$path = __DIR__ . '/../data/tasks.json';

$data_json = file_get_contents($path);

$tasks = $data_json;


$task_text = $_POST['task'] ?? '';


if($task_text) {
    
    $tasks = json_decode($tasks , true);
    
    $new_task = [ 'done' => false,
    'text' => $task_text,
    'id' => uniqid() ];
    
    $tasks[] = $new_task;
    
    $tasks = json_encode($tasks);

    file_put_contents($path, $tasks);
    
} 

echo $tasks; 
