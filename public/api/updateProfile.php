<?php require_once '../init.php';

$d = $_POST['data'];
unset($d['_id']);

var_dump($d);

User::current()->update(['$set' => $d]);

