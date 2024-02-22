<?php 
$path = __DIR__ . '/../data/tasks.json';
$data_json = file_get_contents($path);

header('Content-Type: application/json');

echo $data_json;
