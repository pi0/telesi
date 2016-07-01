<?php require_once '../init.php';


User::current()->update(['$addToSet' => ['peers' => $_GET['id']]]);