<?php

$source_path = __DIR__ . '/../../database/tasks.json';

$json_data = file_get_contents($source_path);

$tasks = json_decode($json_data);


header('Content-Type: application/json');

echo json_encode($tasks);
