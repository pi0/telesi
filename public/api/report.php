<?php  require_once '../init.php';

$p_id = $_GET['id'];

User::find_by_id($p_id)->update([
        '$addToSet'=>[
            'report'=>$_SESSION['_id']
        ]
]);