<?php

global $db;
$conn = new MongoDB\Client('mongodb://' . env('DB_HOST') . ':' . env('DB_PORT', 27017));

$dbname = env('DB_NAME');
$db = $conn->$dbname;

function db()
{
    global $db;
    return $db;
}